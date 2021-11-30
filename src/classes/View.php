<?php

class View
{
    function loadLayout($name)
    {
        require_once("src/view/{$name}/index.php");
    }
}
