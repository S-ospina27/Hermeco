<?php


class RolesModel{

	public function __construct(){

	}
	/* seguir la msima logica del controllador
	realizo un select a roles
	*/

	public function indexDB(){
		$sql="SELECT * FROM roles";
		return Connection::prepare($sql)->fetchAll();
	}

	public function createDB(Roles $roles){
		$sql="INSERT INTO roles (roles_name) VALUES(?)";
		return Connection::prepare($sql)->bindValue([
			$roles->getRolesName()

		])->execute();
	}

	public function updateDB(Roles $roles){
		$sql="UPDATE roles SET roles_name=? WHERE idroles=?";

		return Connection::prepare($sql)->bindValue([
			$roles->getRolesName(),
			$roles->getIdroles()
		])->execute();

	}

	public function deleteDB(Roles $roles){

		$sql="DELETE FROM roles WHERE idroles=?";
		return Connection::prepare($sql)->bindValue([
			$roles->getIdroles()
		])->execute();
	}
}