<?php

namespace App\Gateways;

use App\Interfaces\Providers\PaymentProviderContract;
use App\Utils\Http;

class CieloPaymentProvider implements PaymentProviderContract
{
    public function __construct(private Http $clientHttp)
    {}

    public function charge(string $email, int $amount) : string
    {
        return "we successfully charged BRL $amount from $email";
    }
}