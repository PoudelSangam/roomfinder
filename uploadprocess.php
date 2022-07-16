<?php

    $address=$_POST["address"];
    $roomnumber=$_POST["roomnumber"];
    $rent=$_POST["rent"];
    $details=$_POST["details"];

    $imgname=$_FILES["img"]["name"];
    $img_temp=$_FILES["img"]["tmp_name"];

    $folder="images/";
    $folder_name=$folder.$imgname;
   

   $sql="insert into data(address,rent,roomnumber,details,image)
   value('$address','$rent','$roomnumber','$details','$folder_name')";
   mysqli_query($conn,$sql);
   move_uploaded_file($img_temp,$folder_name);


?>