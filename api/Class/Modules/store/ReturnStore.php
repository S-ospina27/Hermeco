<?php

class ReturnStore{

	private $operations_date;
	private $idproviders;
	private $idproviders_second;
	private $operations_number_bags;

	public function __construct($operations_date=null, $idproviders=null, $idproviders_second=null, $operations_number_bags=null)
	{
		$this->operations_date = $operations_date;
		$this->idproviders = $idproviders;
		$this->idproviders_second = $idproviders_second;
		$this->operations_number_bags = $operations_number_bags;
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
}