<?php
include("db.php");
//include("r_session.php");

if(isset($_POST["login"]))
{
$title=$_POST["title"];
$no_room=$_POST["roomnumber"];
$price=$_POST["price"];
$location=$_POST["location"];
$facility=$_POST["facility"];
$details=$_POST["details"];
// $r_email=$_SESSION["r_email"];


$sql="insert into product(title,no_room,price,location,facility,details)
values('$title','$no_room','$price','$location','$facility','$details')";
$result=mysqli_query($conn,$sql);
if($result)
{
    $location="image/";
    $id=mysqli_insert_id($conn);


$img1=$_FILES["img1"]["name"];
$img1_temp=$_FILES["img1"]["tmp_name"];

// $img2=$_FILES["img2"]["name"];
// $img2_temp["img3"]["tmp_name"];

// $img3=$_FILES["img3"]["name"];
// $img3_temp["img3"]["tmp_name"];

// $extension1=end(explode(".",$img1));
// $extension2=tolower(end(explode(".",$img2)));
// $extension2=tolower(end(explode(".",$img3)));
// $extension= array("jpg","png","jpeg");

// if(in_array($extension1,$extension && in_array($extension2,$extension) && in_array($extension3,$extension)))
// {
    $foldeer=$location.$img1;
    // $foldeer1=$location.$img2;
    // $foldeer2=$location.$img3;

    $sql="insert into images(img1,img2,img3,id,r_email)
    values('$foldeer','$foldeer','$foldeer','$id','asangampoudel@gmail.com')";
    mysqli_query($conn,$sql);

    move_uploaded_file($img1_temp,$foldeer);
   
// }
}








}







?>