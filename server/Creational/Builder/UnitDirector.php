<?php

namespace Builder;

class UnitDirector
{
    public function createMarine(UnitBuilderInterface $builder): Unit
    {
        return $builder
            ->setName('Marine')
            ->setHealth(40)
            ->setAttack(6)
            ->setDefense(0)
            ->setSpeed(5)
            ->build();
    }

    public function createFirebat(UnitBuilderInterface $builder): Unit
    {
        return $builder
            ->setName('Firebat')
            ->setHealth(50)
            ->setAttack(8)
            ->setDefense(0)
            ->setSpeed(4)
            ->build();
    }
}