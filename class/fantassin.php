<?php

class Fantassin extends Armee_Humaine{

    public function __construct( $_updateArmure=0 )
    {

        $this->setEquipement(" épée courte ");
        $this->setRace($this->_race);
        $this->setUpdateArmure($_updateArmure);

    }

}