<?php

namespace App\Http\Controllers;

use App\Interfaces\Providers\PaymentProviderContract;
use App\Services\Checkout;
use Illuminate\Http\Request;

class CieloController extends Controller
{
    public function __construct(private PaymentProviderContract $paymentProvider)
    {}
    
    public function index()
    {
        $checkout = new Checkout("lucas@email", 2828);
        return $checkout->handle($this->paymentProvider);   
    }
}
