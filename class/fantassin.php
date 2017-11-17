<?php

class Fantassin extends Armee_Humaine{

    public function __construct()
    {

        $this->setEquipement(" épée courte ");
        $this->setRace($this->_race);

    }

}