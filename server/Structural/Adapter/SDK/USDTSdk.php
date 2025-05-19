<?php

namespace SDK;

class USDTSdk
{
    public function createUsdtCharge(
        int $amount
    ): string
    {
        // Simulate creating a USDT charge
        return "USDT charge of $amount created.<br>";
    }

    public function createUsdtRefund(
        int $amount
    ): string
    {
        // Simulate creating a USDT refund
        return "USDT refund of $amount created.<br>";
    }
}