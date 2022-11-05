<?php


class OperationsController{
	private $request;
	private $response;
	Private $operation;

	public function __construct($request, $response)
	{
		$this->request = $request;
		$this->response = $response;
		$this->operationsModel= new OperationsModel();


	}

	public function Export(){
		echo (
			json_encode([
				"status" => "success",
				"data"=> ["url" => "http://localhost:8000/assets/excel/templates/Hermeco-template.xlsx"]
			])
		);
	}

	public function index(){

		return $this->operationsModel->indexDB();
	}
}
