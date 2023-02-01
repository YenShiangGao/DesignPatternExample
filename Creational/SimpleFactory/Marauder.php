<?php

include_once "Unit.php";

class Marauder implements Unit
{

    public function getMaterial()
    {
        echo "需要50單位晶礦，25單位高能瓦斯<br />";
    }

    public function train()
    {
        echo "在15後生成完成<br />";
    }

    public function create()
    {
        echo "卡碰！寶貝 <br /><br />";
    }
}