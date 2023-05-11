<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name = '';
    public $mail = '';
    public $title = '';
    public $subject = '';
    public $description = ''; 
    public $data = ''; 
    public $download = ''; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $mail, $subject, $title, $description, $data, $download)
    {
        $this->name        = $name;
        $this->mail        = $mail;
        $this->subject     = $subject;
        $this->title       = $title;
        $this->description = $description;
        $this->data        = $data;
        $this->download    = $download;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $name = '';
         $mail = '';
         $title = '';
         $subject = '';
         $data = '';
         $description = '';
         $download    = '';
    

        // return $this->subject('Your payment was rejected.Please try again. Here is the receipt')->markdown('mail_markdown.customer', compact('name','mail', 'title','subject', 'description'));
        return $this->subject('Your payment was rejected.Please try again. Here is the receipt')->markdown('pdf.invoice', compact('data','name','mail', 'title','subject', 'description', 'download'));
    }
}
