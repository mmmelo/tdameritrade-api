<?php


namespace Mmmelo\TDAmeritradeApi;



use Mmmelo\TDAmeritradeApi\Traits\TDAConnection;

class TDAmeritradeApi
{

    use TDAConnection;

    protected $consumerKey;
    protected $callbackUrl;

    public function __construct(string $consumerKey = null, string $callbackUrl = null){}

    public function login()
    {
        $auth = new Authentication( $this->consumerKey, $this->callbackUrl);
        return $auth->getLoginUrl();
    }
}