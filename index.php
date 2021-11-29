<!-- TODO Application entry point. Login view -->
<?php

require_once("./lib/database.php");
require_once("./lib/classes/Controller.php");
require_once("./lib/classes/Model.php");
require_once("./lib/classes/Router.php");
require_once("./lib/classes/Session.php");
require_once("./controllers/SessionController.php");


$router = new Router();
