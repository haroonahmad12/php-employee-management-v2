<?php

class ErrorController extends Controller
{

    function showError($msg)
    {
        echo "<h1>$msg</h1>";
    }
}
