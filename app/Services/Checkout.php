<?php

namespace App\Services;

use App\Interfaces\Providers\PaymentProviderContract;

class Checkout
{
    public function __construct(private string $email, private int $amount)
    {}

    public function handle(PaymentProviderContract $paymentProvider)
    {
        return $paymentProvider->charge($this->email, $this->amount);
    }
}