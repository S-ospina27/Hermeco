<?php

class OperationsModel{

	function __construct(){

	}


	public function indexDB(){

		$sql="SELECT *FROM operations";

		return Connection::prepare($sql)->fetchAll();
	}
}