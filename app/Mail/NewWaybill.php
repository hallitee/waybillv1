<?php

namespace App\Mail;

use App\doc;
use App\item;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewWaybill extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	 public $doc, $item;
    public function __construct(doc $do, $it)
    {
        //
		$this->doc = $do;
		$this->item = $it;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		$address = 'helpdesk@esrnl.com';
		$name = 'Waybill Manager';
		$subject = 'New Waybill created';
        return $this->view('email.NewWaybill')
					->from($address, $name)
					->subject($subject);
    }
}
