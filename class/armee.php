<?php

class Armee{

    protected $_arme;
    protected $_nbHomme;

    public function __construct($_arme,$_nbHomme){

        $this->setArme($_arme);
        $this->setNbHomme($_nbHomme);

    }
    
    public function setArme($_arme){

        $this->_arme=$_arme;

    }

    public function getArme(){

        return $this->_arme;

    }

    public function setNbHomme($_nbHomme){

        $this->_nbHomme=$_nbHomme;

    }

    public function getNbHomme(){

        return $this->nbHomme;

    }

}