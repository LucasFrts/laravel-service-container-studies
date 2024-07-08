<?php

use App\Gateways\CieloPaymentProvider;
use App\Gateways\PaddlePaymentProvider;
use App\Gateways\StripePaymentProvider;
use App\Http\Controllers\CieloController;
use App\Http\Controllers\StripeController;
use App\Services\Checkout;
use App\Utils\Http;
use App\Utils\ThirdParty;
use Illuminate\Support\Facades\Route;

Route::get('/learn-container', function (StripePaymentProvider $paymentProvider) {
    $checkout = new Checkout("lucas@email", 2828);
    return $checkout->handle($paymentProvider);
}); 


Route::get('/stripe', [StripeController::class, 'index']);
Route::get('/cielo', [CieloController::class, 'index']);
