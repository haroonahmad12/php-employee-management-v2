<?php
require_once("src/controllers/SessionController.php");
require_once("src/controllers/LoginController.php");
require_once("src/controllers/EmployeeController.php");

class Router
{
    public function __construct()
    {
        $session = new SessionController();
        $session->checkSession();


        $url = isset($_GET['url']) ? $_GET['url'] : null;

        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $controller_file =  CONTROLLERS . "$url[2]" . ".php";
        $controller = $url[2];

        //$errorController = new ErrorController;
        //After instanciate the controller we check if the user is logged in
        // $session = new SessionController();
        // $session->checkSession();

        if (file_exists($controller_file)) {
            require_once $controller_file;
            $controller = new $controller;

            if (isset($url[3])) {
                if (method_exists($controller, $url[3])) {
                    if (isset($url[4])) {
                        $controller->{$url[3]}($url[4]);
                    } else {
                        $controller->{$url[3]}();
                    }
                } else {
                    // $errorController->showError("This action doesn't exist");
                }
            }
        } else {
            // $errorController->showError("This page doesn't exist");
        }
    }
}
