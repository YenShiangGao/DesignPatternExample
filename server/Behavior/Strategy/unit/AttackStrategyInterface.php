<?php

namespace Strategy;

    interface AttackStrategyInterface {
        public function attack(): string;
        public function getRange(): int;
    }
