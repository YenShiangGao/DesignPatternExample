<?php

namespace Bridge\Render;

include_once 'DialogRenderInterface.php';

class TextRender implements DialogRenderInterface
{
    public function render(string $characterName, string $script): string
    {
        return "[Text] $characterName says: \"$script\" ";
    }
}