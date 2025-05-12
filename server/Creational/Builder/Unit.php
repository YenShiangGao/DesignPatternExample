<?php

namespace Builder;

class Unit
{
    public string $name;
    public int $health;
    public int $attack;
    public int $armor;
    public int $speed;

    public function describe(): string
    {
        return sprintf(
            "Unit: %s, Health: %d, Attack: %d, Armor: %d, Speed: %d",
            $this->name,
            $this->health,
            $this->attack,
            $this->armor,
            $this->speed
        );
    }
}