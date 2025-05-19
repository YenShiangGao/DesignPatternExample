<?php

namespace SDK;

class BTCSdk
{
    public function createBtcCharge(
        int $amount
    ): string
    {
        // Simulate creating a BTC charge
        return "BTC charge of $amount created.<br>";
    }

    public function createBtcRefund(
        int $amount
    ): string
    {
        // Simulate creating a BTC refund
        return "BTC refund of $amount created.<br>";
    }
}