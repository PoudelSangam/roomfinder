<?php
include("db.php");
if(isset($_POST["Login"]))
{
$name=$_POST["name"];
$phonenumber=$_POST["phonenumber"];
$address=$_POST["address"];
$v_email=$_POST["email"];
$password=$_POST["password"];
if(!empty($name) || !empty($phonenumber)|| !empty($address) || !empty($v_email) ||!empty($password) )
{

$sql="insert into venter(name,phonenumber,address,v_email,password)
values('$name','$phonenumber','$address','$v_email','$password')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "success";
    header("location:viewer_signup.php");
}
else
{
    echo "error";
}
}
}

?>