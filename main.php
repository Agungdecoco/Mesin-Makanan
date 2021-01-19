<?php
require_once 'explore.php'; 
require_once 'custom.php'; 

$menu = new explore();
echo $menu->show();
echo $menu->menu();
echo "\n\n+++++++++++++++++++++++++++++++++++++++++++++";
$custom = new custom();
echo $custom->showToppingMini();
echo $custom->addToppingMini();
echo $custom->amountToppingMini;
echo $custom->myToppingMini;
echo "\n\n+++++++++++++++++++++++++++++++++++++++++++++";
echo $custom->showToppingMedium();
echo $custom->addToppingMedium();
echo $custom->amountToppingMedium;
