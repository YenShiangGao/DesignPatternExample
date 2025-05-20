<?php

namespace Bridge;

include_once 'CharacterDialogBridge.php';
class ShadowHeartDialog extends CharacterDialogBridge
{

    protected $characterName, $script;
    public function __construct($render)
    {
        parent::__construct($render);
        $this->characterName = "Shadowheart";
        $this->script = "I am Shadowheart, a cleric of Shar. I have my own agenda.";
    }

    public function present(): string
    {
        return $this->dialogRender->render($this->characterName, $this->script);
    }
}