<?php
include_once 'adapter/BTCAdapter.php';
include_once 'SDK/BTCSdk.php';
include_once 'adapter/USDTAdapter.php';
include_once 'SDK/USDTSdk.php';

use adapter\BTCAdapter;
use SDK\BTCSdk;
use adapter\USDTAdapter;
use SDK\USDTSdk;

class PaymentService
{
    protected \adapter\PaymentGateway $paymentGateway;

    public function __construct(\adapter\PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function checkout(
        int $amount,
        string $type
    ): string
    {
        return match ($type) {
            'charge' => $this->paymentGateway->charge($amount),
            'refund' => $this->paymentGateway->refund($amount),
            default => "Invalid payment type",
        };
    }
}

$btc = new BTCAdapter(new BTCSdk());
$checkout = new PaymentService($btc);

echo $checkout->checkout(100, 'charge') . PHP_EOL;
echo $checkout->checkout(50, 'refund') . PHP_EOL;

$usdt = new USDTAdapter(new USDTSdk());
$checkout = new PaymentService($usdt);

echo $checkout->checkout(200, 'charge') . PHP_EOL;
echo $checkout->checkout(150, 'refund') . PHP_EOL;