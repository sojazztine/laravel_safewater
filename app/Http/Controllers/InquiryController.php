<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use App\Models\Inquiry;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

class InquiryController extends Controller
{
    public function index(){
        $inquiries  = Inquiry::latest()->get();
        return view('inquiries.index', ['inquiries' => $inquiries]);
    }

    public function store(Request $request)
    {
        // 1. Validate the form data
        $validated = $request->validate([
            'first_name'    => ['required'],
            'last_name'     => ['required'],
            'company_name'  => ['required'],
            'email'         => ['required', 'email'],
            'message'       => ['required'],
        ]);
    
        $setting = SiteSetting::first();
        $recipients = [];
    
        if ($setting && $setting->inquiry_recipients) {
            $decoded = json_decode($setting->inquiry_recipients, true);
            if (is_array($decoded)) {
                $recipients = $decoded;
            } else {
                $recipients = array_map('trim', explode(',', $setting->inquiry_recipients));
            }
    
            // Validate existing emails
            $recipients = array_filter($recipients, function ($email) {
                return filter_var($email, FILTER_VALIDATE_EMAIL);
            });
        }
    
        // 2. Define new recipients (example: maybe you get these from a form input or config)
    
        // 3. Merge and clear
        $allRecipients = array_unique(array_merge($recipients));
        $allRecipients = array_filter($allRecipients, function ($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        });
    
        // 4. Save updated recipient list back to settings
        if ($setting) {
            $setting->inquiry_recipients = json_encode(array_values($allRecipients));
            $setting->save();
        }
        // 5. Send to EACH recipient individually
        foreach ($allRecipients as $recipient) {
            Mail::send(new Enquiry($validated, $recipient));
        }
        
        // 6. Send confirmation email to the sender
        Mail::to($validated['email'])->send(new Enquiry($validated));
    
        // 7. Save the inquiry in the database
        Inquiry::create($validated);
    
        return redirect('/')->with('success', 'Successfully Submitted');
    }
    

    

    public function delete(string $id){
        Inquiry::where('id', $id)->delete();
        return redirect(route('inquiries.index'));
    }
}
