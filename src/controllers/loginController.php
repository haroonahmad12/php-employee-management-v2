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

    
}
