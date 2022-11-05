<?php


class ProvidersModel {

	function __construct(){

	}

	public function indexDB(){

		$sql="SELECT *FROM providers";

		return Connection::prepare($sql)->fetchAll();
	}

	public function createDB(Providers $providers){


		$sql="INSERT INTO providers (
			providers_name,
			providers_address,
			providers_phone,
			providers_document,
			providers_contact_name,
			providers_contact_lastname,
			providers_contact_phone,
			idroles
		)  VALUES(?,?,?,?,?,?,?,?)";

		return Connection::prepare($sql)->bindValue([
			$providers->getProvidersName(),
			$providers->getProvidersAddress(),
			$providers->getProvidersPhone(),
			$providers->getProvidersDocument(),
			$providers->getProvidersContactPhone(),
			$providers->getProvidersContactLastname(),
			$providers->getProvidersContactPhone(),
			$providers->getIdroles()
		])->execute();

	}

	public function updateDB(Providers $providers){

		$sql="UPDATE providers
		SET providers_name=?,
		providers_address=?,
		providers_phone=?,
		providers_document=?,
		providers_contact_name=?,
		providers_contact_lastname=?,
		providers_contact_phone=?,
		idroles=?
		WHERE idproviders=?";

		return Connection::prepare($sql)->bindValue([
			$providers->getProvidersName(),
			$providers->getProvidersAddress(),
			$providers->getProvidersPhone(),
			$providers->getProvidersDocument(),
			$providers->getProvidersContactPhone(),
			$providers->getProvidersContactLastname(),
			$providers->getProvidersContactPhone(),
			$providers->getIdroles(),
			$providers->getIdproviders()
		])->execute();

	}
}