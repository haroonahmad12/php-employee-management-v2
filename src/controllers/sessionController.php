<?php

class SessionController extends Controller
{

    function checkSession()

    {
        if (!isset($_SESSION["email"])) {
            if (!str_contains($_GET["url"], "login/render")) header("Location: login/render");
        } 
        
    }
}
