<!DOCTYPE html>
<html>
<head>
	<title>Stream Jungle - Home</title>
	<link href="css/main.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php include_once("analyticstracking.php") ?>

<div class="nav navbar-inverse navbar-fixed-top">
	<div class="container">

		<a href="home.php" class="navbar-brand">STREAM JUNGLE.com</a>

		<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<div  class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="false"></span></a></li>
				<li><a id="bygames" href="games.php">Streams by Games</a></li>
				<li><a href="contactform.php">Contact</a></li>


			</ul>
		</div>
	</div>
</div>


<div class="container">
	<div class="jumbotron" style="margin-bottom: 0px;">



		<h2 class="homejumboh">
			Finding <span style="color: #9C0000; font-size: 100px;">&#9679;</span><span style="color: black; font-size: 65px;">LIVE</span> streams perfect for you, made so easy.
		</h2>

		<p>Join the hundred million monthly users of <span style="color: purple;">Twitch.tv</span> world wide, but <strong>BETTER!</strong><br>Yes... Yes, you heard that correct. You can experience <span style="color: purple;">Twitch.tv</span> live streams even better through <span style="color: #9C0000;">Streamjungle.com</span>.<br><br><a href="games.php" class="btn btn-danger">WATCH NOW</a><br><span style="font-size: 15px;">It is completely free!</span></p>

	</div>
</div>

<div class="container">
	<div class="jumbotron" style="margin-top: 5px; background-color: #C95F5F !important;">
		<p class="testi">We currently support 6 major games,<br><strong>League of Legends, Dota 2, Counter-Strike: Global Offensive, Hearthstone, World of Warcraft and Minecraft.</strong><br style="margin-top: 2px;"><span style="font-size: 15px;">Click below to watch which one your prefer! We OFCOURSE will add more games to our service, remember we are in early stages!<br>Or you can try to convince us to add your favorite game by using our contact form.</span><br><a href="games.php" class="btn btn-default">CHOOSE GAME AND WATCH</a><span style="color: #C95F5F;">...</span><a href="contactform.php" class="btn btn-default">CONTACT US</a></p>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4 services">
			<h3>Categories</h3>
			<p>Find your favorite streams through an easy to use category system. Select your game, and your pleased category and Streamjungle will show what you're looking for immediately. Even the average Teemo player can do this. ;)</p>
			<a href="games.php" class="btn btn-danger" id="servicebtn1">Choose categories now</a>
		</div>
		<div class="col-md-4 services">
			<h3>Twitch</h3>
			<p>We currently support Twitch.tv streams only. We chose this platform over others simply because it's the most popular. In the future we will implement other platforms such as Youtube and Azubu, please remember we are in early stages of our website.</p>
			<a href="games.php" class="btn btn-danger" id="servicebtn2">Watch Twitch Streams</a>
		</div>
		<div class="col-md-4 services">
			<h3>Insanely Easy</h3>
			<p>Streamjungle is super easy to use. Let's say, you want to watch a Diamond rank League of Legends player, who mostly plays in the jungle and is a girl. Well, you can.. in 5 clicks from this page. Correct, FIVE clicks. Click below, select your game, click these 3 categories, that's 5 clicks.</p>
			<a href="games.php" class="btn btn-danger" id="servicebtn3">Try the ease now</a>
		</div>
	</div>
</div>







	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h5>STREAM JUNGLE</h5>
					<p class="fade-gray">Streamjungle.com is a gaming related website, maintained by two developers, who watch streams a LOT and created this website for that reason, I guess.</p>
				</div>

				<div class="col-md-3">
					<h5>FUTURE | TO-DO LIST</h5>
					<p class="fade-gray">Adding categories to most streams is our number 1 goal at the moment! Adding other games is our next priority.</p>
				</div>

				<div class="col-md-3" id="otherlinks">
					<h5>LINKS</h5>
					<ul>
						<li><a href="#" style="color: white; text-decoration: none;">Contact</a></li>
						<li><a href="tos.php" style="color: white; text-decoration: none;">Terms of Service</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container-fluid dark-style" id="footerfooter">
			<div style="text-align: center;" class="addthis_sharing_toolbox"></div>
			<div class="container fade-gray" style="text-align: center;">
				<p>We are an independent site, not affiliated or endorsed by any game or company.</p>
				<p>&copy; 2015 StreamJungle</p>
			</div>
		</div>
	</footer>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="js/app.js"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55dc75f90fcfa72f" async="async"></script>


</body>
</html>
