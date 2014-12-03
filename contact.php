<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Los Graduados - Contact</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<meta name ="viewport" content="width=device-width, initial-scale=1">
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

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<h1>Want to chat?</h1>
				<p>Shoot us a message and we'll get back to you as soon as we can!</p>
			</div>
		</div>
		<form name="contactform" role="form" action="contact_email.php" method="post">
			<div class="row">
				<div class="col-sm-6 col-md-6">
			  		<div class="form-group">
			    		<label for="InputName1">Your Name</label>
			    		<input type="text" name="InputName" class="form-control" id="InputName1" placeholder="Enter name">
			  		</div>
			  	</div>
				<div class="col-sm-6 col-md-6">
			  		<div class="form-group">
			    		<label for="InputEmail1">E-mail</label>
			    		<input type="email" name="InputEmail" class="form-control" id="InputEmail1" placeholder="Enter email">
			  		</div>
			  	</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-sm-12 col-md-12">
			  		<div class="form-group">
			    		<label for="InputMessage">Message</label>
			    		<textarea class="form-control" name="InputMessage" rows="3" id="InputMessage" placeholder="Add your message here."></textarea>
			  		</div>
			  		<div class="checkbox">
			    		<label>
			      		<input type="checkbox"> Sign up for our mailing list.
			    		</label>
			  		</div>
			  		<button type="submit" class="btn btn-default">Submit</button>
		  		</div>
		  	</div>
		</form>
	</div>
<hr class="featurette-divider">

<?php include("footer.php"); ?>

</body>
</html>