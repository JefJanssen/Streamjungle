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
					<div class="col-md-4" id="stream0">
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
						<div class="streamtags" id="streamtag0">
						</div>




					</div>
					<div class="col-md-4" id="stream1">
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
						<div class="streamtags" id="streamtag1">
						</div>


					</div>
					<div class="col-md-4" id="stream2">
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
						<div class="streamtags" id="streamtag2">
						</div>


					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream3">
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
						<div class="streamtags" id="streamtag3">
						</div>


					</div>
					<div class="col-md-4" id="stream4">
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
						<div class="streamtags" id="streamtag4">
						</div>

					</div>
					<div class="col-md-4" id="stream5">
						<a href="<? echo $lolarray->streams[10]->channel->url; ?>" target="_blank">
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
						<div class="streamtags" id="streamtag5">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream6">
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
						<div class="streamtags" id="streamtag6">
						</div>


					</div>
					<div class="col-md-4" id="stream7">
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
						<div class="streamtags" id="streamtag7">
						</div>

					</div>
					<div class="col-md-4" id="stream8">
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
						<div class="streamtags" id="streamtag8">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream9">
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
						<div class="streamtags" id="streamtag9">
						</div>


					</div>
					<div class="col-md-4" id="stream10">
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
						<div class="streamtags" id="streamtag10">
						</div>

					</div>
					<div class="col-md-4" id="stream11">
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
						<div class="streamtags" id="streamtag11">
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
			<div class="offertext padding-10" id="filterparent">
				<div id="filter">

					<input class="hide-checkbox" type="checkbox" value="challenger" id="tagchallenger" style="display: none;">
					<label for="tagchallenger">Challenger</label><br>

					<input class="hide-checkbox" type="checkbox" value="master" id="tagmaster" style="display: none;">
					<label for="tagmaster">Master | Diamond</label><br>

					<input class="hide-checkbox" type="checkbox" value="plat" id="tagplat" style="display: none;">
					<label for="tagplat">Platinum | Gold</label><br>

					<input class="hide-checkbox" type="checkbox" value="silver" id="tagsilver" style="display: none;">
					<label for="tagsilver">Silver | Bronze</label><br><br>

					<input class="hide-checkbox" type="checkbox" value="english" id="tagenglish" style="display: none;">
					<label for="tagenglish">English</label><br>

					<input class="hide-checkbox" type="checkbox" value="french" id="tagfrench" style="display: none;">
					<label for="tagfrench">French</label><br>

					<input class="hide-checkbox" type="checkbox" value="german" id="taggerman" style="display: none;">
					<label for="taggerman">German</label><br>

					<input class="hide-checkbox" type="checkbox" value="russian" id="tagrussian" style="display: none;">
					<label for="tagrussian">Russian</label><br>

					<input class="hide-checkbox" type="checkbox" value="turkish" id="tagturkish" style="display: none;">
					<label for="tagturkish">Turkish</label><br>

					<input class="hide-checkbox" type="checkbox" value="dutch" id="tagdutch" style="display: none;">
					<label for="tagdutch">Dutch</label><br>

					<input class="hide-checkbox" type="checkbox" value="spanish" id="tagspanish" style="display: none;">
					<label for="tagspanish">Spanish</label><br>

					<input class="hide-checkbox" type="checkbox" value="portuguese" id="tagportuguese" style="display: none;">
					<label for="tagportuguese">Portuguese</label><br><br>

					<input class="hide-checkbox" type="checkbox" value="riot" id="tagriot" style="display: none;">
					<label for="tagriot">Riot</label><br>

					<input class="hide-checkbox" type="checkbox" value="competition" id="tagcompetition" style="display: none;">
					<label for="tagcompetition">Competition</label><br>

					<input class="hide-checkbox" type="checkbox" value="tournament" id="tagtournament" style="display: none;">
					<label for="tagtournament">Tournament</label><br><br>

					<input class="hide-checkbox" type="checkbox" value="pro" id="tagpro" style="display: none;">
					<label for="tagpro">Pro Player</label><br>

					<input class="hide-checkbox" type="checkbox" value="funny" id="tagfunny" style="display: none;">
					<label for="tagfunny">Funny</label><br>

					<input class="hide-checkbox" type="checkbox" value="edu" id="tagedu" style="display: none;">
					<label for="tagedu">Educational</label><br>

					<input class="hide-checkbox" type="checkbox" value="girl" id="taggirl" style="display: none;">
					<label for="taggirl">Girl</label><br>
				</div>
				<script type="text/javascript">
				[].forEach.call( document.querySelectorAll('.hide-checkbox'), function(element) {
					element.style.display = 'none';
				});

				</script>
			</div>
		</div>
	</div>
</div>

<script>

	var allstreams = $('.col-md-4');
	function updateContentVisibility(){
		var checked = $('#filter :checkbox:checked');
		if (checked.length){
			allstreams.hide();
			checked.each(function(){
				$('.' + $(this).val()).show();
			});
		} else {
			allstreams.show();
		}
	}
	$('#filter :checkbox').click(updateContentVisibility);
	updateContentVisibility();
</script>


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
	<script>
	var stream0 = "<? echo $lolarray->streams[0]->channel->name; ?>";

	if(stream0 == "riotgames") {
		$('#streamtag0').append("<span>Riot</span>");
		$('#streamtag0').append("<span>Competition</span>");
		$('#streamtag0').append("<span>Tournament</span>");
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('riot');
		$('#stream0').addClass('competition');
		$('#stream0').addClass('tournament');
		$('#stream0').addClass('english');
	}
	if(stream0 == "nightblue3") {
		$('#streamtag0').append("<span>Challenger</span>");
		$('#streamtag0').append("<span>Jungle</span>");
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('challenger');
		$('#stream0').addClass('jungle');
		$('#stream0').addClass('english');
	}
	if(stream0 == "imaqtpie") {
		$('#streamtag0').append("<span>Challenger</span>");
		$('#streamtag0').append("<span>AD Carry</span>");
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('challenger');
		$('#stream0').addClass('adc');
		$('#stream0').addClass('english');
	}
	if(stream0 == "domingo") {
		$('#streamtag0').append("<span>French</span>");

		$('#stream0').addClass('french');
	}
	if(stream0 == "skumbagkrepo") {
		$('#streamtag0').append("<span>Caster</span>");
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Master</span>");

		$('#stream0').addClass('caster');
		$('#stream0').addClass('english');
		$('#stream0').addClass('master');
	}
	if(stream0 == "tsm_theoddone") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Diamond</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('master');

	}
	if(stream0 == "trick2g") {
		$('#streamtag0').append("<span>Diamond</span>");
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('master');
		$('#stream0').addClass('english');
	}
	if(stream0 == "thaldrinlol") {
		$('#streamtag0').append("<span>Turkish</span>");

		$('#stream0').addClass('turkish');
	}
	if(stream0 == "wingsofdeath") {
		$('#streamtag0').append("<span>Master</span>");

		$('#stream0').addClass('master');
	}
	if(stream0 == "zerator") {
		$('#streamtag0').append("<span>French</span>");

		$('#stream0').addClass('french');
	}
	if(stream0 == "kaypealol") {
		$('#streamtag0').append("<span>Girl</span>");
		$('#streamtag0').append("<span>Gold</span>");

		$('#stream0').addClass('girl');
		$('#stream0').addClass('plat');
	}
	if(stream0 == "froggen") {
		$('#streamtag0').append("<span>Pro</span>");
		$('#streamtag0').append("<span>Challenger</span>");
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('pro');
		$('#stream0').addClass('challenger');
		$('#stream0').addClass('english');
	}
	if(stream0 == "sp4zie") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Funny</span>");
		$('#streamtag0').append("<span>Platinum</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('funny');
		$('#stream0').addClass('plat');
	}
	if(stream0 == "mushisgosu") {
		$('#streamtag0').append("<span>Girl</span>");
		$('#streamtag0').append("<span>Music</span>");
		$('#streamtag0').append("<span>Challenger</span>");

		$('#stream0').addClass('girl');
		$('#stream0').addClass('music');
		$('#stream0').addClass('challenger');
	}
	if(stream0 == "cowsep") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Funny</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('funny');
	}





	var stream1 = "<? echo $lolarray->streams[1]->channel->name; ?>";

	if(stream1 == "riotgames") {
		$('#streamtag1').append("<span>Riot</span>");
		$('#streamtag1').append("<span>Competition</span>");
		$('#streamtag1').append("<span>Tournament</span>");
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('riot');
		$('#stream1').addClass('competition');
		$('#stream1').addClass('tournament');
		$('#stream1').addClass('english');
	}
	if(stream1 == "nightblue3") {
		$('#streamtag1').append("<span>Challenger</span>");
		$('#streamtag1').append("<span>Jungle</span>");
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('challenger');
		$('#stream1').addClass('jungle');
		$('#stream1').addClass('english');
	}
	if(stream1 == "imaqtpie") {
		$('#streamtag1').append("<span>Challenger</span>");
		$('#streamtag1').append("<span>AD Carry</span>");
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('challenger');
		$('#stream1').addClass('adc');
		$('#stream1').addClass('english');
	}
	if(stream1 == "domingo") {
		$('#streamtag1').append("<span>French</span>");

		$('#stream1').addClass('french');
	}
	if(stream1 == "skumbagkrepo") {
		$('#streamtag1').append("<span>Caster</span>");
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Master</span>");

		$('#stream1').addClass('caster');
		$('#stream1').addClass('english');
		$('#stream1').addClass('master');
	}
	if(stream1 == "tsm_theoddone") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Diamond</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('master');

	}
	if(stream1 == "trick2g") {
		$('#streamtag1').append("<span>Diamond</span>");
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('master');
		$('#stream1').addClass('english');
	}
	if(stream1 == "thaldrinlol") {
		$('#streamtag1').append("<span>Turkish</span>");

		$('#stream1').addClass('turkish');
	}
	if(stream1 == "wingsofdeath") {
		$('#streamtag1').append("<span>Master</span>");

		$('#stream1').addClass('master');
	}
	if(stream1 == "zerator") {
		$('#streamtag1').append("<span>French</span>");

		$('#stream1').addClass('french');
	}
	if(stream1 == "kaypealol") {
		$('#streamtag1').append("<span>Girl</span>");
		$('#streamtag1').append("<span>Gold</span>");

		$('#stream1').addClass('girl');
		$('#stream1').addClass('plat');
	}
	if(stream1 == "froggen") {
		$('#streamtag1').append("<span>Pro</span>");
		$('#streamtag1').append("<span>Challenger</span>");
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('pro');
		$('#stream1').addClass('challenger');
		$('#stream1').addClass('english');
	}
	if(stream1 == "sp4zie") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Funny</span>");
		$('#streamtag1').append("<span>Platinum</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('funny');
		$('#stream1').addClass('plat');
	}
	if(stream1 == "mushisgosu") {
		$('#streamtag1').append("<span>Girl</span>");
		$('#streamtag1').append("<span>Music</span>");
		$('#streamtag1').append("<span>Challenger</span>");

		$('#stream1').addClass('girl');
		$('#stream1').addClass('music');
		$('#stream1').addClass('challenger');
	}
	if(stream1 == "cowsep") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Funny</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('funny');
	}




	var stream2 = "<? echo $lolarray->streams[2]->channel->name; ?>";

	if(stream2 == "riotgames") {
		$('#streamtag2').append("<span>Riot</span>");
		$('#streamtag2').append("<span>Competition</span>");
		$('#streamtag2').append("<span>Tournament</span>");
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('riot');
		$('#stream2').addClass('competition');
		$('#stream2').addClass('tournament');
		$('#stream2').addClass('english');
	}
	if(stream2 == "nightblue3") {
		$('#streamtag2').append("<span>Challenger</span>");
		$('#streamtag2').append("<span>Jungle</span>");
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('challenger');
		$('#stream2').addClass('jungle');
		$('#stream2').addClass('english');
	}
	if(stream2 == "imaqtpie") {
		$('#streamtag2').append("<span>Challenger</span>");
		$('#streamtag2').append("<span>AD Carry</span>");
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('challenger');
		$('#stream2').addClass('adc');
		$('#stream2').addClass('english');
	}
	if(stream2 == "domingo") {
		$('#streamtag2').append("<span>French</span>");

		$('#stream2').addClass('french');
	}
	if(stream2 == "skumbagkrepo") {
		$('#streamtag2').append("<span>Caster</span>");
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Master</span>");

		$('#stream2').addClass('caster');
		$('#stream2').addClass('english');
		$('#stream2').addClass('master');
	}
	if(stream2 == "tsm_theoddone") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Diamond</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('master');

	}
	if(stream2 == "trick2g") {
		$('#streamtag2').append("<span>Diamond</span>");
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('master');
		$('#stream2').addClass('english');
	}
	if(stream2 == "thaldrinlol") {
		$('#streamtag2').append("<span>Turkish</span>");

		$('#stream2').addClass('turkish');
	}
	if(stream2 == "wingsofdeath") {
		$('#streamtag2').append("<span>Master</span>");

		$('#stream2').addClass('master');
	}
	if(stream2 == "zerator") {
		$('#streamtag2').append("<span>French</span>");

		$('#stream2').addClass('french');
	}
	if(stream2 == "kaypealol") {
		$('#streamtag2').append("<span>Girl</span>");
		$('#streamtag2').append("<span>Gold</span>");

		$('#stream2').addClass('girl');
		$('#stream2').addClass('plat');
	}
	if(stream2 == "froggen") {
		$('#streamtag2').append("<span>Pro</span>");
		$('#streamtag2').append("<span>Challenger</span>");
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('pro');
		$('#stream2').addClass('challenger');
		$('#stream2').addClass('english');
	}
	if(stream2 == "sp4zie") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Funny</span>");
		$('#streamtag2').append("<span>Platinum</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('funny');
		$('#stream2').addClass('plat');
	}
	if(stream2 == "mushisgosu") {
		$('#streamtag2').append("<span>Girl</span>");
		$('#streamtag2').append("<span>Music</span>");
		$('#streamtag2').append("<span>Challenger</span>");

		$('#stream2').addClass('girl');
		$('#stream2').addClass('music');
		$('#stream2').addClass('challenger');
	}
	if(stream2 == "cowsep") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Funny</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('funny');
	}



	var stream3 = "<? echo $lolarray->streams[3]->channel->name; ?>";

	if(stream3 == "riotgames") {
		$('#streamtag3').append("<span>Riot</span>");
		$('#streamtag3').append("<span>Competition</span>");
		$('#streamtag3').append("<span>Tournament</span>");
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('riot');
		$('#stream3').addClass('competition');
		$('#stream3').addClass('tournament');
		$('#stream3').addClass('english');
	}
	if(stream3 == "nightblue3") {
		$('#streamtag3').append("<span>Challenger</span>");
		$('#streamtag3').append("<span>Jungle</span>");
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('challenger');
		$('#stream3').addClass('jungle');
		$('#stream3').addClass('english');
	}
	if(stream3 == "imaqtpie") {
		$('#streamtag3').append("<span>Challenger</span>");
		$('#streamtag3').append("<span>AD Carry</span>");
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('challenger');
		$('#stream3').addClass('adc');
		$('#stream3').addClass('english');
	}
	if(stream3 == "domingo") {
		$('#streamtag3').append("<span>French</span>");

		$('#stream3').addClass('french');
	}
	if(stream3 == "skumbagkrepo") {
		$('#streamtag3').append("<span>Caster</span>");
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Master</span>");

		$('#stream3').addClass('caster');
		$('#stream3').addClass('english');
		$('#stream3').addClass('master');
	}
	if(stream3 == "tsm_theoddone") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Diamond</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('master');

	}
	if(stream3 == "trick2g") {
		$('#streamtag3').append("<span>Diamond</span>");
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('master');
		$('#stream3').addClass('english');
	}
	if(stream3 == "thaldrinlol") {
		$('#streamtag3').append("<span>Turkish</span>");

		$('#stream3').addClass('turkish');
	}
	if(stream3 == "wingsofdeath") {
		$('#streamtag3').append("<span>Master</span>");

		$('#stream3').addClass('master');
	}
	if(stream3 == "zerator") {
		$('#streamtag3').append("<span>French</span>");

		$('#stream3').addClass('french');
	}
	if(stream3 == "kaypealol") {
		$('#streamtag3').append("<span>Girl</span>");
		$('#streamtag3').append("<span>Gold</span>");

		$('#stream3').addClass('girl');
		$('#stream3').addClass('plat');
	}
	if(stream3 == "froggen") {
		$('#streamtag3').append("<span>Pro</span>");
		$('#streamtag3').append("<span>Challenger</span>");
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('pro');
		$('#stream3').addClass('challenger');
		$('#stream3').addClass('english');
	}
	if(stream3 == "sp4zie") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Funny</span>");
		$('#streamtag3').append("<span>Platinum</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('funny');
		$('#stream3').addClass('plat');
	}
	if(stream3 == "mushisgosu") {
		$('#streamtag3').append("<span>Girl</span>");
		$('#streamtag3').append("<span>Music</span>");
		$('#streamtag3').append("<span>Challenger</span>");

		$('#stream3').addClass('girl');
		$('#stream3').addClass('music');
		$('#stream3').addClass('challenger');
	}
	if(stream3 == "cowsep") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Funny</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('funny');
	}



	var stream4 = "<? echo $lolarray->streams[4]->channel->name; ?>";

	if(stream4 == "riotgames") {
		$('#streamtag4').append("<span>Riot</span>");
		$('#streamtag4').append("<span>Competition</span>");
		$('#streamtag4').append("<span>Tournament</span>");
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('riot');
		$('#stream4').addClass('competition');
		$('#stream4').addClass('tournament');
		$('#stream4').addClass('english');
	}
	if(stream4 == "nightblue3") {
		$('#streamtag4').append("<span>Challenger</span>");
		$('#streamtag4').append("<span>Jungle</span>");
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('challenger');
		$('#stream4').addClass('jungle');
		$('#stream4').addClass('english');
	}
	if(stream4 == "imaqtpie") {
		$('#streamtag4').append("<span>Challenger</span>");
		$('#streamtag4').append("<span>AD Carry</span>");
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('challenger');
		$('#stream4').addClass('adc');
		$('#stream4').addClass('english');
	}
	if(stream4 == "domingo") {
		$('#streamtag4').append("<span>French</span>");

		$('#stream4').addClass('french');
	}
	if(stream4 == "skumbagkrepo") {
		$('#streamtag4').append("<span>Caster</span>");
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Master</span>");

		$('#stream4').addClass('caster');
		$('#stream4').addClass('english');
		$('#stream4').addClass('master');
	}
	if(stream4 == "tsm_theoddone") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Diamond</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('master');

	}
	if(stream4 == "trick4g") {
		$('#streamtag4').append("<span>Diamond</span>");
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('master');
		$('#stream4').addClass('english');
	}
	if(stream4 == "thaldrinlol") {
		$('#streamtag4').append("<span>Turkish</span>");

		$('#stream4').addClass('turkish');
	}
	if(stream4 == "wingsofdeath") {
		$('#streamtag4').append("<span>Master</span>");

		$('#stream4').addClass('master');
	}
	if(stream4 == "zerator") {
		$('#streamtag4').append("<span>French</span>");

		$('#stream4').addClass('french');
	}
	if(stream4 == "kaypealol") {
		$('#streamtag4').append("<span>Girl</span>");
		$('#streamtag4').append("<span>Gold</span>");

		$('#stream4').addClass('girl');
		$('#stream4').addClass('plat');
	}
	if(stream4 == "froggen") {
		$('#streamtag4').append("<span>Pro</span>");
		$('#streamtag4').append("<span>Challenger</span>");
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('pro');
		$('#stream4').addClass('challenger');
		$('#stream4').addClass('english');
	}
	if(stream4 == "sp4zie") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Funny</span>");
		$('#streamtag4').append("<span>Platinum</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('funny');
		$('#stream4').addClass('plat');
	}
	if(stream4 == "mushisgosu") {
		$('#streamtag4').append("<span>Girl</span>");
		$('#streamtag4').append("<span>Music</span>");
		$('#streamtag4').append("<span>Challenger</span>");

		$('#stream4').addClass('girl');
		$('#stream4').addClass('music');
		$('#stream4').addClass('challenger');
	}
	if(stream4 == "cowsep") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Funny</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('funny');
	}


	var stream5 = "<? echo $lolarray->streams[5]->channel->name; ?>";

	if(stream5 == "riotgames") {
		$('#streamtag5').append("<span>Riot</span>");
		$('#streamtag5').append("<span>Competition</span>");
		$('#streamtag5').append("<span>Tournament</span>");
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('riot');
		$('#stream5').addClass('competition');
		$('#stream5').addClass('tournament');
		$('#stream5').addClass('english');
	}
	if(stream5 == "nightblue3") {
		$('#streamtag5').append("<span>Challenger</span>");
		$('#streamtag5').append("<span>Jungle</span>");
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('challenger');
		$('#stream5').addClass('jungle');
		$('#stream5').addClass('english');
	}
	if(stream5 == "imaqtpie") {
		$('#streamtag5').append("<span>Challenger</span>");
		$('#streamtag5').append("<span>AD Carry</span>");
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('challenger');
		$('#stream5').addClass('adc');
		$('#stream5').addClass('english');
	}
	if(stream5 == "domingo") {
		$('#streamtag5').append("<span>French</span>");

		$('#stream5').addClass('french');
	}
	if(stream5 == "skumbagkrepo") {
		$('#streamtag5').append("<span>Caster</span>");
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Master</span>");

		$('#stream5').addClass('caster');
		$('#stream5').addClass('english');
		$('#stream5').addClass('master');
	}
	if(stream5 == "tsm_theoddone") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Diamond</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('master');

	}
	if(stream5 == "trick5g") {
		$('#streamtag5').append("<span>Diamond</span>");
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('master');
		$('#stream5').addClass('english');
	}
	if(stream5 == "thaldrinlol") {
		$('#streamtag5').append("<span>Turkish</span>");

		$('#stream5').addClass('turkish');
	}
	if(stream5 == "wingsofdeath") {
		$('#streamtag5').append("<span>Master</span>");

		$('#stream5').addClass('master');
	}
	if(stream5 == "zerator") {
		$('#streamtag5').append("<span>French</span>");

		$('#stream5').addClass('french');
	}
	if(stream5 == "kaypealol") {
		$('#streamtag5').append("<span>Girl</span>");
		$('#streamtag5').append("<span>Gold</span>");

		$('#stream5').addClass('girl');
		$('#stream5').addClass('plat');
	}
	if(stream5 == "froggen") {
		$('#streamtag5').append("<span>Pro</span>");
		$('#streamtag5').append("<span>Challenger</span>");
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('pro');
		$('#stream5').addClass('challenger');
		$('#stream5').addClass('english');
	}
	if(stream5 == "sp4zie") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Funny</span>");
		$('#streamtag5').append("<span>Platinum</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('funny');
		$('#stream5').addClass('plat');
	}
	if(stream5 == "mushisgosu") {
		$('#streamtag5').append("<span>Girl</span>");
		$('#streamtag5').append("<span>Music</span>");
		$('#streamtag5').append("<span>Challenger</span>");

		$('#stream5').addClass('girl');
		$('#stream5').addClass('music');
		$('#stream5').addClass('challenger');
	}
	if(stream5 == "cowsep") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Funny</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('funny');
	}



	var stream6 = "<? echo $lolarray->streams[6]->channel->name; ?>";

	if(stream6 == "riotgames") {
		$('#streamtag6').append("<span>Riot</span>");
		$('#streamtag6').append("<span>Competition</span>");
		$('#streamtag6').append("<span>Tournament</span>");
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('riot');
		$('#stream6').addClass('competition');
		$('#stream6').addClass('tournament');
		$('#stream6').addClass('english');
	}
	if(stream6 == "nightblue3") {
		$('#streamtag6').append("<span>Challenger</span>");
		$('#streamtag6').append("<span>Jungle</span>");
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('challenger');
		$('#stream6').addClass('jungle');
		$('#stream6').addClass('english');
	}
	if(stream6 == "imaqtpie") {
		$('#streamtag6').append("<span>Challenger</span>");
		$('#streamtag6').append("<span>AD Carry</span>");
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('challenger');
		$('#stream6').addClass('adc');
		$('#stream6').addClass('english');
	}
	if(stream6 == "domingo") {
		$('#streamtag6').append("<span>French</span>");

		$('#stream6').addClass('french');
	}
	if(stream6 == "skumbagkrepo") {
		$('#streamtag6').append("<span>Caster</span>");
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Master</span>");

		$('#stream6').addClass('caster');
		$('#stream6').addClass('english');
		$('#stream6').addClass('master');
	}
	if(stream6 == "tsm_theoddone") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Diamond</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('master');

	}
	if(stream6 == "trick6g") {
		$('#streamtag6').append("<span>Diamond</span>");
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('master');
		$('#stream6').addClass('english');
	}
	if(stream6 == "thaldrinlol") {
		$('#streamtag6').append("<span>Turkish</span>");

		$('#stream6').addClass('turkish');
	}
	if(stream6 == "wingsofdeath") {
		$('#streamtag6').append("<span>Master</span>");

		$('#stream6').addClass('master');
	}
	if(stream6 == "zerator") {
		$('#streamtag6').append("<span>French</span>");

		$('#stream6').addClass('french');
	}
	if(stream6 == "kaypealol") {
		$('#streamtag6').append("<span>Girl</span>");
		$('#streamtag6').append("<span>Gold</span>");

		$('#stream6').addClass('girl');
		$('#stream6').addClass('plat');
	}
	if(stream6 == "froggen") {
		$('#streamtag6').append("<span>Pro</span>");
		$('#streamtag6').append("<span>Challenger</span>");
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('pro');
		$('#stream6').addClass('challenger');
		$('#stream6').addClass('english');
	}
	if(stream6 == "sp4zie") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Funny</span>");
		$('#streamtag6').append("<span>Platinum</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('funny');
		$('#stream6').addClass('plat');
	}
	if(stream6 == "mushisgosu") {
		$('#streamtag6').append("<span>Girl</span>");
		$('#streamtag6').append("<span>Music</span>");
		$('#streamtag6').append("<span>Challenger</span>");

		$('#stream6').addClass('girl');
		$('#stream6').addClass('music');
		$('#stream6').addClass('challenger');
	}
	if(stream6 == "cowsep") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Funny</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('funny');
	}


	var stream7 = "<? echo $lolarray->streams[7]->channel->name; ?>";

	if(stream7 == "riotgames") {
		$('#streamtag7').append("<span>Riot</span>");
		$('#streamtag7').append("<span>Competition</span>");
		$('#streamtag7').append("<span>Tournament</span>");
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('riot');
		$('#stream7').addClass('competition');
		$('#stream7').addClass('tournament');
		$('#stream7').addClass('english');
	}
	if(stream7 == "nightblue3") {
		$('#streamtag7').append("<span>Challenger</span>");
		$('#streamtag7').append("<span>Jungle</span>");
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('challenger');
		$('#stream7').addClass('jungle');
		$('#stream7').addClass('english');
	}
	if(stream7 == "imaqtpie") {
		$('#streamtag7').append("<span>Challenger</span>");
		$('#streamtag7').append("<span>AD Carry</span>");
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('challenger');
		$('#stream7').addClass('adc');
		$('#stream7').addClass('english');
	}
	if(stream7 == "domingo") {
		$('#streamtag7').append("<span>French</span>");

		$('#stream7').addClass('french');
	}
	if(stream7 == "skumbagkrepo") {
		$('#streamtag7').append("<span>Caster</span>");
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Master</span>");

		$('#stream7').addClass('caster');
		$('#stream7').addClass('english');
		$('#stream7').addClass('master');
	}
	if(stream7 == "tsm_theoddone") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Diamond</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('master');

	}
	if(stream7 == "trick7g") {
		$('#streamtag7').append("<span>Diamond</span>");
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('master');
		$('#stream7').addClass('english');
	}
	if(stream7 == "thaldrinlol") {
		$('#streamtag7').append("<span>Turkish</span>");

		$('#stream7').addClass('turkish');
	}
	if(stream7 == "wingsofdeath") {
		$('#streamtag7').append("<span>Master</span>");

		$('#stream7').addClass('master');
	}
	if(stream7 == "zerator") {
		$('#streamtag7').append("<span>French</span>");

		$('#stream7').addClass('french');
	}
	if(stream7 == "kaypealol") {
		$('#streamtag7').append("<span>Girl</span>");
		$('#streamtag7').append("<span>Gold</span>");

		$('#stream7').addClass('girl');
		$('#stream7').addClass('plat');
	}
	if(stream7 == "froggen") {
		$('#streamtag7').append("<span>Pro</span>");
		$('#streamtag7').append("<span>Challenger</span>");
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('pro');
		$('#stream7').addClass('challenger');
		$('#stream7').addClass('english');
	}
	if(stream7 == "sp4zie") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Funny</span>");
		$('#streamtag7').append("<span>Platinum</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('funny');
		$('#stream7').addClass('plat');
	}
	if(stream7 == "mushisgosu") {
		$('#streamtag7').append("<span>Girl</span>");
		$('#streamtag7').append("<span>Music</span>");
		$('#streamtag7').append("<span>Challenger</span>");

		$('#stream7').addClass('girl');
		$('#stream7').addClass('music');
		$('#stream7').addClass('challenger');
	}
	if(stream7 == "cowsep") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Funny</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('funny');
	}



	var stream8 = "<? echo $lolarray->streams[8]->channel->name; ?>";

	if(stream8 == "riotgames") {
		$('#streamtag8').append("<span>Riot</span>");
		$('#streamtag8').append("<span>Competition</span>");
		$('#streamtag8').append("<span>Tournament</span>");
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('riot');
		$('#stream8').addClass('competition');
		$('#stream8').addClass('tournament');
		$('#stream8').addClass('english');
	}
	if(stream8 == "nightblue3") {
		$('#streamtag8').append("<span>Challenger</span>");
		$('#streamtag8').append("<span>Jungle</span>");
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('challenger');
		$('#stream8').addClass('jungle');
		$('#stream8').addClass('english');
	}
	if(stream8 == "imaqtpie") {
		$('#streamtag8').append("<span>Challenger</span>");
		$('#streamtag8').append("<span>AD Carry</span>");
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('challenger');
		$('#stream8').addClass('adc');
		$('#stream8').addClass('english');
	}
	if(stream8 == "domingo") {
		$('#streamtag8').append("<span>French</span>");

		$('#stream8').addClass('french');
	}
	if(stream8 == "skumbagkrepo") {
		$('#streamtag8').append("<span>Caster</span>");
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Master</span>");

		$('#stream8').addClass('caster');
		$('#stream8').addClass('english');
		$('#stream8').addClass('master');
	}
	if(stream8 == "tsm_theoddone") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Diamond</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('master');

	}
	if(stream8 == "trick8g") {
		$('#streamtag8').append("<span>Diamond</span>");
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('master');
		$('#stream8').addClass('english');
	}
	if(stream8 == "thaldrinlol") {
		$('#streamtag8').append("<span>Turkish</span>");

		$('#stream8').addClass('turkish');
	}
	if(stream8 == "wingsofdeath") {
		$('#streamtag8').append("<span>Master</span>");

		$('#stream8').addClass('master');
	}
	if(stream8 == "zerator") {
		$('#streamtag8').append("<span>French</span>");

		$('#stream8').addClass('french');
	}
	if(stream8 == "kaypealol") {
		$('#streamtag8').append("<span>Girl</span>");
		$('#streamtag8').append("<span>Gold</span>");

		$('#stream8').addClass('girl');
		$('#stream8').addClass('plat');
	}
	if(stream8 == "froggen") {
		$('#streamtag8').append("<span>Pro</span>");
		$('#streamtag8').append("<span>Challenger</span>");
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('pro');
		$('#stream8').addClass('challenger');
		$('#stream8').addClass('english');
	}
	if(stream8 == "sp4zie") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Funny</span>");
		$('#streamtag8').append("<span>Platinum</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('funny');
		$('#stream8').addClass('plat');
	}
	if(stream8 == "mushisgosu") {
		$('#streamtag8').append("<span>Girl</span>");
		$('#streamtag8').append("<span>Music</span>");
		$('#streamtag8').append("<span>Challenger</span>");

		$('#stream8').addClass('girl');
		$('#stream8').addClass('music');
		$('#stream8').addClass('challenger');
	}
	if(stream8 == "cowsep") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Funny</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('funny');
	}


	var stream9 = "<? echo $lolarray->streams[9]->channel->name; ?>";

	if(stream9 == "riotgames") {
		$('#streamtag9').append("<span>Riot</span>");
		$('#streamtag9').append("<span>Competition</span>");
		$('#streamtag9').append("<span>Tournament</span>");
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('riot');
		$('#stream9').addClass('competition');
		$('#stream9').addClass('tournament');
		$('#stream9').addClass('english');
	}
	if(stream9 == "nightblue3") {
		$('#streamtag9').append("<span>Challenger</span>");
		$('#streamtag9').append("<span>Jungle</span>");
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('challenger');
		$('#stream9').addClass('jungle');
		$('#stream9').addClass('english');
	}
	if(stream9 == "imaqtpie") {
		$('#streamtag9').append("<span>Challenger</span>");
		$('#streamtag9').append("<span>AD Carry</span>");
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('challenger');
		$('#stream9').addClass('adc');
		$('#stream9').addClass('english');
	}
	if(stream9 == "domingo") {
		$('#streamtag9').append("<span>French</span>");

		$('#stream9').addClass('french');
	}
	if(stream9 == "skumbagkrepo") {
		$('#streamtag9').append("<span>Caster</span>");
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Master</span>");

		$('#stream9').addClass('caster');
		$('#stream9').addClass('english');
		$('#stream9').addClass('master');
	}
	if(stream9 == "tsm_theoddone") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Diamond</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('master');

	}
	if(stream9 == "trick9g") {
		$('#streamtag9').append("<span>Diamond</span>");
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('master');
		$('#stream9').addClass('english');
	}
	if(stream9 == "thaldrinlol") {
		$('#streamtag9').append("<span>Turkish</span>");

		$('#stream9').addClass('turkish');
	}
	if(stream9 == "wingsofdeath") {
		$('#streamtag9').append("<span>Master</span>");

		$('#stream9').addClass('master');
	}
	if(stream9 == "zerator") {
		$('#streamtag9').append("<span>French</span>");

		$('#stream9').addClass('french');
	}
	if(stream9 == "kaypealol") {
		$('#streamtag9').append("<span>Girl</span>");
		$('#streamtag9').append("<span>Gold</span>");

		$('#stream9').addClass('girl');
		$('#stream9').addClass('plat');
	}
	if(stream9 == "froggen") {
		$('#streamtag9').append("<span>Pro</span>");
		$('#streamtag9').append("<span>Challenger</span>");
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('pro');
		$('#stream9').addClass('challenger');
		$('#stream9').addClass('english');
	}
	if(stream9 == "sp4zie") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Funny</span>");
		$('#streamtag9').append("<span>Platinum</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('funny');
		$('#stream9').addClass('plat');
	}
	if(stream9 == "mushisgosu") {
		$('#streamtag9').append("<span>Girl</span>");
		$('#streamtag9').append("<span>Music</span>");
		$('#streamtag9').append("<span>Challenger</span>");

		$('#stream9').addClass('girl');
		$('#stream9').addClass('music');
		$('#stream9').addClass('challenger');
	}
	if(stream9 == "cowsep") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Funny</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('funny');
	}


	var stream10 = "<? echo $lolarray->streams[10]->channel->name; ?>";

	if(stream10 == "riotgames") {
		$('#streamtag10').append("<span>Riot</span>");
		$('#streamtag10').append("<span>Competition</span>");
		$('#streamtag10').append("<span>Tournament</span>");
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('riot');
		$('#stream10').addClass('competition');
		$('#stream10').addClass('tournament');
		$('#stream10').addClass('english');
	}
	if(stream10 == "nightblue3") {
		$('#streamtag10').append("<span>Challenger</span>");
		$('#streamtag10').append("<span>Jungle</span>");
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('challenger');
		$('#stream10').addClass('jungle');
		$('#stream10').addClass('english');
	}
	if(stream10 == "imaqtpie") {
		$('#streamtag10').append("<span>Challenger</span>");
		$('#streamtag10').append("<span>AD Carry</span>");
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('challenger');
		$('#stream10').addClass('adc');
		$('#stream10').addClass('english');
	}
	if(stream10 == "domingo") {
		$('#streamtag10').append("<span>French</span>");

		$('#stream10').addClass('french');
	}
	if(stream10 == "skumbagkrepo") {
		$('#streamtag10').append("<span>Caster</span>");
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Master</span>");

		$('#stream10').addClass('caster');
		$('#stream10').addClass('english');
		$('#stream10').addClass('master');
	}
	if(stream10 == "tsm_theoddone") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Diamond</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('master');

	}
	if(stream10 == "trick10g") {
		$('#streamtag10').append("<span>Diamond</span>");
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('master');
		$('#stream10').addClass('english');
	}
	if(stream10 == "thaldrinlol") {
		$('#streamtag10').append("<span>Turkish</span>");

		$('#stream10').addClass('turkish');
	}
	if(stream10 == "wingsofdeath") {
		$('#streamtag10').append("<span>Master</span>");

		$('#stream10').addClass('master');
	}
	if(stream10 == "zerator") {
		$('#streamtag10').append("<span>French</span>");

		$('#stream10').addClass('french');
	}
	if(stream10 == "kaypealol") {
		$('#streamtag10').append("<span>Girl</span>");
		$('#streamtag10').append("<span>Gold</span>");

		$('#stream10').addClass('girl');
		$('#stream10').addClass('plat');
	}
	if(stream10 == "froggen") {
		$('#streamtag10').append("<span>Pro</span>");
		$('#streamtag10').append("<span>Challenger</span>");
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('pro');
		$('#stream10').addClass('challenger');
		$('#stream10').addClass('english');
	}
	if(stream10 == "sp4zie") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Funny</span>");
		$('#streamtag10').append("<span>Platinum</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('funny');
		$('#stream10').addClass('plat');
	}
	if(stream10 == "mushisgosu") {
		$('#streamtag10').append("<span>Girl</span>");
		$('#streamtag10').append("<span>Music</span>");
		$('#streamtag10').append("<span>Challenger</span>");

		$('#stream10').addClass('girl');
		$('#stream10').addClass('music');
		$('#stream10').addClass('challenger');
	}
	if(stream10 == "cowsep") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Funny</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('funny');
	}


	var stream11 = "<? echo $lolarray->streams[11]->channel->name; ?>";

	if(stream11 == "riotgames") {
		$('#streamtag11').append("<span>Riot</span>");
		$('#streamtag11').append("<span>Competition</span>");
		$('#streamtag11').append("<span>Tournament</span>");
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('riot');
		$('#stream11').addClass('competition');
		$('#stream11').addClass('tournament');
		$('#stream11').addClass('english');
	}
	if(stream11 == "nightblue3") {
		$('#streamtag11').append("<span>Challenger</span>");
		$('#streamtag11').append("<span>Jungle</span>");
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('challenger');
		$('#stream11').addClass('jungle');
		$('#stream11').addClass('english');
	}
	if(stream11 == "imaqtpie") {
		$('#streamtag11').append("<span>Challenger</span>");
		$('#streamtag11').append("<span>AD Carry</span>");
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('challenger');
		$('#stream11').addClass('adc');
		$('#stream11').addClass('english');
	}
	if(stream11 == "domingo") {
		$('#streamtag11').append("<span>French</span>");

		$('#stream11').addClass('french');
	}
	if(stream11 == "skumbagkrepo") {
		$('#streamtag11').append("<span>Caster</span>");
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Master</span>");

		$('#stream11').addClass('caster');
		$('#stream11').addClass('english');
		$('#stream11').addClass('master');
	}
	if(stream11 == "tsm_theoddone") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Diamond</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('master');

	}
	if(stream11 == "trick11g") {
		$('#streamtag11').append("<span>Diamond</span>");
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('master');
		$('#stream11').addClass('english');
	}
	if(stream11 == "thaldrinlol") {
		$('#streamtag11').append("<span>Turkish</span>");

		$('#stream11').addClass('turkish');
	}
	if(stream11 == "wingsofdeath") {
		$('#streamtag11').append("<span>Master</span>");

		$('#stream11').addClass('master');
	}
	if(stream11 == "zerator") {
		$('#streamtag11').append("<span>French</span>");

		$('#stream11').addClass('french');
	}
	if(stream11 == "kaypealol") {
		$('#streamtag11').append("<span>Girl</span>");
		$('#streamtag11').append("<span>Gold</span>");

		$('#stream11').addClass('girl');
		$('#stream11').addClass('plat');
	}
	if(stream11 == "froggen") {
		$('#streamtag11').append("<span>Pro</span>");
		$('#streamtag11').append("<span>Challenger</span>");
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('pro');
		$('#stream11').addClass('challenger');
		$('#stream11').addClass('english');
	}
	if(stream11 == "sp4zie") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Funny</span>");
		$('#streamtag11').append("<span>Platinum</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('funny');
		$('#stream11').addClass('plat');
	}
	if(stream11 == "mushisgosu") {
		$('#streamtag11').append("<span>Girl</span>");
		$('#streamtag11').append("<span>Music</span>");
		$('#streamtag11').append("<span>Challenger</span>");

		$('#stream11').addClass('girl');
		$('#stream11').addClass('music');
		$('#stream11').addClass('challenger');
	}
	if(stream11 == "cowsep") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Funny</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('funny');
	}
	</script>

	<script>
	var allstreams = "$('.streampic .row .col-md-4')";
	var checked = "$("#filter :checkbox:checked")";

	function updateContentVisibility(){
		if(checked.length){
			allstreams.hide();
			checked.each(function(){
				$("." + $(this).val()).show();
			});
		} else {
			allstreams.show();
		}
	}

	$("#filter :checkbox").click(updateContentVisibility);
	updateContentVisibility();

	</script>
</body>
</html>
