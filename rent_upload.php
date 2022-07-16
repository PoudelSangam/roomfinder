<?php
include("db.php");
include("r_session.php");
$title=$_POST["title"];
$no_room=$_POST["roomnumber"];
$price=$_POST["price"];
$location=$_POST["location"];
$facility=$_POST["facility"];
$details=$_POST["details"];
$r_email=$_SESSION["r_email"];


$sql="insert into product(title,no_room,price,location,facility,details)
values('$title','$no_room','$price','$location','$facility','$details')";
$result=mysqli_query($conn,$sql);
if($result)
{
    $location="image/";
    $id=mysqli_insert_id($result);


$img1=$_FILES["img1"]["name"];
$img1_temp["img1"]["tmp_name"];

$img2=$_FILES["img2"]["name"];
$img2_temp["img3"]["tmp_name"];

$img3=$_FILES["img3"]["name"];
$img3_temp["img3"]["tmp_name"];

$extension1=tolower(end(explode(".",$img1)));
$extension2=tolower(end(explode(".",$img2)));
$extension2=tolower(end(explode(".",$img3)));
$extension= array("jpg","png","jpeg");

if(in_array($extension1,$extension && in_array($extension2,$extension) && in_array($extension3,$extension)))
{
    $foldeer=$location.$img1;
    $foldeer1=$location.$img2;
    $foldeer2=$location.$img3;

    $sql="insert into image(img1,img2,img3,id,r_email)
    value('$foldeer','$foldeer1','$foldeer2','$id','$r_email')";
    mysqli_query($conn,$sql);

    move_uploaded_file($foldeer,$img1_temp);
    move_uploaded_file($foldeer1,$img2_temp);
    move_uploaded_file($foldeer2,$img3_temp);

}








}







?>