<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
      return $this->from($request->email)
                          ->to(env('MAIL_USERNAME'))
                          ->subject($request->subject)
                          ->with([
                              'contactName' => $request->name,
                              'contactSubject' => $request->subject,
                              'contactEmail' => $request->email,
                              'contactPhone' => $request->phone,
                              'contactMessage' => $request->text
                          ])
                          ->view('mail.contact');
    }
}
