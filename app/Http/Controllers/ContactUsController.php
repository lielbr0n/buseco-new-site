<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendEmailContactUs(Request $request){
        $contactUsQuery = $request->validate([
            'fullname' => 'bail|required|max:75',
            'email' => 'bail|required|email',
            'municipality' => 'bail|required',
            'subject' => 'bail|required|max:100',
            'message' => 'bail|required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        
        Mail::to($contactUsQuery['municipality'] === 'manolofortich' ? 'busecoonline@gmail.com' : 'bomsdmanolo@gmail.com')->send(new ContactUs($contactUsQuery));

        return back()->with('message', 'Message Sent Successfully!');
    }
    
}