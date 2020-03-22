<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CryptoTicker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crypto:ticker';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crypto Ticker';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $buy = "4800";
      $sell = "6600";

      $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
      $parameters = [
        'start' => '1',
        'limit' => '1',
        'convert' => 'USD'
      ];

      $headers = [
        'Accepts: application/json',
        "X-CMC_PRO_API_KEY: " . env('COINMARKETCAP_API_KEY', false),
      ];
      $qs = http_build_query($parameters); // query string encode the parameters
      $request = "{$url}?{$qs}"; // create the request URL


      $curl = curl_init(); // Get cURL resource
      // Set cURL options
      curl_setopt_array($curl, array(
        CURLOPT_URL => $request,            // set the request URL
        CURLOPT_HTTPHEADER => $headers,     // set the headers
        CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
      ));

      $response = curl_exec($curl); // Send the request, save the response
      $data = json_decode($response);

      print_r($data); // print json decoded response

      $currentUSDPrice = $data->data[0]->quote->USD->price;
      if($currentUSDPrice <= $buy){
        Mail::send(new \App\Mail\CryptoTicker('Buy', $currentUSDPrice, $buy));
        echo "Buy !";
      }

      if($currentUSDPrice >= $sell){
        Mail::send(new \App\Mail\CryptoTicker('Sell', $currentUSDPrice, $sell));
        echo "Sell!";
      }

      sleep(60);

      curl_close($curl); // Close request
    }
}
