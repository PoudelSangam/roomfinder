<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ROOM FINDER</title>
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
    <link rel="stylesheet" type="text/css" href="style1.css"/>
    <link rel="icon" href="../HTML CODES/Untitled design.png" />
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

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; font-color:red;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">SignIn</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="signup.php">SignUp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php #contacts">Contact Us</a>
            </li>
    
            <li class="nav-item">
              <a class="nav-link active" href="index.php #help"> Help </a>
            </li>
       
          </ul>
        </div>
      </div>
    </nav>
    <center>
    <div class="container-fluid" style="margin-top: 5%" back>
    
      <div class="form justify-content-center">
        <form action="landing page.html">
          <h6> Enter email and password</h6>
          <div class = "form-content">
          <div class="form-floating">
            
            <input
              type="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="name@email.com"
              style="width: 300px; height: 60px;"
            />
            <label for="exampleInputEmail1" class="form-label" style="margin-left:40px"
              >Email address</label
            >
          
          </div>
          <div class="form-floating">
          
           
            <input
              type="password"
              class="form-control"
              style="width: 300px; height: 60px;"
              id="exampleInputPassword1"
              placeholder="Password"
            />
            <label for="exampleInputPassword1" class="form-label" style="margin-left:40px"
            >Password</label
          >
          </div >
       
          <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div></center>
    
  </body>
</html>
