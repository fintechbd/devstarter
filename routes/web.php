<?php

use Fintech\Bell\Channels\SmsChannel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    return redirect()->route('request-docs.index');

    $message = (new \Fintech\Bell\Messages\SmsMessage())->to("+88016898553434")->message('Hello World');

    (new \Fintech\Bell\Drivers\Sms\ClickSend())->send($message);

});
