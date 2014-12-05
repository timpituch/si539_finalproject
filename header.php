<header>

<nav class="navbar navbar-default navbar-static-top" role="navigation"> 
<div class="container">	
		 <div class="navbar-header">
			<a href="index.php" class="navbar-brand"> Los Graduados </a>
			<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse" value="menu_button">
				<span class="bruh">	Menu Button </span>
				<span class="icon-bar"> </span> 
				<span class="icon-bar"> </span>
				<span class="icon-bar"> </span>
			</button>
		 </div>
		<div class="collapse navbar-collapse navHeaderCollapse">
		  <ul class="nav navbar-nav navbar-right">
			<li <?php 
				if (basename($_SERVER["REQUEST_URI"]) == "index.php"){
				echo "class = \"active\"";
			} ?>><a href="index.php"> Home </a></li>
			<li <?php 
				if (basename($_SERVER["REQUEST_URI"]) == "about.php")
					{echo "class = \"active\"";
			}
				?>><a href="about.php"> About </a></li>
			<li <?php 
				if (basename($_SERVER["REQUEST_URI"]) == "resources.php")
					{echo "class = \"active\"";
			}
				?>><a href="resources.php"> Resources </a></li>
			<li <?php 
				if (basename($_SERVER["REQUEST_URI"]) == "register.php"){
				echo "class = \"active\"";
			} ?>><a href="register.php"> Register </a></li>
			<li <?php 
				if (basename($_SERVER["REQUEST_URI"]) == "contact.php"){
				echo "class = \"active\"";
			} ?>><a href="contact.php"> Contact </a></li>
		  </ul>
		 </div>	
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>

</nav> 
</header>
