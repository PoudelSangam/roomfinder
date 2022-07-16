<?php
session_start();

    if(!isset($_SESSION["r_email"]))
    {

        header("location:login.php");
    }


?>