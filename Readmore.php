<?php
include ("db.php");
?>
<?php
$id=$_GET["id"];
$sql="select * from product where id='$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($Data=mysqli_fetch_assoc($result))
{
    ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>read more</title>
  </head>
  <body>
    <div class="row">
        <div class="col-md-6" >
            <div class="img-fluid" style=" margin-top:50px;width: 611px;height: 424px;margin-left: 114px;" ><img     style=" height: inherit;"src="<?php echo $Data["image"]?>">
</div>
</div>
<div class="col-md-4 marginc" style="margin-top:30px;">
    <h1>Address:<?php echo $Data["address"]?> </h1><br>
    <h3>Price:<?php echo $Data["rent"]?></h3><br>
    <h3>Room:<?php echo $Data["roomnumber"]?></h3><br>
    <p><?php echo $Data["details"]?></p>

</div>
</div>












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}
}
?>