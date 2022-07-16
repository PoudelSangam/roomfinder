
<?php
include("r_login_process_ajax.php");


?>
<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/css.css"> -->
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

	<main>
		<div class="container"> 

 		<h2 class="lgn"> login </h2>

 	
 	<div class="justify-content-center">
 		<div class="col-lg-6" id="signup">
 			<center>
 			<form id="form" method="POST">
 			<div class="form-floating">	
 				<input type="email" name="email" id ="email" value="" class="form-control" height="10px">
 				<label class="form-label">Email: </label>
                <div id="v_emailErr"></div>
 			</div>


 			<div class="form-floating">
 				<input type="password"  name= "v_password" class="form-control" id="password" placeholder="Confirm Password">
 				<label for="Password" class="form-label">password  </label>
                 <div id="passwordErr"></div>
 			</div>


 				
 				<div class="text-center">
 					<button type="submit" name="Login" id="Login" class="btn btn-primary">Submit</button>
 				</div>
 			</div>
 				
 			</form>
 		</center>
 		</div>
 	</div>
 </div>
	</main>

	<footer>
		
	</footer>



</body>
</html>

