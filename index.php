<?php

include("class/armee_humaine.php");
include("class/fantassin.php");
include("class/chevalier.php");
include("class/fusilier.php");
include("class/griffon.php");



$monArmee = new Fantassin(2);
var_dump($monArmee->getEquipement());
var_dump($monArmee->getRace());
var_dump($monArmee->getUpdateArmure());
echo "</br>";

$monArmee1 = new Griffon(2);
var_dump($monArmee1->getEquipement());
var_dump($monArmee1->getRace());
var_dump($monArmee1->getUpdateArmure());
echo "</br>";

$monArmee2 = new Fusilier(3);
var_dump($monArmee2->getEquipement());
var_dump($monArmee2->getRace());
var_dump($monArmee2->getUpdateArmure());
echo "</br>";

$monArmee3 = new Chevalier(2);
var_dump($monArmee3->getEquipement());
var_dump($monArmee3->getRace());
var_dump($monArmee3->getUpdateArmure());
echo "</br>";