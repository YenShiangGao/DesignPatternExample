<?php
include_once './MenuComponentInterface.php';
include_once './MenuItem.php';
include_once './MenuGroup.php';

use Composite\MenuComponentInterface;
use Composite\MenuItem;
use Composite\MenuGroup;

$root = new \Composite\MenuGroup('Main Menu');
$root->add(new \Composite\MenuItem('Home', '/home'));
$root->add(new \Composite\MenuItem('About', '/about'));

$products = new \Composite\MenuGroup('Products');
$services = new \Composite\MenuGroup('Services');
$services->add(new \Composite\MenuItem('Web Development', '/services/web'));
$services->add(new \Composite\MenuItem('SEO', '/services/seo'));

$cloudPlatform = new \Composite\MenuGroup('Cloud Platform');
$cloudPlatform->add(new \Composite\MenuItem('AWS', '/cloud/aws'));
$cloudPlatform->add(new \Composite\MenuItem('Azure', '/cloud/azure'));

$products->add($services);
$products->add($cloudPlatform);

$root->add($products);
$root->add(new \Composite\MenuItem('Contact', '/contact'));

echo "<ul>" . $root->render() . "</ul>";