<?php

interface Unit
{
    // 取得水晶
    public function getMaterial();
    // 訓練時間
    public function train();
    // 建造完成
    public function create();
}