<?php
//require_once("../lib/classes/Controller.php");


class LoginController extends Controller
{

    protected $username;
    protected $password;


    function authUser($username, $password)
    {
        session_start();

        $username = $_POST["email"];
        $password = $_POST["pass"];


        echo $username, $password;
    }
}
