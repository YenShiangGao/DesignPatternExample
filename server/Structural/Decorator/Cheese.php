<?php
require_once __DIR__ . '/ToppingDecorator.php';

class Cheese extends ToppingDecorator
{
    public function cost()
    {
        return $this->food->cost() + 15;
    }
}