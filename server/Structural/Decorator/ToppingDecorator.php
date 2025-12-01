<?php
require_once __DIR__ . '/FoodInterface.php';

abstract class ToppingDecorator implements FoodInterface
{
    protected FoodInterface $food;

    public function __construct(FoodInterface $food)
    {
        $this->food = $food;
    }

    abstract public function cost();
}