<?php
$documentRoot = getcwd();

//BASE PATH -> FOR REFERENCE FILES
define("BASE_PATH", $documentRoot);

//BASE URL -> FOR LINK CSS
$uri = $_SERVER['REQUEST_URI'];

if (isset($uri) && $uri !== null) {
    $uri = substr($uri, 1);
    $uri = explode('/', $uri);

    if ($uri[2] == NULL) {
        $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0] . "/" . $uri[1];
    } elseif ($uri[2]) {
        $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0] . "/" . $uri[1] . "/" . $uri[2];
    } else {
        $uri = null;
    }
}

define("BASE_URL", $uri);
