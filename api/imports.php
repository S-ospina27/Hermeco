<?php

require_once("./Class/Response.php");
require_once("./Class/Json.php");
require_once("./Class/Connection.php");
require_once("./Class/Manage.php");
require_once("./Class/Request.php");
require_once("./Class/Validate.php");

require_once("./Class/Modules/Roles/RolesController.php");
require_once("./Class/Modules/Roles/RolesModel.php");
require_once("./Class/Modules/Roles/Roles.php");

require_once("./Class/Modules/Providers/ProvidersController.php");
require_once("./Class/Modules/Providers/ProvidersModel.php");
require_once("./Class/Modules/Providers/Providers.php");

require_once("./Class/Modules/store/ReturnStoreController.php");
require_once("./Class/Modules/store/ReturnStoreModel.php");
require_once("./Class/Modules/store/ReturnStore.php");

require("./../vendor/autoload.php");
require_once("./Class/Modules/Operations/OperationsController.php");
require_once("./Class/Modules/Operations/OperationsModel.php");
require_once("./Class/Modules/Operations/Operations.php");

require_once("./Class/Modules/Status/StatusController.php");
require_once("./Class/Modules/Status/StatusModel.php");
require_once("./Class/Modules/Status/Status.php");
