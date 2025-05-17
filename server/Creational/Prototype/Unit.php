<?php

namespace Prototype;

require __DIR__ . '/UnitInterface.php';


class Unit implements UnitInterface
{
    protected string $name;
    protected int $attack;
    protected int $hp;

    protected array $position = [
        'x' => 0,
        'y' => 0,
    ];

    public function __clone(): void
    {
        $this->position = [
            'x' => rand(0, 10),
            'y' => rand(0, 10),
        ];
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function build(): Unit
    {
        return $this;
    }

    public function getPosition(): array
    {
        return $this->position;
    }
}