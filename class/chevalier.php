<?php

class Chevalier extends Armee_Humaine{

    public function __construct($_updateArmure)
    {

        $this->setEquipement(" épée lourde ");
        $this->setRace($this->_race);
        $this->setUpdateArmure($_updateArmure);

    }

}