<?php

namespace Composite;

class MenuGroup implements MenuComponentInterface
{
    protected $title;
    protected $items = [];

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function add(MenuComponentInterface $item): void
    {
        $this->items[] = $item;
    }

    public function render(): string
    {
        $html = "<div class='menu-group'><li>{$this->title}<ul>";

        foreach ($this->items as $item) {
            $html .= $item->render();
        }

        $html .= "</ul></li></div>";
        return $html;
    }
}