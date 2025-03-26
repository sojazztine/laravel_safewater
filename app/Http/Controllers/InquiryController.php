<?php

namespace App\Http\Controllers;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(){
        $inquiries  = Inquiry::get();
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

        Inquiry::create($validated);
        return redirect('/')->with('success', 'Successfully Submitted');
    }

    public function delete(string $id){
        Inquiry::where('id', $id)->delete();
        return redirect(route('inquiries.index'));
    }
}
