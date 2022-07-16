<?php
include("db.php");
session_start();
$v_email=$_POST["v_email"];
$v_password=$_POST["v_password"];

$sql="select * from viewer where r_email='$v_email' && password='$v_password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    echo "1";
    $_SESSION["v_email"]=$v_email;
}
else{
    echo "invalid email/password";
}





?>