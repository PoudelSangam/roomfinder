<?php
include("db.php");
session_start();got
$r_email=$_POST["r_email"];
$r_password=$_POST["r_password"];

$sql="select * from viewer where email='$r_email' && password='$r_password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    echo "1";
    $_SESSION["r_email"]=$r_email;
}
else{
    echo "invalid email/password";
}





?>