<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CryptoTicker extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($type, $currentUSDPrice, $threshold)
    {
        $this->currentUSDPrice = $currentUSDPrice;
        $this->type = $type;
        $this->threshold = $threshold;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from(env('MAIL_USERNAME'))
                          ->to(env('COINMARKETCAP_NOTIFICATION'))
                          ->subject($this->type . " notification.")
                          ->with([
                              'type' => $this->type,
                              'currentUSDPrice' => $this->currentUSDPrice,
                              'threshold' => $this->threshold,
                          ])
                          ->view('mail.cryptoticker');
    }
}
