<?php
require_once './Burger.php';
require_once './Cheese.php';
require_once './Egg.php';

// 套裝Decorator
$burger = new Cheese(new Egg(new Burger()));
echo "漢堡價格：".$burger->cost()."元<br/>";