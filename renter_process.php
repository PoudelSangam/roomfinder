<?php
$name=$_POST["name"];
$phonenumber=$_POST["phonenumber"];
$address=$_POST["address"];
$v_email=$_POST["v_email"];
$password=$_POST["password"];

$sql="insert into renter(name,phonenumber,address,v_email,password)
values('$name','$phonenumber','$address','$v_email','$password')";
mysqli_query($conn,$sql);

?>