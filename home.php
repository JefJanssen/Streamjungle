<!DOCTYPE html>
<html>
<head>
	<title>Stream Jungle - Home</title>
	<link href="css/main.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Contact | Feedback</a></li>
					</ul>
				</li>


			</ul>
		</div>
	</div>
</div>


<div class="container">
	<div class="jumbotron">

		<div id="myCarousel" class="carousel slide alignright" data-ride="carousel">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="http://art-of-lol.com/wp-content/uploads/2015/07/Jinx-League-Of-Legends-Wallpaper-HD-1920x1080-3.jpg" alt="League Of Legends">
		    </div>

		    <div class="item" id="heightlimitpls">
		      <img src="http://images6.alphacoders.com/488/thumb-350-488291.jpg" alt="Dota 2">
		    </div>

		    <div class="item">
		      <img src="http://global-offensive.com/wp-content/uploads/sites/8/2014/02/1359230.jpg" alt="CS:GO">
		    </div>

		    <div class="item">
		      <img src="http://img07.deviantart.net/63ba/i/2013/134/1/c/minecraft_wallpaper_by_stevie10-d659xhq.jpg" alt="Minecraft">
		    </div>
		  </div>
	  	</div>

		<h1 class="homejumboh">
			Stream Jungle
		</h1>

		<p class="homejumbop">
			Finding streams perfect for you, made so easy.
		</p>
	</div>
</div>

<div class="container">
	<div class="row" id="infor">
		<div class="col-md-9">
			<div class="offers">
				<h4 style="margin:0px;">What Do We Offer</h4>
			</div>

			<div class="infotitle">
				<h2 style="margin:0px;">Categorized Gaming Streams</h2>
			</div>

			<div class="offertext padding-10">
				<h3>Streams in a wide variety of categories.. Pretty much.</h3>
				<p>Have you ever wandered around a streaming service like TWITCH.TV, and just wanted to find a streamer of a specific sort? Like, a high ranked player, an international tournament or just a.. girl? <strong>Then this is THE website for you!</strong></p>
				<p>You can sort your favorite streams in these MAIN categories:
					<ul>
						<li>Ranking</li>
						<li>Language</li>
						<li>Characteristics: e.g. Girl, Funny, Serious, Tournament...</li>
					</ul>
					Also, you can sort your streams in other categories, depending on which game your playing. e.g. League Of Legends has 'Mid Lane' as category.
				</p>
				<p>These categories are seen as tags for the streamer, everyone, including you, can recommend tags for a specific streamer, and if we approve, this tag will be added to this streamer on our website!</p>
			</div>

		</div>

		<div class="col-md-3">
			<div class="offers">
				<h4 style="margin:0px;">Extra</h4>
			</div>

			<div class="infotitle2">
				<h2 style="margin:0px;">Games We Support</h2>
			</div>

			<div class="offertext padding-10">
				<ul class="greencheck"><strong>
					<li>League Of Legends <div class="alignright">&check;</div></li>
					<li>Dota 2 <div class="alignright">&check;</div></li>
					<li>Counter-Strike: GO <div class="alignright">&check;</div></li>
					<li>Hearthstone <div class="alignright">&check;</div></li>
					<li>World of Warcraft <div class="alignright">&check;</div></li>
					<li>Minecraft <div class="alignright">&check;</div></li>
				</strong></ul>
			</div>
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
					<p class="fade-gray">Empty</p>
				</div>

				<div class="col-md-3" id="otherlinks">
					<h5>LINKS</h5>
					<ul>
						<li><a href="#" style="color: white; text-decoration: none;">Contact</a></li>
						<li><a href="#" style="color: white; text-decoration: none;">Privacy Policy</a></li>
						<li><a href="#" style="color: white; text-decoration: none;">Terms of Service</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container-fluid dark-style" id="footerfooter">
			<div class="container fade-gray" style="text-align: center;">
				<p>We are an independent site, not affiliated or endorsed by any game or company.</p>
				<p>&copy; 2015 StreamJungle</p>
			</div>
		</div>
	</footer>




</body>
</html>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript">
$(document).ready(function () {
		$('.carousel').carousel({
				interval: 3000
		});

		$('.carousel').carousel('cycle');

});
</script>
