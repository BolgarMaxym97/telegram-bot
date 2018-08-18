<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;

class BotController extends Controller
{
    public function index()
    {
        return view('bot');
    }

    public function setWebHook()
    {
        $result = $this->sendDataTelegram('setwebhook', [
            'query'
        ]);
    }

    public function message()
    {

        $telegram = new Api();
        $response = $telegram->setWebhook(['url' => 'https://telega-bot.loc/' . \Telegram::getAccessToken() . '/webhook',]);

        dd($response);
    }
}
