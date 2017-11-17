<?php
class Fusilier extends Armee_Humaine {

    public function __construct()
    {

        $this->setEquipement(" fusil ");
        $this->setRace($this->_race);

    }

}