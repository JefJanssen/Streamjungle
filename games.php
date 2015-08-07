<?
$games1json = file_get_contents("https://api.twitch.tv/kraken/streams?game=league+of+legends");
$games1array = json_decode($games1json);

$games2json = file_get_contents("https://api.twitch.tv/kraken/streams?game=dota+2");
$games2array = json_decode($games2json);

$games3json = file_get_contents("https://api.twitch.tv/kraken/streams?game=counter-strike:+global+offensive");
$games3array = json_decode($games3json);

$games4json = file_get_contents("https://api.twitch.tv/kraken/streams?game=hearthstone:+heroes+of+warcraft");
$games4array = json_decode($games4json);

$games5json = file_get_contents("https://api.twitch.tv/kraken/streams?game=world+of+warcraft");
$games5array = json_decode($games5json);

$games6json = file_get_contents("https://api.twitch.tv/kraken/streams?game=minecraft");
$games6array = json_decode($games6json);
?>


<html>
<head>
	<title>Stream Jungle - Streams by Games</title>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="js/app.js"></script>
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

	<div class="row">
		
		
		<div class="col-md-4 game">
			<div class="gametitle">
				<h4>League Of Legends<p class="alignright" style="margin-right: 5px;"> Viewers: <? echo $games1array->streams[0]->viewers + $games1array->streams[1]->viewers + $games1array->streams[2]->viewers + $games1array->streams[3]->viewers + $games1array->streams[4]->viewers + $games1array->streams[5]->viewers + $games1array->streams[6]->viewers + $games1array->streams[7]->viewers + $games1array->streams[8]->viewers + $games1array->streams[9]->viewers + $games1array->streams[10]->viewers + $games1array->streams[11]->viewers + $games1array->streams[12]->viewers + $games1array->streams[13]->viewers + $games1array->streams[14]->viewers + $games1array->streams[15]->viewers + $games1array->streams[16]->viewers + $games1array->streams[17]->viewers + $games1array->streams[18]->viewers + $games1array->streams[19]->viewers + $games1array->streams[20]->viewers + $games1array->streams[21]->viewers + $games1array->streams[22]->viewers + $games1array->streams[23]->viewers + $games1array->streams[24]->viewers + $games1array->streams[25]->viewers + $games1array->streams[26]->viewers + $games1array->streams[27]->viewers + $games1array->streams[28]->viewers + $games1array->streams[29]->viewers + $games1array->streams[30]->viewers + $games1array->streams[31]->viewers + $games1array->streams[32]->viewers + $games1array->streams[33]->viewers + $games1array->streams[34]->viewers + $games1array->streams[35]->viewers + $games1array->streams[36]->viewers + $games1array->streams[37]->viewers + $games1array->streams[38]->viewers + $games1array->streams[39]->viewers + $games1array->streams[40]->viewers + $games1array->streams[41]->viewers + $games1array->streams[42]->viewers + $games1array->streams[43]->viewers + $games1array->streams[44]->viewers + $games1array->streams[45]->viewers; ?>  </p></h4>
			</div>
			<a href="lolstreams.php">
			<div class="gamepic">
				<img class="gamepics" src="img/lol.png">
			</div>
			</a>
		</div>
		<div class="col-md-4 game">
			<div class="gametitle">
				<h4>Dota 2<p class="alignright" style="margin-right: 5px;"> Viewers: <? echo $games2array->streams[0]->viewers + $games2array->streams[1]->viewers + $games2array->streams[2]->viewers + $games2array->streams[3]->viewers + $games2array->streams[4]->viewers + $games2array->streams[5]->viewers + $games2array->streams[6]->viewers + $games2array->streams[7]->viewers + $games2array->streams[8]->viewers + $games1array->streams[9]->viewers + $games1array->streams[10]->viewers + $games1array->streams[11]->viewers + $games1array->streams[12]->viewers + $games1array->streams[13]->viewers + $games1array->streams[14]->viewers + $games2array->streams[15]->viewers + $games2array->streams[16]->viewers + $games2array->streams[17]->viewers + $games2array->streams[18]->viewers + $games2array->streams[19]->viewers + $games2array->streams[20]->viewers + $games2array->streams[21]->viewers + $games2array->streams[22]->viewers + $games2array->streams[23]->viewers + $games2array->streams[24]->viewers + $games2array->streams[25]->viewers + $games2array->streams[26]->viewers + $games2array->streams[27]->viewers + $games2array->streams[28]->viewers + $games2array->streams[29]->viewers + $games2array->streams[30]->viewers + $games2array->streams[31]->viewers + $games2array->streams[32]->viewers + $games2array->streams[33]->viewers + $games2array->streams[34]->viewers + $games2array->streams[35]->viewers + $games2array->streams[36]->viewers + $games2array->streams[37]->viewers + $games2array->streams[38]->viewers + $games2array->streams[39]->viewers + $games2array->streams[40]->viewers + $games2array->streams[41]->viewers + $games2array->streams[42]->viewers + $games2array->streams[43]->viewers + $games2array->streams[44]->viewers + $games2array->streams[45]->viewers; ?>  </p></h4>
			</div>
			<a href="dota2streams.php">
			<div class="gamepic">
				<img class="gamepics" src="img/dota2.png">
			</div>
			</a>
		</div>
		<div class="col-md-4 game">
			<div class="gametitle">
				<h4>Counter Strike: GO<p class="alignright" style="margin-right: 5px;"> Viewers: <? echo $games3array->streams[0]->viewers + $games3array->streams[1]->viewers + $games3array->streams[2]->viewers + $games3array->streams[3]->viewers + $games3array->streams[4]->viewers + $games3array->streams[5]->viewers + $games3array->streams[6]->viewers + $games3array->streams[7]->viewers + $games3array->streams[8]->viewers + $games3array->streams[9]->viewers + $games3array->streams[10]->viewers + $games3array->streams[11]->viewers + $games3array->streams[12]->viewers + $games3array->streams[13]->viewers + $games3array->streams[14]->viewers + $games3array->streams[15]->viewers + $games3array->streams[16]->viewers + $games3array->streams[17]->viewers + $games3array->streams[18]->viewers + $games3array->streams[19]->viewers + $games3array->streams[20]->viewers + $games3array->streams[21]->viewers + $games3array->streams[22]->viewers + $games3array->streams[23]->viewers + $games3array->streams[24]->viewers + $games3array->streams[25]->viewers + $games3array->streams[26]->viewers + $games3array->streams[27]->viewers + $games3array->streams[28]->viewers + $games3array->streams[29]->viewers + $games3array->streams[30]->viewers + $games3array->streams[31]->viewers + $games3array->streams[32]->viewers + $games3array->streams[33]->viewers + $games3array->streams[34]->viewers + $games3array->streams[35]->viewers + $games3array->streams[36]->viewers + $games3array->streams[37]->viewers + $games3array->streams[38]->viewers + $games3array->streams[39]->viewers + $games3array->streams[40]->viewers + $games3array->streams[41]->viewers + $games3array->streams[42]->viewers + $games3array->streams[43]->viewers + $games3array->streams[44]->viewers + $games3array->streams[45]->viewers; ?>  </p></h4>
			</div>
			<a href="csgostreams.php">
			<div class="gamepic">
				<img class="gamepics" src="http://gaming.corsair.com/~/media/Corsair/Blog/2015-03/CSGO%20Mouse%20Sensitivity/cs.jpg">
			</div>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 game">
			<div class="gametitle">
				<h4>Hearthstone<p class="alignright" style="margin-right: 5px;"> Viewers: <? echo $games4array->streams[0]->viewers + $games4array->streams[1]->viewers + $games4array->streams[2]->viewers + $games4array->streams[3]->viewers + $games4array->streams[4]->viewers + $games4array->streams[5]->viewers + $games4array->streams[6]->viewers + $games4array->streams[7]->viewers + $games4array->streams[8]->viewers + $games4array->streams[9]->viewers + $games4array->streams[10]->viewers + $games4array->streams[11]->viewers + $games4array->streams[12]->viewers + $games4array->streams[13]->viewers + $games4array->streams[14]->viewers + $games4array->streams[15]->viewers + $games4array->streams[16]->viewers + $games4array->streams[17]->viewers + $games4array->streams[18]->viewers + $games4array->streams[19]->viewers + $games4array->streams[20]->viewers + $games4array->streams[21]->viewers + $games4array->streams[22]->viewers + $games4array->streams[23]->viewers + $games4array->streams[24]->viewers + $games4array->streams[25]->viewers + $games4array->streams[26]->viewers + $games4array->streams[27]->viewers + $games4array->streams[28]->viewers + $games4array->streams[29]->viewers + $games4array->streams[30]->viewers + $games4array->streams[31]->viewers + $games4array->streams[32]->viewers + $games4array->streams[33]->viewers + $games4array->streams[34]->viewers + $games4array->streams[35]->viewers + $games4array->streams[36]->viewers + $games4array->streams[37]->viewers + $games4array->streams[38]->viewers + $games4array->streams[39]->viewers + $games4array->streams[40]->viewers + $games4array->streams[41]->viewers + $games4array->streams[42]->viewers + $games4array->streams[43]->viewers + $games4array->streams[44]->viewers + $games4array->streams[45]->viewers; ?>  </p></h4>
			</div>
			<a href="stonestreams.php">
			<div class="gamepic">
				<img class="gamepics" src="img/hearth.png">
			</div>
			</a>
		</div>
		<div class="col-md-4 game">
			<div class="gametitle">
				<h4>World of Warcraft<p class="alignright" style="margin-right: 5px;"> Viewers: <? echo $games5array->streams[0]->viewers + $games5array->streams[1]->viewers + $games5array->streams[2]->viewers + $games5array->streams[3]->viewers + $games5array->streams[4]->viewers + $games5array->streams[5]->viewers + $games5array->streams[6]->viewers + $games5array->streams[7]->viewers + $games5array->streams[8]->viewers + $games5array->streams[9]->viewers + $games5array->streams[10]->viewers + $games5array->streams[11]->viewers + $games5array->streams[12]->viewers + $games5array->streams[13]->viewers + $games5array->streams[14]->viewers + $games5array->streams[15]->viewers + $games5array->streams[16]->viewers + $games5array->streams[17]->viewers + $games5array->streams[18]->viewers + $games5array->streams[19]->viewers + $games5array->streams[20]->viewers + $games5array->streams[21]->viewers + $games5array->streams[22]->viewers + $games5array->streams[23]->viewers + $games5array->streams[24]->viewers + $games5array->streams[25]->viewers + $games5array->streams[26]->viewers + $games5array->streams[27]->viewers + $games5array->streams[28]->viewers + $games5array->streams[29]->viewers + $games5array->streams[30]->viewers + $games5array->streams[31]->viewers + $games5array->streams[32]->viewers + $games5array->streams[33]->viewers + $games5array->streams[34]->viewers + $games5array->streams[35]->viewers + $games5array->streams[36]->viewers + $games5array->streams[37]->viewers + $games5array->streams[38]->viewers + $games5array->streams[39]->viewers + $games5array->streams[40]->viewers + $games5array->streams[41]->viewers + $games5array->streams[42]->viewers + $games5array->streams[43]->viewers + $games5array->streams[44]->viewers + $games5array->streams[45]->viewers; ?>  </p></h4>
			</div>
			<a href="wowstreams.php">
			<div class="gamepic">
				<img class="gamepics" src="img/warcraft.png">
			</div>
			</a>
		</div>
		<div class="col-md-4 game">
			<div class="gametitle">
				<h4>Minecraft<p class="alignright" style="margin-right: 5px;"> Viewers: <? echo $games6array->streams[0]->viewers + $games6array->streams[1]->viewers + $games6array->streams[2]->viewers + $games6array->streams[3]->viewers + $games6array->streams[4]->viewers + $games6array->streams[5]->viewers + $games6array->streams[6]->viewers + $games6array->streams[7]->viewers + $games6array->streams[8]->viewers + $games6array->streams[9]->viewers + $games6array->streams[10]->viewers + $games6array->streams[11]->viewers + $games6array->streams[12]->viewers + $games6array->streams[13]->viewers + $games6array->streams[14]->viewers + $games6array->streams[15]->viewers + $games6array->streams[16]->viewers + $games6array->streams[17]->viewers + $games6array->streams[18]->viewers + $games6array->streams[19]->viewers + $games6array->streams[20]->viewers + $games6array->streams[21]->viewers + $games6array->streams[22]->viewers + $games6array->streams[23]->viewers + $games6array->streams[24]->viewers + $games6array->streams[25]->viewers + $games6array->streams[26]->viewers + $games6array->streams[27]->viewers + $games6array->streams[28]->viewers + $games6array->streams[29]->viewers + $games6array->streams[30]->viewers + $games6array->streams[31]->viewers + $games6array->streams[32]->viewers + $games6array->streams[33]->viewers + $games6array->streams[34]->viewers + $games6array->streams[35]->viewers + $games6array->streams[36]->viewers + $games6array->streams[37]->viewers + $games6array->streams[38]->viewers + $games6array->streams[39]->viewers + $games6array->streams[40]->viewers + $games6array->streams[41]->viewers + $games6array->streams[42]->viewers + $games6array->streams[43]->viewers + $games6array->streams[44]->viewers + $games6array->streams[45]->viewers; ?>  </p></h4>
			</div>
			<a href="mcstreams.php">
			<div class="gamepic">
				<img class="gamepics" src="img/mc.png">
			</div>
			</a>
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
