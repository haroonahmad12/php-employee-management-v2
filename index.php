<!-- TODO Application entry point. Login view -->
<?php
session_start();

require_once("config/baseConstants.php");
require_once("config/constants.php");
require_once("config/db.php");

require_once("src/classes/Router.php");

require_once("src/classes/Controller.php");
require_once("src/classes/Model.php");
require_once("src/classes/View.php");


require_once("src/models/helpers/lib/database.php");
require_once("src/controllers/EmployeeController.php");
require_once("src/controllers/SessionController.php");
require_once("src/controllers/LoginController.php");


$router = new Router();
