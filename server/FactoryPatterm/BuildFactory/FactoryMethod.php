<?php

namespace FactoryPatterm\BuildFactory;

require_once dirname(__DIR__).'/Unit/Worker.php';
require_once dirname(__DIR__).'/Unit/Solider.php';
require_once dirname(__DIR__).'/Unit/Aircraft.php';

abstract class FactoryMethod
{
    abstract public function outputUnit();
}