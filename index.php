<!-- TODO Application entry point. Login view -->
<?php

require_once("./lib/classes/Controller.php");
require_once("./lib/database.php");
require_once("./lib/classes/Model.php");

include("./controllers/SessionController.php");
include("./lib/classes/Router.php");
include("./controllers/loginController.php");


$router = new Router();
