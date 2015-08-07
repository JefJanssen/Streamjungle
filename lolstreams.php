			<?
			$loljson = file_get_contents("https://api.twitch.tv/kraken/streams?game=league+of+legends&limit=100");
			$lolarray=json_decode($loljson);
			?>


<html>
<head>
	<title>Stream Jungle - League of Legends Streams</title>

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
				<h4 style="font-size: 30px;">League Of Legends Streams</h4>
			</div>
			<div class="streampic">
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[0]->viewers; ?> viewers on <strong><? echo $lolarray->streams[0]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[1]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[1]->viewers; ?> viewers on <strong><? echo $lolarray->streams[1]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[2]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[2]->viewers; ?> viewers on <strong><? echo $lolarray->streams[2]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[3]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[3]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[3]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[3]->viewers; ?> viewers on <strong><? echo $lolarray->streams[3]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[4]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[4]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[4]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[4]->viewers; ?> viewers on <strong><? echo $lolarray->streams[4]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[5]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[5]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[5]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[5]->viewers; ?> viewers on <strong><? echo $lolarray->streams[5]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[6]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[6]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[6]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[6]->viewers; ?> viewers on <strong><? echo $lolarray->streams[6]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[7]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[7]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[7]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[7]->viewers; ?> viewers on <strong><? echo $lolarray->streams[7]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[8]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[8]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[8]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[8]->viewers; ?> viewers on <strong><? echo $lolarray->streams[8]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[9]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[9]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[9]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[9]->viewers; ?> viewers on <strong><? echo $lolarray->streams[9]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[10]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[10]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[10]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[10]->viewers; ?> viewers on <strong><? echo $lolarray->streams[10]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[11]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[11]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[11]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[11]->viewers; ?> viewers on <strong><? echo $lolarray->streams[11]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[12]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[12]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[12]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[12]->viewers; ?> viewers on <strong><? echo $lolarray->streams[12]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[13]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[13]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[13]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[13]->viewers; ?> viewers on <strong><? echo $lolarray->streams[13]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[14]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[14]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[14]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[14]->viewers; ?> viewers on <strong><? echo $lolarray->streams[14]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[15]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[15]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[15]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[15]->viewers; ?> viewers on <strong><? echo $lolarray->streams[15]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[16]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[16]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[16]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[16]->viewers; ?> viewers on <strong><? echo $lolarray->streams[16]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[17]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[17]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[17]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[17]->viewers; ?> viewers on <strong><? echo $lolarray->streams[17]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[18]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[18]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[18]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[18]->viewers; ?> viewers on <strong><? echo $lolarray->streams[18]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[19]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[19]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[19]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[19]->viewers; ?> viewers on <strong><? echo $lolarray->streams[19]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[20]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[20]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[20]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[20]->viewers; ?> viewers on <strong><? echo $lolarray->streams[20]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[21]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[21]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[21]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[21]->viewers; ?> viewers on <strong><? echo $lolarray->streams[21]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[22]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[22]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[22]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[22]->viewers; ?> viewers on <strong><? echo $lolarray->streams[22]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[23]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[23]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[23]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[23]->viewers; ?> viewers on <strong><? echo $lolarray->streams[23]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[24]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[24]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[24]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[24]->viewers; ?> viewers on <strong><? echo $lolarray->streams[24]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[25]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[25]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[25]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[25]->viewers; ?> viewers on <strong><? echo $lolarray->streams[25]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[26]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[26]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[26]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[26]->viewers; ?> viewers on <strong><? echo $lolarray->streams[26]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[27]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[27]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[27]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[27]->viewers; ?> viewers on <strong><? echo $lolarray->streams[27]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[28]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[28]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[28]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[28]->viewers; ?> viewers on <strong><? echo $lolarray->streams[28]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[29]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[29]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[29]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[29]->viewers; ?> viewers on <strong><? echo $lolarray->streams[29]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[30]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[30]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[30]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[30]->viewers; ?> viewers on <strong><? echo $lolarray->streams[30]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[31]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[31]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[31]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[31]->viewers; ?> viewers on <strong><? echo $lolarray->streams[31]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[32]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[32]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[32]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[32]->viewers; ?> viewers on <strong><? echo $lolarray->streams[32]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[33]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[33]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[33]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[33]->viewers; ?> viewers on <strong><? echo $lolarray->streams[33]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[34]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[34]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[34]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[34]->viewers; ?> viewers on <strong><? echo $lolarray->streams[34]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[35]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[35]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[35]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[35]->viewers; ?> viewers on <strong><? echo $lolarray->streams[35]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[36]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[36]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[36]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[36]->viewers; ?> viewers on <strong><? echo $lolarray->streams[36]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[37]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[37]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[37]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[37]->viewers; ?> viewers on <strong><? echo $lolarray->streams[37]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[38]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[38]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[38]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[35]->viewers; ?> viewers on <strong><? echo $lolarray->streams[38]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[39]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[39]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[39]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[39]->viewers; ?> viewers on <strong><? echo $lolarray->streams[39]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[40]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[40]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[40]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[40]->viewers; ?> viewers on <strong><? echo $lolarray->streams[40]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[41]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[41]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[41]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[41]->viewers; ?> viewers on <strong><? echo $lolarray->streams[41]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[42]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[42]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[42]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[42]->viewers; ?> viewers on <strong><? echo $lolarray->streams[42]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[43]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[43]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[43]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[43]->viewers; ?> viewers on <strong><? echo $lolarray->streams[43]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[44]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[44]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[44]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[44]->viewers; ?> viewers on <strong><? echo $lolarray->streams[44]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[45]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[45]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[45]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[45]->viewers; ?> viewers on <strong><? echo $lolarray->streams[45]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[46]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[46]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[46]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[46]->viewers; ?> viewers on <strong><? echo $lolarray->streams[46]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[47]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[47]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[47]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[47]->viewers; ?> viewers on <strong><? echo $lolarray->streams[47]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[48]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[48]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[48]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[48]->viewers; ?> viewers on <strong><? echo $lolarray->streams[48]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[49]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[49]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[49]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[49]->viewers; ?> viewers on <strong><? echo $lolarray->streams[49]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[50]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[50]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[50]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[50]->viewers; ?> viewers on <strong><? echo $lolarray->streams[50]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[51]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[51]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[51]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[51]->viewers; ?> viewers on <strong><? echo $lolarray->streams[51]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[52]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[52]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[52]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[52]->viewers; ?> viewers on <strong><? echo $lolarray->streams[52]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[53]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[53]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[53]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[53]->viewers; ?> viewers on <strong><? echo $lolarray->streams[53]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[54]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[54]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[54]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[54]->viewers; ?> viewers on <strong><? echo $lolarray->streams[54]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[55]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[55]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[55]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[55]->viewers; ?> viewers on <strong><? echo $lolarray->streams[55]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[56]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[56]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[56]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[56]->viewers; ?> viewers on <strong><? echo $lolarray->streams[56]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[57]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[57]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[57]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[57]->viewers; ?> viewers on <strong><? echo $lolarray->streams[57]->channel->name; ?></strong></p>
						</div>
							
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[58]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[58]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[58]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[58]->viewers; ?> viewers on <strong><? echo $lolarray->streams[58]->channel->name; ?></strong></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<a href="<? echo $lolarray->streams[59]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $lolarray->streams[59]->preview->medium;
						?>"></a>
						</div>
						<div class="streamtitle trun">
							<p><? echo $lolarray->streams[59]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $lolarray->streams[59]->viewers; ?> viewers on <strong><? echo $lolarray->streams[59]->channel->name; ?></strong></p>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
		
		
		
		
		
		
		
		
		<div class="col-lg-3">
			<div class="gametitle">
				<h4 style="font-size: 25px; margin-left: 15px; margin-bottom: 15px;">Categories</h4>
			</div>
			<div class="offertext padding-10">
				<div class="categs">
					
					<div class="categhead">
						<p>Ranking</p>
					</div>
					<div class="categsort">
						
							<input class="hide-checkbox" type="checkbox" id="tagchallenger" value="challenger" style="display: none;">
							<label for="tagchallenger">Challenger</label>
							
					</div>
					
					<div class="categsort">
						<input class="hide-checkbox" type="checkbox" id="tagmaster" value="challenger" style="display: none;">
						<label for="tagmaster">Master | Diamond</label>
					</div>
					<div class="categsort">
						<input class="hide-checkbox" type="checkbox" id="tagplat" value="challenger" style="display: none;">
						<label for="tagplat">Platinum | Gold</label>
					</div>
					
					<div class="categsort">
						<input class="hide-checkbox" type="checkbox" id="tagsilver" value="challenger" style="display: none;">
						<label for="tagsilver">Silver | Bronze</label>
					</div>
					<div class="categhead">
						<p>Language</p>
					</div>
					<a href="#">
					<div class="categsort">
						<p>English</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>German</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>French</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Russian</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Spanish</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Dutch</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Portuguese</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Turkish</p>
					</div></a>
					<div class="categhead">
						<p>Type</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Funny</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Educational</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Background Music</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Tournament</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Competition</p>
					</div></a>
					<div class="categhead">
						<p>Main Position</p>
					</div>
					<a href="#">
					<div class="categsort">
						<p>Top lane</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Jungle</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Mid Lane</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>AD Carry</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Support</p>
					</div></a>
					<div class="categhead">
						<p>Special</p>
					</div>
					<a href="#">
					<div class="categsort">
						<p>Pro Player</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Retired Pro Player</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Official Caster</p>
					</div></a>
					<a href="#">
					<div class="categsort">
						<p>Girl</p>
					</div></a>
					<script type="text/javascript">
					[].forEach.call(document.querySelectorAll('.hide-checkbox'), function(element) {
						element.style.display = 'none';
					});
					</script>
					
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
