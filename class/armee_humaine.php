<?php

class Armee_Humaine {


    private $_armure="";                                  // toutes les côtes sont en maille par défault
    private $_updateArmure=0;                    // l'amure peut être update jusqu'a 3 max et est à 0 par défault
    // private $_fantassins = [];
    // private $_fusiliers= [];
    // private $_griffons = [];
    // private $_chavaliers = [];

    protected $_armePrincipale;                         // l'arme sera définie dans chacune des class différentes
    protected $_race="humain";                         // l'armée humaine peut avoir des humains et des nains pour les griffons  les humains sont par defaut

    public function __construct($_updateArmure)
    {

        $this->setEquipement($_armePrincipale);
        $this->setRace($_race);
        $this->setUpdateArmure($_updateArmure);

    }


    public function setUpdateArmure($_updateArmure)
    {

        $this->_updateArmure=$_updateArmure;

    }

    public function getUpdateArmure(){

        return "Niveau d'armure : ".$this->_updateArmure."</br>";

    }

    public function setRace($_race)
    {

        $this->_race=$_race;

    }

    public function getRace()
    {

        return "Race : ".$this->_race."</br>";

    }

    public function setEquipement($_armePrincipale)
    {

        $this->_armePrincipale=$_armePrincipale;
        $this->_armure="côte de maille";

    }

    public function getEquipement()
    {

        return
                "Arme principale : ".$this->_armePrincipale."</br>".
                "Armure : ".$this->_armure."</br>";

    }
    

}