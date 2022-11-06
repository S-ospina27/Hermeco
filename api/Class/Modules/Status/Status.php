<?php


class Status {

	private $idstatus;
	private $status_type;
	private $status_date_no_assignment;
	private $status_description_no_assignment;
	private $status_date_assigned;
	private $status_description_assigned;
	private $status_date_route;
	private $status_date_novelty;
	private $status_date_delivery;
	private $status_description_delivery;


	public function __construct($idstatus=null, $status_type=null, $status_date_no_assignment=null, $status_description_no_assignment=null, $status_date_assigned=null, $status_description_assigned=null, $status_date_route=null, $status_date_novelty=null, $status_date_delivery=null, $status_description_delivery=null)
	{
		$this->idstatus = $idstatus;
		$this->status_type = $status_type;
		$this->status_date_no_assignment = $status_date_no_assignment;
		$this->status_description_no_assignment = $status_description_no_assignment;
		$this->status_date_assigned = $status_date_assigned;
		$this->status_description_assigned = $status_description_assigned;
		$this->status_date_route = $status_date_route;
		$this->status_date_novelty = $status_date_novelty;
		$this->status_date_delivery = $status_date_delivery;
		$this->status_description_delivery = $status_description_delivery;
	}


	public function getIdstatus(){
		return $this->idstatus;
	}


	public function setIdstatus($idstatus){
		$this->idstatus = $idstatus;

		return $this;
	}


	public function getStatusType(){
		return $this->status_type;
	}


	public function setStatusType($status_type){
		$this->status_type = $status_type;

		return $this;
	}


	public function getStatusDateNoAssignment(){
		return $this->status_date_no_assignment;
	}

	public function setStatusDateNoAssignment($status_date_no_assignment){
		$this->status_date_no_assignment = $status_date_no_assignment;

		return $this;
	}


	public function getStatusDescriptionNoAssignment(){
		return $this->status_description_no_assignment;
	}


	public function setStatusDescriptionNoAssignment($status_description_no_assignment){
		$this->status_description_no_assignment = $status_description_no_assignment;

		return $this;
	}


	public function getStatusDateAssigned(){
		return $this->status_date_assigned;
	}


	public function setStatusDateAssigned($status_date_assigned){
		$this->status_date_assigned = $status_date_assigned;

		return $this;
	}


	public function getStatusDescriptionAssigned(){
		return $this->status_description_assigned;
	}

	public function setStatusDescriptionAssigned($status_description_assigned){
		$this->status_description_assigned = $status_description_assigned;

		return $this;
	}


	public function getStatusDateRoute(){
		return $this->status_date_route;
	}


	public function setStatusDateRoute($status_date_route){
		$this->status_date_route = $status_date_route;

		return $this;
	}

	public function getStatusDateNovelty(){
		return $this->status_date_novelty;
	}


	public function setStatusDateNovelty($status_date_novelty){
		$this->status_date_novelty = $status_date_novelty;

		return $this;
	}

	public function getStatusDateDelivery(){
		return $this->status_date_delivery;
	}


	public function setStatusDateDelivery($status_date_delivery){
		$this->status_date_delivery = $status_date_delivery;

		return $this;
	}


	public function getStatusDescriptionDelivery(){
		return $this->status_description_delivery;
	}


	public function setStatusDescriptionDelivery($status_description_delivery){
		$this->status_description_delivery = $status_description_delivery;

		return $this;
	}
}




