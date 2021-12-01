<?php

class EmployeeController extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->loadModel("Employee");
    }

    function render()
    {
        $this->view->loadLayout("Dashboard");
    }
}
