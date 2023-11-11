<?php

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
    return redirect()->route('request-docs.index');
//    \Illuminate\Support\Facades\Notification::route(SmsChannel::class, '+8801689553434')->notify(new \App\Notifications\TestSMS());

});
