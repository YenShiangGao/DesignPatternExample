<?php

namespace adapter;

include_once 'PaymentGateway.php';

use SDK\USDTSdk;

class USDTAdapter implements PaymentGateway
{
    private USDTSdk $usdtSdk;

    public function __construct(USDTSdk $sdk)
    {
        $this->usdtSdk = $sdk;
    }

    public function charge(int $amount)
    {
        echo "Charging $amount USDT<br>";
        // Here you would implement the actual charge logic using the USDT API
        // For example, you might call a method from a USDT SDK to process the payment
        // This is just a placeholder for demonstration purposes
        return $this->usdtSdk->createUsdtCharge($amount);
    }

    public function refund(int $amount)
    {
        echo "Refunding $amount USDT<br>";
        // Here you would implement the actual refund logic using the USDT API
        // For example, you might call a method from a USDT SDK to process the refund
        // This is just a placeholder for demonstration purposes
        return $this->usdtSdk->createUsdtRefund($amount);
    }
}