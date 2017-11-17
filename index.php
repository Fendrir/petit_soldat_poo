<?php

include("class/armee_humaine.php");
include("class/fantassin.php");
include("class/chevalier.php");
include("class/fusilier.php");
include("class/griffon.php");

$newArmy= new Armee_Humaine($_armePrincipale,$_armure);

$monArmee = new Fantassin($_armePrincipale,$_armure);
$monArmee->getEquipement();