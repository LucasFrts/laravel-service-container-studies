<?php

namespace App\Interfaces\Providers;

use App\Utils\Http;

interface PaymentProviderContract
{
    public function __construct(Http $httpClient);

    public function charge(string $email, int $amount) : string;
}