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

</head>
<body>
	<?php $fname = basename(__FILE__); ?> 
	<?php include("header.php"); ?>

	<div class="jumbotron">
		<div class="container">
			<h1>Los Graduados</h1>
			<p>A community of Latino graduate students at the University of Michigan.</p>
		</div>
	</div>
	
	<!-- Section #1 -->
	<section id="intro" data-speed="6" data-type="background">
		<div class="container">
				<div class="span4 well">
		          <h2>Who are we? </h2>
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
		          <p> Our officers & Members range from biomedical engineering undergradute majors to english and psychology graduate students. 
				  Use the membership registration form to apply to be an officer for next year, in addition to becoming a member of our student organization.
				  Officers are elected on an academic yearly basis. 
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
		        </div> 
	    	</div>
	    </div>
	</section>
	
	<?php include("footer.php"); ?>
</body>
</html>