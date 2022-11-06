<?php


class StatusController{

	private $request;
	private $response;
	private $statusModel;

	public function __construct($request, $response)
	{
		$this->request = $request;
		$this->response = $response;
		$this->statusModel= new StatusModel();


	}

	public function index(){

		return $this->statusModel->indexDB();
	}
}