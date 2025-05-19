<?php
namespace adapter;

include_once 'PaymentGateway.php';

use SDK\BTCSdk;

class BTCAdapter implements PaymentGateway
{
    private BTCSdk $btcSdk;

    public function __construct(BTCSdk $sdk)
    {
        $this->btcSdk = $sdk;
    }
    public function charge(int $amount): string
    {
        echo "Charging $amount BTC <br>";
        // Here you would implement the actual charge logic using the BTC API
        // For example, you might call a method from a BTC SDK to process the payment
        // This is just a placeholder for demonstration purposes
        return $this->btcSdk->createBtcCharge($amount);
    }

    public function refund(int $amount): string
    {
        echo "Refunding $amount BTC <br>";
        // Here you would implement the actual refund logic using the BTC API
        // For example, you might call a method from a BTC SDK to process the refund
        // This is just a placeholder for demonstration purposes
        return $this->btcSdk->createBtcRefund($amount);
    }
}