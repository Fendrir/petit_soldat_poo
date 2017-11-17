<?php
class Fusilier extends Armee_Humaine {

    public function __construct($_updateArmure)
    {

        $this->setEquipement(" fusil ");
        $this->setRace($this->_race);
        $this->setUpdateArmure($_updateArmure);

    }

}