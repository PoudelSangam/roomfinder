<?php
session_start();

    if(!isset($_SESSION["v_email"]))
    {

        header("location:login.php");
    }


?>