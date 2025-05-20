<?php

namespace Bridge\Render;

include_once 'DialogRenderInterface.php';

class VoiceRender implements DialogRenderInterface
{

    public function render(string $characterName, string $script): string
    {
        return "[Voice] Playing character audio for $characterName says: \"$script\" ";
    }
}