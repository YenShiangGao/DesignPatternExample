<?php

namespace Bridge;

use Bridge\Render\DialogRenderInterface;

abstract class CharacterDialogBridge
{
    protected DialogRenderInterface $dialogRender;

    public function __construct(DialogRenderInterface $dialogRender)
    {
        $this->dialogRender = $dialogRender;
    }

    abstract public function present(): string;
}