<?php

require_once __DIR__ . '/FoodInterface.php';

class Burger implements FoodInterface
{
    public function cost()
    {
        return 50;
    }
}