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
	<div class="container">
	<h1>Contact us</h1>
	<h2>Want to chat? Shoot us a message!</h2>
	<div class="form">
	<form name="contactform" method="post" action="contact_email.php">
 
	<table>
 
		<tr>
 
 			<td valign="top">
 
  				<label for="first_name">First Name *</label>
 
 			</td>
 
 			<td valign="top">
 
  				<input  type="text" name="first_name" maxlength="50" size="30">
 
 			</td>
 
		</tr>
 
		<tr>
 
 			<td valign="top">
 
  				<label for="last_name">Last Name *</label>
 
 			</td>
 
 			<td valign="top">
 
 				 <input  type="text" name="last_name" maxlength="50" size="30">
 
 			</td>
 
		</tr>
 
		<tr>
 
 			<td valign="top">
 
 				<label for="email">Email Address *</label>
 
 			</td>
 
 			<td valign="top">
 
  				<input  type="text" name="email" maxlength="80" size="30">
 
 			</td>
 
		</tr>
 
		<tr>
 
 			<td valign="top">
 
  				<label for="telephone">Telephone Number</label>
 
 			</td>
 
 			<td valign="top">
 
  				<input  type="text" name="telephone" maxlength="30" size="30">
 
 			</td>
 
		</tr>
 
		<tr>
 
 			<td valign="top">
 
  				<label for="comments">Comments *</label>
 	
 			</td>
 
 			<td valign="top">
 
  				<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 			</td>
 
		</tr>
 
		<tr>
 
 			<td colspan="2" style="text-align:center">
 
  				<input type="submit" value="Submit">   
 
 			</td>
 
		</tr>
 
	</table>
 
	</form>
	</div>
	</div>

<?php include("footer.php"); ?>

</body>
</html>