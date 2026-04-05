<?php

namespace Builder;

class Unit
{
    public string $name;
    public int $health;
    public int $attack;
    public int $defense;
    public int $speed;

    public function describe(): string
    {
        return sprintf(
            "Unit: %s, Health: %d, Attack: %d, Defense: %d, Speed: %d",
            $this->name,
            $this->health,
            $this->attack,
            $this->defense,
            $this->speed
        );
    }
}