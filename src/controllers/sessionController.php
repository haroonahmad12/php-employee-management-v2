<?php

class SessionController extends Controller
{

    function checkSession()

    {
        if (!isset($_SESSION["email"]) && $_GET["url"] !== "login/render") {
            header("Location: " . BASE_URL . "/login/render");
        } else if (isset($_SESSION["email"]) && $_GET["url"] === "login/render") {
            header("Location: " . BASE_URL . "/employee/show");
        }
    }
}
