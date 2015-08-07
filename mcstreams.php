<?
$mcjson = file_get_contents("https://api.twitch.tv/kraken/streams?game=minecraft");
$mcarray = json_decode($mcjson);
?>



<html>
<head>

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
		<div class="col-lg-9">
			<div class="gametitle">
				<h4 style="font-size: 30px;">Minecraft Streams</h4>
			</div>
			<div class="streampic">
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[0]->viewers; ?> viewers on <strong><? echo $mcarray->streams[0]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[1]->viewers; ?> viewers on <strong><? echo $mcarray->streams[1]->channel->name; ?></strong></p>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<? echo $mcarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $mcarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $mcarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $mcarray->streams[2]->viewers; ?> viewers on <strong><? echo $mcarray->streams[2]->channel->name; ?></strong></p>
						</div>
					</div>
				</div>
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
