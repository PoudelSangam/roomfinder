<?php
include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="icon" href="../HTML CODES/Untitled design.png" />
    <style type="text/css">
      body {
        background-image: url("back 2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      .carousel-item {
        height: 400px;
      }

      .d-block {
        margin-top: -30%;
      }

      footer {
        height: 150px;
        width: 100%;
        margin-top: 10px;
        font-style: italic;
        background-color: #e3f2fd;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
    <header class="header">
      <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Home</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="login_.php"
                  >SignIn</a
                >
              </li>

              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="signup.php"
                  >SignUp</a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="#contacts">Contact Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="#help"> Help? </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
    <?php 
      $sql="select * from product";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
        while($Data=mysqli_fetch_assoc($result))
        {

          $id=$Data["product_id"];
          ?>
      <div
        id="carouselExampleInterval"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1500">
            <img
              src="<?php $sql="select img1 from images where id='$id+2 '";
              $resul=mysqli_query($conn,$sql);
              while($data=mysqli_fetch_assoc($resul))
              {
                echo $data["img1"];

              } ?>"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item" data-bs-interval="1500">
            <img
              src="<?php $sql="select img1 from images where id='$id+3'";
              $resul=mysqli_query($conn,$sql);
              while($data=mysqli_fetch_assoc($resul))
              {
                echo $data["img1"];

              } ?>"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item" data-bs-interval="1500">
            <img
              src="<?php $sql="select img1 from images where id='$id+4'";
              $resul=mysqli_query($conn,$sql);
              while($data=mysqli_fetch_assoc($resul))
              {
                echo $data["img1"];

              } ?>"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br />


     
            
            <div class="card-body">
              <h3 class="card-title"><?php echo $Data["title"];?></h3>
              <p class="card-text">
                Room:<?php echo $Data["no_room"];?>  <br />
                Address: <?php echo $Data["location"];?> <br />
                Pricing: <?php echo $Data["price"];?><br>
                facility:<?php echo $Data["facility"];?>
              </p>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </main>

<?php
  }


}
?>

    <footer style="background-color: #e3f2fd">
      <h5>Our contacts:</h5>
      <a id="contacts"> </a>
      <table class="table table-borderless">
        <tr>
          <th>Email: NIKHIlKC2003@gmail.com</th>
          <th>Phone no: 987699768</th>
          <th>Facebook page: COESIS HackDay</th>
        </tr>
      </table>

      <div class="help">
        <p class="help">
 for any query please <a id = "help" href = "https://www.google.com" class = "link-dark"/> Click here</a>
        </p>
      </div>
    </footer>
  </body>
</html>
