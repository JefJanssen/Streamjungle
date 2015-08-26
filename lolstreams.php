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
					<li><a href="contactform.php">Contact</a></li>


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
					<div class="col-md-4" id="stream12">
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
						<div class="streamtags" id="streamtag12">
						</div>


					</div>
					<div class="col-md-4" id="stream13">
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
						<div class="streamtags" id="streamtag13">
						</div>

					</div>
					<div class="col-md-4" id="stream14">
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
						<div class="streamtags" id="streamtag14">
						</div>

					</div>
				</div>

				<div class="row" id="stream15">
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
						<div class="streamtags" id="streamtag15">
						</div>


					</div>
					<div class="col-md-4" id="stream16">
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
						<div class="streamtags" id="streamtag16">
						</div>

					</div>
					<div class="col-md-4" id="stream17">
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
						<div class="streamtags" id="streamtag17">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream18">
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
						<div class="streamtags" id="streamtag18">
						</div>


					</div>
					<div class="col-md-4" id="stream19">
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
						<div class="streamtags" id="streamtag19">
						</div>

					</div>
					<div class="col-md-4" id="stream20">
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
						<div class="streamtags" id="streamtag20">
						</div>

					</div>
				</div>

				<div class="row" id="stream21">
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
						<div class="streamtags" id="streamtag21">
						</div>


					</div>
					<div class="col-md-4" id="stream22">
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
						<div class="streamtags" id="streamtag22">
						</div>

					</div>
					<div class="col-md-4" id="stream23">
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
						<div class="streamtags" id="streamtag23">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream24">
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
						<div class="streamtags" id="streamtag24">
						</div>


					</div>
					<div class="col-md-4" id="stream25">
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
						<div class="streamtags" id="streamtag25">
						</div>

					</div>
					<div class="col-md-4" id="stream26">
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
						<div class="streamtags" id="streamtag26">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream27">
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
						<div class="streamtags" id="streamtag27">
						</div>


					</div>
					<div class="col-md-4" id="stream28">
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
						<div class="streamtags" id="streamtag28">
						</div>

					</div>
					<div class="col-md-4" id="stream29">
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
						<div class="streamtags" id="streamtag29">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream30">
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
						<div class="streamtags" id="streamtag30">
						</div>


					</div>
					<div class="col-md-4" id="stream31">
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
						<div class="streamtags" id="streamtag31">
						</div>

					</div>
					<div class="col-md-4" id="stream32">
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
						<div class="streamtags" id="streamtag32">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream33">
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
						<div class="streamtags" id="streamtag33">
						</div>


					</div>
					<div class="col-md-4" id="stream34">
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
						<div class="streamtags" id="streamtag34">
						</div>

					</div>
					<div class="col-md-4" id="stream35">
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
						<div class="streamtags" id="streamtag35">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream36">
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
						<div class="streamtags" id="streamtag36">
						</div>


					</div>
					<div class="col-md-4" id="stream37">
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
						<div class="streamtags" id="streamtag37">
						</div>

					</div>
					<div class="col-md-4" id="stream38">
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
						<div class="streamtags" id="streamtag38">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream39">
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
						<div class="streamtags" id="streamtag39">
						</div>


					</div>
					<div class="col-md-4" id="stream40">
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
						<div class="streamtags" id="streamtag40">
						</div>

					</div>
					<div class="col-md-4" id="stream41">
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
						<div class="streamtags" id="streamtag41">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream42">
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
						<div class="streamtags" id="streamtag42">
						</div>


					</div>
					<div class="col-md-4" id="stream43">
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
						<div class="streamtags" id="streamtag43">
						</div>

					</div>
					<div class="col-md-4" id="stream44">
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
						<div class="streamtags" id="streamtag44">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream45">
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
						<div class="streamtags" id="streamtag45">
						</div>


					</div>
					<div class="col-md-4" id="stream46">
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
						<div class="streamtags" id="streamtag46">
						</div>

					</div>
					<div class="col-md-4" id="stream47">
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
						<div class="streamtags" id="streamtag47">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream48">
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
						<div class="streamtags" id="streamtag48">
						</div>


					</div>
					<div class="col-md-4" id="stream49">
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
						<div class="streamtags" id="streamtag49">
						</div>

					</div>
					<div class="col-md-4" id="stream50">
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
						<div class="streamtags" id="streamtag50">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream51">
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
						<div class="streamtags" id="streamtag51">
						</div>


					</div>
					<div class="col-md-4" id="stream52">
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
						<div class="streamtags" id="streamtag52">
						</div>

					</div>
					<div class="col-md-4" id="stream53">
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
						<div class="streamtags" id="streamtag53">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream54">
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
						<div class="streamtags" id="streamtag54">
						</div>


					</div>
					<div class="col-md-4" id="stream55">
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
						<div class="streamtags" id="streamtag55">
						</div>

					</div>
					<div class="col-md-4" id="stream56">
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
						<div class="streamtags" id="streamtag56">
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream57">
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
						<div class="streamtags" id="streamtag57">
						</div>


					</div>
					<div class="col-md-4" id="stream58">
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
						<div class="streamtags" id="streamtag58">
						</div>

					</div>
					<div class="col-md-4" id="stream59">
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
						<div class="streamtags" id="streamtag59">
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
	if(stream0 == "riotgames2") {
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
	if(stream1 == "riotgames2") {
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
	if(stream2 == "riotgames2") {
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
	if(stream3 == "riotgames2") {
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
	if(stream4 == "riotgames2") {
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
	if(stream5 == "riotgames2") {
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
	if(stream6 == "riotgames2") {
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
	if(stream7 == "riotgames2") {
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
	if(stream8 == "riotgames2") {
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
	if(stream9 == "riotgames2") {
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
	if(stream10 == "riotgames2") {
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
	if(stream11 == "riotgames2") {
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

	var stream12 = "<? echo $lolarray->streams[12]->channel->name; ?>";

	if(stream12 == "riotgames") {
		$('#streamtag12').append("<span>Riot</span>");
		$('#streamtag12').append("<span>Competition</span>");
		$('#streamtag12').append("<span>Tournament</span>");
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('riot');
		$('#stream12').addClass('competition');
		$('#stream12').addClass('tournament');
		$('#stream12').addClass('english');
	}
	if(stream12 == "riotgames2") {
		$('#streamtag12').append("<span>Riot</span>");
		$('#streamtag12').append("<span>Competition</span>");
		$('#streamtag12').append("<span>Tournament</span>");
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('riot');
		$('#stream12').addClass('competition');
		$('#stream12').addClass('tournament');
		$('#stream12').addClass('english');
	}
	if(stream12 == "nightblue3") {
		$('#streamtag12').append("<span>Challenger</span>");
		$('#streamtag12').append("<span>Jungle</span>");
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('challenger');
		$('#stream12').addClass('jungle');
		$('#stream12').addClass('english');
	}
	if(stream12 == "imaqtpie") {
		$('#streamtag12').append("<span>Challenger</span>");
		$('#streamtag12').append("<span>AD Carry</span>");
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('challenger');
		$('#stream12').addClass('adc');
		$('#stream12').addClass('english');
	}
	if(stream12 == "domingo") {
		$('#streamtag12').append("<span>French</span>");

		$('#stream12').addClass('french');
	}
	if(stream12 == "skumbagkrepo") {
		$('#streamtag12').append("<span>Caster</span>");
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Master</span>");

		$('#stream12').addClass('caster');
		$('#stream12').addClass('english');
		$('#stream12').addClass('master');
	}
	if(stream12 == "tsm_theoddone") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Diamond</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('master');

	}
	if(stream12 == "trick12g") {
		$('#streamtag12').append("<span>Diamond</span>");
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('master');
		$('#stream12').addClass('english');
	}
	if(stream12 == "thaldrinlol") {
		$('#streamtag12').append("<span>Turkish</span>");

		$('#stream12').addClass('turkish');
	}
	if(stream12 == "wingsofdeath") {
		$('#streamtag12').append("<span>Master</span>");

		$('#stream12').addClass('master');
	}
	if(stream12 == "zerator") {
		$('#streamtag12').append("<span>French</span>");

		$('#stream12').addClass('french');
	}
	if(stream12 == "kaypealol") {
		$('#streamtag12').append("<span>Girl</span>");
		$('#streamtag12').append("<span>Gold</span>");

		$('#stream12').addClass('girl');
		$('#stream12').addClass('plat');
	}
	if(stream12 == "froggen") {
		$('#streamtag12').append("<span>Pro</span>");
		$('#streamtag12').append("<span>Challenger</span>");
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('pro');
		$('#stream12').addClass('challenger');
		$('#stream12').addClass('english');
	}
	if(stream12 == "sp4zie") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Funny</span>");
		$('#streamtag12').append("<span>Platinum</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('funny');
		$('#stream12').addClass('plat');
	}
	if(stream12 == "mushisgosu") {
		$('#streamtag12').append("<span>Girl</span>");
		$('#streamtag12').append("<span>Music</span>");
		$('#streamtag12').append("<span>Challenger</span>");

		$('#stream12').addClass('girl');
		$('#stream12').addClass('music');
		$('#stream12').addClass('challenger');
	}
	if(stream12 == "cowsep") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Funny</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('funny');
	}

	var stream13 = "<? echo $lolarray->streams[13]->channel->name; ?>";

	if(stream13 == "riotgames") {
		$('#streamtag13').append("<span>Riot</span>");
		$('#streamtag13').append("<span>Competition</span>");
		$('#streamtag13').append("<span>Tournament</span>");
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('riot');
		$('#stream13').addClass('competition');
		$('#stream13').addClass('tournament');
		$('#stream13').addClass('english');
	}
	if(stream13 == "riotgames2") {
		$('#streamtag13').append("<span>Riot</span>");
		$('#streamtag13').append("<span>Competition</span>");
		$('#streamtag13').append("<span>Tournament</span>");
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('riot');
		$('#stream13').addClass('competition');
		$('#stream13').addClass('tournament');
		$('#stream13').addClass('english');
	}
	if(stream13 == "nightblue3") {
		$('#streamtag13').append("<span>Challenger</span>");
		$('#streamtag13').append("<span>Jungle</span>");
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('challenger');
		$('#stream13').addClass('jungle');
		$('#stream13').addClass('english');
	}
	if(stream13 == "imaqtpie") {
		$('#streamtag13').append("<span>Challenger</span>");
		$('#streamtag13').append("<span>AD Carry</span>");
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('challenger');
		$('#stream13').addClass('adc');
		$('#stream13').addClass('english');
	}
	if(stream13 == "domingo") {
		$('#streamtag13').append("<span>French</span>");

		$('#stream13').addClass('french');
	}
	if(stream13 == "skumbagkrepo") {
		$('#streamtag13').append("<span>Caster</span>");
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Master</span>");

		$('#stream13').addClass('caster');
		$('#stream13').addClass('english');
		$('#stream13').addClass('master');
	}
	if(stream13 == "tsm_theoddone") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Diamond</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('master');

	}
	if(stream13 == "trick13g") {
		$('#streamtag13').append("<span>Diamond</span>");
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('master');
		$('#stream13').addClass('english');
	}
	if(stream13 == "thaldrinlol") {
		$('#streamtag13').append("<span>Turkish</span>");

		$('#stream13').addClass('turkish');
	}
	if(stream13 == "wingsofdeath") {
		$('#streamtag13').append("<span>Master</span>");

		$('#stream13').addClass('master');
	}
	if(stream13 == "zerator") {
		$('#streamtag13').append("<span>French</span>");

		$('#stream13').addClass('french');
	}
	if(stream13 == "kaypealol") {
		$('#streamtag13').append("<span>Girl</span>");
		$('#streamtag13').append("<span>Gold</span>");

		$('#stream13').addClass('girl');
		$('#stream13').addClass('plat');
	}
	if(stream13 == "froggen") {
		$('#streamtag13').append("<span>Pro</span>");
		$('#streamtag13').append("<span>Challenger</span>");
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('pro');
		$('#stream13').addClass('challenger');
		$('#stream13').addClass('english');
	}
	if(stream13 == "sp4zie") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Funny</span>");
		$('#streamtag13').append("<span>Platinum</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('funny');
		$('#stream13').addClass('plat');
	}
	if(stream13 == "mushisgosu") {
		$('#streamtag13').append("<span>Girl</span>");
		$('#streamtag13').append("<span>Music</span>");
		$('#streamtag13').append("<span>Challenger</span>");

		$('#stream13').addClass('girl');
		$('#stream13').addClass('music');
		$('#stream13').addClass('challenger');
	}
	if(stream13 == "cowsep") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Funny</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('funny');
	}

	var stream14 = "<? echo $lolarray->streams[14]->channel->name; ?>";

	if(stream14 == "riotgames") {
		$('#streamtag14').append("<span>Riot</span>");
		$('#streamtag14').append("<span>Competition</span>");
		$('#streamtag14').append("<span>Tournament</span>");
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('riot');
		$('#stream14').addClass('competition');
		$('#stream14').addClass('tournament');
		$('#stream14').addClass('english');
	}
	if(stream14 == "riotgames2") {
		$('#streamtag14').append("<span>Riot</span>");
		$('#streamtag14').append("<span>Competition</span>");
		$('#streamtag14').append("<span>Tournament</span>");
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('riot');
		$('#stream14').addClass('competition');
		$('#stream14').addClass('tournament');
		$('#stream14').addClass('english');
	}
	if(stream14 == "nightblue3") {
		$('#streamtag14').append("<span>Challenger</span>");
		$('#streamtag14').append("<span>Jungle</span>");
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('challenger');
		$('#stream14').addClass('jungle');
		$('#stream14').addClass('english');
	}
	if(stream14 == "imaqtpie") {
		$('#streamtag14').append("<span>Challenger</span>");
		$('#streamtag14').append("<span>AD Carry</span>");
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('challenger');
		$('#stream14').addClass('adc');
		$('#stream14').addClass('english');
	}
	if(stream14 == "domingo") {
		$('#streamtag14').append("<span>French</span>");

		$('#stream14').addClass('french');
	}
	if(stream14 == "skumbagkrepo") {
		$('#streamtag14').append("<span>Caster</span>");
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Master</span>");

		$('#stream14').addClass('caster');
		$('#stream14').addClass('english');
		$('#stream14').addClass('master');
	}
	if(stream14 == "tsm_theoddone") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Diamond</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('master');

	}
	if(stream14 == "trick14g") {
		$('#streamtag14').append("<span>Diamond</span>");
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('master');
		$('#stream14').addClass('english');
	}
	if(stream14 == "thaldrinlol") {
		$('#streamtag14').append("<span>Turkish</span>");

		$('#stream14').addClass('turkish');
	}
	if(stream14 == "wingsofdeath") {
		$('#streamtag14').append("<span>Master</span>");

		$('#stream14').addClass('master');
	}
	if(stream14 == "zerator") {
		$('#streamtag14').append("<span>French</span>");

		$('#stream14').addClass('french');
	}
	if(stream14 == "kaypealol") {
		$('#streamtag14').append("<span>Girl</span>");
		$('#streamtag14').append("<span>Gold</span>");

		$('#stream14').addClass('girl');
		$('#stream14').addClass('plat');
	}
	if(stream14 == "froggen") {
		$('#streamtag14').append("<span>Pro</span>");
		$('#streamtag14').append("<span>Challenger</span>");
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('pro');
		$('#stream14').addClass('challenger');
		$('#stream14').addClass('english');
	}
	if(stream14 == "sp4zie") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Funny</span>");
		$('#streamtag14').append("<span>Platinum</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('funny');
		$('#stream14').addClass('plat');
	}
	if(stream14 == "mushisgosu") {
		$('#streamtag14').append("<span>Girl</span>");
		$('#streamtag14').append("<span>Music</span>");
		$('#streamtag14').append("<span>Challenger</span>");

		$('#stream14').addClass('girl');
		$('#stream14').addClass('music');
		$('#stream14').addClass('challenger');
	}
	if(stream14 == "cowsep") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Funny</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('funny');
	}

	var stream15 = "<? echo $lolarray->streams[15]->channel->name; ?>";

	if(stream15 == "riotgames") {
		$('#streamtag15').append("<span>Riot</span>");
		$('#streamtag15').append("<span>Competition</span>");
		$('#streamtag15').append("<span>Tournament</span>");
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('riot');
		$('#stream15').addClass('competition');
		$('#stream15').addClass('tournament');
		$('#stream15').addClass('english');
	}
	if(stream15 == "riotgames2") {
		$('#streamtag15').append("<span>Riot</span>");
		$('#streamtag15').append("<span>Competition</span>");
		$('#streamtag15').append("<span>Tournament</span>");
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('riot');
		$('#stream15').addClass('competition');
		$('#stream15').addClass('tournament');
		$('#stream15').addClass('english');
	}
	if(stream15 == "nightblue3") {
		$('#streamtag15').append("<span>Challenger</span>");
		$('#streamtag15').append("<span>Jungle</span>");
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('challenger');
		$('#stream15').addClass('jungle');
		$('#stream15').addClass('english');
	}
	if(stream15 == "imaqtpie") {
		$('#streamtag15').append("<span>Challenger</span>");
		$('#streamtag15').append("<span>AD Carry</span>");
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('challenger');
		$('#stream15').addClass('adc');
		$('#stream15').addClass('english');
	}
	if(stream15 == "domingo") {
		$('#streamtag15').append("<span>French</span>");

		$('#stream15').addClass('french');
	}
	if(stream15 == "skumbagkrepo") {
		$('#streamtag15').append("<span>Caster</span>");
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Master</span>");

		$('#stream15').addClass('caster');
		$('#stream15').addClass('english');
		$('#stream15').addClass('master');
	}
	if(stream15 == "tsm_theoddone") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Diamond</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('master');

	}
	if(stream15 == "trick15g") {
		$('#streamtag15').append("<span>Diamond</span>");
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('master');
		$('#stream15').addClass('english');
	}
	if(stream15 == "thaldrinlol") {
		$('#streamtag15').append("<span>Turkish</span>");

		$('#stream15').addClass('turkish');
	}
	if(stream15 == "wingsofdeath") {
		$('#streamtag15').append("<span>Master</span>");

		$('#stream15').addClass('master');
	}
	if(stream15 == "zerator") {
		$('#streamtag15').append("<span>French</span>");

		$('#stream15').addClass('french');
	}
	if(stream15 == "kaypealol") {
		$('#streamtag15').append("<span>Girl</span>");
		$('#streamtag15').append("<span>Gold</span>");

		$('#stream15').addClass('girl');
		$('#stream15').addClass('plat');
	}
	if(stream15 == "froggen") {
		$('#streamtag15').append("<span>Pro</span>");
		$('#streamtag15').append("<span>Challenger</span>");
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('pro');
		$('#stream15').addClass('challenger');
		$('#stream15').addClass('english');
	}
	if(stream15 == "sp4zie") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Funny</span>");
		$('#streamtag15').append("<span>Platinum</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('funny');
		$('#stream15').addClass('plat');
	}
	if(stream15 == "mushisgosu") {
		$('#streamtag15').append("<span>Girl</span>");
		$('#streamtag15').append("<span>Music</span>");
		$('#streamtag15').append("<span>Challenger</span>");

		$('#stream15').addClass('girl');
		$('#stream15').addClass('music');
		$('#stream15').addClass('challenger');
	}
	if(stream15 == "cowsep") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Funny</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('funny');
	}

	var stream16 = "<? echo $lolarray->streams[16]->channel->name; ?>";

	if(stream16 == "riotgames") {
		$('#streamtag16').append("<span>Riot</span>");
		$('#streamtag16').append("<span>Competition</span>");
		$('#streamtag16').append("<span>Tournament</span>");
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('riot');
		$('#stream16').addClass('competition');
		$('#stream16').addClass('tournament');
		$('#stream16').addClass('english');
	}
	if(stream16 == "riotgames2") {
		$('#streamtag16').append("<span>Riot</span>");
		$('#streamtag16').append("<span>Competition</span>");
		$('#streamtag16').append("<span>Tournament</span>");
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('riot');
		$('#stream16').addClass('competition');
		$('#stream16').addClass('tournament');
		$('#stream16').addClass('english');
	}
	if(stream16 == "nightblue3") {
		$('#streamtag16').append("<span>Challenger</span>");
		$('#streamtag16').append("<span>Jungle</span>");
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('challenger');
		$('#stream16').addClass('jungle');
		$('#stream16').addClass('english');
	}
	if(stream16 == "imaqtpie") {
		$('#streamtag16').append("<span>Challenger</span>");
		$('#streamtag16').append("<span>AD Carry</span>");
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('challenger');
		$('#stream16').addClass('adc');
		$('#stream16').addClass('english');
	}
	if(stream16 == "domingo") {
		$('#streamtag16').append("<span>French</span>");

		$('#stream16').addClass('french');
	}
	if(stream16 == "skumbagkrepo") {
		$('#streamtag16').append("<span>Caster</span>");
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Master</span>");

		$('#stream16').addClass('caster');
		$('#stream16').addClass('english');
		$('#stream16').addClass('master');
	}
	if(stream16 == "tsm_theoddone") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Diamond</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('master');

	}
	if(stream16 == "trick16g") {
		$('#streamtag16').append("<span>Diamond</span>");
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('master');
		$('#stream16').addClass('english');
	}
	if(stream16 == "thaldrinlol") {
		$('#streamtag16').append("<span>Turkish</span>");

		$('#stream16').addClass('turkish');
	}
	if(stream16 == "wingsofdeath") {
		$('#streamtag16').append("<span>Master</span>");

		$('#stream16').addClass('master');
	}
	if(stream16 == "zerator") {
		$('#streamtag16').append("<span>French</span>");

		$('#stream16').addClass('french');
	}
	if(stream16 == "kaypealol") {
		$('#streamtag16').append("<span>Girl</span>");
		$('#streamtag16').append("<span>Gold</span>");

		$('#stream16').addClass('girl');
		$('#stream16').addClass('plat');
	}
	if(stream16 == "froggen") {
		$('#streamtag16').append("<span>Pro</span>");
		$('#streamtag16').append("<span>Challenger</span>");
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('pro');
		$('#stream16').addClass('challenger');
		$('#stream16').addClass('english');
	}
	if(stream16 == "sp4zie") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Funny</span>");
		$('#streamtag16').append("<span>Platinum</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('funny');
		$('#stream16').addClass('plat');
	}
	if(stream16 == "mushisgosu") {
		$('#streamtag16').append("<span>Girl</span>");
		$('#streamtag16').append("<span>Music</span>");
		$('#streamtag16').append("<span>Challenger</span>");

		$('#stream16').addClass('girl');
		$('#stream16').addClass('music');
		$('#stream16').addClass('challenger');
	}
	if(stream16 == "cowsep") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Funny</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('funny');
	}

	var stream17 = "<? echo $lolarray->streams[17]->channel->name; ?>";

	if(stream17 == "riotgames") {
		$('#streamtag17').append("<span>Riot</span>");
		$('#streamtag17').append("<span>Competition</span>");
		$('#streamtag17').append("<span>Tournament</span>");
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('riot');
		$('#stream17').addClass('competition');
		$('#stream17').addClass('tournament');
		$('#stream17').addClass('english');
	}
	if(stream17 == "riotgames2") {
		$('#streamtag17').append("<span>Riot</span>");
		$('#streamtag17').append("<span>Competition</span>");
		$('#streamtag17').append("<span>Tournament</span>");
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('riot');
		$('#stream17').addClass('competition');
		$('#stream17').addClass('tournament');
		$('#stream17').addClass('english');
	}
	if(stream17 == "nightblue3") {
		$('#streamtag17').append("<span>Challenger</span>");
		$('#streamtag17').append("<span>Jungle</span>");
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('challenger');
		$('#stream17').addClass('jungle');
		$('#stream17').addClass('english');
	}
	if(stream17 == "imaqtpie") {
		$('#streamtag17').append("<span>Challenger</span>");
		$('#streamtag17').append("<span>AD Carry</span>");
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('challenger');
		$('#stream17').addClass('adc');
		$('#stream17').addClass('english');
	}
	if(stream17 == "domingo") {
		$('#streamtag17').append("<span>French</span>");

		$('#stream17').addClass('french');
	}
	if(stream17 == "skumbagkrepo") {
		$('#streamtag17').append("<span>Caster</span>");
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Master</span>");

		$('#stream17').addClass('caster');
		$('#stream17').addClass('english');
		$('#stream17').addClass('master');
	}
	if(stream17 == "tsm_theoddone") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Diamond</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('master');

	}
	if(stream17 == "trick17g") {
		$('#streamtag17').append("<span>Diamond</span>");
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('master');
		$('#stream17').addClass('english');
	}
	if(stream17 == "thaldrinlol") {
		$('#streamtag17').append("<span>Turkish</span>");

		$('#stream17').addClass('turkish');
	}
	if(stream17 == "wingsofdeath") {
		$('#streamtag17').append("<span>Master</span>");

		$('#stream17').addClass('master');
	}
	if(stream17 == "zerator") {
		$('#streamtag17').append("<span>French</span>");

		$('#stream17').addClass('french');
	}
	if(stream17 == "kaypealol") {
		$('#streamtag17').append("<span>Girl</span>");
		$('#streamtag17').append("<span>Gold</span>");

		$('#stream17').addClass('girl');
		$('#stream17').addClass('plat');
	}
	if(stream17 == "froggen") {
		$('#streamtag17').append("<span>Pro</span>");
		$('#streamtag17').append("<span>Challenger</span>");
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('pro');
		$('#stream17').addClass('challenger');
		$('#stream17').addClass('english');
	}
	if(stream17 == "sp4zie") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Funny</span>");
		$('#streamtag17').append("<span>Platinum</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('funny');
		$('#stream17').addClass('plat');
	}
	if(stream17 == "mushisgosu") {
		$('#streamtag17').append("<span>Girl</span>");
		$('#streamtag17').append("<span>Music</span>");
		$('#streamtag17').append("<span>Challenger</span>");

		$('#stream17').addClass('girl');
		$('#stream17').addClass('music');
		$('#stream17').addClass('challenger');
	}
	if(stream17 == "cowsep") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Funny</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('funny');
	}

	var stream18 = "<? echo $lolarray->streams[18]->channel->name; ?>";

	if(stream18 == "riotgames") {
		$('#streamtag18').append("<span>Riot</span>");
		$('#streamtag18').append("<span>Competition</span>");
		$('#streamtag18').append("<span>Tournament</span>");
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('riot');
		$('#stream18').addClass('competition');
		$('#stream18').addClass('tournament');
		$('#stream18').addClass('english');
	}
	if(stream18 == "riotgames2") {
		$('#streamtag18').append("<span>Riot</span>");
		$('#streamtag18').append("<span>Competition</span>");
		$('#streamtag18').append("<span>Tournament</span>");
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('riot');
		$('#stream18').addClass('competition');
		$('#stream18').addClass('tournament');
		$('#stream18').addClass('english');
	}
	if(stream18 == "nightblue3") {
		$('#streamtag18').append("<span>Challenger</span>");
		$('#streamtag18').append("<span>Jungle</span>");
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('challenger');
		$('#stream18').addClass('jungle');
		$('#stream18').addClass('english');
	}
	if(stream18 == "imaqtpie") {
		$('#streamtag18').append("<span>Challenger</span>");
		$('#streamtag18').append("<span>AD Carry</span>");
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('challenger');
		$('#stream18').addClass('adc');
		$('#stream18').addClass('english');
	}
	if(stream18 == "domingo") {
		$('#streamtag18').append("<span>French</span>");

		$('#stream18').addClass('french');
	}
	if(stream18 == "skumbagkrepo") {
		$('#streamtag18').append("<span>Caster</span>");
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Master</span>");

		$('#stream18').addClass('caster');
		$('#stream18').addClass('english');
		$('#stream18').addClass('master');
	}
	if(stream18 == "tsm_theoddone") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Diamond</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('master');

	}
	if(stream18 == "trick18g") {
		$('#streamtag18').append("<span>Diamond</span>");
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('master');
		$('#stream18').addClass('english');
	}
	if(stream18 == "thaldrinlol") {
		$('#streamtag18').append("<span>Turkish</span>");

		$('#stream18').addClass('turkish');
	}
	if(stream18 == "wingsofdeath") {
		$('#streamtag18').append("<span>Master</span>");

		$('#stream18').addClass('master');
	}
	if(stream18 == "zerator") {
		$('#streamtag18').append("<span>French</span>");

		$('#stream18').addClass('french');
	}
	if(stream18 == "kaypealol") {
		$('#streamtag18').append("<span>Girl</span>");
		$('#streamtag18').append("<span>Gold</span>");

		$('#stream18').addClass('girl');
		$('#stream18').addClass('plat');
	}
	if(stream18 == "froggen") {
		$('#streamtag18').append("<span>Pro</span>");
		$('#streamtag18').append("<span>Challenger</span>");
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('pro');
		$('#stream18').addClass('challenger');
		$('#stream18').addClass('english');
	}
	if(stream18 == "sp4zie") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Funny</span>");
		$('#streamtag18').append("<span>Platinum</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('funny');
		$('#stream18').addClass('plat');
	}
	if(stream18 == "mushisgosu") {
		$('#streamtag18').append("<span>Girl</span>");
		$('#streamtag18').append("<span>Music</span>");
		$('#streamtag18').append("<span>Challenger</span>");

		$('#stream18').addClass('girl');
		$('#stream18').addClass('music');
		$('#stream18').addClass('challenger');
	}
	if(stream18 == "cowsep") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Funny</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('funny');
	}

	var stream19 = "<? echo $lolarray->streams[19]->channel->name; ?>";

	if(stream19 == "riotgames") {
		$('#streamtag19').append("<span>Riot</span>");
		$('#streamtag19').append("<span>Competition</span>");
		$('#streamtag19').append("<span>Tournament</span>");
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('riot');
		$('#stream19').addClass('competition');
		$('#stream19').addClass('tournament');
		$('#stream19').addClass('english');
	}
	if(stream19 == "riotgames2") {
		$('#streamtag19').append("<span>Riot</span>");
		$('#streamtag19').append("<span>Competition</span>");
		$('#streamtag19').append("<span>Tournament</span>");
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('riot');
		$('#stream19').addClass('competition');
		$('#stream19').addClass('tournament');
		$('#stream19').addClass('english');
	}
	if(stream19 == "nightblue3") {
		$('#streamtag19').append("<span>Challenger</span>");
		$('#streamtag19').append("<span>Jungle</span>");
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('challenger');
		$('#stream19').addClass('jungle');
		$('#stream19').addClass('english');
	}
	if(stream19 == "imaqtpie") {
		$('#streamtag19').append("<span>Challenger</span>");
		$('#streamtag19').append("<span>AD Carry</span>");
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('challenger');
		$('#stream19').addClass('adc');
		$('#stream19').addClass('english');
	}
	if(stream19 == "domingo") {
		$('#streamtag19').append("<span>French</span>");

		$('#stream19').addClass('french');
	}
	if(stream19 == "skumbagkrepo") {
		$('#streamtag19').append("<span>Caster</span>");
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Master</span>");

		$('#stream19').addClass('caster');
		$('#stream19').addClass('english');
		$('#stream19').addClass('master');
	}
	if(stream19 == "tsm_theoddone") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Diamond</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('master');

	}
	if(stream19 == "trick19g") {
		$('#streamtag19').append("<span>Diamond</span>");
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('master');
		$('#stream19').addClass('english');
	}
	if(stream19 == "thaldrinlol") {
		$('#streamtag19').append("<span>Turkish</span>");

		$('#stream19').addClass('turkish');
	}
	if(stream19 == "wingsofdeath") {
		$('#streamtag19').append("<span>Master</span>");

		$('#stream19').addClass('master');
	}
	if(stream19 == "zerator") {
		$('#streamtag19').append("<span>French</span>");

		$('#stream19').addClass('french');
	}
	if(stream19 == "kaypealol") {
		$('#streamtag19').append("<span>Girl</span>");
		$('#streamtag19').append("<span>Gold</span>");

		$('#stream19').addClass('girl');
		$('#stream19').addClass('plat');
	}
	if(stream19 == "froggen") {
		$('#streamtag19').append("<span>Pro</span>");
		$('#streamtag19').append("<span>Challenger</span>");
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('pro');
		$('#stream19').addClass('challenger');
		$('#stream19').addClass('english');
	}
	if(stream19 == "sp4zie") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Funny</span>");
		$('#streamtag19').append("<span>Platinum</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('funny');
		$('#stream19').addClass('plat');
	}
	if(stream19 == "mushisgosu") {
		$('#streamtag19').append("<span>Girl</span>");
		$('#streamtag19').append("<span>Music</span>");
		$('#streamtag19').append("<span>Challenger</span>");

		$('#stream19').addClass('girl');
		$('#stream19').addClass('music');
		$('#stream19').addClass('challenger');
	}
	if(stream19 == "cowsep") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Funny</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('funny');
	}

	var stream20 = "<? echo $lolarray->streams[20]->channel->name; ?>";

	if(stream20 == "riotgames") {
		$('#streamtag20').append("<span>Riot</span>");
		$('#streamtag20').append("<span>Competition</span>");
		$('#streamtag20').append("<span>Tournament</span>");
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('riot');
		$('#stream20').addClass('competition');
		$('#stream20').addClass('tournament');
		$('#stream20').addClass('english');
	}
	if(stream20 == "riotgames2") {
		$('#streamtag20').append("<span>Riot</span>");
		$('#streamtag20').append("<span>Competition</span>");
		$('#streamtag20').append("<span>Tournament</span>");
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('riot');
		$('#stream20').addClass('competition');
		$('#stream20').addClass('tournament');
		$('#stream20').addClass('english');
	}
	if(stream20 == "nightblue3") {
		$('#streamtag20').append("<span>Challenger</span>");
		$('#streamtag20').append("<span>Jungle</span>");
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('challenger');
		$('#stream20').addClass('jungle');
		$('#stream20').addClass('english');
	}
	if(stream20 == "imaqtpie") {
		$('#streamtag20').append("<span>Challenger</span>");
		$('#streamtag20').append("<span>AD Carry</span>");
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('challenger');
		$('#stream20').addClass('adc');
		$('#stream20').addClass('english');
	}
	if(stream20 == "domingo") {
		$('#streamtag20').append("<span>French</span>");

		$('#stream20').addClass('french');
	}
	if(stream20 == "skumbagkrepo") {
		$('#streamtag20').append("<span>Caster</span>");
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Master</span>");

		$('#stream20').addClass('caster');
		$('#stream20').addClass('english');
		$('#stream20').addClass('master');
	}
	if(stream20 == "tsm_theoddone") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Diamond</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('master');

	}
	if(stream20 == "trick20g") {
		$('#streamtag20').append("<span>Diamond</span>");
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('master');
		$('#stream20').addClass('english');
	}
	if(stream20 == "thaldrinlol") {
		$('#streamtag20').append("<span>Turkish</span>");

		$('#stream20').addClass('turkish');
	}
	if(stream20 == "wingsofdeath") {
		$('#streamtag20').append("<span>Master</span>");

		$('#stream20').addClass('master');
	}
	if(stream20 == "zerator") {
		$('#streamtag20').append("<span>French</span>");

		$('#stream20').addClass('french');
	}
	if(stream20 == "kaypealol") {
		$('#streamtag20').append("<span>Girl</span>");
		$('#streamtag20').append("<span>Gold</span>");

		$('#stream20').addClass('girl');
		$('#stream20').addClass('plat');
	}
	if(stream20 == "froggen") {
		$('#streamtag20').append("<span>Pro</span>");
		$('#streamtag20').append("<span>Challenger</span>");
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('pro');
		$('#stream20').addClass('challenger');
		$('#stream20').addClass('english');
	}
	if(stream20 == "sp4zie") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Funny</span>");
		$('#streamtag20').append("<span>Platinum</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('funny');
		$('#stream20').addClass('plat');
	}
	if(stream20 == "mushisgosu") {
		$('#streamtag20').append("<span>Girl</span>");
		$('#streamtag20').append("<span>Music</span>");
		$('#streamtag20').append("<span>Challenger</span>");

		$('#stream20').addClass('girl');
		$('#stream20').addClass('music');
		$('#stream20').addClass('challenger');
	}
	if(stream20 == "cowsep") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Funny</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('funny');
	}

	var stream21 = "<? echo $lolarray->streams[21]->channel->name; ?>";

	if(stream21 == "riotgames") {
		$('#streamtag21').append("<span>Riot</span>");
		$('#streamtag21').append("<span>Competition</span>");
		$('#streamtag21').append("<span>Tournament</span>");
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('riot');
		$('#stream21').addClass('competition');
		$('#stream21').addClass('tournament');
		$('#stream21').addClass('english');
	}
	if(stream21 == "riotgames2") {
		$('#streamtag21').append("<span>Riot</span>");
		$('#streamtag21').append("<span>Competition</span>");
		$('#streamtag21').append("<span>Tournament</span>");
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('riot');
		$('#stream21').addClass('competition');
		$('#stream21').addClass('tournament');
		$('#stream21').addClass('english');
	}
	if(stream21 == "nightblue3") {
		$('#streamtag21').append("<span>Challenger</span>");
		$('#streamtag21').append("<span>Jungle</span>");
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('challenger');
		$('#stream21').addClass('jungle');
		$('#stream21').addClass('english');
	}
	if(stream21 == "imaqtpie") {
		$('#streamtag21').append("<span>Challenger</span>");
		$('#streamtag21').append("<span>AD Carry</span>");
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('challenger');
		$('#stream21').addClass('adc');
		$('#stream21').addClass('english');
	}
	if(stream21 == "domingo") {
		$('#streamtag21').append("<span>French</span>");

		$('#stream21').addClass('french');
	}
	if(stream21 == "skumbagkrepo") {
		$('#streamtag21').append("<span>Caster</span>");
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Master</span>");

		$('#stream21').addClass('caster');
		$('#stream21').addClass('english');
		$('#stream21').addClass('master');
	}
	if(stream21 == "tsm_theoddone") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Diamond</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('master');

	}
	if(stream21 == "trick21g") {
		$('#streamtag21').append("<span>Diamond</span>");
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('master');
		$('#stream21').addClass('english');
	}
	if(stream21 == "thaldrinlol") {
		$('#streamtag21').append("<span>Turkish</span>");

		$('#stream21').addClass('turkish');
	}
	if(stream21 == "wingsofdeath") {
		$('#streamtag21').append("<span>Master</span>");

		$('#stream21').addClass('master');
	}
	if(stream21 == "zerator") {
		$('#streamtag21').append("<span>French</span>");

		$('#stream21').addClass('french');
	}
	if(stream21 == "kaypealol") {
		$('#streamtag21').append("<span>Girl</span>");
		$('#streamtag21').append("<span>Gold</span>");

		$('#stream21').addClass('girl');
		$('#stream21').addClass('plat');
	}
	if(stream21 == "froggen") {
		$('#streamtag21').append("<span>Pro</span>");
		$('#streamtag21').append("<span>Challenger</span>");
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('pro');
		$('#stream21').addClass('challenger');
		$('#stream21').addClass('english');
	}
	if(stream21 == "sp4zie") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Funny</span>");
		$('#streamtag21').append("<span>Platinum</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('funny');
		$('#stream21').addClass('plat');
	}
	if(stream21 == "mushisgosu") {
		$('#streamtag21').append("<span>Girl</span>");
		$('#streamtag21').append("<span>Music</span>");
		$('#streamtag21').append("<span>Challenger</span>");

		$('#stream21').addClass('girl');
		$('#stream21').addClass('music');
		$('#stream21').addClass('challenger');
	}
	if(stream21 == "cowsep") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Funny</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('funny');
	}

	var stream22 = "<? echo $lolarray->streams[22]->channel->name; ?>";

	if(stream22 == "riotgames") {
		$('#streamtag22').append("<span>Riot</span>");
		$('#streamtag22').append("<span>Competition</span>");
		$('#streamtag22').append("<span>Tournament</span>");
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('riot');
		$('#stream22').addClass('competition');
		$('#stream22').addClass('tournament');
		$('#stream22').addClass('english');
	}
	if(stream22 == "riotgames2") {
		$('#streamtag22').append("<span>Riot</span>");
		$('#streamtag22').append("<span>Competition</span>");
		$('#streamtag22').append("<span>Tournament</span>");
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('riot');
		$('#stream22').addClass('competition');
		$('#stream22').addClass('tournament');
		$('#stream22').addClass('english');
	}
	if(stream22 == "nightblue3") {
		$('#streamtag22').append("<span>Challenger</span>");
		$('#streamtag22').append("<span>Jungle</span>");
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('challenger');
		$('#stream22').addClass('jungle');
		$('#stream22').addClass('english');
	}
	if(stream22 == "imaqtpie") {
		$('#streamtag22').append("<span>Challenger</span>");
		$('#streamtag22').append("<span>AD Carry</span>");
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('challenger');
		$('#stream22').addClass('adc');
		$('#stream22').addClass('english');
	}
	if(stream22 == "domingo") {
		$('#streamtag22').append("<span>French</span>");

		$('#stream22').addClass('french');
	}
	if(stream22 == "skumbagkrepo") {
		$('#streamtag22').append("<span>Caster</span>");
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Master</span>");

		$('#stream22').addClass('caster');
		$('#stream22').addClass('english');
		$('#stream22').addClass('master');
	}
	if(stream22 == "tsm_theoddone") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Diamond</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('master');

	}
	if(stream22 == "trick22g") {
		$('#streamtag22').append("<span>Diamond</span>");
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('master');
		$('#stream22').addClass('english');
	}
	if(stream22 == "thaldrinlol") {
		$('#streamtag22').append("<span>Turkish</span>");

		$('#stream22').addClass('turkish');
	}
	if(stream22 == "wingsofdeath") {
		$('#streamtag22').append("<span>Master</span>");

		$('#stream22').addClass('master');
	}
	if(stream22 == "zerator") {
		$('#streamtag22').append("<span>French</span>");

		$('#stream22').addClass('french');
	}
	if(stream22 == "kaypealol") {
		$('#streamtag22').append("<span>Girl</span>");
		$('#streamtag22').append("<span>Gold</span>");

		$('#stream22').addClass('girl');
		$('#stream22').addClass('plat');
	}
	if(stream22 == "froggen") {
		$('#streamtag22').append("<span>Pro</span>");
		$('#streamtag22').append("<span>Challenger</span>");
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('pro');
		$('#stream22').addClass('challenger');
		$('#stream22').addClass('english');
	}
	if(stream22 == "sp4zie") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Funny</span>");
		$('#streamtag22').append("<span>Platinum</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('funny');
		$('#stream22').addClass('plat');
	}
	if(stream22 == "mushisgosu") {
		$('#streamtag22').append("<span>Girl</span>");
		$('#streamtag22').append("<span>Music</span>");
		$('#streamtag22').append("<span>Challenger</span>");

		$('#stream22').addClass('girl');
		$('#stream22').addClass('music');
		$('#stream22').addClass('challenger');
	}
	if(stream22 == "cowsep") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Funny</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('funny');
	}

	var stream23 = "<? echo $lolarray->streams[23]->channel->name; ?>";

	if(stream23 == "riotgames") {
		$('#streamtag23').append("<span>Riot</span>");
		$('#streamtag23').append("<span>Competition</span>");
		$('#streamtag23').append("<span>Tournament</span>");
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('riot');
		$('#stream23').addClass('competition');
		$('#stream23').addClass('tournament');
		$('#stream23').addClass('english');
	}
	if(stream23 == "riotgames2") {
		$('#streamtag23').append("<span>Riot</span>");
		$('#streamtag23').append("<span>Competition</span>");
		$('#streamtag23').append("<span>Tournament</span>");
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('riot');
		$('#stream23').addClass('competition');
		$('#stream23').addClass('tournament');
		$('#stream23').addClass('english');
	}
	if(stream23 == "nightblue3") {
		$('#streamtag23').append("<span>Challenger</span>");
		$('#streamtag23').append("<span>Jungle</span>");
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('challenger');
		$('#stream23').addClass('jungle');
		$('#stream23').addClass('english');
	}
	if(stream23 == "imaqtpie") {
		$('#streamtag23').append("<span>Challenger</span>");
		$('#streamtag23').append("<span>AD Carry</span>");
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('challenger');
		$('#stream23').addClass('adc');
		$('#stream23').addClass('english');
	}
	if(stream23 == "domingo") {
		$('#streamtag23').append("<span>French</span>");

		$('#stream23').addClass('french');
	}
	if(stream23 == "skumbagkrepo") {
		$('#streamtag23').append("<span>Caster</span>");
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Master</span>");

		$('#stream23').addClass('caster');
		$('#stream23').addClass('english');
		$('#stream23').addClass('master');
	}
	if(stream23 == "tsm_theoddone") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Diamond</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('master');

	}
	if(stream23 == "trick23g") {
		$('#streamtag23').append("<span>Diamond</span>");
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('master');
		$('#stream23').addClass('english');
	}
	if(stream23 == "thaldrinlol") {
		$('#streamtag23').append("<span>Turkish</span>");

		$('#stream23').addClass('turkish');
	}
	if(stream23 == "wingsofdeath") {
		$('#streamtag23').append("<span>Master</span>");

		$('#stream23').addClass('master');
	}
	if(stream23 == "zerator") {
		$('#streamtag23').append("<span>French</span>");

		$('#stream23').addClass('french');
	}
	if(stream23 == "kaypealol") {
		$('#streamtag23').append("<span>Girl</span>");
		$('#streamtag23').append("<span>Gold</span>");

		$('#stream23').addClass('girl');
		$('#stream23').addClass('plat');
	}
	if(stream23 == "froggen") {
		$('#streamtag23').append("<span>Pro</span>");
		$('#streamtag23').append("<span>Challenger</span>");
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('pro');
		$('#stream23').addClass('challenger');
		$('#stream23').addClass('english');
	}
	if(stream23 == "sp4zie") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Funny</span>");
		$('#streamtag23').append("<span>Platinum</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('funny');
		$('#stream23').addClass('plat');
	}
	if(stream23 == "mushisgosu") {
		$('#streamtag23').append("<span>Girl</span>");
		$('#streamtag23').append("<span>Music</span>");
		$('#streamtag23').append("<span>Challenger</span>");

		$('#stream23').addClass('girl');
		$('#stream23').addClass('music');
		$('#stream23').addClass('challenger');
	}
	if(stream23 == "cowsep") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Funny</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('funny');
	}

	var stream24 = "<? echo $lolarray->streams[24]->channel->name; ?>";

	if(stream24 == "riotgames") {
		$('#streamtag24').append("<span>Riot</span>");
		$('#streamtag24').append("<span>Competition</span>");
		$('#streamtag24').append("<span>Tournament</span>");
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('riot');
		$('#stream24').addClass('competition');
		$('#stream24').addClass('tournament');
		$('#stream24').addClass('english');
	}
	if(stream24 == "riotgames2") {
		$('#streamtag24').append("<span>Riot</span>");
		$('#streamtag24').append("<span>Competition</span>");
		$('#streamtag24').append("<span>Tournament</span>");
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('riot');
		$('#stream24').addClass('competition');
		$('#stream24').addClass('tournament');
		$('#stream24').addClass('english');
	}
	if(stream24 == "nightblue3") {
		$('#streamtag24').append("<span>Challenger</span>");
		$('#streamtag24').append("<span>Jungle</span>");
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('challenger');
		$('#stream24').addClass('jungle');
		$('#stream24').addClass('english');
	}
	if(stream24 == "imaqtpie") {
		$('#streamtag24').append("<span>Challenger</span>");
		$('#streamtag24').append("<span>AD Carry</span>");
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('challenger');
		$('#stream24').addClass('adc');
		$('#stream24').addClass('english');
	}
	if(stream24 == "domingo") {
		$('#streamtag24').append("<span>French</span>");

		$('#stream24').addClass('french');
	}
	if(stream24 == "skumbagkrepo") {
		$('#streamtag24').append("<span>Caster</span>");
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Master</span>");

		$('#stream24').addClass('caster');
		$('#stream24').addClass('english');
		$('#stream24').addClass('master');
	}
	if(stream24 == "tsm_theoddone") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Diamond</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('master');

	}
	if(stream24 == "trick24g") {
		$('#streamtag24').append("<span>Diamond</span>");
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('master');
		$('#stream24').addClass('english');
	}
	if(stream24 == "thaldrinlol") {
		$('#streamtag24').append("<span>Turkish</span>");

		$('#stream24').addClass('turkish');
	}
	if(stream24 == "wingsofdeath") {
		$('#streamtag24').append("<span>Master</span>");

		$('#stream24').addClass('master');
	}
	if(stream24 == "zerator") {
		$('#streamtag24').append("<span>French</span>");

		$('#stream24').addClass('french');
	}
	if(stream24 == "kaypealol") {
		$('#streamtag24').append("<span>Girl</span>");
		$('#streamtag24').append("<span>Gold</span>");

		$('#stream24').addClass('girl');
		$('#stream24').addClass('plat');
	}
	if(stream24 == "froggen") {
		$('#streamtag24').append("<span>Pro</span>");
		$('#streamtag24').append("<span>Challenger</span>");
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('pro');
		$('#stream24').addClass('challenger');
		$('#stream24').addClass('english');
	}
	if(stream24 == "sp4zie") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Funny</span>");
		$('#streamtag24').append("<span>Platinum</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('funny');
		$('#stream24').addClass('plat');
	}
	if(stream24 == "mushisgosu") {
		$('#streamtag24').append("<span>Girl</span>");
		$('#streamtag24').append("<span>Music</span>");
		$('#streamtag24').append("<span>Challenger</span>");

		$('#stream24').addClass('girl');
		$('#stream24').addClass('music');
		$('#stream24').addClass('challenger');
	}
	if(stream24 == "cowsep") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Funny</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('funny');
	}

	var stream25 = "<? echo $lolarray->streams[25]->channel->name; ?>";

	if(stream25 == "riotgames") {
		$('#streamtag25').append("<span>Riot</span>");
		$('#streamtag25').append("<span>Competition</span>");
		$('#streamtag25').append("<span>Tournament</span>");
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('riot');
		$('#stream25').addClass('competition');
		$('#stream25').addClass('tournament');
		$('#stream25').addClass('english');
	}
	if(stream25 == "riotgames2") {
		$('#streamtag25').append("<span>Riot</span>");
		$('#streamtag25').append("<span>Competition</span>");
		$('#streamtag25').append("<span>Tournament</span>");
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('riot');
		$('#stream25').addClass('competition');
		$('#stream25').addClass('tournament');
		$('#stream25').addClass('english');
	}
	if(stream25 == "nightblue3") {
		$('#streamtag25').append("<span>Challenger</span>");
		$('#streamtag25').append("<span>Jungle</span>");
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('challenger');
		$('#stream25').addClass('jungle');
		$('#stream25').addClass('english');
	}
	if(stream25 == "imaqtpie") {
		$('#streamtag25').append("<span>Challenger</span>");
		$('#streamtag25').append("<span>AD Carry</span>");
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('challenger');
		$('#stream25').addClass('adc');
		$('#stream25').addClass('english');
	}
	if(stream25 == "domingo") {
		$('#streamtag25').append("<span>French</span>");

		$('#stream25').addClass('french');
	}
	if(stream25 == "skumbagkrepo") {
		$('#streamtag25').append("<span>Caster</span>");
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Master</span>");

		$('#stream25').addClass('caster');
		$('#stream25').addClass('english');
		$('#stream25').addClass('master');
	}
	if(stream25 == "tsm_theoddone") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Diamond</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('master');

	}
	if(stream25 == "trick25g") {
		$('#streamtag25').append("<span>Diamond</span>");
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('master');
		$('#stream25').addClass('english');
	}
	if(stream25 == "thaldrinlol") {
		$('#streamtag25').append("<span>Turkish</span>");

		$('#stream25').addClass('turkish');
	}
	if(stream25 == "wingsofdeath") {
		$('#streamtag25').append("<span>Master</span>");

		$('#stream25').addClass('master');
	}
	if(stream25 == "zerator") {
		$('#streamtag25').append("<span>French</span>");

		$('#stream25').addClass('french');
	}
	if(stream25 == "kaypealol") {
		$('#streamtag25').append("<span>Girl</span>");
		$('#streamtag25').append("<span>Gold</span>");

		$('#stream25').addClass('girl');
		$('#stream25').addClass('plat');
	}
	if(stream25 == "froggen") {
		$('#streamtag25').append("<span>Pro</span>");
		$('#streamtag25').append("<span>Challenger</span>");
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('pro');
		$('#stream25').addClass('challenger');
		$('#stream25').addClass('english');
	}
	if(stream25 == "sp4zie") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Funny</span>");
		$('#streamtag25').append("<span>Platinum</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('funny');
		$('#stream25').addClass('plat');
	}
	if(stream25 == "mushisgosu") {
		$('#streamtag25').append("<span>Girl</span>");
		$('#streamtag25').append("<span>Music</span>");
		$('#streamtag25').append("<span>Challenger</span>");

		$('#stream25').addClass('girl');
		$('#stream25').addClass('music');
		$('#stream25').addClass('challenger');
	}
	if(stream25 == "cowsep") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Funny</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('funny');
	}

	var stream26 = "<? echo $lolarray->streams[26]->channel->name; ?>";

	if(stream26 == "riotgames") {
		$('#streamtag26').append("<span>Riot</span>");
		$('#streamtag26').append("<span>Competition</span>");
		$('#streamtag26').append("<span>Tournament</span>");
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('riot');
		$('#stream26').addClass('competition');
		$('#stream26').addClass('tournament');
		$('#stream26').addClass('english');
	}
	if(stream26 == "riotgames2") {
		$('#streamtag26').append("<span>Riot</span>");
		$('#streamtag26').append("<span>Competition</span>");
		$('#streamtag26').append("<span>Tournament</span>");
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('riot');
		$('#stream26').addClass('competition');
		$('#stream26').addClass('tournament');
		$('#stream26').addClass('english');
	}
	if(stream26 == "nightblue3") {
		$('#streamtag26').append("<span>Challenger</span>");
		$('#streamtag26').append("<span>Jungle</span>");
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('challenger');
		$('#stream26').addClass('jungle');
		$('#stream26').addClass('english');
	}
	if(stream26 == "imaqtpie") {
		$('#streamtag26').append("<span>Challenger</span>");
		$('#streamtag26').append("<span>AD Carry</span>");
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('challenger');
		$('#stream26').addClass('adc');
		$('#stream26').addClass('english');
	}
	if(stream26 == "domingo") {
		$('#streamtag26').append("<span>French</span>");

		$('#stream26').addClass('french');
	}
	if(stream26 == "skumbagkrepo") {
		$('#streamtag26').append("<span>Caster</span>");
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Master</span>");

		$('#stream26').addClass('caster');
		$('#stream26').addClass('english');
		$('#stream26').addClass('master');
	}
	if(stream26 == "tsm_theoddone") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Diamond</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('master');

	}
	if(stream26 == "trick26g") {
		$('#streamtag26').append("<span>Diamond</span>");
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('master');
		$('#stream26').addClass('english');
	}
	if(stream26 == "thaldrinlol") {
		$('#streamtag26').append("<span>Turkish</span>");

		$('#stream26').addClass('turkish');
	}
	if(stream26 == "wingsofdeath") {
		$('#streamtag26').append("<span>Master</span>");

		$('#stream26').addClass('master');
	}
	if(stream26 == "zerator") {
		$('#streamtag26').append("<span>French</span>");

		$('#stream26').addClass('french');
	}
	if(stream26 == "kaypealol") {
		$('#streamtag26').append("<span>Girl</span>");
		$('#streamtag26').append("<span>Gold</span>");

		$('#stream26').addClass('girl');
		$('#stream26').addClass('plat');
	}
	if(stream26 == "froggen") {
		$('#streamtag26').append("<span>Pro</span>");
		$('#streamtag26').append("<span>Challenger</span>");
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('pro');
		$('#stream26').addClass('challenger');
		$('#stream26').addClass('english');
	}
	if(stream26 == "sp4zie") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Funny</span>");
		$('#streamtag26').append("<span>Platinum</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('funny');
		$('#stream26').addClass('plat');
	}
	if(stream26 == "mushisgosu") {
		$('#streamtag26').append("<span>Girl</span>");
		$('#streamtag26').append("<span>Music</span>");
		$('#streamtag26').append("<span>Challenger</span>");

		$('#stream26').addClass('girl');
		$('#stream26').addClass('music');
		$('#stream26').addClass('challenger');
	}
	if(stream26 == "cowsep") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Funny</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('funny');
	}

	var stream27 = "<? echo $lolarray->streams[27]->channel->name; ?>";

	if(stream27 == "riotgames") {
		$('#streamtag27').append("<span>Riot</span>");
		$('#streamtag27').append("<span>Competition</span>");
		$('#streamtag27').append("<span>Tournament</span>");
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('riot');
		$('#stream27').addClass('competition');
		$('#stream27').addClass('tournament');
		$('#stream27').addClass('english');
	}
	if(stream27 == "riotgames2") {
		$('#streamtag27').append("<span>Riot</span>");
		$('#streamtag27').append("<span>Competition</span>");
		$('#streamtag27').append("<span>Tournament</span>");
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('riot');
		$('#stream27').addClass('competition');
		$('#stream27').addClass('tournament');
		$('#stream27').addClass('english');
	}
	if(stream27 == "nightblue3") {
		$('#streamtag27').append("<span>Challenger</span>");
		$('#streamtag27').append("<span>Jungle</span>");
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('challenger');
		$('#stream27').addClass('jungle');
		$('#stream27').addClass('english');
	}
	if(stream27 == "imaqtpie") {
		$('#streamtag27').append("<span>Challenger</span>");
		$('#streamtag27').append("<span>AD Carry</span>");
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('challenger');
		$('#stream27').addClass('adc');
		$('#stream27').addClass('english');
	}
	if(stream27 == "domingo") {
		$('#streamtag27').append("<span>French</span>");

		$('#stream27').addClass('french');
	}
	if(stream27 == "skumbagkrepo") {
		$('#streamtag27').append("<span>Caster</span>");
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Master</span>");

		$('#stream27').addClass('caster');
		$('#stream27').addClass('english');
		$('#stream27').addClass('master');
	}
	if(stream27 == "tsm_theoddone") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Diamond</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('master');

	}
	if(stream27 == "trick27g") {
		$('#streamtag27').append("<span>Diamond</span>");
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('master');
		$('#stream27').addClass('english');
	}
	if(stream27 == "thaldrinlol") {
		$('#streamtag27').append("<span>Turkish</span>");

		$('#stream27').addClass('turkish');
	}
	if(stream27 == "wingsofdeath") {
		$('#streamtag27').append("<span>Master</span>");

		$('#stream27').addClass('master');
	}
	if(stream27 == "zerator") {
		$('#streamtag27').append("<span>French</span>");

		$('#stream27').addClass('french');
	}
	if(stream27 == "kaypealol") {
		$('#streamtag27').append("<span>Girl</span>");
		$('#streamtag27').append("<span>Gold</span>");

		$('#stream27').addClass('girl');
		$('#stream27').addClass('plat');
	}
	if(stream27 == "froggen") {
		$('#streamtag27').append("<span>Pro</span>");
		$('#streamtag27').append("<span>Challenger</span>");
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('pro');
		$('#stream27').addClass('challenger');
		$('#stream27').addClass('english');
	}
	if(stream27 == "sp4zie") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Funny</span>");
		$('#streamtag27').append("<span>Platinum</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('funny');
		$('#stream27').addClass('plat');
	}
	if(stream27 == "mushisgosu") {
		$('#streamtag27').append("<span>Girl</span>");
		$('#streamtag27').append("<span>Music</span>");
		$('#streamtag27').append("<span>Challenger</span>");

		$('#stream27').addClass('girl');
		$('#stream27').addClass('music');
		$('#stream27').addClass('challenger');
	}
	if(stream27 == "cowsep") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Funny</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('funny');
	}

	var stream28 = "<? echo $lolarray->streams[28]->channel->name; ?>";

	if(stream28 == "riotgames") {
		$('#streamtag28').append("<span>Riot</span>");
		$('#streamtag28').append("<span>Competition</span>");
		$('#streamtag28').append("<span>Tournament</span>");
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('riot');
		$('#stream28').addClass('competition');
		$('#stream28').addClass('tournament');
		$('#stream28').addClass('english');
	}
	if(stream28 == "riotgames2") {
		$('#streamtag28').append("<span>Riot</span>");
		$('#streamtag28').append("<span>Competition</span>");
		$('#streamtag28').append("<span>Tournament</span>");
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('riot');
		$('#stream28').addClass('competition');
		$('#stream28').addClass('tournament');
		$('#stream28').addClass('english');
	}
	if(stream28 == "nightblue3") {
		$('#streamtag28').append("<span>Challenger</span>");
		$('#streamtag28').append("<span>Jungle</span>");
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('challenger');
		$('#stream28').addClass('jungle');
		$('#stream28').addClass('english');
	}
	if(stream28 == "imaqtpie") {
		$('#streamtag28').append("<span>Challenger</span>");
		$('#streamtag28').append("<span>AD Carry</span>");
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('challenger');
		$('#stream28').addClass('adc');
		$('#stream28').addClass('english');
	}
	if(stream28 == "domingo") {
		$('#streamtag28').append("<span>French</span>");

		$('#stream28').addClass('french');
	}
	if(stream28 == "skumbagkrepo") {
		$('#streamtag28').append("<span>Caster</span>");
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Master</span>");

		$('#stream28').addClass('caster');
		$('#stream28').addClass('english');
		$('#stream28').addClass('master');
	}
	if(stream28 == "tsm_theoddone") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Diamond</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('master');

	}
	if(stream28 == "trick28g") {
		$('#streamtag28').append("<span>Diamond</span>");
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('master');
		$('#stream28').addClass('english');
	}
	if(stream28 == "thaldrinlol") {
		$('#streamtag28').append("<span>Turkish</span>");

		$('#stream28').addClass('turkish');
	}
	if(stream28 == "wingsofdeath") {
		$('#streamtag28').append("<span>Master</span>");

		$('#stream28').addClass('master');
	}
	if(stream28 == "zerator") {
		$('#streamtag28').append("<span>French</span>");

		$('#stream28').addClass('french');
	}
	if(stream28 == "kaypealol") {
		$('#streamtag28').append("<span>Girl</span>");
		$('#streamtag28').append("<span>Gold</span>");

		$('#stream28').addClass('girl');
		$('#stream28').addClass('plat');
	}
	if(stream28 == "froggen") {
		$('#streamtag28').append("<span>Pro</span>");
		$('#streamtag28').append("<span>Challenger</span>");
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('pro');
		$('#stream28').addClass('challenger');
		$('#stream28').addClass('english');
	}
	if(stream28 == "sp4zie") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Funny</span>");
		$('#streamtag28').append("<span>Platinum</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('funny');
		$('#stream28').addClass('plat');
	}
	if(stream28 == "mushisgosu") {
		$('#streamtag28').append("<span>Girl</span>");
		$('#streamtag28').append("<span>Music</span>");
		$('#streamtag28').append("<span>Challenger</span>");

		$('#stream28').addClass('girl');
		$('#stream28').addClass('music');
		$('#stream28').addClass('challenger');
	}
	if(stream28 == "cowsep") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Funny</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('funny');
	}

	var stream29 = "<? echo $lolarray->streams[29]->channel->name; ?>";

	if(stream29 == "riotgames") {
		$('#streamtag29').append("<span>Riot</span>");
		$('#streamtag29').append("<span>Competition</span>");
		$('#streamtag29').append("<span>Tournament</span>");
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('riot');
		$('#stream29').addClass('competition');
		$('#stream29').addClass('tournament');
		$('#stream29').addClass('english');
	}
	if(stream29 == "riotgames2") {
		$('#streamtag29').append("<span>Riot</span>");
		$('#streamtag29').append("<span>Competition</span>");
		$('#streamtag29').append("<span>Tournament</span>");
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('riot');
		$('#stream29').addClass('competition');
		$('#stream29').addClass('tournament');
		$('#stream29').addClass('english');
	}
	if(stream29 == "nightblue3") {
		$('#streamtag29').append("<span>Challenger</span>");
		$('#streamtag29').append("<span>Jungle</span>");
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('challenger');
		$('#stream29').addClass('jungle');
		$('#stream29').addClass('english');
	}
	if(stream29 == "imaqtpie") {
		$('#streamtag29').append("<span>Challenger</span>");
		$('#streamtag29').append("<span>AD Carry</span>");
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('challenger');
		$('#stream29').addClass('adc');
		$('#stream29').addClass('english');
	}
	if(stream29 == "domingo") {
		$('#streamtag29').append("<span>French</span>");

		$('#stream29').addClass('french');
	}
	if(stream29 == "skumbagkrepo") {
		$('#streamtag29').append("<span>Caster</span>");
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Master</span>");

		$('#stream29').addClass('caster');
		$('#stream29').addClass('english');
		$('#stream29').addClass('master');
	}
	if(stream29 == "tsm_theoddone") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Diamond</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('master');

	}
	if(stream29 == "trick29g") {
		$('#streamtag29').append("<span>Diamond</span>");
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('master');
		$('#stream29').addClass('english');
	}
	if(stream29 == "thaldrinlol") {
		$('#streamtag29').append("<span>Turkish</span>");

		$('#stream29').addClass('turkish');
	}
	if(stream29 == "wingsofdeath") {
		$('#streamtag29').append("<span>Master</span>");

		$('#stream29').addClass('master');
	}
	if(stream29 == "zerator") {
		$('#streamtag29').append("<span>French</span>");

		$('#stream29').addClass('french');
	}
	if(stream29 == "kaypealol") {
		$('#streamtag29').append("<span>Girl</span>");
		$('#streamtag29').append("<span>Gold</span>");

		$('#stream29').addClass('girl');
		$('#stream29').addClass('plat');
	}
	if(stream29 == "froggen") {
		$('#streamtag29').append("<span>Pro</span>");
		$('#streamtag29').append("<span>Challenger</span>");
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('pro');
		$('#stream29').addClass('challenger');
		$('#stream29').addClass('english');
	}
	if(stream29 == "sp4zie") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Funny</span>");
		$('#streamtag29').append("<span>Platinum</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('funny');
		$('#stream29').addClass('plat');
	}
	if(stream29 == "mushisgosu") {
		$('#streamtag29').append("<span>Girl</span>");
		$('#streamtag29').append("<span>Music</span>");
		$('#streamtag29').append("<span>Challenger</span>");

		$('#stream29').addClass('girl');
		$('#stream29').addClass('music');
		$('#stream29').addClass('challenger');
	}
	if(stream29 == "cowsep") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Funny</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('funny');
	}

	var stream30 = "<? echo $lolarray->streams[29]->channel->name; ?>";

	if(stream30 == "riotgames") {
		$('#streamtag30').append("<span>Riot</span>");
		$('#streamtag30').append("<span>Competition</span>");
		$('#streamtag30').append("<span>Tournament</span>");
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('riot');
		$('#stream30').addClass('competition');
		$('#stream30').addClass('tournament');
		$('#stream30').addClass('english');
	}
	if(stream30 == "riotgames2") {
		$('#streamtag30').append("<span>Riot</span>");
		$('#streamtag30').append("<span>Competition</span>");
		$('#streamtag30').append("<span>Tournament</span>");
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('riot');
		$('#stream30').addClass('competition');
		$('#stream30').addClass('tournament');
		$('#stream30').addClass('english');
	}
	if(stream30 == "nightblue3") {
		$('#streamtag30').append("<span>Challenger</span>");
		$('#streamtag30').append("<span>Jungle</span>");
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('challenger');
		$('#stream30').addClass('jungle');
		$('#stream30').addClass('english');
	}
	if(stream30 == "imaqtpie") {
		$('#streamtag30').append("<span>Challenger</span>");
		$('#streamtag30').append("<span>AD Carry</span>");
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('challenger');
		$('#stream30').addClass('adc');
		$('#stream30').addClass('english');
	}
	if(stream30 == "domingo") {
		$('#streamtag30').append("<span>French</span>");

		$('#stream30').addClass('french');
	}
	if(stream30 == "skumbagkrepo") {
		$('#streamtag30').append("<span>Caster</span>");
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Master</span>");

		$('#stream30').addClass('caster');
		$('#stream30').addClass('english');
		$('#stream30').addClass('master');
	}
	if(stream30 == "tsm_theoddone") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Diamond</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('master');

	}
	if(stream30 == "trick30g") {
		$('#streamtag30').append("<span>Diamond</span>");
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('master');
		$('#stream30').addClass('english');
	}
	if(stream30 == "thaldrinlol") {
		$('#streamtag30').append("<span>Turkish</span>");

		$('#stream30').addClass('turkish');
	}
	if(stream30 == "wingsofdeath") {
		$('#streamtag30').append("<span>Master</span>");

		$('#stream30').addClass('master');
	}
	if(stream30 == "zerator") {
		$('#streamtag30').append("<span>French</span>");

		$('#stream30').addClass('french');
	}
	if(stream30 == "kaypealol") {
		$('#streamtag30').append("<span>Girl</span>");
		$('#streamtag30').append("<span>Gold</span>");

		$('#stream30').addClass('girl');
		$('#stream30').addClass('plat');
	}
	if(stream30 == "froggen") {
		$('#streamtag30').append("<span>Pro</span>");
		$('#streamtag30').append("<span>Challenger</span>");
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('pro');
		$('#stream30').addClass('challenger');
		$('#stream30').addClass('english');
	}
	if(stream30 == "sp4zie") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Funny</span>");
		$('#streamtag30').append("<span>Platinum</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('funny');
		$('#stream30').addClass('plat');
	}
	if(stream30 == "mushisgosu") {
		$('#streamtag30').append("<span>Girl</span>");
		$('#streamtag30').append("<span>Music</span>");
		$('#streamtag30').append("<span>Challenger</span>");

		$('#stream30').addClass('girl');
		$('#stream30').addClass('music');
		$('#stream30').addClass('challenger');
	}
	if(stream30 == "cowsep") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Funny</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('funny');
	}

	var stream31 = "<? echo $lolarray->streams[31]->channel->name; ?>";

	if(stream31 == "riotgames") {
		$('#streamtag31').append("<span>Riot</span>");
		$('#streamtag31').append("<span>Competition</span>");
		$('#streamtag31').append("<span>Tournament</span>");
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('riot');
		$('#stream31').addClass('competition');
		$('#stream31').addClass('tournament');
		$('#stream31').addClass('english');
	}
	if(stream31 == "riotgames2") {
		$('#streamtag31').append("<span>Riot</span>");
		$('#streamtag31').append("<span>Competition</span>");
		$('#streamtag31').append("<span>Tournament</span>");
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('riot');
		$('#stream31').addClass('competition');
		$('#stream31').addClass('tournament');
		$('#stream31').addClass('english');
	}
	if(stream31 == "nightblue3") {
		$('#streamtag31').append("<span>Challenger</span>");
		$('#streamtag31').append("<span>Jungle</span>");
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('challenger');
		$('#stream31').addClass('jungle');
		$('#stream31').addClass('english');
	}
	if(stream31 == "imaqtpie") {
		$('#streamtag31').append("<span>Challenger</span>");
		$('#streamtag31').append("<span>AD Carry</span>");
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('challenger');
		$('#stream31').addClass('adc');
		$('#stream31').addClass('english');
	}
	if(stream31 == "domingo") {
		$('#streamtag31').append("<span>French</span>");

		$('#stream31').addClass('french');
	}
	if(stream31 == "skumbagkrepo") {
		$('#streamtag31').append("<span>Caster</span>");
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Master</span>");

		$('#stream31').addClass('caster');
		$('#stream31').addClass('english');
		$('#stream31').addClass('master');
	}
	if(stream31 == "tsm_theoddone") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Diamond</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('master');

	}
	if(stream31 == "trick31g") {
		$('#streamtag31').append("<span>Diamond</span>");
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('master');
		$('#stream31').addClass('english');
	}
	if(stream31 == "thaldrinlol") {
		$('#streamtag31').append("<span>Turkish</span>");

		$('#stream31').addClass('turkish');
	}
	if(stream31 == "wingsofdeath") {
		$('#streamtag31').append("<span>Master</span>");

		$('#stream31').addClass('master');
	}
	if(stream31 == "zerator") {
		$('#streamtag31').append("<span>French</span>");

		$('#stream31').addClass('french');
	}
	if(stream31 == "kaypealol") {
		$('#streamtag31').append("<span>Girl</span>");
		$('#streamtag31').append("<span>Gold</span>");

		$('#stream31').addClass('girl');
		$('#stream31').addClass('plat');
	}
	if(stream31 == "froggen") {
		$('#streamtag31').append("<span>Pro</span>");
		$('#streamtag31').append("<span>Challenger</span>");
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('pro');
		$('#stream31').addClass('challenger');
		$('#stream31').addClass('english');
	}
	if(stream31 == "sp4zie") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Funny</span>");
		$('#streamtag31').append("<span>Platinum</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('funny');
		$('#stream31').addClass('plat');
	}
	if(stream31 == "mushisgosu") {
		$('#streamtag31').append("<span>Girl</span>");
		$('#streamtag31').append("<span>Music</span>");
		$('#streamtag31').append("<span>Challenger</span>");

		$('#stream31').addClass('girl');
		$('#stream31').addClass('music');
		$('#stream31').addClass('challenger');
	}
	if(stream31 == "cowsep") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Funny</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('funny');
	}

	var stream32 = "<? echo $lolarray->streams[32]->channel->name; ?>";

	if(stream32 == "riotgames") {
		$('#streamtag32').append("<span>Riot</span>");
		$('#streamtag32').append("<span>Competition</span>");
		$('#streamtag32').append("<span>Tournament</span>");
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('riot');
		$('#stream32').addClass('competition');
		$('#stream32').addClass('tournament');
		$('#stream32').addClass('english');
	}
	if(stream32 == "riotgames2") {
		$('#streamtag32').append("<span>Riot</span>");
		$('#streamtag32').append("<span>Competition</span>");
		$('#streamtag32').append("<span>Tournament</span>");
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('riot');
		$('#stream32').addClass('competition');
		$('#stream32').addClass('tournament');
		$('#stream32').addClass('english');
	}
	if(stream32 == "nightblue3") {
		$('#streamtag32').append("<span>Challenger</span>");
		$('#streamtag32').append("<span>Jungle</span>");
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('challenger');
		$('#stream32').addClass('jungle');
		$('#stream32').addClass('english');
	}
	if(stream32 == "imaqtpie") {
		$('#streamtag32').append("<span>Challenger</span>");
		$('#streamtag32').append("<span>AD Carry</span>");
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('challenger');
		$('#stream32').addClass('adc');
		$('#stream32').addClass('english');
	}
	if(stream32 == "domingo") {
		$('#streamtag32').append("<span>French</span>");

		$('#stream32').addClass('french');
	}
	if(stream32 == "skumbagkrepo") {
		$('#streamtag32').append("<span>Caster</span>");
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Master</span>");

		$('#stream32').addClass('caster');
		$('#stream32').addClass('english');
		$('#stream32').addClass('master');
	}
	if(stream32 == "tsm_theoddone") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Diamond</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('master');

	}
	if(stream32 == "trick32g") {
		$('#streamtag32').append("<span>Diamond</span>");
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('master');
		$('#stream32').addClass('english');
	}
	if(stream32 == "thaldrinlol") {
		$('#streamtag32').append("<span>Turkish</span>");

		$('#stream32').addClass('turkish');
	}
	if(stream32 == "wingsofdeath") {
		$('#streamtag32').append("<span>Master</span>");

		$('#stream32').addClass('master');
	}
	if(stream32 == "zerator") {
		$('#streamtag32').append("<span>French</span>");

		$('#stream32').addClass('french');
	}
	if(stream32 == "kaypealol") {
		$('#streamtag32').append("<span>Girl</span>");
		$('#streamtag32').append("<span>Gold</span>");

		$('#stream32').addClass('girl');
		$('#stream32').addClass('plat');
	}
	if(stream32 == "froggen") {
		$('#streamtag32').append("<span>Pro</span>");
		$('#streamtag32').append("<span>Challenger</span>");
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('pro');
		$('#stream32').addClass('challenger');
		$('#stream32').addClass('english');
	}
	if(stream32 == "sp4zie") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Funny</span>");
		$('#streamtag32').append("<span>Platinum</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('funny');
		$('#stream32').addClass('plat');
	}
	if(stream32 == "mushisgosu") {
		$('#streamtag32').append("<span>Girl</span>");
		$('#streamtag32').append("<span>Music</span>");
		$('#streamtag32').append("<span>Challenger</span>");

		$('#stream32').addClass('girl');
		$('#stream32').addClass('music');
		$('#stream32').addClass('challenger');
	}
	if(stream32 == "cowsep") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Funny</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('funny');
	}

	var stream33 = "<? echo $lolarray->streams[33]->channel->name; ?>";

	if(stream33 == "riotgames") {
		$('#streamtag33').append("<span>Riot</span>");
		$('#streamtag33').append("<span>Competition</span>");
		$('#streamtag33').append("<span>Tournament</span>");
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('riot');
		$('#stream33').addClass('competition');
		$('#stream33').addClass('tournament');
		$('#stream33').addClass('english');
	}
	if(stream33 == "riotgames2") {
		$('#streamtag33').append("<span>Riot</span>");
		$('#streamtag33').append("<span>Competition</span>");
		$('#streamtag33').append("<span>Tournament</span>");
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('riot');
		$('#stream33').addClass('competition');
		$('#stream33').addClass('tournament');
		$('#stream33').addClass('english');
	}
	if(stream33 == "nightblue3") {
		$('#streamtag33').append("<span>Challenger</span>");
		$('#streamtag33').append("<span>Jungle</span>");
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('challenger');
		$('#stream33').addClass('jungle');
		$('#stream33').addClass('english');
	}
	if(stream33 == "imaqtpie") {
		$('#streamtag33').append("<span>Challenger</span>");
		$('#streamtag33').append("<span>AD Carry</span>");
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('challenger');
		$('#stream33').addClass('adc');
		$('#stream33').addClass('english');
	}
	if(stream33 == "domingo") {
		$('#streamtag33').append("<span>French</span>");

		$('#stream33').addClass('french');
	}
	if(stream33 == "skumbagkrepo") {
		$('#streamtag33').append("<span>Caster</span>");
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Master</span>");

		$('#stream33').addClass('caster');
		$('#stream33').addClass('english');
		$('#stream33').addClass('master');
	}
	if(stream33 == "tsm_theoddone") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Diamond</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('master');

	}
	if(stream33 == "trick33g") {
		$('#streamtag33').append("<span>Diamond</span>");
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('master');
		$('#stream33').addClass('english');
	}
	if(stream33 == "thaldrinlol") {
		$('#streamtag33').append("<span>Turkish</span>");

		$('#stream33').addClass('turkish');
	}
	if(stream33 == "wingsofdeath") {
		$('#streamtag33').append("<span>Master</span>");

		$('#stream33').addClass('master');
	}
	if(stream33 == "zerator") {
		$('#streamtag33').append("<span>French</span>");

		$('#stream33').addClass('french');
	}
	if(stream33 == "kaypealol") {
		$('#streamtag33').append("<span>Girl</span>");
		$('#streamtag33').append("<span>Gold</span>");

		$('#stream33').addClass('girl');
		$('#stream33').addClass('plat');
	}
	if(stream33 == "froggen") {
		$('#streamtag33').append("<span>Pro</span>");
		$('#streamtag33').append("<span>Challenger</span>");
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('pro');
		$('#stream33').addClass('challenger');
		$('#stream33').addClass('english');
	}
	if(stream33 == "sp4zie") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Funny</span>");
		$('#streamtag33').append("<span>Platinum</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('funny');
		$('#stream33').addClass('plat');
	}
	if(stream33 == "mushisgosu") {
		$('#streamtag33').append("<span>Girl</span>");
		$('#streamtag33').append("<span>Music</span>");
		$('#streamtag33').append("<span>Challenger</span>");

		$('#stream33').addClass('girl');
		$('#stream33').addClass('music');
		$('#stream33').addClass('challenger');
	}
	if(stream33 == "cowsep") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Funny</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('funny');
	}

	var stream34 = "<? echo $lolarray->streams[33]->channel->name; ?>";

	if(stream34 == "riotgames") {
		$('#streamtag34').append("<span>Riot</span>");
		$('#streamtag34').append("<span>Competition</span>");
		$('#streamtag34').append("<span>Tournament</span>");
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('riot');
		$('#stream34').addClass('competition');
		$('#stream34').addClass('tournament');
		$('#stream34').addClass('english');
	}
	if(stream34 == "riotgames2") {
		$('#streamtag34').append("<span>Riot</span>");
		$('#streamtag34').append("<span>Competition</span>");
		$('#streamtag34').append("<span>Tournament</span>");
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('riot');
		$('#stream34').addClass('competition');
		$('#stream34').addClass('tournament');
		$('#stream34').addClass('english');
	}
	if(stream34 == "nightblue3") {
		$('#streamtag34').append("<span>Challenger</span>");
		$('#streamtag34').append("<span>Jungle</span>");
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('challenger');
		$('#stream34').addClass('jungle');
		$('#stream34').addClass('english');
	}
	if(stream34 == "imaqtpie") {
		$('#streamtag34').append("<span>Challenger</span>");
		$('#streamtag34').append("<span>AD Carry</span>");
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('challenger');
		$('#stream34').addClass('adc');
		$('#stream34').addClass('english');
	}
	if(stream34 == "domingo") {
		$('#streamtag34').append("<span>French</span>");

		$('#stream34').addClass('french');
	}
	if(stream34 == "skumbagkrepo") {
		$('#streamtag34').append("<span>Caster</span>");
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Master</span>");

		$('#stream34').addClass('caster');
		$('#stream34').addClass('english');
		$('#stream34').addClass('master');
	}
	if(stream34 == "tsm_theoddone") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Diamond</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('master');

	}
	if(stream34 == "trick34g") {
		$('#streamtag34').append("<span>Diamond</span>");
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('master');
		$('#stream34').addClass('english');
	}
	if(stream34 == "thaldrinlol") {
		$('#streamtag34').append("<span>Turkish</span>");

		$('#stream34').addClass('turkish');
	}
	if(stream34 == "wingsofdeath") {
		$('#streamtag34').append("<span>Master</span>");

		$('#stream34').addClass('master');
	}
	if(stream34 == "zerator") {
		$('#streamtag34').append("<span>French</span>");

		$('#stream34').addClass('french');
	}
	if(stream34 == "kaypealol") {
		$('#streamtag34').append("<span>Girl</span>");
		$('#streamtag34').append("<span>Gold</span>");

		$('#stream34').addClass('girl');
		$('#stream34').addClass('plat');
	}
	if(stream34 == "froggen") {
		$('#streamtag34').append("<span>Pro</span>");
		$('#streamtag34').append("<span>Challenger</span>");
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('pro');
		$('#stream34').addClass('challenger');
		$('#stream34').addClass('english');
	}
	if(stream34 == "sp4zie") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Funny</span>");
		$('#streamtag34').append("<span>Platinum</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('funny');
		$('#stream34').addClass('plat');
	}
	if(stream34 == "mushisgosu") {
		$('#streamtag34').append("<span>Girl</span>");
		$('#streamtag34').append("<span>Music</span>");
		$('#streamtag34').append("<span>Challenger</span>");

		$('#stream34').addClass('girl');
		$('#stream34').addClass('music');
		$('#stream34').addClass('challenger');
	}
	if(stream34 == "cowsep") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Funny</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('funny');
	}

	var stream35 = "<? echo $lolarray->streams[35]->channel->name; ?>";

	if(stream35 == "riotgames") {
		$('#streamtag35').append("<span>Riot</span>");
		$('#streamtag35').append("<span>Competition</span>");
		$('#streamtag35').append("<span>Tournament</span>");
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('riot');
		$('#stream35').addClass('competition');
		$('#stream35').addClass('tournament');
		$('#stream35').addClass('english');
	}
	if(stream35 == "riotgames2") {
		$('#streamtag35').append("<span>Riot</span>");
		$('#streamtag35').append("<span>Competition</span>");
		$('#streamtag35').append("<span>Tournament</span>");
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('riot');
		$('#stream35').addClass('competition');
		$('#stream35').addClass('tournament');
		$('#stream35').addClass('english');
	}
	if(stream35 == "nightblue3") {
		$('#streamtag35').append("<span>Challenger</span>");
		$('#streamtag35').append("<span>Jungle</span>");
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('challenger');
		$('#stream35').addClass('jungle');
		$('#stream35').addClass('english');
	}
	if(stream35 == "imaqtpie") {
		$('#streamtag35').append("<span>Challenger</span>");
		$('#streamtag35').append("<span>AD Carry</span>");
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('challenger');
		$('#stream35').addClass('adc');
		$('#stream35').addClass('english');
	}
	if(stream35 == "domingo") {
		$('#streamtag35').append("<span>French</span>");

		$('#stream35').addClass('french');
	}
	if(stream35 == "skumbagkrepo") {
		$('#streamtag35').append("<span>Caster</span>");
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Master</span>");

		$('#stream35').addClass('caster');
		$('#stream35').addClass('english');
		$('#stream35').addClass('master');
	}
	if(stream35 == "tsm_theoddone") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Diamond</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('master');

	}
	if(stream35 == "trick35g") {
		$('#streamtag35').append("<span>Diamond</span>");
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('master');
		$('#stream35').addClass('english');
	}
	if(stream35 == "thaldrinlol") {
		$('#streamtag35').append("<span>Turkish</span>");

		$('#stream35').addClass('turkish');
	}
	if(stream35 == "wingsofdeath") {
		$('#streamtag35').append("<span>Master</span>");

		$('#stream35').addClass('master');
	}
	if(stream35 == "zerator") {
		$('#streamtag35').append("<span>French</span>");

		$('#stream35').addClass('french');
	}
	if(stream35 == "kaypealol") {
		$('#streamtag35').append("<span>Girl</span>");
		$('#streamtag35').append("<span>Gold</span>");

		$('#stream35').addClass('girl');
		$('#stream35').addClass('plat');
	}
	if(stream35 == "froggen") {
		$('#streamtag35').append("<span>Pro</span>");
		$('#streamtag35').append("<span>Challenger</span>");
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('pro');
		$('#stream35').addClass('challenger');
		$('#stream35').addClass('english');
	}
	if(stream35 == "sp4zie") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Funny</span>");
		$('#streamtag35').append("<span>Platinum</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('funny');
		$('#stream35').addClass('plat');
	}
	if(stream35 == "mushisgosu") {
		$('#streamtag35').append("<span>Girl</span>");
		$('#streamtag35').append("<span>Music</span>");
		$('#streamtag35').append("<span>Challenger</span>");

		$('#stream35').addClass('girl');
		$('#stream35').addClass('music');
		$('#stream35').addClass('challenger');
	}
	if(stream35 == "cowsep") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Funny</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('funny');
	}

	var stream36 = "<? echo $lolarray->streams[36]->channel->name; ?>";

	if(stream36 == "riotgames") {
		$('#streamtag36').append("<span>Riot</span>");
		$('#streamtag36').append("<span>Competition</span>");
		$('#streamtag36').append("<span>Tournament</span>");
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('riot');
		$('#stream36').addClass('competition');
		$('#stream36').addClass('tournament');
		$('#stream36').addClass('english');
	}
	if(stream36 == "riotgames2") {
		$('#streamtag36').append("<span>Riot</span>");
		$('#streamtag36').append("<span>Competition</span>");
		$('#streamtag36').append("<span>Tournament</span>");
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('riot');
		$('#stream36').addClass('competition');
		$('#stream36').addClass('tournament');
		$('#stream36').addClass('english');
	}
	if(stream36 == "nightblue3") {
		$('#streamtag36').append("<span>Challenger</span>");
		$('#streamtag36').append("<span>Jungle</span>");
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('challenger');
		$('#stream36').addClass('jungle');
		$('#stream36').addClass('english');
	}
	if(stream36 == "imaqtpie") {
		$('#streamtag36').append("<span>Challenger</span>");
		$('#streamtag36').append("<span>AD Carry</span>");
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('challenger');
		$('#stream36').addClass('adc');
		$('#stream36').addClass('english');
	}
	if(stream36 == "domingo") {
		$('#streamtag36').append("<span>French</span>");

		$('#stream36').addClass('french');
	}
	if(stream36 == "skumbagkrepo") {
		$('#streamtag36').append("<span>Caster</span>");
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Master</span>");

		$('#stream36').addClass('caster');
		$('#stream36').addClass('english');
		$('#stream36').addClass('master');
	}
	if(stream36 == "tsm_theoddone") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Diamond</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('master');

	}
	if(stream36 == "trick36g") {
		$('#streamtag36').append("<span>Diamond</span>");
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('master');
		$('#stream36').addClass('english');
	}
	if(stream36 == "thaldrinlol") {
		$('#streamtag36').append("<span>Turkish</span>");

		$('#stream36').addClass('turkish');
	}
	if(stream36 == "wingsofdeath") {
		$('#streamtag36').append("<span>Master</span>");

		$('#stream36').addClass('master');
	}
	if(stream36 == "zerator") {
		$('#streamtag36').append("<span>French</span>");

		$('#stream36').addClass('french');
	}
	if(stream36 == "kaypealol") {
		$('#streamtag36').append("<span>Girl</span>");
		$('#streamtag36').append("<span>Gold</span>");

		$('#stream36').addClass('girl');
		$('#stream36').addClass('plat');
	}
	if(stream36 == "froggen") {
		$('#streamtag36').append("<span>Pro</span>");
		$('#streamtag36').append("<span>Challenger</span>");
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('pro');
		$('#stream36').addClass('challenger');
		$('#stream36').addClass('english');
	}
	if(stream36 == "sp4zie") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Funny</span>");
		$('#streamtag36').append("<span>Platinum</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('funny');
		$('#stream36').addClass('plat');
	}
	if(stream36 == "mushisgosu") {
		$('#streamtag36').append("<span>Girl</span>");
		$('#streamtag36').append("<span>Music</span>");
		$('#streamtag36').append("<span>Challenger</span>");

		$('#stream36').addClass('girl');
		$('#stream36').addClass('music');
		$('#stream36').addClass('challenger');
	}
	if(stream36 == "cowsep") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Funny</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('funny');
	}

	var stream37 = "<? echo $lolarray->streams[36]->channel->name; ?>";

	if(stream37 == "riotgames") {
		$('#streamtag37').append("<span>Riot</span>");
		$('#streamtag37').append("<span>Competition</span>");
		$('#streamtag37').append("<span>Tournament</span>");
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('riot');
		$('#stream37').addClass('competition');
		$('#stream37').addClass('tournament');
		$('#stream37').addClass('english');
	}
	if(stream37 == "riotgames2") {
		$('#streamtag37').append("<span>Riot</span>");
		$('#streamtag37').append("<span>Competition</span>");
		$('#streamtag37').append("<span>Tournament</span>");
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('riot');
		$('#stream37').addClass('competition');
		$('#stream37').addClass('tournament');
		$('#stream37').addClass('english');
	}
	if(stream37 == "nightblue3") {
		$('#streamtag37').append("<span>Challenger</span>");
		$('#streamtag37').append("<span>Jungle</span>");
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('challenger');
		$('#stream37').addClass('jungle');
		$('#stream37').addClass('english');
	}
	if(stream37 == "imaqtpie") {
		$('#streamtag37').append("<span>Challenger</span>");
		$('#streamtag37').append("<span>AD Carry</span>");
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('challenger');
		$('#stream37').addClass('adc');
		$('#stream37').addClass('english');
	}
	if(stream37 == "domingo") {
		$('#streamtag37').append("<span>French</span>");

		$('#stream37').addClass('french');
	}
	if(stream37 == "skumbagkrepo") {
		$('#streamtag37').append("<span>Caster</span>");
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Master</span>");

		$('#stream37').addClass('caster');
		$('#stream37').addClass('english');
		$('#stream37').addClass('master');
	}
	if(stream37 == "tsm_theoddone") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Diamond</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('master');

	}
	if(stream37 == "trick37g") {
		$('#streamtag37').append("<span>Diamond</span>");
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('master');
		$('#stream37').addClass('english');
	}
	if(stream37 == "thaldrinlol") {
		$('#streamtag37').append("<span>Turkish</span>");

		$('#stream37').addClass('turkish');
	}
	if(stream37 == "wingsofdeath") {
		$('#streamtag37').append("<span>Master</span>");

		$('#stream37').addClass('master');
	}
	if(stream37 == "zerator") {
		$('#streamtag37').append("<span>French</span>");

		$('#stream37').addClass('french');
	}
	if(stream37 == "kaypealol") {
		$('#streamtag37').append("<span>Girl</span>");
		$('#streamtag37').append("<span>Gold</span>");

		$('#stream37').addClass('girl');
		$('#stream37').addClass('plat');
	}
	if(stream37 == "froggen") {
		$('#streamtag37').append("<span>Pro</span>");
		$('#streamtag37').append("<span>Challenger</span>");
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('pro');
		$('#stream37').addClass('challenger');
		$('#stream37').addClass('english');
	}
	if(stream37 == "sp4zie") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Funny</span>");
		$('#streamtag37').append("<span>Platinum</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('funny');
		$('#stream37').addClass('plat');
	}
	if(stream37 == "mushisgosu") {
		$('#streamtag37').append("<span>Girl</span>");
		$('#streamtag37').append("<span>Music</span>");
		$('#streamtag37').append("<span>Challenger</span>");

		$('#stream37').addClass('girl');
		$('#stream37').addClass('music');
		$('#stream37').addClass('challenger');
	}
	if(stream37 == "cowsep") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Funny</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('funny');
	}

	var stream38 = "<? echo $lolarray->streams[38]->channel->name; ?>";

	if(stream38 == "riotgames") {
		$('#streamtag38').append("<span>Riot</span>");
		$('#streamtag38').append("<span>Competition</span>");
		$('#streamtag38').append("<span>Tournament</span>");
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('riot');
		$('#stream38').addClass('competition');
		$('#stream38').addClass('tournament');
		$('#stream38').addClass('english');
	}
	if(stream38 == "riotgames2") {
		$('#streamtag38').append("<span>Riot</span>");
		$('#streamtag38').append("<span>Competition</span>");
		$('#streamtag38').append("<span>Tournament</span>");
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('riot');
		$('#stream38').addClass('competition');
		$('#stream38').addClass('tournament');
		$('#stream38').addClass('english');
	}
	if(stream38 == "nightblue3") {
		$('#streamtag38').append("<span>Challenger</span>");
		$('#streamtag38').append("<span>Jungle</span>");
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('challenger');
		$('#stream38').addClass('jungle');
		$('#stream38').addClass('english');
	}
	if(stream38 == "imaqtpie") {
		$('#streamtag38').append("<span>Challenger</span>");
		$('#streamtag38').append("<span>AD Carry</span>");
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('challenger');
		$('#stream38').addClass('adc');
		$('#stream38').addClass('english');
	}
	if(stream38 == "domingo") {
		$('#streamtag38').append("<span>French</span>");

		$('#stream38').addClass('french');
	}
	if(stream38 == "skumbagkrepo") {
		$('#streamtag38').append("<span>Caster</span>");
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Master</span>");

		$('#stream38').addClass('caster');
		$('#stream38').addClass('english');
		$('#stream38').addClass('master');
	}
	if(stream38 == "tsm_theoddone") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Diamond</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('master');

	}
	if(stream38 == "trick38g") {
		$('#streamtag38').append("<span>Diamond</span>");
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('master');
		$('#stream38').addClass('english');
	}
	if(stream38 == "thaldrinlol") {
		$('#streamtag38').append("<span>Turkish</span>");

		$('#stream38').addClass('turkish');
	}
	if(stream38 == "wingsofdeath") {
		$('#streamtag38').append("<span>Master</span>");

		$('#stream38').addClass('master');
	}
	if(stream38 == "zerator") {
		$('#streamtag38').append("<span>French</span>");

		$('#stream38').addClass('french');
	}
	if(stream38 == "kaypealol") {
		$('#streamtag38').append("<span>Girl</span>");
		$('#streamtag38').append("<span>Gold</span>");

		$('#stream38').addClass('girl');
		$('#stream38').addClass('plat');
	}
	if(stream38 == "froggen") {
		$('#streamtag38').append("<span>Pro</span>");
		$('#streamtag38').append("<span>Challenger</span>");
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('pro');
		$('#stream38').addClass('challenger');
		$('#stream38').addClass('english');
	}
	if(stream38 == "sp4zie") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Funny</span>");
		$('#streamtag38').append("<span>Platinum</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('funny');
		$('#stream38').addClass('plat');
	}
	if(stream38 == "mushisgosu") {
		$('#streamtag38').append("<span>Girl</span>");
		$('#streamtag38').append("<span>Music</span>");
		$('#streamtag38').append("<span>Challenger</span>");

		$('#stream38').addClass('girl');
		$('#stream38').addClass('music');
		$('#stream38').addClass('challenger');
	}
	if(stream38 == "cowsep") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Funny</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('funny');
	}

	var stream39 = "<? echo $lolarray->streams[39]->channel->name; ?>";

	if(stream39 == "riotgames") {
		$('#streamtag39').append("<span>Riot</span>");
		$('#streamtag39').append("<span>Competition</span>");
		$('#streamtag39').append("<span>Tournament</span>");
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('riot');
		$('#stream39').addClass('competition');
		$('#stream39').addClass('tournament');
		$('#stream39').addClass('english');
	}
	if(stream39 == "riotgames2") {
		$('#streamtag39').append("<span>Riot</span>");
		$('#streamtag39').append("<span>Competition</span>");
		$('#streamtag39').append("<span>Tournament</span>");
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('riot');
		$('#stream39').addClass('competition');
		$('#stream39').addClass('tournament');
		$('#stream39').addClass('english');
	}
	if(stream39 == "nightblue3") {
		$('#streamtag39').append("<span>Challenger</span>");
		$('#streamtag39').append("<span>Jungle</span>");
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('challenger');
		$('#stream39').addClass('jungle');
		$('#stream39').addClass('english');
	}
	if(stream39 == "imaqtpie") {
		$('#streamtag39').append("<span>Challenger</span>");
		$('#streamtag39').append("<span>AD Carry</span>");
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('challenger');
		$('#stream39').addClass('adc');
		$('#stream39').addClass('english');
	}
	if(stream39 == "domingo") {
		$('#streamtag39').append("<span>French</span>");

		$('#stream39').addClass('french');
	}
	if(stream39 == "skumbagkrepo") {
		$('#streamtag39').append("<span>Caster</span>");
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Master</span>");

		$('#stream39').addClass('caster');
		$('#stream39').addClass('english');
		$('#stream39').addClass('master');
	}
	if(stream39 == "tsm_theoddone") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Diamond</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('master');

	}
	if(stream39 == "trick39g") {
		$('#streamtag39').append("<span>Diamond</span>");
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('master');
		$('#stream39').addClass('english');
	}
	if(stream39 == "thaldrinlol") {
		$('#streamtag39').append("<span>Turkish</span>");

		$('#stream39').addClass('turkish');
	}
	if(stream39 == "wingsofdeath") {
		$('#streamtag39').append("<span>Master</span>");

		$('#stream39').addClass('master');
	}
	if(stream39 == "zerator") {
		$('#streamtag39').append("<span>French</span>");

		$('#stream39').addClass('french');
	}
	if(stream39 == "kaypealol") {
		$('#streamtag39').append("<span>Girl</span>");
		$('#streamtag39').append("<span>Gold</span>");

		$('#stream39').addClass('girl');
		$('#stream39').addClass('plat');
	}
	if(stream39 == "froggen") {
		$('#streamtag39').append("<span>Pro</span>");
		$('#streamtag39').append("<span>Challenger</span>");
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('pro');
		$('#stream39').addClass('challenger');
		$('#stream39').addClass('english');
	}
	if(stream39 == "sp4zie") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Funny</span>");
		$('#streamtag39').append("<span>Platinum</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('funny');
		$('#stream39').addClass('plat');
	}
	if(stream39 == "mushisgosu") {
		$('#streamtag39').append("<span>Girl</span>");
		$('#streamtag39').append("<span>Music</span>");
		$('#streamtag39').append("<span>Challenger</span>");

		$('#stream39').addClass('girl');
		$('#stream39').addClass('music');
		$('#stream39').addClass('challenger');
	}
	if(stream39 == "cowsep") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Funny</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('funny');
	}

	var stream40 = "<? echo $lolarray->streams[40]->channel->name; ?>";

	if(stream40 == "riotgames") {
		$('#streamtag40').append("<span>Riot</span>");
		$('#streamtag40').append("<span>Competition</span>");
		$('#streamtag40').append("<span>Tournament</span>");
		$('#streamtag40').append("<span>English</span>");

		$('#stream40').addClass('riot');
		$('#stream40').addClass('competition');
		$('#stream40').addClass('tournament');
		$('#stream40').addClass('english');
	}
	if(stream40 == "riotgames2") {
		$('#streamtag40').append("<span>Riot</span>");
		$('#streamtag40').append("<span>Competition</span>");
		$('#streamtag40').append("<span>Tournament</span>");
		$('#streamtag40').append("<span>English</span>");

		$('#stream40').addClass('riot');
		$('#stream40').addClass('competition');
		$('#stream40').addClass('tournament');
		$('#stream40').addClass('english');
	}
	if(stream40 == "nightblue3") {
		$('#streamtag40').append("<span>Challenger</span>");
		$('#streamtag40').append("<span>Jungle</span>");
		$('#streamtag40').append("<span>English</span>");

		$('#stream40').addClass('challenger');
		$('#stream40').addClass('jungle');
		$('#stream40').addClass('english');
	}
	if(stream40 == "imaqtpie") {
		$('#streamtag40').append("<span>Challenger</span>");
		$('#streamtag40').append("<span>AD Carry</span>");
		$('#streamtag40').append("<span>English</span>");

		$('#stream40').addClass('challenger');
		$('#stream40').addClass('adc');
		$('#stream40').addClass('english');
	}
	if(stream40 == "domingo") {
		$('#streamtag40').append("<span>French</span>");

		$('#stream40').addClass('french');
	}
	if(stream40 == "skumbagkrepo") {
		$('#streamtag40').append("<span>Caster</span>");
		$('#streamtag40').append("<span>English</span>");
		$('#streamtag40').append("<span>Master</span>");

		$('#stream40').addClass('caster');
		$('#stream40').addClass('english');
		$('#stream40').addClass('master');
	}
	if(stream40 == "tsm_theoddone") {
		$('#streamtag40').append("<span>English</span>");
		$('#streamtag40').append("<span>Diamond</span>");

		$('#stream40').addClass('english');
		$('#stream40').addClass('master');

	}
	if(stream40 == "trick40g") {
		$('#streamtag40').append("<span>Diamond</span>");
		$('#streamtag40').append("<span>English</span>");

		$('#stream40').addClass('master');
		$('#stream40').addClass('english');
	}
	if(stream40 == "thaldrinlol") {
		$('#streamtag40').append("<span>Turkish</span>");

		$('#stream40').addClass('turkish');
	}
	if(stream40 == "wingsofdeath") {
		$('#streamtag40').append("<span>Master</span>");

		$('#stream40').addClass('master');
	}
	if(stream40 == "zerator") {
		$('#streamtag40').append("<span>French</span>");

		$('#stream40').addClass('french');
	}
	if(stream40 == "kaypealol") {
		$('#streamtag40').append("<span>Girl</span>");
		$('#streamtag40').append("<span>Gold</span>");

		$('#stream40').addClass('girl');
		$('#stream40').addClass('plat');
	}
	if(stream40 == "froggen") {
		$('#streamtag40').append("<span>Pro</span>");
		$('#streamtag40').append("<span>Challenger</span>");
		$('#streamtag40').append("<span>English</span>");

		$('#stream40').addClass('pro');
		$('#stream40').addClass('challenger');
		$('#stream40').addClass('english');
	}
	if(stream40 == "sp4zie") {
		$('#streamtag40').append("<span>English</span>");
		$('#streamtag40').append("<span>Funny</span>");
		$('#streamtag40').append("<span>Platinum</span>");

		$('#stream40').addClass('english');
		$('#stream40').addClass('funny');
		$('#stream40').addClass('plat');
	}
	if(stream40 == "mushisgosu") {
		$('#streamtag40').append("<span>Girl</span>");
		$('#streamtag40').append("<span>Music</span>");
		$('#streamtag40').append("<span>Challenger</span>");

		$('#stream40').addClass('girl');
		$('#stream40').addClass('music');
		$('#stream40').addClass('challenger');
	}
	if(stream40 == "cowsep") {
		$('#streamtag40').append("<span>English</span>");
		$('#streamtag40').append("<span>Funny</span>");

		$('#stream40').addClass('english');
		$('#stream40').addClass('funny');
	}

	var stream41 = "<? echo $lolarray->streams[41]->channel->name; ?>";

	if(stream41 == "riotgames") {
		$('#streamtag41').append("<span>Riot</span>");
		$('#streamtag41').append("<span>Competition</span>");
		$('#streamtag41').append("<span>Tournament</span>");
		$('#streamtag41').append("<span>English</span>");

		$('#stream41').addClass('riot');
		$('#stream41').addClass('competition');
		$('#stream41').addClass('tournament');
		$('#stream41').addClass('english');
	}
	if(stream41 == "riotgames2") {
		$('#streamtag41').append("<span>Riot</span>");
		$('#streamtag41').append("<span>Competition</span>");
		$('#streamtag41').append("<span>Tournament</span>");
		$('#streamtag41').append("<span>English</span>");

		$('#stream41').addClass('riot');
		$('#stream41').addClass('competition');
		$('#stream41').addClass('tournament');
		$('#stream41').addClass('english');
	}
	if(stream41 == "nightblue3") {
		$('#streamtag41').append("<span>Challenger</span>");
		$('#streamtag41').append("<span>Jungle</span>");
		$('#streamtag41').append("<span>English</span>");

		$('#stream41').addClass('challenger');
		$('#stream41').addClass('jungle');
		$('#stream41').addClass('english');
	}
	if(stream41 == "imaqtpie") {
		$('#streamtag41').append("<span>Challenger</span>");
		$('#streamtag41').append("<span>AD Carry</span>");
		$('#streamtag41').append("<span>English</span>");

		$('#stream41').addClass('challenger');
		$('#stream41').addClass('adc');
		$('#stream41').addClass('english');
	}
	if(stream41 == "domingo") {
		$('#streamtag41').append("<span>French</span>");

		$('#stream41').addClass('french');
	}
	if(stream41 == "skumbagkrepo") {
		$('#streamtag41').append("<span>Caster</span>");
		$('#streamtag41').append("<span>English</span>");
		$('#streamtag41').append("<span>Master</span>");

		$('#stream41').addClass('caster');
		$('#stream41').addClass('english');
		$('#stream41').addClass('master');
	}
	if(stream41 == "tsm_theoddone") {
		$('#streamtag41').append("<span>English</span>");
		$('#streamtag41').append("<span>Diamond</span>");

		$('#stream41').addClass('english');
		$('#stream41').addClass('master');

	}
	if(stream41 == "trick41g") {
		$('#streamtag41').append("<span>Diamond</span>");
		$('#streamtag41').append("<span>English</span>");

		$('#stream41').addClass('master');
		$('#stream41').addClass('english');
	}
	if(stream41 == "thaldrinlol") {
		$('#streamtag41').append("<span>Turkish</span>");

		$('#stream41').addClass('turkish');
	}
	if(stream41 == "wingsofdeath") {
		$('#streamtag41').append("<span>Master</span>");

		$('#stream41').addClass('master');
	}
	if(stream41 == "zerator") {
		$('#streamtag41').append("<span>French</span>");

		$('#stream41').addClass('french');
	}
	if(stream41 == "kaypealol") {
		$('#streamtag41').append("<span>Girl</span>");
		$('#streamtag41').append("<span>Gold</span>");

		$('#stream41').addClass('girl');
		$('#stream41').addClass('plat');
	}
	if(stream41 == "froggen") {
		$('#streamtag41').append("<span>Pro</span>");
		$('#streamtag41').append("<span>Challenger</span>");
		$('#streamtag41').append("<span>English</span>");

		$('#stream41').addClass('pro');
		$('#stream41').addClass('challenger');
		$('#stream41').addClass('english');
	}
	if(stream41 == "sp4zie") {
		$('#streamtag41').append("<span>English</span>");
		$('#streamtag41').append("<span>Funny</span>");
		$('#streamtag41').append("<span>Platinum</span>");

		$('#stream41').addClass('english');
		$('#stream41').addClass('funny');
		$('#stream41').addClass('plat');
	}
	if(stream41 == "mushisgosu") {
		$('#streamtag41').append("<span>Girl</span>");
		$('#streamtag41').append("<span>Music</span>");
		$('#streamtag41').append("<span>Challenger</span>");

		$('#stream41').addClass('girl');
		$('#stream41').addClass('music');
		$('#stream41').addClass('challenger');
	}
	if(stream41 == "cowsep") {
		$('#streamtag41').append("<span>English</span>");
		$('#streamtag41').append("<span>Funny</span>");

		$('#stream41').addClass('english');
		$('#stream41').addClass('funny');
	}

	var stream42 = "<? echo $lolarray->streams[42]->channel->name; ?>";

	if(stream42 == "riotgames") {
		$('#streamtag42').append("<span>Riot</span>");
		$('#streamtag42').append("<span>Competition</span>");
		$('#streamtag42').append("<span>Tournament</span>");
		$('#streamtag42').append("<span>English</span>");

		$('#stream42').addClass('riot');
		$('#stream42').addClass('competition');
		$('#stream42').addClass('tournament');
		$('#stream42').addClass('english');
	}
	if(stream42 == "riotgames2") {
		$('#streamtag42').append("<span>Riot</span>");
		$('#streamtag42').append("<span>Competition</span>");
		$('#streamtag42').append("<span>Tournament</span>");
		$('#streamtag42').append("<span>English</span>");

		$('#stream42').addClass('riot');
		$('#stream42').addClass('competition');
		$('#stream42').addClass('tournament');
		$('#stream42').addClass('english');
	}
	if(stream42 == "nightblue3") {
		$('#streamtag42').append("<span>Challenger</span>");
		$('#streamtag42').append("<span>Jungle</span>");
		$('#streamtag42').append("<span>English</span>");

		$('#stream42').addClass('challenger');
		$('#stream42').addClass('jungle');
		$('#stream42').addClass('english');
	}
	if(stream42 == "imaqtpie") {
		$('#streamtag42').append("<span>Challenger</span>");
		$('#streamtag42').append("<span>AD Carry</span>");
		$('#streamtag42').append("<span>English</span>");

		$('#stream42').addClass('challenger');
		$('#stream42').addClass('adc');
		$('#stream42').addClass('english');
	}
	if(stream42 == "domingo") {
		$('#streamtag42').append("<span>French</span>");

		$('#stream42').addClass('french');
	}
	if(stream42 == "skumbagkrepo") {
		$('#streamtag42').append("<span>Caster</span>");
		$('#streamtag42').append("<span>English</span>");
		$('#streamtag42').append("<span>Master</span>");

		$('#stream42').addClass('caster');
		$('#stream42').addClass('english');
		$('#stream42').addClass('master');
	}
	if(stream42 == "tsm_theoddone") {
		$('#streamtag42').append("<span>English</span>");
		$('#streamtag42').append("<span>Diamond</span>");

		$('#stream42').addClass('english');
		$('#stream42').addClass('master');

	}
	if(stream42 == "trick42g") {
		$('#streamtag42').append("<span>Diamond</span>");
		$('#streamtag42').append("<span>English</span>");

		$('#stream42').addClass('master');
		$('#stream42').addClass('english');
	}
	if(stream42 == "thaldrinlol") {
		$('#streamtag42').append("<span>Turkish</span>");

		$('#stream42').addClass('turkish');
	}
	if(stream42 == "wingsofdeath") {
		$('#streamtag42').append("<span>Master</span>");

		$('#stream42').addClass('master');
	}
	if(stream42 == "zerator") {
		$('#streamtag42').append("<span>French</span>");

		$('#stream42').addClass('french');
	}
	if(stream42 == "kaypealol") {
		$('#streamtag42').append("<span>Girl</span>");
		$('#streamtag42').append("<span>Gold</span>");

		$('#stream42').addClass('girl');
		$('#stream42').addClass('plat');
	}
	if(stream42 == "froggen") {
		$('#streamtag42').append("<span>Pro</span>");
		$('#streamtag42').append("<span>Challenger</span>");
		$('#streamtag42').append("<span>English</span>");

		$('#stream42').addClass('pro');
		$('#stream42').addClass('challenger');
		$('#stream42').addClass('english');
	}
	if(stream42 == "sp4zie") {
		$('#streamtag42').append("<span>English</span>");
		$('#streamtag42').append("<span>Funny</span>");
		$('#streamtag42').append("<span>Platinum</span>");

		$('#stream42').addClass('english');
		$('#stream42').addClass('funny');
		$('#stream42').addClass('plat');
	}
	if(stream42 == "mushisgosu") {
		$('#streamtag42').append("<span>Girl</span>");
		$('#streamtag42').append("<span>Music</span>");
		$('#streamtag42').append("<span>Challenger</span>");

		$('#stream42').addClass('girl');
		$('#stream42').addClass('music');
		$('#stream42').addClass('challenger');
	}
	if(stream42 == "cowsep") {
		$('#streamtag42').append("<span>English</span>");
		$('#streamtag42').append("<span>Funny</span>");

		$('#stream42').addClass('english');
		$('#stream42').addClass('funny');
	}

	var stream43 = "<? echo $lolarray->streams[42]->channel->name; ?>";

	if(stream43 == "riotgames") {
		$('#streamtag43').append("<span>Riot</span>");
		$('#streamtag43').append("<span>Competition</span>");
		$('#streamtag43').append("<span>Tournament</span>");
		$('#streamtag43').append("<span>English</span>");

		$('#stream43').addClass('riot');
		$('#stream43').addClass('competition');
		$('#stream43').addClass('tournament');
		$('#stream43').addClass('english');
	}
	if(stream43 == "riotgames2") {
		$('#streamtag43').append("<span>Riot</span>");
		$('#streamtag43').append("<span>Competition</span>");
		$('#streamtag43').append("<span>Tournament</span>");
		$('#streamtag43').append("<span>English</span>");

		$('#stream43').addClass('riot');
		$('#stream43').addClass('competition');
		$('#stream43').addClass('tournament');
		$('#stream43').addClass('english');
	}
	if(stream43 == "nightblue3") {
		$('#streamtag43').append("<span>Challenger</span>");
		$('#streamtag43').append("<span>Jungle</span>");
		$('#streamtag43').append("<span>English</span>");

		$('#stream43').addClass('challenger');
		$('#stream43').addClass('jungle');
		$('#stream43').addClass('english');
	}
	if(stream43 == "imaqtpie") {
		$('#streamtag43').append("<span>Challenger</span>");
		$('#streamtag43').append("<span>AD Carry</span>");
		$('#streamtag43').append("<span>English</span>");

		$('#stream43').addClass('challenger');
		$('#stream43').addClass('adc');
		$('#stream43').addClass('english');
	}
	if(stream43 == "domingo") {
		$('#streamtag43').append("<span>French</span>");

		$('#stream43').addClass('french');
	}
	if(stream43 == "skumbagkrepo") {
		$('#streamtag43').append("<span>Caster</span>");
		$('#streamtag43').append("<span>English</span>");
		$('#streamtag43').append("<span>Master</span>");

		$('#stream43').addClass('caster');
		$('#stream43').addClass('english');
		$('#stream43').addClass('master');
	}
	if(stream43 == "tsm_theoddone") {
		$('#streamtag43').append("<span>English</span>");
		$('#streamtag43').append("<span>Diamond</span>");

		$('#stream43').addClass('english');
		$('#stream43').addClass('master');

	}
	if(stream43 == "trick43g") {
		$('#streamtag43').append("<span>Diamond</span>");
		$('#streamtag43').append("<span>English</span>");

		$('#stream43').addClass('master');
		$('#stream43').addClass('english');
	}
	if(stream43 == "thaldrinlol") {
		$('#streamtag43').append("<span>Turkish</span>");

		$('#stream43').addClass('turkish');
	}
	if(stream43 == "wingsofdeath") {
		$('#streamtag43').append("<span>Master</span>");

		$('#stream43').addClass('master');
	}
	if(stream43 == "zerator") {
		$('#streamtag43').append("<span>French</span>");

		$('#stream43').addClass('french');
	}
	if(stream43 == "kaypealol") {
		$('#streamtag43').append("<span>Girl</span>");
		$('#streamtag43').append("<span>Gold</span>");

		$('#stream43').addClass('girl');
		$('#stream43').addClass('plat');
	}
	if(stream43 == "froggen") {
		$('#streamtag43').append("<span>Pro</span>");
		$('#streamtag43').append("<span>Challenger</span>");
		$('#streamtag43').append("<span>English</span>");

		$('#stream43').addClass('pro');
		$('#stream43').addClass('challenger');
		$('#stream43').addClass('english');
	}
	if(stream43 == "sp4zie") {
		$('#streamtag43').append("<span>English</span>");
		$('#streamtag43').append("<span>Funny</span>");
		$('#streamtag43').append("<span>Platinum</span>");

		$('#stream43').addClass('english');
		$('#stream43').addClass('funny');
		$('#stream43').addClass('plat');
	}
	if(stream43 == "mushisgosu") {
		$('#streamtag43').append("<span>Girl</span>");
		$('#streamtag43').append("<span>Music</span>");
		$('#streamtag43').append("<span>Challenger</span>");

		$('#stream43').addClass('girl');
		$('#stream43').addClass('music');
		$('#stream43').addClass('challenger');
	}
	if(stream43 == "cowsep") {
		$('#streamtag43').append("<span>English</span>");
		$('#streamtag43').append("<span>Funny</span>");

		$('#stream43').addClass('english');
		$('#stream43').addClass('funny');
	}

	var stream44 = "<? echo $lolarray->streams[44]->channel->name; ?>";

	if(stream44 == "riotgames") {
		$('#streamtag44').append("<span>Riot</span>");
		$('#streamtag44').append("<span>Competition</span>");
		$('#streamtag44').append("<span>Tournament</span>");
		$('#streamtag44').append("<span>English</span>");

		$('#stream44').addClass('riot');
		$('#stream44').addClass('competition');
		$('#stream44').addClass('tournament');
		$('#stream44').addClass('english');
	}
	if(stream44 == "riotgames2") {
		$('#streamtag44').append("<span>Riot</span>");
		$('#streamtag44').append("<span>Competition</span>");
		$('#streamtag44').append("<span>Tournament</span>");
		$('#streamtag44').append("<span>English</span>");

		$('#stream44').addClass('riot');
		$('#stream44').addClass('competition');
		$('#stream44').addClass('tournament');
		$('#stream44').addClass('english');
	}
	if(stream44 == "nightblue3") {
		$('#streamtag44').append("<span>Challenger</span>");
		$('#streamtag44').append("<span>Jungle</span>");
		$('#streamtag44').append("<span>English</span>");

		$('#stream44').addClass('challenger');
		$('#stream44').addClass('jungle');
		$('#stream44').addClass('english');
	}
	if(stream44 == "imaqtpie") {
		$('#streamtag44').append("<span>Challenger</span>");
		$('#streamtag44').append("<span>AD Carry</span>");
		$('#streamtag44').append("<span>English</span>");

		$('#stream44').addClass('challenger');
		$('#stream44').addClass('adc');
		$('#stream44').addClass('english');
	}
	if(stream44 == "domingo") {
		$('#streamtag44').append("<span>French</span>");

		$('#stream44').addClass('french');
	}
	if(stream44 == "skumbagkrepo") {
		$('#streamtag44').append("<span>Caster</span>");
		$('#streamtag44').append("<span>English</span>");
		$('#streamtag44').append("<span>Master</span>");

		$('#stream44').addClass('caster');
		$('#stream44').addClass('english');
		$('#stream44').addClass('master');
	}
	if(stream44 == "tsm_theoddone") {
		$('#streamtag44').append("<span>English</span>");
		$('#streamtag44').append("<span>Diamond</span>");

		$('#stream44').addClass('english');
		$('#stream44').addClass('master');

	}
	if(stream44 == "trick44g") {
		$('#streamtag44').append("<span>Diamond</span>");
		$('#streamtag44').append("<span>English</span>");

		$('#stream44').addClass('master');
		$('#stream44').addClass('english');
	}
	if(stream44 == "thaldrinlol") {
		$('#streamtag44').append("<span>Turkish</span>");

		$('#stream44').addClass('turkish');
	}
	if(stream44 == "wingsofdeath") {
		$('#streamtag44').append("<span>Master</span>");

		$('#stream44').addClass('master');
	}
	if(stream44 == "zerator") {
		$('#streamtag44').append("<span>French</span>");

		$('#stream44').addClass('french');
	}
	if(stream44 == "kaypealol") {
		$('#streamtag44').append("<span>Girl</span>");
		$('#streamtag44').append("<span>Gold</span>");

		$('#stream44').addClass('girl');
		$('#stream44').addClass('plat');
	}
	if(stream44 == "froggen") {
		$('#streamtag44').append("<span>Pro</span>");
		$('#streamtag44').append("<span>Challenger</span>");
		$('#streamtag44').append("<span>English</span>");

		$('#stream44').addClass('pro');
		$('#stream44').addClass('challenger');
		$('#stream44').addClass('english');
	}
	if(stream44 == "sp4zie") {
		$('#streamtag44').append("<span>English</span>");
		$('#streamtag44').append("<span>Funny</span>");
		$('#streamtag44').append("<span>Platinum</span>");

		$('#stream44').addClass('english');
		$('#stream44').addClass('funny');
		$('#stream44').addClass('plat');
	}
	if(stream44 == "mushisgosu") {
		$('#streamtag44').append("<span>Girl</span>");
		$('#streamtag44').append("<span>Music</span>");
		$('#streamtag44').append("<span>Challenger</span>");

		$('#stream44').addClass('girl');
		$('#stream44').addClass('music');
		$('#stream44').addClass('challenger');
	}
	if(stream44 == "cowsep") {
		$('#streamtag44').append("<span>English</span>");
		$('#streamtag44').append("<span>Funny</span>");

		$('#stream44').addClass('english');
		$('#stream44').addClass('funny');
	}

	var stream45 = "<? echo $lolarray->streams[45]->channel->name; ?>";

	if(stream45 == "riotgames") {
		$('#streamtag45').append("<span>Riot</span>");
		$('#streamtag45').append("<span>Competition</span>");
		$('#streamtag45').append("<span>Tournament</span>");
		$('#streamtag45').append("<span>English</span>");

		$('#stream45').addClass('riot');
		$('#stream45').addClass('competition');
		$('#stream45').addClass('tournament');
		$('#stream45').addClass('english');
	}
	if(stream45 == "riotgames2") {
		$('#streamtag45').append("<span>Riot</span>");
		$('#streamtag45').append("<span>Competition</span>");
		$('#streamtag45').append("<span>Tournament</span>");
		$('#streamtag45').append("<span>English</span>");

		$('#stream45').addClass('riot');
		$('#stream45').addClass('competition');
		$('#stream45').addClass('tournament');
		$('#stream45').addClass('english');
	}
	if(stream45 == "nightblue3") {
		$('#streamtag45').append("<span>Challenger</span>");
		$('#streamtag45').append("<span>Jungle</span>");
		$('#streamtag45').append("<span>English</span>");

		$('#stream45').addClass('challenger');
		$('#stream45').addClass('jungle');
		$('#stream45').addClass('english');
	}
	if(stream45 == "imaqtpie") {
		$('#streamtag45').append("<span>Challenger</span>");
		$('#streamtag45').append("<span>AD Carry</span>");
		$('#streamtag45').append("<span>English</span>");

		$('#stream45').addClass('challenger');
		$('#stream45').addClass('adc');
		$('#stream45').addClass('english');
	}
	if(stream45 == "domingo") {
		$('#streamtag45').append("<span>French</span>");

		$('#stream45').addClass('french');
	}
	if(stream45 == "skumbagkrepo") {
		$('#streamtag45').append("<span>Caster</span>");
		$('#streamtag45').append("<span>English</span>");
		$('#streamtag45').append("<span>Master</span>");

		$('#stream45').addClass('caster');
		$('#stream45').addClass('english');
		$('#stream45').addClass('master');
	}
	if(stream45 == "tsm_theoddone") {
		$('#streamtag45').append("<span>English</span>");
		$('#streamtag45').append("<span>Diamond</span>");

		$('#stream45').addClass('english');
		$('#stream45').addClass('master');

	}
	if(stream45 == "trick45g") {
		$('#streamtag45').append("<span>Diamond</span>");
		$('#streamtag45').append("<span>English</span>");

		$('#stream45').addClass('master');
		$('#stream45').addClass('english');
	}
	if(stream45 == "thaldrinlol") {
		$('#streamtag45').append("<span>Turkish</span>");

		$('#stream45').addClass('turkish');
	}
	if(stream45 == "wingsofdeath") {
		$('#streamtag45').append("<span>Master</span>");

		$('#stream45').addClass('master');
	}
	if(stream45 == "zerator") {
		$('#streamtag45').append("<span>French</span>");

		$('#stream45').addClass('french');
	}
	if(stream45 == "kaypealol") {
		$('#streamtag45').append("<span>Girl</span>");
		$('#streamtag45').append("<span>Gold</span>");

		$('#stream45').addClass('girl');
		$('#stream45').addClass('plat');
	}
	if(stream45 == "froggen") {
		$('#streamtag45').append("<span>Pro</span>");
		$('#streamtag45').append("<span>Challenger</span>");
		$('#streamtag45').append("<span>English</span>");

		$('#stream45').addClass('pro');
		$('#stream45').addClass('challenger');
		$('#stream45').addClass('english');
	}
	if(stream45 == "sp4zie") {
		$('#streamtag45').append("<span>English</span>");
		$('#streamtag45').append("<span>Funny</span>");
		$('#streamtag45').append("<span>Platinum</span>");

		$('#stream45').addClass('english');
		$('#stream45').addClass('funny');
		$('#stream45').addClass('plat');
	}
	if(stream45 == "mushisgosu") {
		$('#streamtag45').append("<span>Girl</span>");
		$('#streamtag45').append("<span>Music</span>");
		$('#streamtag45').append("<span>Challenger</span>");

		$('#stream45').addClass('girl');
		$('#stream45').addClass('music');
		$('#stream45').addClass('challenger');
	}
	if(stream45 == "cowsep") {
		$('#streamtag45').append("<span>English</span>");
		$('#streamtag45').append("<span>Funny</span>");

		$('#stream45').addClass('english');
		$('#stream45').addClass('funny');
	}

	var stream46 = "<? echo $lolarray->streams[46]->channel->name; ?>";

	if(stream46 == "riotgames") {
		$('#streamtag46').append("<span>Riot</span>");
		$('#streamtag46').append("<span>Competition</span>");
		$('#streamtag46').append("<span>Tournament</span>");
		$('#streamtag46').append("<span>English</span>");

		$('#stream46').addClass('riot');
		$('#stream46').addClass('competition');
		$('#stream46').addClass('tournament');
		$('#stream46').addClass('english');
	}
	if(stream46 == "riotgames2") {
		$('#streamtag46').append("<span>Riot</span>");
		$('#streamtag46').append("<span>Competition</span>");
		$('#streamtag46').append("<span>Tournament</span>");
		$('#streamtag46').append("<span>English</span>");

		$('#stream46').addClass('riot');
		$('#stream46').addClass('competition');
		$('#stream46').addClass('tournament');
		$('#stream46').addClass('english');
	}
	if(stream46 == "nightblue3") {
		$('#streamtag46').append("<span>Challenger</span>");
		$('#streamtag46').append("<span>Jungle</span>");
		$('#streamtag46').append("<span>English</span>");

		$('#stream46').addClass('challenger');
		$('#stream46').addClass('jungle');
		$('#stream46').addClass('english');
	}
	if(stream46 == "imaqtpie") {
		$('#streamtag46').append("<span>Challenger</span>");
		$('#streamtag46').append("<span>AD Carry</span>");
		$('#streamtag46').append("<span>English</span>");

		$('#stream46').addClass('challenger');
		$('#stream46').addClass('adc');
		$('#stream46').addClass('english');
	}
	if(stream46 == "domingo") {
		$('#streamtag46').append("<span>French</span>");

		$('#stream46').addClass('french');
	}
	if(stream46 == "skumbagkrepo") {
		$('#streamtag46').append("<span>Caster</span>");
		$('#streamtag46').append("<span>English</span>");
		$('#streamtag46').append("<span>Master</span>");

		$('#stream46').addClass('caster');
		$('#stream46').addClass('english');
		$('#stream46').addClass('master');
	}
	if(stream46 == "tsm_theoddone") {
		$('#streamtag46').append("<span>English</span>");
		$('#streamtag46').append("<span>Diamond</span>");

		$('#stream46').addClass('english');
		$('#stream46').addClass('master');

	}
	if(stream46 == "trick46g") {
		$('#streamtag46').append("<span>Diamond</span>");
		$('#streamtag46').append("<span>English</span>");

		$('#stream46').addClass('master');
		$('#stream46').addClass('english');
	}
	if(stream46 == "thaldrinlol") {
		$('#streamtag46').append("<span>Turkish</span>");

		$('#stream46').addClass('turkish');
	}
	if(stream46 == "wingsofdeath") {
		$('#streamtag46').append("<span>Master</span>");

		$('#stream46').addClass('master');
	}
	if(stream46 == "zerator") {
		$('#streamtag46').append("<span>French</span>");

		$('#stream46').addClass('french');
	}
	if(stream46 == "kaypealol") {
		$('#streamtag46').append("<span>Girl</span>");
		$('#streamtag46').append("<span>Gold</span>");

		$('#stream46').addClass('girl');
		$('#stream46').addClass('plat');
	}
	if(stream46 == "froggen") {
		$('#streamtag46').append("<span>Pro</span>");
		$('#streamtag46').append("<span>Challenger</span>");
		$('#streamtag46').append("<span>English</span>");

		$('#stream46').addClass('pro');
		$('#stream46').addClass('challenger');
		$('#stream46').addClass('english');
	}
	if(stream46 == "sp4zie") {
		$('#streamtag46').append("<span>English</span>");
		$('#streamtag46').append("<span>Funny</span>");
		$('#streamtag46').append("<span>Platinum</span>");

		$('#stream46').addClass('english');
		$('#stream46').addClass('funny');
		$('#stream46').addClass('plat');
	}
	if(stream46 == "mushisgosu") {
		$('#streamtag46').append("<span>Girl</span>");
		$('#streamtag46').append("<span>Music</span>");
		$('#streamtag46').append("<span>Challenger</span>");

		$('#stream46').addClass('girl');
		$('#stream46').addClass('music');
		$('#stream46').addClass('challenger');
	}
	if(stream46 == "cowsep") {
		$('#streamtag46').append("<span>English</span>");
		$('#streamtag46').append("<span>Funny</span>");

		$('#stream46').addClass('english');
		$('#stream46').addClass('funny');
	}

	var stream47 = "<? echo $lolarray->streams[47]->channel->name; ?>";

	if(stream47 == "riotgames") {
		$('#streamtag47').append("<span>Riot</span>");
		$('#streamtag47').append("<span>Competition</span>");
		$('#streamtag47').append("<span>Tournament</span>");
		$('#streamtag47').append("<span>English</span>");

		$('#stream47').addClass('riot');
		$('#stream47').addClass('competition');
		$('#stream47').addClass('tournament');
		$('#stream47').addClass('english');
	}
	if(stream47 == "riotgames2") {
		$('#streamtag47').append("<span>Riot</span>");
		$('#streamtag47').append("<span>Competition</span>");
		$('#streamtag47').append("<span>Tournament</span>");
		$('#streamtag47').append("<span>English</span>");

		$('#stream47').addClass('riot');
		$('#stream47').addClass('competition');
		$('#stream47').addClass('tournament');
		$('#stream47').addClass('english');
	}
	if(stream47 == "nightblue3") {
		$('#streamtag47').append("<span>Challenger</span>");
		$('#streamtag47').append("<span>Jungle</span>");
		$('#streamtag47').append("<span>English</span>");

		$('#stream47').addClass('challenger');
		$('#stream47').addClass('jungle');
		$('#stream47').addClass('english');
	}
	if(stream47 == "imaqtpie") {
		$('#streamtag47').append("<span>Challenger</span>");
		$('#streamtag47').append("<span>AD Carry</span>");
		$('#streamtag47').append("<span>English</span>");

		$('#stream47').addClass('challenger');
		$('#stream47').addClass('adc');
		$('#stream47').addClass('english');
	}
	if(stream47 == "domingo") {
		$('#streamtag47').append("<span>French</span>");

		$('#stream47').addClass('french');
	}
	if(stream47 == "skumbagkrepo") {
		$('#streamtag47').append("<span>Caster</span>");
		$('#streamtag47').append("<span>English</span>");
		$('#streamtag47').append("<span>Master</span>");

		$('#stream47').addClass('caster');
		$('#stream47').addClass('english');
		$('#stream47').addClass('master');
	}
	if(stream47 == "tsm_theoddone") {
		$('#streamtag47').append("<span>English</span>");
		$('#streamtag47').append("<span>Diamond</span>");

		$('#stream47').addClass('english');
		$('#stream47').addClass('master');

	}
	if(stream47 == "trick47g") {
		$('#streamtag47').append("<span>Diamond</span>");
		$('#streamtag47').append("<span>English</span>");

		$('#stream47').addClass('master');
		$('#stream47').addClass('english');
	}
	if(stream47 == "thaldrinlol") {
		$('#streamtag47').append("<span>Turkish</span>");

		$('#stream47').addClass('turkish');
	}
	if(stream47 == "wingsofdeath") {
		$('#streamtag47').append("<span>Master</span>");

		$('#stream47').addClass('master');
	}
	if(stream47 == "zerator") {
		$('#streamtag47').append("<span>French</span>");

		$('#stream47').addClass('french');
	}
	if(stream47 == "kaypealol") {
		$('#streamtag47').append("<span>Girl</span>");
		$('#streamtag47').append("<span>Gold</span>");

		$('#stream47').addClass('girl');
		$('#stream47').addClass('plat');
	}
	if(stream47 == "froggen") {
		$('#streamtag47').append("<span>Pro</span>");
		$('#streamtag47').append("<span>Challenger</span>");
		$('#streamtag47').append("<span>English</span>");

		$('#stream47').addClass('pro');
		$('#stream47').addClass('challenger');
		$('#stream47').addClass('english');
	}
	if(stream47 == "sp4zie") {
		$('#streamtag47').append("<span>English</span>");
		$('#streamtag47').append("<span>Funny</span>");
		$('#streamtag47').append("<span>Platinum</span>");

		$('#stream47').addClass('english');
		$('#stream47').addClass('funny');
		$('#stream47').addClass('plat');
	}
	if(stream47 == "mushisgosu") {
		$('#streamtag47').append("<span>Girl</span>");
		$('#streamtag47').append("<span>Music</span>");
		$('#streamtag47').append("<span>Challenger</span>");

		$('#stream47').addClass('girl');
		$('#stream47').addClass('music');
		$('#stream47').addClass('challenger');
	}
	if(stream47 == "cowsep") {
		$('#streamtag47').append("<span>English</span>");
		$('#streamtag47').append("<span>Funny</span>");

		$('#stream47').addClass('english');
		$('#stream47').addClass('funny');
	}

	var stream48 = "<? echo $lolarray->streams[48]->channel->name; ?>";

	if(stream48 == "riotgames") {
		$('#streamtag48').append("<span>Riot</span>");
		$('#streamtag48').append("<span>Competition</span>");
		$('#streamtag48').append("<span>Tournament</span>");
		$('#streamtag48').append("<span>English</span>");

		$('#stream48').addClass('riot');
		$('#stream48').addClass('competition');
		$('#stream48').addClass('tournament');
		$('#stream48').addClass('english');
	}
	if(stream48 == "riotgames2") {
		$('#streamtag48').append("<span>Riot</span>");
		$('#streamtag48').append("<span>Competition</span>");
		$('#streamtag48').append("<span>Tournament</span>");
		$('#streamtag48').append("<span>English</span>");

		$('#stream48').addClass('riot');
		$('#stream48').addClass('competition');
		$('#stream48').addClass('tournament');
		$('#stream48').addClass('english');
	}
	if(stream48 == "nightblue3") {
		$('#streamtag48').append("<span>Challenger</span>");
		$('#streamtag48').append("<span>Jungle</span>");
		$('#streamtag48').append("<span>English</span>");

		$('#stream48').addClass('challenger');
		$('#stream48').addClass('jungle');
		$('#stream48').addClass('english');
	}
	if(stream48 == "imaqtpie") {
		$('#streamtag48').append("<span>Challenger</span>");
		$('#streamtag48').append("<span>AD Carry</span>");
		$('#streamtag48').append("<span>English</span>");

		$('#stream48').addClass('challenger');
		$('#stream48').addClass('adc');
		$('#stream48').addClass('english');
	}
	if(stream48 == "domingo") {
		$('#streamtag48').append("<span>French</span>");

		$('#stream48').addClass('french');
	}
	if(stream48 == "skumbagkrepo") {
		$('#streamtag48').append("<span>Caster</span>");
		$('#streamtag48').append("<span>English</span>");
		$('#streamtag48').append("<span>Master</span>");

		$('#stream48').addClass('caster');
		$('#stream48').addClass('english');
		$('#stream48').addClass('master');
	}
	if(stream48 == "tsm_theoddone") {
		$('#streamtag48').append("<span>English</span>");
		$('#streamtag48').append("<span>Diamond</span>");

		$('#stream48').addClass('english');
		$('#stream48').addClass('master');

	}
	if(stream48 == "trick48g") {
		$('#streamtag48').append("<span>Diamond</span>");
		$('#streamtag48').append("<span>English</span>");

		$('#stream48').addClass('master');
		$('#stream48').addClass('english');
	}
	if(stream48 == "thaldrinlol") {
		$('#streamtag48').append("<span>Turkish</span>");

		$('#stream48').addClass('turkish');
	}
	if(stream48 == "wingsofdeath") {
		$('#streamtag48').append("<span>Master</span>");

		$('#stream48').addClass('master');
	}
	if(stream48 == "zerator") {
		$('#streamtag48').append("<span>French</span>");

		$('#stream48').addClass('french');
	}
	if(stream48 == "kaypealol") {
		$('#streamtag48').append("<span>Girl</span>");
		$('#streamtag48').append("<span>Gold</span>");

		$('#stream48').addClass('girl');
		$('#stream48').addClass('plat');
	}
	if(stream48 == "froggen") {
		$('#streamtag48').append("<span>Pro</span>");
		$('#streamtag48').append("<span>Challenger</span>");
		$('#streamtag48').append("<span>English</span>");

		$('#stream48').addClass('pro');
		$('#stream48').addClass('challenger');
		$('#stream48').addClass('english');
	}
	if(stream48 == "sp4zie") {
		$('#streamtag48').append("<span>English</span>");
		$('#streamtag48').append("<span>Funny</span>");
		$('#streamtag48').append("<span>Platinum</span>");

		$('#stream48').addClass('english');
		$('#stream48').addClass('funny');
		$('#stream48').addClass('plat');
	}
	if(stream48 == "mushisgosu") {
		$('#streamtag48').append("<span>Girl</span>");
		$('#streamtag48').append("<span>Music</span>");
		$('#streamtag48').append("<span>Challenger</span>");

		$('#stream48').addClass('girl');
		$('#stream48').addClass('music');
		$('#stream48').addClass('challenger');
	}
	if(stream48 == "cowsep") {
		$('#streamtag48').append("<span>English</span>");
		$('#streamtag48').append("<span>Funny</span>");

		$('#stream48').addClass('english');
		$('#stream48').addClass('funny');
	}

	var stream49 = "<? echo $lolarray->streams[49]->channel->name; ?>";

	if(stream49 == "riotgames") {
		$('#streamtag49').append("<span>Riot</span>");
		$('#streamtag49').append("<span>Competition</span>");
		$('#streamtag49').append("<span>Tournament</span>");
		$('#streamtag49').append("<span>English</span>");

		$('#stream49').addClass('riot');
		$('#stream49').addClass('competition');
		$('#stream49').addClass('tournament');
		$('#stream49').addClass('english');
	}
	if(stream49 == "riotgames2") {
		$('#streamtag49').append("<span>Riot</span>");
		$('#streamtag49').append("<span>Competition</span>");
		$('#streamtag49').append("<span>Tournament</span>");
		$('#streamtag49').append("<span>English</span>");

		$('#stream49').addClass('riot');
		$('#stream49').addClass('competition');
		$('#stream49').addClass('tournament');
		$('#stream49').addClass('english');
	}
	if(stream49 == "nightblue3") {
		$('#streamtag49').append("<span>Challenger</span>");
		$('#streamtag49').append("<span>Jungle</span>");
		$('#streamtag49').append("<span>English</span>");

		$('#stream49').addClass('challenger');
		$('#stream49').addClass('jungle');
		$('#stream49').addClass('english');
	}
	if(stream49 == "imaqtpie") {
		$('#streamtag49').append("<span>Challenger</span>");
		$('#streamtag49').append("<span>AD Carry</span>");
		$('#streamtag49').append("<span>English</span>");

		$('#stream49').addClass('challenger');
		$('#stream49').addClass('adc');
		$('#stream49').addClass('english');
	}
	if(stream49 == "domingo") {
		$('#streamtag49').append("<span>French</span>");

		$('#stream49').addClass('french');
	}
	if(stream49 == "skumbagkrepo") {
		$('#streamtag49').append("<span>Caster</span>");
		$('#streamtag49').append("<span>English</span>");
		$('#streamtag49').append("<span>Master</span>");

		$('#stream49').addClass('caster');
		$('#stream49').addClass('english');
		$('#stream49').addClass('master');
	}
	if(stream49 == "tsm_theoddone") {
		$('#streamtag49').append("<span>English</span>");
		$('#streamtag49').append("<span>Diamond</span>");

		$('#stream49').addClass('english');
		$('#stream49').addClass('master');

	}
	if(stream49 == "trick49g") {
		$('#streamtag49').append("<span>Diamond</span>");
		$('#streamtag49').append("<span>English</span>");

		$('#stream49').addClass('master');
		$('#stream49').addClass('english');
	}
	if(stream49 == "thaldrinlol") {
		$('#streamtag49').append("<span>Turkish</span>");

		$('#stream49').addClass('turkish');
	}
	if(stream49 == "wingsofdeath") {
		$('#streamtag49').append("<span>Master</span>");

		$('#stream49').addClass('master');
	}
	if(stream49 == "zerator") {
		$('#streamtag49').append("<span>French</span>");

		$('#stream49').addClass('french');
	}
	if(stream49 == "kaypealol") {
		$('#streamtag49').append("<span>Girl</span>");
		$('#streamtag49').append("<span>Gold</span>");

		$('#stream49').addClass('girl');
		$('#stream49').addClass('plat');
	}
	if(stream49 == "froggen") {
		$('#streamtag49').append("<span>Pro</span>");
		$('#streamtag49').append("<span>Challenger</span>");
		$('#streamtag49').append("<span>English</span>");

		$('#stream49').addClass('pro');
		$('#stream49').addClass('challenger');
		$('#stream49').addClass('english');
	}
	if(stream49 == "sp4zie") {
		$('#streamtag49').append("<span>English</span>");
		$('#streamtag49').append("<span>Funny</span>");
		$('#streamtag49').append("<span>Platinum</span>");

		$('#stream49').addClass('english');
		$('#stream49').addClass('funny');
		$('#stream49').addClass('plat');
	}
	if(stream49 == "mushisgosu") {
		$('#streamtag49').append("<span>Girl</span>");
		$('#streamtag49').append("<span>Music</span>");
		$('#streamtag49').append("<span>Challenger</span>");

		$('#stream49').addClass('girl');
		$('#stream49').addClass('music');
		$('#stream49').addClass('challenger');
	}
	if(stream49 == "cowsep") {
		$('#streamtag49').append("<span>English</span>");
		$('#streamtag49').append("<span>Funny</span>");

		$('#stream49').addClass('english');
		$('#stream49').addClass('funny');
	}

	var stream50 = "<? echo $lolarray->streams[50]->channel->name; ?>";

	if(stream50 == "riotgames") {
		$('#streamtag50').append("<span>Riot</span>");
		$('#streamtag50').append("<span>Competition</span>");
		$('#streamtag50').append("<span>Tournament</span>");
		$('#streamtag50').append("<span>English</span>");

		$('#stream50').addClass('riot');
		$('#stream50').addClass('competition');
		$('#stream50').addClass('tournament');
		$('#stream50').addClass('english');
	}
	if(stream50 == "riotgames2") {
		$('#streamtag50').append("<span>Riot</span>");
		$('#streamtag50').append("<span>Competition</span>");
		$('#streamtag50').append("<span>Tournament</span>");
		$('#streamtag50').append("<span>English</span>");

		$('#stream50').addClass('riot');
		$('#stream50').addClass('competition');
		$('#stream50').addClass('tournament');
		$('#stream50').addClass('english');
	}
	if(stream50 == "nightblue3") {
		$('#streamtag50').append("<span>Challenger</span>");
		$('#streamtag50').append("<span>Jungle</span>");
		$('#streamtag50').append("<span>English</span>");

		$('#stream50').addClass('challenger');
		$('#stream50').addClass('jungle');
		$('#stream50').addClass('english');
	}
	if(stream50 == "imaqtpie") {
		$('#streamtag50').append("<span>Challenger</span>");
		$('#streamtag50').append("<span>AD Carry</span>");
		$('#streamtag50').append("<span>English</span>");

		$('#stream50').addClass('challenger');
		$('#stream50').addClass('adc');
		$('#stream50').addClass('english');
	}
	if(stream50 == "domingo") {
		$('#streamtag50').append("<span>French</span>");

		$('#stream50').addClass('french');
	}
	if(stream50 == "skumbagkrepo") {
		$('#streamtag50').append("<span>Caster</span>");
		$('#streamtag50').append("<span>English</span>");
		$('#streamtag50').append("<span>Master</span>");

		$('#stream50').addClass('caster');
		$('#stream50').addClass('english');
		$('#stream50').addClass('master');
	}
	if(stream50 == "tsm_theoddone") {
		$('#streamtag50').append("<span>English</span>");
		$('#streamtag50').append("<span>Diamond</span>");

		$('#stream50').addClass('english');
		$('#stream50').addClass('master');

	}
	if(stream50 == "trick50g") {
		$('#streamtag50').append("<span>Diamond</span>");
		$('#streamtag50').append("<span>English</span>");

		$('#stream50').addClass('master');
		$('#stream50').addClass('english');
	}
	if(stream50 == "thaldrinlol") {
		$('#streamtag50').append("<span>Turkish</span>");

		$('#stream50').addClass('turkish');
	}
	if(stream50 == "wingsofdeath") {
		$('#streamtag50').append("<span>Master</span>");

		$('#stream50').addClass('master');
	}
	if(stream50 == "zerator") {
		$('#streamtag50').append("<span>French</span>");

		$('#stream50').addClass('french');
	}
	if(stream50 == "kaypealol") {
		$('#streamtag50').append("<span>Girl</span>");
		$('#streamtag50').append("<span>Gold</span>");

		$('#stream50').addClass('girl');
		$('#stream50').addClass('plat');
	}
	if(stream50 == "froggen") {
		$('#streamtag50').append("<span>Pro</span>");
		$('#streamtag50').append("<span>Challenger</span>");
		$('#streamtag50').append("<span>English</span>");

		$('#stream50').addClass('pro');
		$('#stream50').addClass('challenger');
		$('#stream50').addClass('english');
	}
	if(stream50 == "sp4zie") {
		$('#streamtag50').append("<span>English</span>");
		$('#streamtag50').append("<span>Funny</span>");
		$('#streamtag50').append("<span>Platinum</span>");

		$('#stream50').addClass('english');
		$('#stream50').addClass('funny');
		$('#stream50').addClass('plat');
	}
	if(stream50 == "mushisgosu") {
		$('#streamtag50').append("<span>Girl</span>");
		$('#streamtag50').append("<span>Music</span>");
		$('#streamtag50').append("<span>Challenger</span>");

		$('#stream50').addClass('girl');
		$('#stream50').addClass('music');
		$('#stream50').addClass('challenger');
	}
	if(stream50 == "cowsep") {
		$('#streamtag50').append("<span>English</span>");
		$('#streamtag50').append("<span>Funny</span>");

		$('#stream50').addClass('english');
		$('#stream50').addClass('funny');
	}

	var stream51 = "<? echo $lolarray->streams[51]->channel->name; ?>";

	if(stream51 == "riotgames") {
		$('#streamtag51').append("<span>Riot</span>");
		$('#streamtag51').append("<span>Competition</span>");
		$('#streamtag51').append("<span>Tournament</span>");
		$('#streamtag51').append("<span>English</span>");

		$('#stream51').addClass('riot');
		$('#stream51').addClass('competition');
		$('#stream51').addClass('tournament');
		$('#stream51').addClass('english');
	}
	if(stream51 == "riotgames2") {
		$('#streamtag51').append("<span>Riot</span>");
		$('#streamtag51').append("<span>Competition</span>");
		$('#streamtag51').append("<span>Tournament</span>");
		$('#streamtag51').append("<span>English</span>");

		$('#stream51').addClass('riot');
		$('#stream51').addClass('competition');
		$('#stream51').addClass('tournament');
		$('#stream51').addClass('english');
	}
	if(stream51 == "nightblue3") {
		$('#streamtag51').append("<span>Challenger</span>");
		$('#streamtag51').append("<span>Jungle</span>");
		$('#streamtag51').append("<span>English</span>");

		$('#stream51').addClass('challenger');
		$('#stream51').addClass('jungle');
		$('#stream51').addClass('english');
	}
	if(stream51 == "imaqtpie") {
		$('#streamtag51').append("<span>Challenger</span>");
		$('#streamtag51').append("<span>AD Carry</span>");
		$('#streamtag51').append("<span>English</span>");

		$('#stream51').addClass('challenger');
		$('#stream51').addClass('adc');
		$('#stream51').addClass('english');
	}
	if(stream51 == "domingo") {
		$('#streamtag51').append("<span>French</span>");

		$('#stream51').addClass('french');
	}
	if(stream51 == "skumbagkrepo") {
		$('#streamtag51').append("<span>Caster</span>");
		$('#streamtag51').append("<span>English</span>");
		$('#streamtag51').append("<span>Master</span>");

		$('#stream51').addClass('caster');
		$('#stream51').addClass('english');
		$('#stream51').addClass('master');
	}
	if(stream51 == "tsm_theoddone") {
		$('#streamtag51').append("<span>English</span>");
		$('#streamtag51').append("<span>Diamond</span>");

		$('#stream51').addClass('english');
		$('#stream51').addClass('master');

	}
	if(stream51 == "trick51g") {
		$('#streamtag51').append("<span>Diamond</span>");
		$('#streamtag51').append("<span>English</span>");

		$('#stream51').addClass('master');
		$('#stream51').addClass('english');
	}
	if(stream51 == "thaldrinlol") {
		$('#streamtag51').append("<span>Turkish</span>");

		$('#stream51').addClass('turkish');
	}
	if(stream51 == "wingsofdeath") {
		$('#streamtag51').append("<span>Master</span>");

		$('#stream51').addClass('master');
	}
	if(stream51 == "zerator") {
		$('#streamtag51').append("<span>French</span>");

		$('#stream51').addClass('french');
	}
	if(stream51 == "kaypealol") {
		$('#streamtag51').append("<span>Girl</span>");
		$('#streamtag51').append("<span>Gold</span>");

		$('#stream51').addClass('girl');
		$('#stream51').addClass('plat');
	}
	if(stream51 == "froggen") {
		$('#streamtag51').append("<span>Pro</span>");
		$('#streamtag51').append("<span>Challenger</span>");
		$('#streamtag51').append("<span>English</span>");

		$('#stream51').addClass('pro');
		$('#stream51').addClass('challenger');
		$('#stream51').addClass('english');
	}
	if(stream51 == "sp4zie") {
		$('#streamtag51').append("<span>English</span>");
		$('#streamtag51').append("<span>Funny</span>");
		$('#streamtag51').append("<span>Platinum</span>");

		$('#stream51').addClass('english');
		$('#stream51').addClass('funny');
		$('#stream51').addClass('plat');
	}
	if(stream51 == "mushisgosu") {
		$('#streamtag51').append("<span>Girl</span>");
		$('#streamtag51').append("<span>Music</span>");
		$('#streamtag51').append("<span>Challenger</span>");

		$('#stream51').addClass('girl');
		$('#stream51').addClass('music');
		$('#stream51').addClass('challenger');
	}
	if(stream51 == "cowsep") {
		$('#streamtag51').append("<span>English</span>");
		$('#streamtag51').append("<span>Funny</span>");

		$('#stream51').addClass('english');
		$('#stream51').addClass('funny');
	}

	var stream52 = "<? echo $lolarray->streams[52]->channel->name; ?>";

	if(stream52 == "riotgames") {
		$('#streamtag52').append("<span>Riot</span>");
		$('#streamtag52').append("<span>Competition</span>");
		$('#streamtag52').append("<span>Tournament</span>");
		$('#streamtag52').append("<span>English</span>");

		$('#stream52').addClass('riot');
		$('#stream52').addClass('competition');
		$('#stream52').addClass('tournament');
		$('#stream52').addClass('english');
	}
	if(stream52 == "riotgames2") {
		$('#streamtag52').append("<span>Riot</span>");
		$('#streamtag52').append("<span>Competition</span>");
		$('#streamtag52').append("<span>Tournament</span>");
		$('#streamtag52').append("<span>English</span>");

		$('#stream52').addClass('riot');
		$('#stream52').addClass('competition');
		$('#stream52').addClass('tournament');
		$('#stream52').addClass('english');
	}
	if(stream52 == "nightblue3") {
		$('#streamtag52').append("<span>Challenger</span>");
		$('#streamtag52').append("<span>Jungle</span>");
		$('#streamtag52').append("<span>English</span>");

		$('#stream52').addClass('challenger');
		$('#stream52').addClass('jungle');
		$('#stream52').addClass('english');
	}
	if(stream52 == "imaqtpie") {
		$('#streamtag52').append("<span>Challenger</span>");
		$('#streamtag52').append("<span>AD Carry</span>");
		$('#streamtag52').append("<span>English</span>");

		$('#stream52').addClass('challenger');
		$('#stream52').addClass('adc');
		$('#stream52').addClass('english');
	}
	if(stream52 == "domingo") {
		$('#streamtag52').append("<span>French</span>");

		$('#stream52').addClass('french');
	}
	if(stream52 == "skumbagkrepo") {
		$('#streamtag52').append("<span>Caster</span>");
		$('#streamtag52').append("<span>English</span>");
		$('#streamtag52').append("<span>Master</span>");

		$('#stream52').addClass('caster');
		$('#stream52').addClass('english');
		$('#stream52').addClass('master');
	}
	if(stream52 == "tsm_theoddone") {
		$('#streamtag52').append("<span>English</span>");
		$('#streamtag52').append("<span>Diamond</span>");

		$('#stream52').addClass('english');
		$('#stream52').addClass('master');

	}
	if(stream52 == "trick52g") {
		$('#streamtag52').append("<span>Diamond</span>");
		$('#streamtag52').append("<span>English</span>");

		$('#stream52').addClass('master');
		$('#stream52').addClass('english');
	}
	if(stream52 == "thaldrinlol") {
		$('#streamtag52').append("<span>Turkish</span>");

		$('#stream52').addClass('turkish');
	}
	if(stream52 == "wingsofdeath") {
		$('#streamtag52').append("<span>Master</span>");

		$('#stream52').addClass('master');
	}
	if(stream52 == "zerator") {
		$('#streamtag52').append("<span>French</span>");

		$('#stream52').addClass('french');
	}
	if(stream52 == "kaypealol") {
		$('#streamtag52').append("<span>Girl</span>");
		$('#streamtag52').append("<span>Gold</span>");

		$('#stream52').addClass('girl');
		$('#stream52').addClass('plat');
	}
	if(stream52 == "froggen") {
		$('#streamtag52').append("<span>Pro</span>");
		$('#streamtag52').append("<span>Challenger</span>");
		$('#streamtag52').append("<span>English</span>");

		$('#stream52').addClass('pro');
		$('#stream52').addClass('challenger');
		$('#stream52').addClass('english');
	}
	if(stream52 == "sp4zie") {
		$('#streamtag52').append("<span>English</span>");
		$('#streamtag52').append("<span>Funny</span>");
		$('#streamtag52').append("<span>Platinum</span>");

		$('#stream52').addClass('english');
		$('#stream52').addClass('funny');
		$('#stream52').addClass('plat');
	}
	if(stream52 == "mushisgosu") {
		$('#streamtag52').append("<span>Girl</span>");
		$('#streamtag52').append("<span>Music</span>");
		$('#streamtag52').append("<span>Challenger</span>");

		$('#stream52').addClass('girl');
		$('#stream52').addClass('music');
		$('#stream52').addClass('challenger');
	}
	if(stream52 == "cowsep") {
		$('#streamtag52').append("<span>English</span>");
		$('#streamtag52').append("<span>Funny</span>");

		$('#stream52').addClass('english');
		$('#stream52').addClass('funny');
	}

	var stream53 = "<? echo $lolarray->streams[53]->channel->name; ?>";

	if(stream53 == "riotgames") {
		$('#streamtag53').append("<span>Riot</span>");
		$('#streamtag53').append("<span>Competition</span>");
		$('#streamtag53').append("<span>Tournament</span>");
		$('#streamtag53').append("<span>English</span>");

		$('#stream53').addClass('riot');
		$('#stream53').addClass('competition');
		$('#stream53').addClass('tournament');
		$('#stream53').addClass('english');
	}
	if(stream53 == "riotgames2") {
		$('#streamtag53').append("<span>Riot</span>");
		$('#streamtag53').append("<span>Competition</span>");
		$('#streamtag53').append("<span>Tournament</span>");
		$('#streamtag53').append("<span>English</span>");

		$('#stream53').addClass('riot');
		$('#stream53').addClass('competition');
		$('#stream53').addClass('tournament');
		$('#stream53').addClass('english');
	}
	if(stream53 == "nightblue3") {
		$('#streamtag53').append("<span>Challenger</span>");
		$('#streamtag53').append("<span>Jungle</span>");
		$('#streamtag53').append("<span>English</span>");

		$('#stream53').addClass('challenger');
		$('#stream53').addClass('jungle');
		$('#stream53').addClass('english');
	}
	if(stream53 == "imaqtpie") {
		$('#streamtag53').append("<span>Challenger</span>");
		$('#streamtag53').append("<span>AD Carry</span>");
		$('#streamtag53').append("<span>English</span>");

		$('#stream53').addClass('challenger');
		$('#stream53').addClass('adc');
		$('#stream53').addClass('english');
	}
	if(stream53 == "domingo") {
		$('#streamtag53').append("<span>French</span>");

		$('#stream53').addClass('french');
	}
	if(stream53 == "skumbagkrepo") {
		$('#streamtag53').append("<span>Caster</span>");
		$('#streamtag53').append("<span>English</span>");
		$('#streamtag53').append("<span>Master</span>");

		$('#stream53').addClass('caster');
		$('#stream53').addClass('english');
		$('#stream53').addClass('master');
	}
	if(stream53 == "tsm_theoddone") {
		$('#streamtag53').append("<span>English</span>");
		$('#streamtag53').append("<span>Diamond</span>");

		$('#stream53').addClass('english');
		$('#stream53').addClass('master');

	}
	if(stream53 == "trick53g") {
		$('#streamtag53').append("<span>Diamond</span>");
		$('#streamtag53').append("<span>English</span>");

		$('#stream53').addClass('master');
		$('#stream53').addClass('english');
	}
	if(stream53 == "thaldrinlol") {
		$('#streamtag53').append("<span>Turkish</span>");

		$('#stream53').addClass('turkish');
	}
	if(stream53 == "wingsofdeath") {
		$('#streamtag53').append("<span>Master</span>");

		$('#stream53').addClass('master');
	}
	if(stream53 == "zerator") {
		$('#streamtag53').append("<span>French</span>");

		$('#stream53').addClass('french');
	}
	if(stream53 == "kaypealol") {
		$('#streamtag53').append("<span>Girl</span>");
		$('#streamtag53').append("<span>Gold</span>");

		$('#stream53').addClass('girl');
		$('#stream53').addClass('plat');
	}
	if(stream53 == "froggen") {
		$('#streamtag53').append("<span>Pro</span>");
		$('#streamtag53').append("<span>Challenger</span>");
		$('#streamtag53').append("<span>English</span>");

		$('#stream53').addClass('pro');
		$('#stream53').addClass('challenger');
		$('#stream53').addClass('english');
	}
	if(stream53 == "sp4zie") {
		$('#streamtag53').append("<span>English</span>");
		$('#streamtag53').append("<span>Funny</span>");
		$('#streamtag53').append("<span>Platinum</span>");

		$('#stream53').addClass('english');
		$('#stream53').addClass('funny');
		$('#stream53').addClass('plat');
	}
	if(stream53 == "mushisgosu") {
		$('#streamtag53').append("<span>Girl</span>");
		$('#streamtag53').append("<span>Music</span>");
		$('#streamtag53').append("<span>Challenger</span>");

		$('#stream53').addClass('girl');
		$('#stream53').addClass('music');
		$('#stream53').addClass('challenger');
	}
	if(stream53 == "cowsep") {
		$('#streamtag53').append("<span>English</span>");
		$('#streamtag53').append("<span>Funny</span>");

		$('#stream53').addClass('english');
		$('#stream53').addClass('funny');
	}

	var stream54 = "<? echo $lolarray->streams[54]->channel->name; ?>";

	if(stream54 == "riotgames") {
		$('#streamtag54').append("<span>Riot</span>");
		$('#streamtag54').append("<span>Competition</span>");
		$('#streamtag54').append("<span>Tournament</span>");
		$('#streamtag54').append("<span>English</span>");

		$('#stream54').addClass('riot');
		$('#stream54').addClass('competition');
		$('#stream54').addClass('tournament');
		$('#stream54').addClass('english');
	}
	if(stream54 == "riotgames2") {
		$('#streamtag54').append("<span>Riot</span>");
		$('#streamtag54').append("<span>Competition</span>");
		$('#streamtag54').append("<span>Tournament</span>");
		$('#streamtag54').append("<span>English</span>");

		$('#stream54').addClass('riot');
		$('#stream54').addClass('competition');
		$('#stream54').addClass('tournament');
		$('#stream54').addClass('english');
	}
	if(stream54 == "nightblue3") {
		$('#streamtag54').append("<span>Challenger</span>");
		$('#streamtag54').append("<span>Jungle</span>");
		$('#streamtag54').append("<span>English</span>");

		$('#stream54').addClass('challenger');
		$('#stream54').addClass('jungle');
		$('#stream54').addClass('english');
	}
	if(stream54 == "imaqtpie") {
		$('#streamtag54').append("<span>Challenger</span>");
		$('#streamtag54').append("<span>AD Carry</span>");
		$('#streamtag54').append("<span>English</span>");

		$('#stream54').addClass('challenger');
		$('#stream54').addClass('adc');
		$('#stream54').addClass('english');
	}
	if(stream54 == "domingo") {
		$('#streamtag54').append("<span>French</span>");

		$('#stream54').addClass('french');
	}
	if(stream54 == "skumbagkrepo") {
		$('#streamtag54').append("<span>Caster</span>");
		$('#streamtag54').append("<span>English</span>");
		$('#streamtag54').append("<span>Master</span>");

		$('#stream54').addClass('caster');
		$('#stream54').addClass('english');
		$('#stream54').addClass('master');
	}
	if(stream54 == "tsm_theoddone") {
		$('#streamtag54').append("<span>English</span>");
		$('#streamtag54').append("<span>Diamond</span>");

		$('#stream54').addClass('english');
		$('#stream54').addClass('master');

	}
	if(stream54 == "trick54g") {
		$('#streamtag54').append("<span>Diamond</span>");
		$('#streamtag54').append("<span>English</span>");

		$('#stream54').addClass('master');
		$('#stream54').addClass('english');
	}
	if(stream54 == "thaldrinlol") {
		$('#streamtag54').append("<span>Turkish</span>");

		$('#stream54').addClass('turkish');
	}
	if(stream54 == "wingsofdeath") {
		$('#streamtag54').append("<span>Master</span>");

		$('#stream54').addClass('master');
	}
	if(stream54 == "zerator") {
		$('#streamtag54').append("<span>French</span>");

		$('#stream54').addClass('french');
	}
	if(stream54 == "kaypealol") {
		$('#streamtag54').append("<span>Girl</span>");
		$('#streamtag54').append("<span>Gold</span>");

		$('#stream54').addClass('girl');
		$('#stream54').addClass('plat');
	}
	if(stream54 == "froggen") {
		$('#streamtag54').append("<span>Pro</span>");
		$('#streamtag54').append("<span>Challenger</span>");
		$('#streamtag54').append("<span>English</span>");

		$('#stream54').addClass('pro');
		$('#stream54').addClass('challenger');
		$('#stream54').addClass('english');
	}
	if(stream54 == "sp4zie") {
		$('#streamtag54').append("<span>English</span>");
		$('#streamtag54').append("<span>Funny</span>");
		$('#streamtag54').append("<span>Platinum</span>");

		$('#stream54').addClass('english');
		$('#stream54').addClass('funny');
		$('#stream54').addClass('plat');
	}
	if(stream54 == "mushisgosu") {
		$('#streamtag54').append("<span>Girl</span>");
		$('#streamtag54').append("<span>Music</span>");
		$('#streamtag54').append("<span>Challenger</span>");

		$('#stream54').addClass('girl');
		$('#stream54').addClass('music');
		$('#stream54').addClass('challenger');
	}
	if(stream54 == "cowsep") {
		$('#streamtag54').append("<span>English</span>");
		$('#streamtag54').append("<span>Funny</span>");

		$('#stream54').addClass('english');
		$('#stream54').addClass('funny');
	}

	var stream55 = "<? echo $lolarray->streams[55]->channel->name; ?>";

	if(stream55 == "riotgames") {
		$('#streamtag55').append("<span>Riot</span>");
		$('#streamtag55').append("<span>Competition</span>");
		$('#streamtag55').append("<span>Tournament</span>");
		$('#streamtag55').append("<span>English</span>");

		$('#stream55').addClass('riot');
		$('#stream55').addClass('competition');
		$('#stream55').addClass('tournament');
		$('#stream55').addClass('english');
	}
	if(stream55 == "riotgames2") {
		$('#streamtag55').append("<span>Riot</span>");
		$('#streamtag55').append("<span>Competition</span>");
		$('#streamtag55').append("<span>Tournament</span>");
		$('#streamtag55').append("<span>English</span>");

		$('#stream55').addClass('riot');
		$('#stream55').addClass('competition');
		$('#stream55').addClass('tournament');
		$('#stream55').addClass('english');
	}
	if(stream55 == "nightblue3") {
		$('#streamtag55').append("<span>Challenger</span>");
		$('#streamtag55').append("<span>Jungle</span>");
		$('#streamtag55').append("<span>English</span>");

		$('#stream55').addClass('challenger');
		$('#stream55').addClass('jungle');
		$('#stream55').addClass('english');
	}
	if(stream55 == "imaqtpie") {
		$('#streamtag55').append("<span>Challenger</span>");
		$('#streamtag55').append("<span>AD Carry</span>");
		$('#streamtag55').append("<span>English</span>");

		$('#stream55').addClass('challenger');
		$('#stream55').addClass('adc');
		$('#stream55').addClass('english');
	}
	if(stream55 == "domingo") {
		$('#streamtag55').append("<span>French</span>");

		$('#stream55').addClass('french');
	}
	if(stream55 == "skumbagkrepo") {
		$('#streamtag55').append("<span>Caster</span>");
		$('#streamtag55').append("<span>English</span>");
		$('#streamtag55').append("<span>Master</span>");

		$('#stream55').addClass('caster');
		$('#stream55').addClass('english');
		$('#stream55').addClass('master');
	}
	if(stream55 == "tsm_theoddone") {
		$('#streamtag55').append("<span>English</span>");
		$('#streamtag55').append("<span>Diamond</span>");

		$('#stream55').addClass('english');
		$('#stream55').addClass('master');

	}
	if(stream55 == "trick55g") {
		$('#streamtag55').append("<span>Diamond</span>");
		$('#streamtag55').append("<span>English</span>");

		$('#stream55').addClass('master');
		$('#stream55').addClass('english');
	}
	if(stream55 == "thaldrinlol") {
		$('#streamtag55').append("<span>Turkish</span>");

		$('#stream55').addClass('turkish');
	}
	if(stream55 == "wingsofdeath") {
		$('#streamtag55').append("<span>Master</span>");

		$('#stream55').addClass('master');
	}
	if(stream55 == "zerator") {
		$('#streamtag55').append("<span>French</span>");

		$('#stream55').addClass('french');
	}
	if(stream55 == "kaypealol") {
		$('#streamtag55').append("<span>Girl</span>");
		$('#streamtag55').append("<span>Gold</span>");

		$('#stream55').addClass('girl');
		$('#stream55').addClass('plat');
	}
	if(stream55 == "froggen") {
		$('#streamtag55').append("<span>Pro</span>");
		$('#streamtag55').append("<span>Challenger</span>");
		$('#streamtag55').append("<span>English</span>");

		$('#stream55').addClass('pro');
		$('#stream55').addClass('challenger');
		$('#stream55').addClass('english');
	}
	if(stream55 == "sp4zie") {
		$('#streamtag55').append("<span>English</span>");
		$('#streamtag55').append("<span>Funny</span>");
		$('#streamtag55').append("<span>Platinum</span>");

		$('#stream55').addClass('english');
		$('#stream55').addClass('funny');
		$('#stream55').addClass('plat');
	}
	if(stream55 == "mushisgosu") {
		$('#streamtag55').append("<span>Girl</span>");
		$('#streamtag55').append("<span>Music</span>");
		$('#streamtag55').append("<span>Challenger</span>");

		$('#stream55').addClass('girl');
		$('#stream55').addClass('music');
		$('#stream55').addClass('challenger');
	}
	if(stream55 == "cowsep") {
		$('#streamtag55').append("<span>English</span>");
		$('#streamtag55').append("<span>Funny</span>");

		$('#stream55').addClass('english');
		$('#stream55').addClass('funny');
	}

	var stream56 = "<? echo $lolarray->streams[56]->channel->name; ?>";

	if(stream56 == "riotgames") {
		$('#streamtag56').append("<span>Riot</span>");
		$('#streamtag56').append("<span>Competition</span>");
		$('#streamtag56').append("<span>Tournament</span>");
		$('#streamtag56').append("<span>English</span>");

		$('#stream56').addClass('riot');
		$('#stream56').addClass('competition');
		$('#stream56').addClass('tournament');
		$('#stream56').addClass('english');
	}
	if(stream56 == "riotgames2") {
		$('#streamtag56').append("<span>Riot</span>");
		$('#streamtag56').append("<span>Competition</span>");
		$('#streamtag56').append("<span>Tournament</span>");
		$('#streamtag56').append("<span>English</span>");

		$('#stream56').addClass('riot');
		$('#stream56').addClass('competition');
		$('#stream56').addClass('tournament');
		$('#stream56').addClass('english');
	}
	if(stream56 == "nightblue3") {
		$('#streamtag56').append("<span>Challenger</span>");
		$('#streamtag56').append("<span>Jungle</span>");
		$('#streamtag56').append("<span>English</span>");

		$('#stream56').addClass('challenger');
		$('#stream56').addClass('jungle');
		$('#stream56').addClass('english');
	}
	if(stream56 == "imaqtpie") {
		$('#streamtag56').append("<span>Challenger</span>");
		$('#streamtag56').append("<span>AD Carry</span>");
		$('#streamtag56').append("<span>English</span>");

		$('#stream56').addClass('challenger');
		$('#stream56').addClass('adc');
		$('#stream56').addClass('english');
	}
	if(stream56 == "domingo") {
		$('#streamtag56').append("<span>French</span>");

		$('#stream56').addClass('french');
	}
	if(stream56 == "skumbagkrepo") {
		$('#streamtag56').append("<span>Caster</span>");
		$('#streamtag56').append("<span>English</span>");
		$('#streamtag56').append("<span>Master</span>");

		$('#stream56').addClass('caster');
		$('#stream56').addClass('english');
		$('#stream56').addClass('master');
	}
	if(stream56 == "tsm_theoddone") {
		$('#streamtag56').append("<span>English</span>");
		$('#streamtag56').append("<span>Diamond</span>");

		$('#stream56').addClass('english');
		$('#stream56').addClass('master');

	}
	if(stream56 == "trick56g") {
		$('#streamtag56').append("<span>Diamond</span>");
		$('#streamtag56').append("<span>English</span>");

		$('#stream56').addClass('master');
		$('#stream56').addClass('english');
	}
	if(stream56 == "thaldrinlol") {
		$('#streamtag56').append("<span>Turkish</span>");

		$('#stream56').addClass('turkish');
	}
	if(stream56 == "wingsofdeath") {
		$('#streamtag56').append("<span>Master</span>");

		$('#stream56').addClass('master');
	}
	if(stream56 == "zerator") {
		$('#streamtag56').append("<span>French</span>");

		$('#stream56').addClass('french');
	}
	if(stream56 == "kaypealol") {
		$('#streamtag56').append("<span>Girl</span>");
		$('#streamtag56').append("<span>Gold</span>");

		$('#stream56').addClass('girl');
		$('#stream56').addClass('plat');
	}
	if(stream56 == "froggen") {
		$('#streamtag56').append("<span>Pro</span>");
		$('#streamtag56').append("<span>Challenger</span>");
		$('#streamtag56').append("<span>English</span>");

		$('#stream56').addClass('pro');
		$('#stream56').addClass('challenger');
		$('#stream56').addClass('english');
	}
	if(stream56 == "sp4zie") {
		$('#streamtag56').append("<span>English</span>");
		$('#streamtag56').append("<span>Funny</span>");
		$('#streamtag56').append("<span>Platinum</span>");

		$('#stream56').addClass('english');
		$('#stream56').addClass('funny');
		$('#stream56').addClass('plat');
	}
	if(stream56 == "mushisgosu") {
		$('#streamtag56').append("<span>Girl</span>");
		$('#streamtag56').append("<span>Music</span>");
		$('#streamtag56').append("<span>Challenger</span>");

		$('#stream56').addClass('girl');
		$('#stream56').addClass('music');
		$('#stream56').addClass('challenger');
	}
	if(stream56 == "cowsep") {
		$('#streamtag56').append("<span>English</span>");
		$('#streamtag56').append("<span>Funny</span>");

		$('#stream56').addClass('english');
		$('#stream56').addClass('funny');
	}

	var stream57 = "<? echo $lolarray->streams[57]->channel->name; ?>";

	if(stream57 == "riotgames") {
		$('#streamtag57').append("<span>Riot</span>");
		$('#streamtag57').append("<span>Competition</span>");
		$('#streamtag57').append("<span>Tournament</span>");
		$('#streamtag57').append("<span>English</span>");

		$('#stream57').addClass('riot');
		$('#stream57').addClass('competition');
		$('#stream57').addClass('tournament');
		$('#stream57').addClass('english');
	}
	if(stream57 == "riotgames2") {
		$('#streamtag57').append("<span>Riot</span>");
		$('#streamtag57').append("<span>Competition</span>");
		$('#streamtag57').append("<span>Tournament</span>");
		$('#streamtag57').append("<span>English</span>");

		$('#stream57').addClass('riot');
		$('#stream57').addClass('competition');
		$('#stream57').addClass('tournament');
		$('#stream57').addClass('english');
	}
	if(stream57 == "nightblue3") {
		$('#streamtag57').append("<span>Challenger</span>");
		$('#streamtag57').append("<span>Jungle</span>");
		$('#streamtag57').append("<span>English</span>");

		$('#stream57').addClass('challenger');
		$('#stream57').addClass('jungle');
		$('#stream57').addClass('english');
	}
	if(stream57 == "imaqtpie") {
		$('#streamtag57').append("<span>Challenger</span>");
		$('#streamtag57').append("<span>AD Carry</span>");
		$('#streamtag57').append("<span>English</span>");

		$('#stream57').addClass('challenger');
		$('#stream57').addClass('adc');
		$('#stream57').addClass('english');
	}
	if(stream57 == "domingo") {
		$('#streamtag57').append("<span>French</span>");

		$('#stream57').addClass('french');
	}
	if(stream57 == "skumbagkrepo") {
		$('#streamtag57').append("<span>Caster</span>");
		$('#streamtag57').append("<span>English</span>");
		$('#streamtag57').append("<span>Master</span>");

		$('#stream57').addClass('caster');
		$('#stream57').addClass('english');
		$('#stream57').addClass('master');
	}
	if(stream57 == "tsm_theoddone") {
		$('#streamtag57').append("<span>English</span>");
		$('#streamtag57').append("<span>Diamond</span>");

		$('#stream57').addClass('english');
		$('#stream57').addClass('master');

	}
	if(stream57 == "trick57g") {
		$('#streamtag57').append("<span>Diamond</span>");
		$('#streamtag57').append("<span>English</span>");

		$('#stream57').addClass('master');
		$('#stream57').addClass('english');
	}
	if(stream57 == "thaldrinlol") {
		$('#streamtag57').append("<span>Turkish</span>");

		$('#stream57').addClass('turkish');
	}
	if(stream57 == "wingsofdeath") {
		$('#streamtag57').append("<span>Master</span>");

		$('#stream57').addClass('master');
	}
	if(stream57 == "zerator") {
		$('#streamtag57').append("<span>French</span>");

		$('#stream57').addClass('french');
	}
	if(stream57 == "kaypealol") {
		$('#streamtag57').append("<span>Girl</span>");
		$('#streamtag57').append("<span>Gold</span>");

		$('#stream57').addClass('girl');
		$('#stream57').addClass('plat');
	}
	if(stream57 == "froggen") {
		$('#streamtag57').append("<span>Pro</span>");
		$('#streamtag57').append("<span>Challenger</span>");
		$('#streamtag57').append("<span>English</span>");

		$('#stream57').addClass('pro');
		$('#stream57').addClass('challenger');
		$('#stream57').addClass('english');
	}
	if(stream57 == "sp4zie") {
		$('#streamtag57').append("<span>English</span>");
		$('#streamtag57').append("<span>Funny</span>");
		$('#streamtag57').append("<span>Platinum</span>");

		$('#stream57').addClass('english');
		$('#stream57').addClass('funny');
		$('#stream57').addClass('plat');
	}
	if(stream57 == "mushisgosu") {
		$('#streamtag57').append("<span>Girl</span>");
		$('#streamtag57').append("<span>Music</span>");
		$('#streamtag57').append("<span>Challenger</span>");

		$('#stream57').addClass('girl');
		$('#stream57').addClass('music');
		$('#stream57').addClass('challenger');
	}
	if(stream57 == "cowsep") {
		$('#streamtag57').append("<span>English</span>");
		$('#streamtag57').append("<span>Funny</span>");

		$('#stream57').addClass('english');
		$('#stream57').addClass('funny');
	}

	var stream58 = "<? echo $lolarray->streams[58]->channel->name; ?>";

	if(stream58 == "riotgames") {
		$('#streamtag58').append("<span>Riot</span>");
		$('#streamtag58').append("<span>Competition</span>");
		$('#streamtag58').append("<span>Tournament</span>");
		$('#streamtag58').append("<span>English</span>");

		$('#stream58').addClass('riot');
		$('#stream58').addClass('competition');
		$('#stream58').addClass('tournament');
		$('#stream58').addClass('english');
	}
	if(stream58 == "riotgames2") {
		$('#streamtag58').append("<span>Riot</span>");
		$('#streamtag58').append("<span>Competition</span>");
		$('#streamtag58').append("<span>Tournament</span>");
		$('#streamtag58').append("<span>English</span>");

		$('#stream58').addClass('riot');
		$('#stream58').addClass('competition');
		$('#stream58').addClass('tournament');
		$('#stream58').addClass('english');
	}
	if(stream58 == "nightblue3") {
		$('#streamtag58').append("<span>Challenger</span>");
		$('#streamtag58').append("<span>Jungle</span>");
		$('#streamtag58').append("<span>English</span>");

		$('#stream58').addClass('challenger');
		$('#stream58').addClass('jungle');
		$('#stream58').addClass('english');
	}
	if(stream58 == "imaqtpie") {
		$('#streamtag58').append("<span>Challenger</span>");
		$('#streamtag58').append("<span>AD Carry</span>");
		$('#streamtag58').append("<span>English</span>");

		$('#stream58').addClass('challenger');
		$('#stream58').addClass('adc');
		$('#stream58').addClass('english');
	}
	if(stream58 == "domingo") {
		$('#streamtag58').append("<span>French</span>");

		$('#stream58').addClass('french');
	}
	if(stream58 == "skumbagkrepo") {
		$('#streamtag58').append("<span>Caster</span>");
		$('#streamtag58').append("<span>English</span>");
		$('#streamtag58').append("<span>Master</span>");

		$('#stream58').addClass('caster');
		$('#stream58').addClass('english');
		$('#stream58').addClass('master');
	}
	if(stream58 == "tsm_theoddone") {
		$('#streamtag58').append("<span>English</span>");
		$('#streamtag58').append("<span>Diamond</span>");

		$('#stream58').addClass('english');
		$('#stream58').addClass('master');

	}
	if(stream58 == "trick58g") {
		$('#streamtag58').append("<span>Diamond</span>");
		$('#streamtag58').append("<span>English</span>");

		$('#stream58').addClass('master');
		$('#stream58').addClass('english');
	}
	if(stream58 == "thaldrinlol") {
		$('#streamtag58').append("<span>Turkish</span>");

		$('#stream58').addClass('turkish');
	}
	if(stream58 == "wingsofdeath") {
		$('#streamtag58').append("<span>Master</span>");

		$('#stream58').addClass('master');
	}
	if(stream58 == "zerator") {
		$('#streamtag58').append("<span>French</span>");

		$('#stream58').addClass('french');
	}
	if(stream58 == "kaypealol") {
		$('#streamtag58').append("<span>Girl</span>");
		$('#streamtag58').append("<span>Gold</span>");

		$('#stream58').addClass('girl');
		$('#stream58').addClass('plat');
	}
	if(stream58 == "froggen") {
		$('#streamtag58').append("<span>Pro</span>");
		$('#streamtag58').append("<span>Challenger</span>");
		$('#streamtag58').append("<span>English</span>");

		$('#stream58').addClass('pro');
		$('#stream58').addClass('challenger');
		$('#stream58').addClass('english');
	}
	if(stream58 == "sp4zie") {
		$('#streamtag58').append("<span>English</span>");
		$('#streamtag58').append("<span>Funny</span>");
		$('#streamtag58').append("<span>Platinum</span>");

		$('#stream58').addClass('english');
		$('#stream58').addClass('funny');
		$('#stream58').addClass('plat');
	}
	if(stream58 == "mushisgosu") {
		$('#streamtag58').append("<span>Girl</span>");
		$('#streamtag58').append("<span>Music</span>");
		$('#streamtag58').append("<span>Challenger</span>");

		$('#stream58').addClass('girl');
		$('#stream58').addClass('music');
		$('#stream58').addClass('challenger');
	}
	if(stream58 == "cowsep") {
		$('#streamtag58').append("<span>English</span>");
		$('#streamtag58').append("<span>Funny</span>");

		$('#stream58').addClass('english');
		$('#stream58').addClass('funny');
	}

	var stream59 = "<? echo $lolarray->streams[59]->channel->name; ?>";

	if(stream59 == "riotgames") {
		$('#streamtag59').append("<span>Riot</span>");
		$('#streamtag59').append("<span>Competition</span>");
		$('#streamtag59').append("<span>Tournament</span>");
		$('#streamtag59').append("<span>English</span>");

		$('#stream59').addClass('riot');
		$('#stream59').addClass('competition');
		$('#stream59').addClass('tournament');
		$('#stream59').addClass('english');
	}
	if(stream59 == "riotgames2") {
		$('#streamtag59').append("<span>Riot</span>");
		$('#streamtag59').append("<span>Competition</span>");
		$('#streamtag59').append("<span>Tournament</span>");
		$('#streamtag59').append("<span>English</span>");

		$('#stream59').addClass('riot');
		$('#stream59').addClass('competition');
		$('#stream59').addClass('tournament');
		$('#stream59').addClass('english');
	}
	if(stream59 == "nightblue3") {
		$('#streamtag59').append("<span>Challenger</span>");
		$('#streamtag59').append("<span>Jungle</span>");
		$('#streamtag59').append("<span>English</span>");

		$('#stream59').addClass('challenger');
		$('#stream59').addClass('jungle');
		$('#stream59').addClass('english');
	}
	if(stream59 == "imaqtpie") {
		$('#streamtag59').append("<span>Challenger</span>");
		$('#streamtag59').append("<span>AD Carry</span>");
		$('#streamtag59').append("<span>English</span>");

		$('#stream59').addClass('challenger');
		$('#stream59').addClass('adc');
		$('#stream59').addClass('english');
	}
	if(stream59 == "domingo") {
		$('#streamtag59').append("<span>French</span>");

		$('#stream59').addClass('french');
	}
	if(stream59 == "skumbagkrepo") {
		$('#streamtag59').append("<span>Caster</span>");
		$('#streamtag59').append("<span>English</span>");
		$('#streamtag59').append("<span>Master</span>");

		$('#stream59').addClass('caster');
		$('#stream59').addClass('english');
		$('#stream59').addClass('master');
	}
	if(stream59 == "tsm_theoddone") {
		$('#streamtag59').append("<span>English</span>");
		$('#streamtag59').append("<span>Diamond</span>");

		$('#stream59').addClass('english');
		$('#stream59').addClass('master');

	}
	if(stream59 == "trick59g") {
		$('#streamtag59').append("<span>Diamond</span>");
		$('#streamtag59').append("<span>English</span>");

		$('#stream59').addClass('master');
		$('#stream59').addClass('english');
	}
	if(stream59 == "thaldrinlol") {
		$('#streamtag59').append("<span>Turkish</span>");

		$('#stream59').addClass('turkish');
	}
	if(stream59 == "wingsofdeath") {
		$('#streamtag59').append("<span>Master</span>");

		$('#stream59').addClass('master');
	}
	if(stream59 == "zerator") {
		$('#streamtag59').append("<span>French</span>");

		$('#stream59').addClass('french');
	}
	if(stream59 == "kaypealol") {
		$('#streamtag59').append("<span>Girl</span>");
		$('#streamtag59').append("<span>Gold</span>");

		$('#stream59').addClass('girl');
		$('#stream59').addClass('plat');
	}
	if(stream59 == "froggen") {
		$('#streamtag59').append("<span>Pro</span>");
		$('#streamtag59').append("<span>Challenger</span>");
		$('#streamtag59').append("<span>English</span>");

		$('#stream59').addClass('pro');
		$('#stream59').addClass('challenger');
		$('#stream59').addClass('english');
	}
	if(stream59 == "sp4zie") {
		$('#streamtag59').append("<span>English</span>");
		$('#streamtag59').append("<span>Funny</span>");
		$('#streamtag59').append("<span>Platinum</span>");

		$('#stream59').addClass('english');
		$('#stream59').addClass('funny');
		$('#stream59').addClass('plat');
	}
	if(stream59 == "mushisgosu") {
		$('#streamtag59').append("<span>Girl</span>");
		$('#streamtag59').append("<span>Music</span>");
		$('#streamtag59').append("<span>Challenger</span>");

		$('#stream59').addClass('girl');
		$('#stream59').addClass('music');
		$('#stream59').addClass('challenger');
	}
	if(stream59 == "cowsep") {
		$('#streamtag59').append("<span>English</span>");
		$('#streamtag59').append("<span>Funny</span>");

		$('#stream59').addClass('english');
		$('#stream59').addClass('funny');
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
