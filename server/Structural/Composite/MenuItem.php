<?php

namespace Composite;

class MenuItem implements MenuComponentInterface
{
    protected $title;
    protected $url;

    public function __construct(string $title, string $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function render(): string
    {
        return "<li>
            <a href=\"{$this->url}\">{$this->title}</a>
        </li>";
    }
}