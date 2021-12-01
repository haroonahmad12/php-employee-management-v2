<?php
session_start();

require_once("config/baseConstants.php");
require_once("config/constants.php");
require_once("config/db.php");

require_once(CLASSES . "Router.php");

require_once(CLASSES . "Controller.php");
require_once(CLASSES . "Model.php");
require_once(CLASSES . "View.php");

require_once("src/models/helpers/lib/database.php");
// require_once("src/controllers/EmployeeController.php");
 require_once(CONTROLLERS . "SessionController.php");
// require_once("src/controllers/LoginController.php");


$router = new Router();
