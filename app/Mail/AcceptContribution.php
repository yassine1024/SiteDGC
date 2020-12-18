<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcceptContribution extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $showDate;
    public $publicationTheme;

    public function __construct($showDate,$publicationTheme)
    {
        //
        $this->showDate=$showDate;
        $this->publicationTheme=$publicationTheme;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contributions.acceptContribution');
    }
}
