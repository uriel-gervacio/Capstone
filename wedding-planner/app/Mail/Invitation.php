<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invitation extends Mailable
{
    use SerializesModels;

    public const BRIDE_URL = 'registerBride'; 
    public const GROOM_URL = 'registerGroom'; 
    /**
     * The order instance.
     *
     * @var Wedding
     */
    public $name;
    public $email;
    public $id;
    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct ($name,$email , $id, $url)
    {
        $this->name = $name;
        $this->email = $email;
        $this->id = $id;
        $this->url = $url;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      //  $registrationURL = $this->url;


        return $this->markdown('mail.notification')->with([
            'name'=>$this->name, 'email'=>$this->email, 'registrationUrl'=>$this->url . "/" . $this->id
        ]);
    }
}
