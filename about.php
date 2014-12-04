<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Los Graduados - About </title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<meta name ="viewport" content="width=device-width, initial-scale=1">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/init.js"></script>
	<script src="js/bootstrap.min.js"> </script>
	<style>
	#intro { 
    background: url(img/navy.jpg) 50% 0 fixed; 
    height: auto;  
    margin: 0 auto; 
    width: 100%; 
    position: relative; 
    padding: 100px 0;
}
#home { 
    background: url(img/home.jpg) 50% 0 fixed; 
    height: auto;  
    margin: 0 auto; 
    width: 100%; 
    position: relative; 
    box-shadow: 0 0 50px rgba(0,0,0,0.8);
    padding: 200px 0;
}
#about { 
    background: url(img/wood.jpg) 50% 0 fixed; 
    height: auto;
    margin: 0 auto; 
    width: 100%; 
    position: relative; 
    box-shadow: 0 0 50px rgba(0,0,0,0.8);
    padding: 100px 0;
    color: #fff;
}
</style>
</head>
<body>
	<?php $fname = basename(__FILE__); ?> 
	<?php include("header.php"); ?>

<div class="page-header" style="text-align:center">
			<h1> About The Organization </h1>
		</div>
	<!-- Section #1 -->

	<section id="intro" data-speed="6" data-type="background">
		<div class="container">
				<div class="span4 well">
				<h1>About Us</h1>
		        <p> Los Graduados is a new pan-Latino cultural group for graduate students at the University of Michigan.  
				The organization provides the opportunity for graduate students to connect with their peers in other graduate programs over food, drinks, conversation and action.  
				Board members and special guests facilitate discussion on topics important to the Latino community and encourage personal and professional development through peer to peer education.
				</p>
				<img src="img/hispanic.jpg" alt="hispanics" width="100%"/>
		        </div> 
	    </div>
	</section>

	<!-- Section #2 -->
	<section id="home" data-speed="4" data-type="background">
		<div class="container">
			<div class="row-fluid">
		        <div class="span4 well">
		          <h2>Officers & Members</h2>
		          <p> Our officers & members include graduate students ranging from biomedical engineering master degree candidates to english and psychology PhDs. 
				  Use the membership registration form to apply to be an officer for next year, in addition to becoming a member of our student organization.
				  Officers are elected annually for each academic year. 
				  </p>
				  <p><a class="btn btn-success" href="register.php"> Membership Registration &raquo;</a></p>
		        </div> 
	    	</div>
	    </div>
	</section>

	<!-- Section #3 -->
	<section id="about" data-speed="2" data-type="background">
		<div class="container">
			<div class="page-header">
				<h1 style="color:white"> Have Questions?  <small> Don't worry, we don't bite! </small></h1>
			</div>
			<div class="row-fluid">
		        <div class="span4">
		          <h2> Contact Information </h2>
		          <p> Contact us at 546-655-6546 or losgraduados@gmail.com. Feel free to use our contact form as well! 
				  </p>
				   <p><a class="btn btn-success" href="contact.php"> Contact Form &raquo;</a></p>
				  <h2> Our Location </h2>
				  <p> Find us at North Quad on the campus of the University of Michigan. </p>
				  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2951.9009819632183!2d-83.740325!3d42.28063699999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883cae406bf1f7cb%3A0xefd29040373a695a!2sNorth+Quadrangle+Residential+and+Academic+Complex!5e0!3m2!1sen!2sus!4v1417633993792" width="600" height="450" frameborder="0" style="border:0"></iframe>
				</div> 
	    	</div>
	    </div>
	</section>


	<?php include("footer.php"); ?>

</body>
</html>