<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CouponMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name = '';
    public $disc = ''; 
    public $exp  = ''; 
    public function __construct($name, $disc, $exp)
    {
       $this->name =  $name;
       $this->disc =  $disc;
       $this->exp  =  $exp;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = ''; 
        $disc = ''; 
        $exp  = ''; 
        return $this->subject('You have a new coupon')->markdown('emails.coupon', compact('name', 'disc', 'exp'));
    }
}
