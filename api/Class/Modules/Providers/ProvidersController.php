<?php

Class ProvidersController{

	private $request;
	private $response;
	private $providerModel;

	public function __construct($request, $response)
	{
		$this->request = $request;
		$this->response = $response;
		$this->providerModel= new ProvidersModel();


	}

	public function index(){

		return $this->providerModel->indexDB();
	}

	public function create(){

		Validate::exists('providers_name','el nombre del provedor es obligatorio');
		Validate::exists('providers_address','la dirección del provedor es obligatorio');
		Validate::exists('providers_phone','el numero del provedor es obligatorio');
		Validate::exists('providers_document','la el documento  del provedor es obligatorio');
		Validate::exists('providers_contact_name','el nombre del contacto es obligatorio');
		Validate::exists('providers_contact_lastname','el apellido del contacto es obligatorio');
		Validate::exists('providers_contact_phone','el telefono del contacto es obligatorio');
		Validate::exists('idroles','el rol del provedor es obligatorio');

		$providers = new Providers(
			null,
			$this->request->providers_name,
			$this->request->providers_address,
			$this->request->providers_phone,
			$this->request->providers_document,
			$this->request->providers_contact_name,
			$this->request->providers_contact_lastname,
			$this->request->providers_contact_phone,
			$this->request->idroles
		);

		return $this->providerModel->createDB($providers);
	}

	public function update(){
		Validate::exists('providers_name','el nombre del provedor es obligatorio');
		Validate::exists('providers_address','la dirección del provedor es obligatorio');
		Validate::exists('providers_phone','el numero del provedor es obligatorio');
		Validate::exists('providers_document','la el documento  del provedor es obligatorio');
		Validate::exists('providers_contact_name','el nombre del contacto es obligatorio');
		Validate::exists('providers_contact_lastname','el apellido del contacto es obligatorio');
		Validate::exists('providers_contact_phone','el telefono del contacto es obligatorio');
		Validate::exists('idroles','el rol del provedor es obligatorio');
		Validate::exists('idproviders','el id del provedor es obligatorio');

		$providers = new Providers(
			$this->request->providers_name,
			$this->request->providers_address,
			$this->request->providers_phone,
			$this->request->providers_document,
			$this->request->providers_contact_name,
			$this->request->providers_contact_lastname,
			$this->request->providers_contact_phone,
			$this->request->idroles,
			$this->request->idproviders
		);
		return $this->providerModel->updateDB($providers);


	}
}