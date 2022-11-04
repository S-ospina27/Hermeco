<?php

class RolesController{
	private $rolesModel;
	private $request;
	private $response;
	public	function __construct($request,$response){
		$this->request =$request;
		$this->response =$response;


		$this->rolesModel= new RolesModel();
	}

	public function index(){

		return $this->rolesModel->indexDB();
	}

	public function create(){
		Validate::exists("roles_name","el nombre es obligatorio");
		$roles = new Roles(null,$this->request->roles_name);
		return $this->rolesModel->createDB($roles);
	}

	public function update(){
		Validate::exists("idroles","el idrol es obligatorio");
		Validate::exists("roles_name","el nombre es obligatorio");
		$roles= new Roles($this->request->idroles,$this->request->roles_name);
		return $this->rolesModel->updateDB($roles);

	}

	public function delete(){
		Validate::exists("idroles","el idrol es obligatorio");
		$roles = new Roles($this->request->idroles);
		return $this->rolesModel->deleteDB($roles);

	}
}