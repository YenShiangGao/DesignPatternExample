<?php

require_once __DIR__.'/JimRaynor.php';

use Singleton\JimRaynor;

$raynor = JimRaynor::getInstance();
echo $raynor->getHeroInfo().'<br>';
echo $raynor->getClicked().'<br>';

$raynor->attack();