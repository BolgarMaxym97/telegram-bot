<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $chat_id = '-297623915';
    protected $base_path;
    protected $web_hook = '';

    public function __construct()
    {
        $this->base_path = 'https://api.telegram.org/bot' . \Telegram::getAccessToken() . '/';
    }

    public function sendDataTelegram($route = '', $params = [], $method = 'POST')
    {
        $client = new Client([
            'base_uri' => $this->base_path,
        ]);
        $result = $client->request($method, $route, $params);
        return (string)$result->getBody();
    }
}
