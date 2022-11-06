<?php


class StatusModel{

	function __construct(){

	}


	public function indexDB(){

		$sql="SELECT *FROM status";

		return Connection::prepare($sql)->fetchAll();

	}
}