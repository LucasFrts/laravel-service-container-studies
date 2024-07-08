<?php

namespace App\Gateways;

use App\Interfaces\Providers\PaymentProviderContract;
use App\Utils\Http;

class PaddlePaymentProvider implements PaymentProviderContract
{
    public function __construct(private Http $clientHttp)
    {}

    public function charge(string $email, int $amount) : string
    {
        return "we successfully charged EUR $amount from $email";
    }
}