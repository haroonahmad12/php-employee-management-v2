<?php

class SessionController extends Session
{

    function __construct()
    {
        parent::checkSession();
    }
}
