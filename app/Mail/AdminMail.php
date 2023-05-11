<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $admin_name = '';
    // public $admin_mail = '';
    // public $admin_title = '';
    public $admin_subject = '';
    public $admin_description = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($admin_name, $admin_subject, $admin_description)
    {
        $this->admin_name = $admin_name;
        // $this->admin_mail = $admin_mail;
        $this->admin_subject = $admin_subject;
        // $this->admin_title = $admin_title;
        $this->admin_description = $admin_description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $admin_name = '';
        $admin_mail = '';
        $admin_title = '';
        $admin_subject = '';
        $admin_description = '';


        return $this->subject('New Order Placement')->view('emails.admin_mail');

    }



}
