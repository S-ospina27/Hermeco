<?php

class ReturnStoreModel {

	function __construct(){

	}

	public function indexDB(){

		$sql="
		SELECT
		op.operations_date,
		op.operations_number_bags,
		op.operations_type,
		prov.providers_name,
		prov.providers_address,
		prov.providers_phone,
		prov2.providers_name,
		prov2.providers_address,
		prov2.providers_phone
		FROM
		operations AS op
		INNER JOIN
		providers AS prov ON op.idproviders = prov.idproviders
		INNER JOIN
		providers AS prov2 ON op.idproviders_second = prov2.idproviders";

		return Connection::prepare($sql)->fetchAll();
	}

	public function createDB(ReturnStore $returnStore){

		$sql="INSERT INTO operations (
			operations_date,
			idproviders,
			idproviders_second,
			operations_number_bags,
			operations_type,
			idstatus

		) VALUES(?,?,?,?,?,?)";

		return Connection::prepare($sql)->bindValue([
			$returnStore->getOperationsDate(),
			$returnStore->getIdproviders(),
			$returnStore->getIdprovidersSecond(),
			$returnStore->getOperationsNumberBags(),
			$returnStore->getOperationsType(),
			$returnStore->getIdstatus()
		])->execute();
	}

	public function updateDB(ReturnStore $returnStore){

		$sql="UPDATE operations
		SET operations_number_bags =?,
		operations_type=?
		WHERE idoperations=?";

		return Connection::prepare($sql)->bindValue([
			$returnStore->getOperationsNumberBags(),
			$returnStore->getOperationsType(),
			$returnStore->getIdoperations()
		])->execute();
	}
}