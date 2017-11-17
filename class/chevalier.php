<?php

class Chevalier extends Armee_Humaine{

    public function __construct()
    {

        $this->setEquipement(" épée lourde ");
        $this->setRace($this->_race);

    }

}