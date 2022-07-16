<?php
include("db.php");
$location="image/";


$img1=$_FILES["img1"]["name"];
$img1_temp["img1"]["tmp_name"];

$img2=$_FILES["img2"]["name"];
$img1_temp["img3"]["tmp_name"];

$img3=$_FILES["img3"]["name"];
$img1_temp["img3"]["tmp_name"];

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

}







?>