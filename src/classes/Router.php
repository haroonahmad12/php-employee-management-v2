<?php

class Router
{
    public function __construct()
    {
        $session = new SessionController();
        $session->checkSession();


        $url = isset($_GET['url']) ? $_GET['url'] : null;

        

        $url = rtrim($url, '/');
        $url = explode('/', $url);



        $controller_file =  CONTROLLERS . "$url[0]" . ".php";
        $controller = $url[0];

        //$errorController = new ErrorController;
        //After instanciate the controller we check if the user is logged in
        // $session = new SessionController();
        // $session->checkSession();

        if (file_exists($controller_file)) {
            require_once $controller_file;
            $controller = new $controller;

            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    if (isset($url[2])) {
                        $controller->{$url[1]}($url[2]);
                    } else {
                        $controller->{$url[1]}();
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
