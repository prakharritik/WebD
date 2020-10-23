<?php
require_once "pdo.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>

  <title>welcome to my blogger</title>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2"><a href="index.php"><img src="logo.png" class="logo img-responsive"></a></div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-6"><p class="head1 ">MY BLOGGER</p></div>
      <?php
      if (isset($_SESSION['name'])) {echo'<div class="col-xs-6 col-sm-6 col-md-6 col-lg-2"><a href="logout.php"><button class="button1 ">Logout</button></a></div>';}
         else {echo '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-2"><a href=" login.php"><button class="button1 ">Login</button></a></div><div class="col-xs-6 col-sm-6 col-md-6 col-lg-2"><a href=" register.php"><button class="button1 " >Join us</button></a></div>';}
        ?>
    </div>
  </div>
  </header>  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="blog.php">Read Content<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
      <?php
      if (isset($_SESSION['name']) && $_SESSION['role']==1) {
             echo ' <li class="nav-item">
        <a class="nav-link" href="approve.php">Approve</a>
      </li>';
            }
      ?>
    </ul>
  </div>
</nav>
<img src="j.jpeg">
<div class="textb3">

     <div class="container-fluid ">
  <div class="row pla">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
           Reach out to us so that we can work together to improve our world.<br>
           <span class="glyphicon glyphicon-envelope"></span><a href="mailto:abc@gmail.com">abc@gmail.com</a><br>
       <span class="glyphicon glyphicon-earphone"></span>123456789<br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <span class="h">Address:</span><br>
          Lorem Ipsum<br><br>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <span class="h">Opening Hours</span><br>
                Monday 9:00 am - 6:00 pm<br>
        Tuesday 9:00 am - 6:00 pm<br>
        Wednesday 9:00 am - 6:00 pm<br>
        Thursday 9:00 am - 6:00 pm<br>
        Friday 9:00 am - 6:00 pm<br>
        Saturday-Closed<br>
        </div></div>
      </div>

</div>

</body>
</html> 