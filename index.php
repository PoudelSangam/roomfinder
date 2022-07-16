<?php
include ("db.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <header>
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Carousel</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?Search='1'">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="viewer_signup.php">sign up</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="login.php">login</a>
                              </li>
                            </ul>
                            <form class="d-flex" method="GET" action="#">
                              <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" >
                              <button class="btn btn-outline-success" type="submit" id="Search" >Search</button>
                            </form>
                          </div>
                        </div>
                      </nav>
                   </div>
               </div>
           </div>
        </header>

 
  <?php
  if($_GET["search"]=="" || $_GET["Search"]=="1")
  {
    $sql1="select * from product";
    $result=mysqli_query($conn,$sql1);
  }
  else{
    $search=$_GET["search"];
    $sql="select * from product where location like '$search%'";
    $result=mysqli_query($conn,$sql);
  }
   // echo "Hello";
    
    if(mysqli_num_rows($result)>0)
    {
        ?>
        <div class="row" id="hide" style="margin-top:50px;">
        <?php
      while($data=mysqli_fetch_assoc($result))
      {
    ?>
   
        <div class="col-md-3 " style="margin-top:20px; margin-bottom:20px;" >

      <div class="card" style="width: 18rem;">
        <img class="card-img-top img-fluid h-50 w-55" src="<?php echo $data["img1"]?>" alt="Card image cap">
        <div class="card-body">
    <h5 class="card-title"> Price:<?php echo $data["price"]?></h5>
    <p class="card-text text"><?php echo $data["details"]?></p>
    <a href="Readmore.php?id=<?php echo $data["id"];?>" class="btn btn-primary">Read more</a>
  </div>
</div>
</div>
<?php
   }
}
  //}
  else{
echo "No record found";  
}
?>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
  <style>
    .h-50
    {
        height: 200px!important;
    }

    .text {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
   -webkit-box-orient: vertical;
}
  </style>
</html>