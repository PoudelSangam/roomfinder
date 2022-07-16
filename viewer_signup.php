

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">  -->
</head>
<body>



<header>
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#"></a>
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

 		<h2 class="lgn"> SignUp </h2>

 	
 	<div class="justify-content-center">
 		<div class="col-lg-6" id="signup">
 			<center>
 			<form id="form" method="POST" action="#">
 			<div class="form-floating">	
 				<input type="email" name="email" id ="v_email" value="" class="form-control" height="10px">
 				<label class="form-label">Email: </label>
                <div id="v_emailErr"></div>
 			</div>

 			<div class="form-floating">
 				<input type="name" id = "name" class="form-control" name ="name" placeholder="James Charles">
 				<label for="FullName" class="form-label"> Name: </label>
                 <div id="nameErr"></div>
 			</div>

 			 			<div class="form-floating">
 				<input type="text"  class="form-control" name ="phonenumber" placeholder="Your Phone no">
 				<label for="number" class="form-label"> Your Phone Number </label>
                 <div id="phonenumberErr"></div>
 			</div>

 			<div class="form-floating">
 				<input type="text" class = "form-control"  name="address" placeholder="Your address">
 				<label for="address" class="form-label"> Your address </label>
                 <div id="addressErr"></div>
 			</div>

 			<div class="form-floating">
 				<input type="password"  name = "password" class="form-control" placeholder="Password" >
 				<label for="Password" class="form-label"> Password</label>
                 <div id="passwordErr"></div>
 			</div>

 			<div class="form-floating">
 				<input type="password"  name= "v_password" class="form-control" placeholder="Confirm Password">
 				<label for="Password" class="form-label">Confirm your password  </label>
                 <div id="passwordErr"></div>
 			</div>


 				
 				<div class="text-center">
 					<button type="submit" name="Login" class="btn btn-primary">Submit</button>
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


<?php
include("db.php");
function printerror($id,$msg)
{
    ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(elemId).html(error);
    </script>
<?php
}
if(isset($_POST["Login"]))
{
$name=$_POST["name"];
$phonenumber=$_POST["phonenumber"];
$address=$_POST["address"];
$v_email=$_POST["email"];
$password=$_POST["password"];

if(empty($name) || empty($phonenumber)|| empty($address) || empty($v_email) ||empty($password) )
{
    echo "field are empty";
}
else{

$sql="insert into viewer(name,phonenumber,address,v_email,password)
values('$name','$phonenumber','$address','$v_email','$password')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "success";
   
}
else
{
    echo "error";
}
}
}

?>