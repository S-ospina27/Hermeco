<?php
// -------------------------------------------------------------------------------------------------
include_once("./imports.php");
// -------------------------------------------------------------------------------------------------
Request::header("Access-Control-Allow-Origin", "*");
Request::header("Content-Type", "application/json; charset=UTF-8");
Connection::init(
	// "localhost", "u804519145_e_box", "u804519145_e_box", "IyQCuB~5"
	"127.0.0.1",
	"hermeco",
	"root",
	"santiago"
);

$request = (new Request())->capture();
$response = new Response();
// -------------------------------------------------------------------------------------------------
Validate::init($request, $response);
Validate::exists("type", "La ruta no existe [1]");

switch ($request->type) {
	case 'mostrar-roles':
	$rolesController = new RolesController($request, $response);
	$response->finish($rolesController->index());
	break;

	case 'create-roles':
	$rolesController = new RolesController($request, $response);
	$response->finish($rolesController->create());
	break;

	case 'update-roles':
	$rolesController = new RolesController($request, $response);
	$response->finish($rolesController->update());
	break;

	case 'delete-roles':
	$rolesController = new RolesController($request,$response);
	$response->finish($rolesController->delete());
	break;

	case "mostrar-providers":
	$providersController = new ProvidersController($request,$response);
	$response->finish($providersController->index());

	break;

	case 'create-providers':
	$providersController = new ProvidersController($request,$response);
	$response->finish($providersController->create());
	break;

	case 'update-providers':
	$providersController = new ProvidersController($request,$response);
	$response->finish($providersController->update());
	break;

	case 'mostrar-return':
	$returnStore = new ReturnStoreController($request,$response);
	$response->finish($returnStore->index());
	break;

	case 'create-return':
	$returnStore = new ReturnStoreController($request,$response);
	$response->finish($returnStore->create());
	break;

	case 'update-return':
	$returnStore = new ReturnStoreController($request,$response);
	$response->finish($returnStore->update());
	break;

	case 'export-template':
	$operation= new OperationsController($request,$response);
	$operation->Export();
	break;

	case 'Export-operations':
	$operation= new OperationsController($request,$response);
	$operation->exportExcel();
	break;

	case 'create-operations':

	break;

	case 'assigned-placa':

	break;
	case 'mostrar-operations':
	$operation= new OperationsController($request,$response);
	$response->finish($operation->index());
	break;

	case 'mostrar-status':
	$status= new StatusController($request,$response);
	$response->finish($status->index());
	break;

	default:
	$response->finish($response->error("La ruta no existe [2]"));
	break;
}
