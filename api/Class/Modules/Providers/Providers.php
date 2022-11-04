<?php

class Providers{

	private $idproviders;
	private $providers_name;
	private $providers_address;
	private $providers_phone;
	private $providers_document;
	private $providers_contact_name;
	private $providers_contact_lastname;
	private $providers_contact_phone;
	private $idroles;

	public function __construct($idproviders=null, $providers_name=null, $providers_address=null, $providers_phone=null, $providers_document=null, $providers_contact_name=null, $providers_contact_lastname=null, $providers_contact_phone=null, $idroles=null)
	{
		$this->idproviders = $idproviders;
		$this->providers_name = $providers_name;
		$this->providers_address = $providers_address;
		$this->providers_phone = $providers_phone;
		$this->providers_document = $providers_document;
		$this->providers_contact_name = $providers_contact_name;
		$this->providers_contact_lastname = $providers_contact_lastname;
		$this->providers_contact_phone = $providers_contact_phone;
		$this->idroles = $idroles;
	}


    public function getIdproviders()
    {
        return $this->idproviders;
    }

    public function setIdproviders($idproviders)
    {
        $this->idproviders = $idproviders;

        return $this;
    }


    public function getProvidersName(){
        return $this->providers_name;
    }

    public function setProvidersName($providers_name){
        $this->providers_name = $providers_name;

        return $this;
    }


    public function getProvidersAddress(){
        return $this->providers_address;
    }


    public function setProvidersAddress($providers_address){
        $this->providers_address = $providers_address;

        return $this;
    }


    public function getProvidersPhone(){
        return $this->providers_phone;
    }


    public function setProvidersPhone($providers_phone){
        $this->providers_phone = $providers_phone;

        return $this;
    }

    public function getProvidersDocument(){
        return $this->providers_document;
    }


    public function setProvidersDocument($providers_document){
        $this->providers_document = $providers_document;

        return $this;
    }

    public function getProvidersContactName(){
        return $this->providers_contact_name;
    }

    public function setProvidersContactName($providers_contact_name){
        $this->providers_contact_name = $providers_contact_name;

        return $this;
    }


    public function getProvidersContactLastname(){
        return $this->providers_contact_lastname;
    }


    public function setProvidersContactLastname($providers_contact_lastname){
        $this->providers_contact_lastname = $providers_contact_lastname;

        return $this;
    }


    public function getProvidersContactPhone(){
        return $this->providers_contact_phone;
    }


    public function setProvidersContactPhone($providers_contact_phone){
        $this->providers_contact_phone = $providers_contact_phone;

        return $this;
    }


    public function getIdroles(){
        return $this->idroles;
    }


    public function setIdroles($idroles){
        $this->idroles = $idroles;

        return $this;
    }
}