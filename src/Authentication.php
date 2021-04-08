<?php


namespace Mmmelo\TDAmeritradeApi;


use Mmmelo\TDAmeritradeApi\Traits\TDAConnection;

class Authentication
{
    use TDAConnection;

    const AUTH_URI = 'https://auth.tdameritrade.com/';
    private $callbackUri;
    private $consumerKey;

    public function __construct(string $consumerKey = null, string $callbackUrl = null)
    {
    }

    public function getLoginUrl() {
        return self::AUTH_URI . 'auth?response_type=code&redirect_uri=' . $this->callbackUri . '&client_id=' . $this->consumerKey . '@AMER.OAUTHAP';
    }

}