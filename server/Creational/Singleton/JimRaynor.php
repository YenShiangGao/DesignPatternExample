<?php

namespace Singleton;

require_once __DIR__.'/Singleton.php';

class JimRaynor extends Singleton
{
    private $name = 'Jim Raynor';
    private $race = 'Terran';
    private $quote = 'This is Jimmy.';

    public function getClicked()
    {
        return $this->quote;
    }

    public function getHeroInfo()
    {
        return $this->name . ' is a ' . $this->race;
    }

    public function attack()
    {
        echo "It is show time";
    }
}