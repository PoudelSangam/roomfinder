<?php
$name=$_POST["name"];
$phonenumber=$_POST["phonenumber"];
$address=$_POST["address"];
$r_email=$_POST["email"];
$password=$_POST["password"];

$sql="insert into renter(name,phonenumber,address,r_email,password)
values('$name','$phonenumber','$address','$r_email','$password')";
mysqli_query($conn,$sql);

?>