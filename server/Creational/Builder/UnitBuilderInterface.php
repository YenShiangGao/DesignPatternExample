<?php

namespace Builder;

interface UnitBuilderInterface
{
    public function setName(string $name): UnitBuilderInterface;

    public function setHealth(int $health): UnitBuilderInterface;

    public function setAttack(int $attack): UnitBuilderInterface;

    public function setDefense(int $defense): UnitBuilderInterface;

    public function setSpeed(int $speed): UnitBuilderInterface;

    public function build(): Unit;
}