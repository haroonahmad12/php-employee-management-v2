<?php

require_once("src/classes/Controller.php");
require_once("src/classes/Model.php");
require_once("src/classes/View.php");


class SessionController extends Controller
{

    function __construct()
    {
    }



    function checkSession()
    {
        if (!isset($_SESSION["email"])) {
            header("Location: src/controllers/LoginController/render");
        } else if (isset($_GET["logout"])) {
            header("refresh:5,  view/Login/index.php");
        } else if (isset($_SESSION["wrongLogin"])) {
            $errorMsg =  $_SESSION["wrongLogin"];
            unset($_SESSION);
            session_destroy();
            return ["type" => "danger", "text" => $errorMsg];
        }
    }
}
