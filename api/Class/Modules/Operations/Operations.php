<?php


class Operations {

	private $idoperations;
	private $operations_delivery_order;
	private $operations_date;
	private $operations_op;
	private $idproviders;
	private $operations_number_bags;
	private $operations_guide;
	private $operations_delivery;
	private $operations_purchase_order;
	private $operations_content;
	private $operations_departure_date;
	private $operations_city;
	private $operations_departament;
	private $operations_recipient_name;
	private $idproviders_second;
	private $operations_plaque;
	private $idstatus;
	private $operations_type;
	private $operations_rute;

	public function __construct($idoperations=null, $operations_delivery_order=null, $operations_date=null, $operations_op=null, $idproviders=null, $operations_number_bags=null, $operations_guide=null, $operations_delivery=null, $operations_purchase_order=null, $operations_content=null, $operations_departure_date=null, $operations_city=null, $operations_departament=null, $operations_recipient_name=null, $idproviders_second=null, $operations_plaque=null, $idstatus=null, $operations_type=null, $operations_rute=null)
	{
		$this->idoperations = $idoperations;
		$this->operations_delivery_order = $operations_delivery_order;
		$this->operations_date = $operations_date;
		$this->operations_op = $operations_op;
		$this->idproviders = $idproviders;
		$this->operations_number_bags = $operations_number_bags;
		$this->operations_guide = $operations_guide;
		$this->operations_delivery = $operations_delivery;
		$this->operations_purchase_order = $operations_purchase_order;
		$this->operations_content = $operations_content;
		$this->operations_departure_date = $operations_departure_date;
		$this->operations_city = $operations_city;
		$this->operations_departament = $operations_departament;
		$this->operations_recipient_name = $operations_recipient_name;
		$this->idproviders_second = $idproviders_second;
		$this->operations_plaque = $operations_plaque;
		$this->idstatus = $idstatus;
		$this->operations_type = $operations_type;
		$this->operations_rute = $operations_rute;
	}




	public function getIdoperations(){
		return $this->idoperations;
	}


	public function setIdoperations($idoperations){
		$this->idoperations = $idoperations;

		return $this;
	}


	public function getOperationsDeliveryOrder(){
		return $this->operations_delivery_order;
	}


	public function setOperationsDeliveryOrder($operations_delivery_order){
		$this->operations_delivery_order = $operations_delivery_order;

		return $this;
	}

	public function getOperationsDate(){
		return $this->operations_date;
	}

	public function setOperationsDate($operations_date){
		$this->operations_date = $operations_date;

		return $this;
	}


	public function getOperationsOp(){
		return $this->operations_op;
	}

	public function setOperationsOp($operations_op){

		$this->operations_op = $operations_op;

		return $this;
	}

	public function getIdproviders(){
		return $this->idproviders;
	}


	public function setIdproviders($idproviders){
		$this->idproviders = $idproviders;

		return $this;
	}

	public function getOperationsNumberBags(){
		return $this->operations_number_bags;
	}


	public function setOperationsNumberBags($operations_number_bags){
		$this->operations_number_bags = $operations_number_bags;

		return $this;
	}


	public function getOperationsGuide(){
		return $this->operations_guide;
	}


	public function setOperationsGuide($operations_guide){
		$this->operations_guide = $operations_guide;

		return $this;
	}


	public function getOperationsDelivery(){
		return $this->operations_delivery;
	}


	public function setOperationsDelivery($operations_delivery){
		$this->operations_delivery = $operations_delivery;

		return $this;
	}


	public function getOperationsPurchaseOrder(){
		return $this->operations_purchase_order;
	}


	public function setOperationsPurchaseOrder($operations_purchase_order){
		$this->operations_purchase_order = $operations_purchase_order;

		return $this;
	}


	public function getOperationsContent(){
		return $this->operations_content;
	}


	public function setOperationsContent($operations_content){
		$this->operations_content = $operations_content;

		return $this;
	}


	public function getOperationsDepartureDate(){
		return $this->operations_departure_date;
	}

	public function setOperationsDepartureDate($operations_departure_date){
		$this->operations_departure_date = $operations_departure_date;

		return $this;
	}


	public function getOperationsCity(){
		return $this->operations_city;
	}

	public function setOperationsCity($operations_city){
		$this->operations_city = $operations_city;

		return $this;
	}


	public function getOperationsDepartament(){
		return $this->operations_departament;
	}


	public function setOperationsDepartament($operations_departament){
		$this->operations_departament = $operations_departament;

		return $this;
	}


	public function getOperationsRecipientName(){
		return $this->operations_recipient_name;
	}

	public function setOperationsRecipientName($operations_recipient_name){
		$this->operations_recipient_name = $operations_recipient_name;

		return $this;
	}

	public function getIdprovidersSecond(){
		return $this->idproviders_second;
	}

	public function setIdprovidersSecond($idproviders_second){
		$this->idproviders_second = $idproviders_second;

		return $this;
	}

	public function getOperationsPlaque(){
		return $this->operations_plaque;
	}

	public function setOperationsPlaque($operations_plaque){
		$this->operations_plaque = $operations_plaque;

		return $this;
	}

	public function getIdstatus(){
		return $this->idstatus;
	}

	public function setIdstatus($idstatus){
		$this->idstatus = $idstatus;

		return $this;
	}

	public function getOperationsType(){
		return $this->operations_type;
	}


	public function setOperationsType($operations_type){
		$this->operations_type = $operations_type;

		return $this;
	}


	public function getOperationsRute(){
		return $this->operations_rute;
	}

	public function setOperationsRute($operations_rute){
		$this->operations_rute = $operations_rute;

		return $this;
	}
}