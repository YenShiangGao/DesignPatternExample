<?php

namespace AbstractFactory\Factory;

abstract class BuildFactory
{
    # 生產人類單位
    public abstract function outputTerranUnit();
    # 生產神族單位
    public abstract function outputProtossUnit();
}