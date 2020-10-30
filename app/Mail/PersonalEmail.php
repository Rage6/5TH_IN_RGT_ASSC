<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PersonalEmail extends Mailable
{
    use Queueable, SerializesModels;

    // public $data;
    public $new_content;
    public $new_receiver_name;
    public $new_sender_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct($data)
    public function __construct($new_content,$new_receiver_name,$new_sender_name)
    {
        // $this->data = $data;
        $this->new_email = $new_content;
        $this->new_receiver_name = $new_receiver_name;
        $this->new_sender_name = $new_sender_name;
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

      return $this->view('emails.personal')
                  ->subject("Message from ".$this->new_receiver_name)
                  ->with([ 'content' => $this->new_email, 'receiver' => $this->new_receiver_name, 'sender' => $this->new_sender_name ]);
    }
}
