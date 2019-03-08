<?php

trait AuthTrait
{
    function checkAuth()
    {
        if(!isset($_SESSION['auth'])||$_SESSION['auth']==null)
        {
            header("Location:./");
        }
        return $this;
    }
}