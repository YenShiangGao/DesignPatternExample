<?php
require_once __DIR__ . '/ToppingDecorator.php';

class Egg extends ToppingDecorator
{
    public function cost()
    {
        return $this->food->cost() + 10;
    }
}