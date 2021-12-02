<?php

class SessionController extends Controller
{

    function checkSession()

    {
        if (!isset($_SESSION["email"])) {
            if (!str_contains($_GET["url"], "login/render")) header("Location: login/render");
        } else {
            if (!str_contains($_GET["url"], "employee/show")) header("Location: employee/show");
        }
    }
}
