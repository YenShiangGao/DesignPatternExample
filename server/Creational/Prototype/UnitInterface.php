<?php

namespace Prototype;

interface UnitInterface
{
    public function setName(string $name): void;
    public function getName(): string;
    public function setAttack(int $attack): void;
    public function getAttack(): int;
    public function setHp(int $hp): void;
    public function getHp(): int;
    public function getPosition(): array;
}