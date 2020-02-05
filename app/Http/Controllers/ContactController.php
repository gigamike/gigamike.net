<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Rules\Recaptcha;
use App\Mail\Contact;

class ContactController extends Controller
{
  public function index(){
      return view('contact');
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
        'recaptcha' => ['required', new Recaptcha],
        'name' => 'required|max:255',
        // 'email' => 'required|email:rfc,dns', // needs php 7.4 for INTL_IDNA_VARIANT_2003 is deprecated
        'email' => 'required',
        'subject' => 'required',
        'text' => 'required',
    ]);

    Mail::send(new Contact());

    return back()->with('success', 'Thanks for contacting us!');
  }
}
