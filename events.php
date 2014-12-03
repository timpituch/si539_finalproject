<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Los Graduados - Events </title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<meta name ="viewport" content="width=device-width, initial-scale=1">
	<style>
	#portfolio { width:100%; margin:20px 0px; }
.tile { float:left; height:150px; width:20%; border:1px #fff solid; }
.tile:hover { opacity: 0.5; }
.intern { background:#FCDC3B;}
.funding { background: #CC3232;}
.org { background: #FF7722; }
p{ text-align:center; padding:10px; text-decoration: none; font-family: Arial; text-transform:uppercase; font-size: 12px; color: #333; display:block; float:left;}
p:hover { cursor:pointer; }
.filter_nav{ text-align:center;}
</style>
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
		<h1> Events </h1>	
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae vulputate mauris. Vivamus enim risus, eleifend at cursus non, consectetur vitae enim. Fusce condimentum interdum quam, quis consectetur dui mattis ut. Sed venenatis interdum condimentum. Nunc facilisis pellentesque mi, ac imperdiet ante interdum at. Curabitur quis ligula ex. Vivamus at tellus ut magna viverra pharetra ac non ex. Vestibulum feugiat nulla odio, in scelerisque nisl consequat sodales. Fusce rhoncus dictum lectus, id rhoncus quam commodo sit amet. Vestibulum sodales eros vitae maximus rutrum. Fusce nec iaculis magna, id semper purus.</p>
		<p>Etiam cursus ornare velit. Sed luctus justo orci, quis ornare tellus placerat faucibus. Suspendisse ac facilisis neque. Morbi ut pretium nibh, ut pellentesque nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi bibendum, justo eu auctor sollicitudin, magna turpis interdum erat, quis consectetur risus arcu nec felis. Nulla facilisi. Praesent faucibus rhoncus aliquam.</p>
	</div>
	
	
<div class="filter_nav">
<p href="" data-rel="all">All</p>
<p data-rel="intern"> Internships </p>
<p data-rel="funding">Funding</p>
<p data-rel="org">  Other Organizations </p>
</div>
<div class="container">
<div style="clear:both;"></div>

<div id="portfolio">
  <a href="www.hacu.com"><div class="tile intern all">
  <p> Hispanic Association for Colleges & Universities </p>
  </div></a>
  
  <a href="www.hsf.net"><div class="tile funding all">
  <p> Hispanic Scholarship Fund </p>
  </div></a>
  
  <a href="http://www.chci.org/scholarships/"><div class="tile org all">
   <p> Hispanic Congressional Caucus </p>
  </div></a>
  
  <a href="http://latinojustice.org/about/staff/internships/" alt="latinojustice"> <div class="tile intern all">
   <p> Latino Justice </p> 
  </div> </a>
  
  <a href="http://www.umich.edu/~lavoz/" alt="la_voz"><div class="tile org all">
    <p> La Voz </p> 
  </div> </a>
  
  <a href="http://www.oami.umich.edu/programs/lacelebracionlatina.html" alt="latina_program"><div class="tile funding all">
    <p> La Celebracion Latina </p>
  </div></a>
  
  <a href="http://latino.si.edu/education/SLC_internship.htm" alt="smithsonian"><div class="tile intern all">
    <p> Smithsonian Latino Center </p>
  </div></a>

</div>
</div>
	<?php include("footer.php"); ?>
	
<script>
$(function() {
		var selectedClass = "";
		$("p").click(function(){
		selectedClass = $(this).attr("data-rel");
    $("#portfolio").fadeTo(100, 0.1);
		$("#portfolio div").not("."+selectedClass).fadeOut();
    setTimeout(function() {
      $("."+selectedClass).fadeIn();
      $("#portfolio").fadeTo(500, 1);
    }, 500);
		
	});
});
</script>
</body>
</html>