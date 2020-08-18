<?php

use Illuminate\Support\Facades\Route;
use Hshafiei374\Bitrah\Http\Controllers\BitrahController;

if (config('bitrah.define_default_webhook_url')) {
    Route::post(config('bitrah.default_webhook_url_route'), 'Hshafiei374\Bitrah\Http\Controllers\BitrahController@webHook')->name('bitrah.webhook');
}
