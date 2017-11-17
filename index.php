<?php

include("class/armee_humaine.php");
include("class/fantassin.php");
include("class/chevalier.php");
include("class/fusilier.php");
include("class/griffon.php");



$monArmee = new Fantassin();
var_dump($monArmee->getEquipement());
var_dump($monArmee->getRace());
echo "</br>";

$monArmee1 = new Griffon();
var_dump($monArmee1->getEquipement());
var_dump($monArmee1->getRace());
echo "</br>";

$monArmee2 = new Fusilier();
var_dump($monArmee2->getEquipement());
var_dump($monArmee2->getRace());
echo "</br>";

$monArmee3 = new Chevalier();
var_dump($monArmee3->getEquipement());
var_dump($monArmee3->getRace());
echo "</br>";