<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

class InquiryController extends Controller
{
    public function index(){
        $inquiries  = Inquiry::latest()->get();
        return view('inquiries.index', ['inquiries' => $inquiries]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'company_name' => ['required'],
            'email' => ['required'],
            'message' => ['required']
        ]);
        // $toEmail = 'restore@gmail.com';
        // $subject = 'Hello from jazz';
        // $fromEmail = 'jazz@gmail.com';
        // $htmlContent = '<h3> This is the hello world  </h3>';
        
        // Mail::html($htmlContent, function(Message $message) use($toEmail, $subject, $fromEmail){
        //     $message->to($toEmail)
        //     ->subject($subject)
        //     ->from($fromEmail); 
        // });
        Mail::to('ericmabasa51@gmail.com')->send(new Enquiry($validated));
        Mail::to($validated['email'])->send(new Enquiry($validated));
        Inquiry::create($validated);
        return redirect('/')->with('success', 'Successfully Submitted');
    }

    public function delete(string $id){
        Inquiry::where('id', $id)->delete();
        return redirect(route('inquiries.index'));
    }
}
