<?php

class Armee_Humaine {


    private $_armure = "côte de maille";            // toutes les côtes sont en maille par défault
    private $_updateArmure = 0;                     // l'amure peut être update jusqu'a 3 max et est à 0 par défault
    private $_fantassins = [];
    private $_fusiliers= [];
    private $_griffons = [];
    private $_chavaliers = [];

    protected $_armePrincipale;
    protected $_race ="humain";                            // l'armée humaine peut avoir des humains et des nains pour les griffons  

    public function __construct($_armePrincipale,$_armure)
    {

        $this->setEquipement($_armePrincipale,$_armure);

    }

    public function setEquipement($_armePrincipale,$_armure){

        $this->_armePrincipale=$_armePrincipale;
        $this->_armure=$_armure;

    }

    public function getEquipement()
    {

        return
                "Arme principale : ".$this->_armePrincipale."</br>".
                "Armure : ".$this->_armure."</br>";

    }
    

}