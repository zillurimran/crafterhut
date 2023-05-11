<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerSuccessMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name = '';
    public $mail = '';
    public $title = '';
    public $subject = '';
    public $description = ''; 
    public $data = ''; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $mail, $subject, $title, $description, $data)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->subject = $subject;
        $this->title = $title;
        $this->description = $description;
        $this->data = $data;

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
        $description = '';
        $data = '';
    

        return $this->subject('Your payment was successfull.Here is your receipt')->markdown('pdf.invoice', compact('name','mail', 'title','subject','description','data'));
    }
}
