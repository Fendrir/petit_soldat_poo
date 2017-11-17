<?php

class Griffon extends Armee_Humaine{

    public function __construct($_updateArmure)
    {

        $this->setEquipement(" marteau enchanté ");
        $this->setRace(" Nain ");
        $this->setUpdateArmure($_updateArmure);

    }

}