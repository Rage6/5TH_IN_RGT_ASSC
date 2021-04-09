<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    // public $data;
    public $new_content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct($data)
    public function __construct($new_content)
    {
        // $this->data = $data;
        $this->email_content = $new_content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      // $address = 'nicholas.vogt2017@gmail.com';
      // $subject = 'This is a demo!';
      // $name = 'Nicholas Vogt';

      return $this->view('emails.registration')
                  ->subject("Member Registration Submitted")
                  ->with([ 'content' => $this->email_content ]);
    }
}
