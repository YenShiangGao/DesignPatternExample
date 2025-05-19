<?php

namespace adapter;

interface PaymentGateway
{
    public function charge(int $amount);

    public function refund(int $amount);
}