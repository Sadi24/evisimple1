<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
<!--   animate css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
/>
<!--   external css-->
   <link rel="stylesheet" href="css/style1.css">
   <link rel="icon" href="images/pencil-icon.png">

    <title>Evisimple</title>
       
</head>
<body>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar fixed-top">
    <a class="navbar-brand" href="index.html">EviSimple</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-toggle="collapse">
        <i class="fas fa-bars navbar-toggler-icon icon"></i>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="#Services">Services<span class="sr-only">(current)</span></a>
            </li>
        <li class="nav-item">
        <a class="nav-link" href="#AboutUs">About</a>
        </li>
       
            <li class="nav-item">
                <a class="nav-link" href="#ContactUs">Contact Us</a>
            </li>
            <li class="nav-item">
            <button type="submit" onClick="parent.location='index.php' " class="btn btn-outline-secondary a">Sign Up</button></li>
        </ul>
    </div>
</nav> 
</div>
       
<!-- end navbar-->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
   
    <div class="login-form animate__animated animate__zoomIn">
    <form action="includes/signup.inc.php" method="post">
        <h2 class="text-center">Sign Up</h2>		
		<div class="or-seperator text-primary"> <strong>Free Package Plan</strong> </div>
        <div class="form-group">
        	<div class="input-group">                
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
           
            </div>
        </div>  
         <div class="form-group">
        	<div class="input-group">                
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
             
                <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
            </div>
        </div>        <div class="form-group">
        	<div class="input-group">                
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-envelope"></span>
                    </span>                    
                </div>
             
                <input type="text" class="form-control" name="email" placeholder="Email" required="required">
            </div>
        </div>
		<!-- <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>         -->
        <div class="form-group">
            <button  type="submit" name="submit"  class="btn btn-success btn-block login-btn">SIGN UP</button>
        </div>
        <?php  if (isset($_GET["error"])) {
     if ($_GET["error"]== "emptyinput") {
        echo '<p class="text-center text-danger text-uppercase">Fill in all feild!</p>';
     }
     elseif ($_GET["error"]== "invalidemail") {
        echo '<p class="text-center text-danger text-uppercase">choose a proper email!</p>';
     }
     elseif ($_GET["error"]== "stmtfailed") {
        echo '<p class="text-center text-danger text-uppercase">Something went wrong,try again!</p>';
     }
     elseif ($_GET["error"]== "none") {
        echo '<p class="text-center text-success text-uppercase">you already signed up!</p>';
     }
   
 }
 ?>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="login.php" class="float-right text-success">LOG IN?</a>
        </div>  
    </form>
</div>
</div>
   
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/bootnavbar.js" ></script>
    <script src="js/script.js"></script>

 