<?php
namespace Bridge;

include_once 'CharacterDialogBridge.php';

class LaezelDialog extends CharacterDialogBridge
{
    protected $characterName, $script;

    public function __construct($render)
    {
        parent::__construct($render);
        $this->characterName = "Laezel";
        $this->script = "I am Laezel, a Githyanki warrior. I will not be your pawn.";
    }

    public function present(): string
    {
        return $this->dialogRender->render($this->characterName, $this->script);
    }
}