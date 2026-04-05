<?php
namespace Builder;

class TerranUnitBuilder implements UnitBuilderInterface
{
    protected Unit $unit;

    public function __construct()
    {
        $this->unit = new Unit();
    }

    public function setName(string $name): UnitBuilderInterface
    {
        $this->unit->name = $name;
        return $this;
    }

    public function setHealth(int $health): UnitBuilderInterface
    {
        $this->unit->health = $health;
        return $this;
    }

    public function setAttack(int $attack): UnitBuilderInterface
    {
        $this->unit->attack = $attack;
        return $this;
    }

    public function setDefense(int $defense): UnitBuilderInterface
    {
        $this->unit->defense = $defense;
        return $this;
    }

    public function setSpeed(int $speed): UnitBuilderInterface
    {
        $this->unit->speed = $speed;
        return $this;
    }

    public function build(): Unit
    {
        $result = $this->unit;
        $this->unit = new Unit();
        return $result;
    }
}