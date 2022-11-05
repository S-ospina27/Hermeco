<?php

class ReturnStoreController {
	private $returnStore;
	private $request;
	private $response;

	function __construct($request,$response){
		$this->returnStore = new ReturnStoreModel();
		$this->request = $request;
		$this->response= $response;

	}

	public function index(){

		return $this->returnStore->indexDB();

	}

	public function create(){
		// :i:s
		$fechaActual = date('Y-m-d');
		Validate::exists("idproviders","el id del provedor es obligatorio");
		Validate::exists("idproviders_second","el id del provedor destino es obligatorio");
		Validate::exists("operations_number_bags","la cantidad de tulas es obligatoria");
		Validate::exists("operations_type"," tipo de operacion es obligatoria");

		$returnStore = new ReturnStore(
			null,
			$fechaActual,
			$this->request->idproviders,
			$this->request->idproviders_second,
			$this->request->operations_number_bags,
			$this->request->operations_type,
			1
		);
		return $this->returnStore->createDB($returnStore);
	}

	public function update(){
		Validate::exists("idproviders","el id del provedor es obligatorio");
		Validate::exists("idproviders_second","el id del provedor destino es obligatorio");
		Validate::exists("operations_number_bags","la cantidad de tulas es obligatoria");
		Validate::exists("operations_date","la fecha es obligatoria es obligatoria");
		Validate::exists("operations_type"," tipo de operacion es obligatoria");
		Validate::exists("idstatus"," el estatus es obligatorio");


		$returnStore = new ReturnStore(
			$this->request->idoperations,
			$this->request->operations_date,
			$this->request->idproviders,
			$this->request->idproviders_second,
			$this->request->operations_number_bags,
			$this->request->operations_type,
			$this->request->idstatus
		);
		return $this->returnStore->updateDB($returnStore);
	}
}