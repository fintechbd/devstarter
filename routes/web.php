<?php

use Fintech\Bell\Channels\SmsChannel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

Route::get('/', function (Request $request) {
//    return redirect()->route('request-docs.index');
    dd($_SERVER);

    $response = Http::get('http://devstarter.test/api/core/settings',['test' => '1']);
    dd($response->body());
//    \Illuminate\Support\Facades\Notification::route('sms', '+8801689553434')->notify(new \App\Notifications\TestSMS());

});
