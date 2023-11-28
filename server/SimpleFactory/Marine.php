<?php
include_once "Unit.php";

class Marine implements Unit
{

    public function getMaterial()
    {
        echo "需要50單位的水晶<br />";
    }

    public function train()
    {
        echo "在10秒生成完成<br />";
    }

    public function create()
    {
        echo "想嘗嘗我的厲害嗎，小子？!<br /><br />";
    }
}