<?php

require_once("src/classes/Controller.php");
require_once("src/classes/Model.php");
require_once("src/classes/View.php");


class SessionController extends Controller
{

    function checkSession()
    {
        if (!isset($_SESSION["email"])) {
            header("Location: src/controllers/LoginController/render");
        } else {
            header("Location: src/controllers/EmployeeController/render");
        }
    }
}
