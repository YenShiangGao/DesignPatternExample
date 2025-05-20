<?php

namespace Bridge\Render;

interface DialogRenderInterface
{
    public function render(
        string $characterName,
        string $script
    ): string;
}