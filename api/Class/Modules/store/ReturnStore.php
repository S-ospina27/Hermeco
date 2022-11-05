<?php

class ReturnStore{
    private $idoperations;
	private $operations_date;
	private $idproviders;
	private $idproviders_second;
	private $operations_number_bags;
	private $operations_type;
    private $idstatus;

    public function __construct($idoperations=null, $operations_date=null, $idproviders=null, $idproviders_second=null, $operations_number_bags=null, $operations_type=null, $idstatus=null)
    {
        $this->idoperations = $idoperations;
        $this->operations_date = $operations_date;
        $this->idproviders = $idproviders;
        $this->idproviders_second = $idproviders_second;
        $this->operations_number_bags = $operations_number_bags;
        $this->operations_type = $operations_type;
        $this->idstatus = $idstatus;
    }


    public function getIdoperations(){
        return $this->idoperations;
    }


    public function setIdoperations($idoperations){
        $this->idoperations = $idoperations;

        return $this;
    }


    public function getOperationsDate(){
        return $this->operations_date;
    }


    public function setOperationsDate($operations_date){
        $this->operations_date = $operations_date;

        return $this;
    }


    public function getIdproviders(){
        return $this->idproviders;
    }


    public function setIdproviders($idproviders){
        $this->idproviders = $idproviders;

        return $this;
    }

    public function getIdprovidersSecond(){
        return $this->idproviders_second;
    }


    public function setIdprovidersSecond($idproviders_second){
        $this->idproviders_second = $idproviders_second;

        return $this;
    }

    public function getOperationsNumberBags(){
        return $this->operations_number_bags;
    }

    public function setOperationsNumberBags($operations_number_bags){
        $this->operations_number_bags = $operations_number_bags;

        return $this;
    }

    public function getOperationsType(){
        return $this->operations_type;
    }

    public function setOperationsType($operations_type){
        $this->operations_type = $operations_type;

        return $this;
    }


    public function getIdstatus(){
        return $this->idstatus;
    }


    public function setIdstatus($idstatus){
        $this->idstatus = $idstatus;

        return $this;
    }
}