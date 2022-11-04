<?php

class Roles{

	private $idroles;
	private $roles_name;

	public function __construct($idroles=null, $roles_name=null){
		$this->idroles = $idroles;
		$this->roles_name = $roles_name;
	}



    public function getIdroles(){
        return $this->idroles;
    }


    public function setIdroles($idroles){
        $this->idroles = $idroles;

        return $this;
    }

    public function getRolesName(){
        return $this->roles_name;
    }


    public function setRolesName($roles_name){
        $this->roles_name = $roles_name;

        return $this;
    }
}