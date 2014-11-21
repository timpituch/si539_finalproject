<header>

<nav class="navbar navbar-default navbar-static-top" role="navigation"> 
<div class="container">	
		 <div class="navbar-header">
			<a href="index.php" class="navbar-brand"> Mandi Gonzalez </a>
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
			} ?>><a href="index.php"> HOME </a></li>
			<li <?php 
				if (basename($_SERVER["REQUEST_URI"]) == "portfolio.php")
					{echo "class = \"active\"";}
				else if (basename($_SERVER["REQUEST_URI"]) == "lifetimelibrary.php")
					{echo "class = \"active\"";}
				else if (basename($_SERVER["REQUEST_URI"]) == "design_jams.php")
					{echo "class = \"active\"";}
				else if (basename($_SERVER["REQUEST_URI"]) == "chi2015.php")
					{echo "class = \"active\"";}
				?>><a href="portfolio.php"> PORTFOLIO </a></li>
			<li <?php 
				if (basename($_SERVER["REQUEST_URI"]) == "about.php"){
				echo "class = \"active\"";
			} ?>><a href="about.php"> ABOUT </a></li>
			<li <?php 
				if (basename($_SERVER["REQUEST_URI"]) == "resume.php"){
				echo "class = \"active\"";
			} ?>><a href="resume.php"> RESUME </a></li>
		  </ul>
		 </div>	
</div>		
</nav> 
</header>
