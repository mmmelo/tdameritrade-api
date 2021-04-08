<?php


namespace Mmmelo\TDAmeritradeApi\Traits;


use GuzzleHttp\Client;

trait TDAConnection
{

    private $ameritradeURI = 'https://api.tdameritrade.com/';

    protected $guzzle;

    protected function guzzleClient( string $token = NULL, bool $debug = FALSE ): Client {
        $headers = ['Accept'=>'application/json'];

        if ( $token ):
            $headers[ 'Authorization' ] = 'Bearer ' . $token;
        endif;
        $options = [
            'base_uri' => $this->ameritradeURI,
            'headers'  => $headers,
            'debug'    => $debug,
        ];
        return new Client( $options );
    }
}