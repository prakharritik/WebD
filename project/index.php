<?php
require_once "pdo.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phno'])
    && isset($_POST['subject']) && isset($_POST['message'])) {
    if (strlen($_POST['name']) < 1 || strlen($_POST['email']) < 1 || strlen($_POST['phno']) < 1 || strlen($_POST['subject']) < 1 || strlen($_POST['message'])<1) {
        $make_empty = 'All values are required';
    } elseif (!is_numeric($_POST['phno']) ) {
        $numeric = "Phone number can't have alphabets";
    }
    {
        $stmt = $pdo->prepare('INSERT INTO queries (name, email, phno, subject,message) VALUES ( :name, :email, :phno, :subject,:message)');
        $stmt->execute(array(
                ':name' => $_POST['name'],
                ':email' => $_POST['email'],
                ':phno' => $_POST['phno'],
                ':subject' => $_POST['subject'],
                ':message' => $_POST['message'])
        );
    }}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script >
	function validateForm() {
  var x = document.forms["form1"]["name"].value;
  if (x == "") {
    alert("Please fill your good name");
    return false;
  }
  else if((document.forms["form1"]["subject"].value=="")||(document.forms["form1"]["phno"].value=="")||(document.forms["form1"]["message"].value=="")){
  	alert("Please fill all details");
    return false;
  }
}
  $('.tab').click(function(){
    var a=$(this).attr('id');
    $('#sample').html('Active Tab is'+a);
});
	</script>
</head>
<body>
	<a href="#" class="icon"><i class="fa fa-search"></i></a>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12	col-sm-12	col-md-12	col-lg-2">
				<p class="slider"></p>
				<div class="burger">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
          		<ul class="nav nav-tabs tabs-left sideways">
            		<li class="active row"><a href="#one" data-toggle="tab" id="r1" type='radio' class="tab col-12" id="tab1">About Me</a><p class="un col-12">&nbsp;</p><p id="sliderm"></p> <p class="vertical-text ">Page 01</p></li>
            		<li><a href="#" class="tab" id="tab1">My Work</a></li>
           			<li><a href="#" class="tab" id="tab1">Services</a></li>
           			<li class="row"><a href="#two" data-toggle="tab" type='radio' class="tab" id="tab1">Contact Us</a><p class="un col-12">&nbsp;</p> 
           				<p id="sliderm2"></p><p class="vertical-text2">Page 04</p></li>
          		</ul>
          		
          		 
        	</div>
        	<div class="col-xs-12	col-sm-12	col-md-12	col-lg-9">
          		<div class="tab-content">
            		<div class="tab-pane active tab-1" id="one">
            			
            			
            			<div class="container-fluid">
            			<div class="row">
            			<div class="col-xs-12	col-sm-12	col-md-12	col-lg-5">
            			<img src="./pics/1.jpg" class="image1 content"></div>
            			<div class="col-xs-12	col-sm-12	col-md-12	col-lg-7">
            			<p class="myhead">HI I'M <b>ABCD GAHIJK</b></p>
            			<p class="p2">A <span style="color: #dc2d5f ; font-weight: bold;">UI/UX Designer </span>with skills for mobile and web designing</p>
						<p class="p3">Hi My Name Is Saikat Maiti.I Am Taking My First Step In Ux/Ui World. The First Experience Is Important But Mainly I Really Like Learning. I Am Once Of Type Of People Who Can Find An Opportunity To Get The Knowledge To Each Field of Life Mostly In Ux/Ui Design.</p></div></div></div>
						<div class="buttons row">
							<button class="button1 col-xs-12	col-sm-12	col-md-12	col-lg-3">Contact Me</button>
							<button class="button2 col-xs-12	col-sm-12	col-md-12	col-lg-3">Resume</button>
						</div>
						
					
					</div>
           			<div class="tab-pane tab-4 " id="two">
    			       
            			<img src="./pics/2.jpg" class="im2">
            				<p class="head2">GET IN TOUCH</p>
            				<h2 class="p4">FEEL FREE TO SEND US MESSAGE</h2>
            				<div class="row me">
            					<div class="col-md-6 col-lg-6 col-xs-12	col-sm-12 form">
            						<h2>SEND YOUR QUERY</h2>
							<form method="post"  onsubmit="return validateForm()" name="form1" id="form1">
							<div >
								<label for="name">YOUR NAME</label>
								<input type="text" name="name" class="form-control" placeholder="" id="name">
							</div>
							<div >
								<label for="email">EMAIL ADDRESS</label>
								<input type="email" name="email" class="form-control" placeholder="" id="email">
							</div>
							<div class="colu">
								<label for="phno">PHONE NO.</label>
								<input type="tel" name="phno" class="form-control" placeholder="" id="phno">
							</div>
							<div class="colu">
								<label for="subject">SUBJECT</label>
								<input type="text" name="subject" class="form-control" placeholder="" id="subject">
							</div> 
							<div class="texta">
								<label for="message">MESSAGE</label>
							    <textarea  name="message" class="form-control ta" rows="5" id="message" ></textarea>
							</div>
							<br>
							<button type="submit" form="form1" value="Submit">SEND<span class="glyphicon glyphicon-send"></span></button>

						</form>
						</div>
						<div class="col-md-6 col-lg-6 col-xs-12	col-sm-12 cont">
							<h3>CONTACT INFORMATION</h3>
							<p>12345,abcd</p>
							<p><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;0123-12345<br>&nbsp;&nbsp;0123456789</p>
							<p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;ABCD@GMIL.COM</p>
							<img src="./pics/3.png" class="im3">
						</div>
            		</div>
            		
            	</div>
            </div>
        </div>
       		<div class="col-xs-12	col-sm-12	col-md-6	col-lg-1">
       			<div class="sidenav row">
					<a href="#" class="fa fa-behance col-xs-2	col-sm-2 col-md-12	col-lg-12"></a>
					<a href="#" class="fa fa-dribbble col-xs-2	col-sm-2 col-md-12	col-lg-12"></a>
					<a href="#" class="fa fa-instagram col-xs-2 col-sm-2 col-md-12	col-lg-12" ></a>
					<a href="#" class="fa fa-facebook col-xs-2	col-sm-2 col-md-12	col-lg-12"></a>
					<a href="#" class="fa fa-linkedin col-xs-2	col-sm-2 col-md-12	col-lg-12"></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>	