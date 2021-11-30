<?php

require_once("src/classes/Controller.php");
require_once("src/classes/Model.php");
require_once("src/classes/View.php");


class SessionController extends Controller
{

    function checkSession()
    {
        if (!isset($_SESSION["email"])) {
            echo "Session not set";
            $this->view->loadLayout("Login");
        } else {
            echo "it is set";
        }
    }
}
