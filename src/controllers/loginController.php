<?php

require_once("src/classes/Controller.php");
require_once("src/classes/Model.php");
require_once("src/classes/View.php");

class LoginController extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->loadModel("Login");
    }

    function render()
    {
        $this->view->loadLayout("Login");
    }

    function authUser()
    {
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        echo $email;
        $this->model->verifyUser($email, $pass);
    }
}
