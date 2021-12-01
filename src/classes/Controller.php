<?php

class Controller
{

    protected $view;
    protected $model;

    function __construct()
    {
        $this->view = new View;
    }

    function loadModel($name)
    {
        require_once("src/models/{$name}Model.php");

        $name = ucfirst(strtolower($name));
        $model = $name . "Model";

        $this->model = new $model;
    }
}
