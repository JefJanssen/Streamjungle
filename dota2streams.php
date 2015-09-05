<?
$dota2json = file_get_contents("https://api.twitch.tv/kraken/streams?game=dota+2&limit=100");
$dota2array = json_decode($dota2json);
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
					<li><a href="contactform.php">Contact</a></li>


				</ul>
			</div>
		</div>
	</div>





<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<div class="gametitle">
				<h4 style="font-size: 30px;">Dota 2 Streams</h4>
			</div>
			<div class="streampic">
				<div class="row">
					<div class="col-md-4" id="stream0">
						<a href="<? echo $dota2array->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[0]->viewers; ?> viewers on <strong><? echo $dota2array->streams[0]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag0">
						</div>
					</div>
					<div class="col-md-4" id="stream1">
						<a href="<? echo $dota2array->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[1]->viewers; ?> viewers on <strong><? echo $dota2array->streams[1]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag1">
						</div>
					</div>
					<div class="col-md-4" id="stream2">
						<a href="<? echo $dota2array->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[2]->viewers; ?> viewers on <strong><? echo $dota2array->streams[2]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag2">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream3">
						<a href="<? echo $dota2array->streams[3]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[3]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[3]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[3]->viewers; ?> viewers on <strong><? echo $dota2array->streams[3]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag3">
						</div>
					</div>
					<div class="col-md-4" id="stream4">
						<a href="<? echo $dota2array->streams[4]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[4]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[4]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[4]->viewers; ?> viewers on <strong><? echo $dota2array->streams[4]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag4">
						</div>
					</div>

					<div class="col-md-4" id="stream5">
						<a href="<? echo $dota2array->streams[5]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[5]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[5]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[5]->viewers; ?> viewers on <strong><? echo $dota2array->streams[5]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag5">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream6">
						<a href="<? echo $dota2array->streams[6]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[6]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[6]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[6]->viewers; ?> viewers on <strong><? echo $dota2array->streams[6]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag6">
						</div>
					</div>
					<div class="col-md-4" id="stream7">
						<a href="<? echo $dota2array->streams[7]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[7]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[7]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[7]->viewers; ?> viewers on <strong><? echo $dota2array->streams[7]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag7">
						</div>
					</div>
					<div class="col-md-4" id="stream8">
						<a href="<? echo $dota2array->streams[8]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[8]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[8]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[8]->viewers; ?> viewers on <strong><? echo $dota2array->streams[8]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag8">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream9">
						<a href="<? echo $dota2array->streams[9]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[9]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[9]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[9]->viewers; ?> viewers on <strong><? echo $dota2array->streams[9]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag9">
						</div>
					</div>
					<div class="col-md-4" id="stream10">
						<a href="<? echo $dota2array->streams[10]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[10]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[10]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[10]->viewers; ?> viewers on <strong><? echo $dota2array->streams[10]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag10">
						</div>
					</div>
					<div class="col-md-4" id="stream11">
						<a href="<? echo $dota2array->streams[11]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[11]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[11]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[11]->viewers; ?> viewers on <strong><? echo $dota2array->streams[11]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag11">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream12">
						<a href="<? echo $dota2array->streams[12]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[12]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[12]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[12]->viewers; ?> viewers on <strong><? echo $dota2array->streams[12]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag12">
						</div>
					</div>
					<div class="col-md-4" id="stream13">
						<a href="<? echo $dota2array->streams[13]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[13]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[13]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[13]->viewers; ?> viewers on <strong><? echo $dota2array->streams[13]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag13">
						</div>
					</div>
					<div class="col-md-4" id="stream14">
						<a href="<? echo $dota2array->streams[14]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[14]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[14]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[14]->viewers; ?> viewers on <strong><? echo $dota2array->streams[14]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag14">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream15">
						<a href="<? echo $dota2array->streams[15]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[15]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[15]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[15]->viewers; ?> viewers on <strong><? echo $dota2array->streams[15]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag15">
						</div>
					</div>
					<div class="col-md-4" id="stream16">
						<a href="<? echo $dota2array->streams[16]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[16]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[16]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[16]->viewers; ?> viewers on <strong><? echo $dota2array->streams[16]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag16">
						</div>
					</div>
					<div class="col-md-4" id="stream17">
						<a href="<? echo $dota2array->streams[17]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[17]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[17]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[17]->viewers; ?> viewers on <strong><? echo $dota2array->streams[17]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag17">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream18">
						<a href="<? echo $dota2array->streams[18]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[18]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[18]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[18]->viewers; ?> viewers on <strong><? echo $dota2array->streams[18]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag18">
						</div>
					</div>
					<div class="col-md-4" id="stream19">
						<a href="<? echo $dota2array->streams[19]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[19]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[19]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[19]->viewers; ?> viewers on <strong><? echo $dota2array->streams[19]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag19">
						</div>
					</div>
					<div class="col-md-4" id="stream20">
						<a href="<? echo $dota2array->streams[20]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[20]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[20]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[20]->viewers; ?> viewers on <strong><? echo $dota2array->streams[20]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag20">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream21">
						<a href="<? echo $dota2array->streams[21]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[21]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[21]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[21]->viewers; ?> viewers on <strong><? echo $dota2array->streams[21]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag21">
						</div>
					</div>
					<div class="col-md-4" id="stream22">
						<a href="<? echo $dota2array->streams[22]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[22]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[22]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[22]->viewers; ?> viewers on <strong><? echo $dota2array->streams[22]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag22">
						</div>
					</div>
					<div class="col-md-4" id="stream23">
						<a href="<? echo $dota2array->streams[23]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[23]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[23]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[23]->viewers; ?> viewers on <strong><? echo $dota2array->streams[23]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag23">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream24">
						<a href="<? echo $dota2array->streams[24]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[24]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[24]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[24]->viewers; ?> viewers on <strong><? echo $dota2array->streams[24]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag24">
						</div>
					</div>
					<div class="col-md-4" id="stream25">
						<a href="<? echo $dota2array->streams[25]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[25]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[25]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[25]->viewers; ?> viewers on <strong><? echo $dota2array->streams[25]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag25">
						</div>
					</div>
					<div class="col-md-4" id="stream26">
						<a href="<? echo $dota2array->streams[26]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[26]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[266]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[26]->viewers; ?> viewers on <strong><? echo $dota2array->streams[26]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag26">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream27">
						<a href="<? echo $dota2array->streams[27]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[27]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[27]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[27]->viewers; ?> viewers on <strong><? echo $dota2array->streams[27]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag27">
						</div>
					</div>
					<div class="col-md-4" id="stream28">
						<a href="<? echo $dota2array->streams[28]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[28]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[28]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[28]->viewers; ?> viewers on <strong><? echo $dota2array->streams[28]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag28">
						</div>
					</div>
					<div class="col-md-4" id="stream29">
						<a href="<? echo $dota2array->streams[29]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[29]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[29]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[29]->viewers; ?> viewers on <strong><? echo $dota2array->streams[29]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag29">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream30">
						<a href="<? echo $dota2array->streams[30]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[30]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[30]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[30]->viewers; ?> viewers on <strong><? echo $dota2array->streams[30]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag30">
						</div>
					</div>
					<div class="col-md-4" id="stream31">
						<a href="<? echo $dota2array->streams[31]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[31]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[31]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[31]->viewers; ?> viewers on <strong><? echo $dota2array->streams[31]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag31">
						</div>
					</div>
					<div class="col-md-4" id="stream32">
						<a href="<? echo $dota2array->streams[32]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[32]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[32]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[32]->viewers; ?> viewers on <strong><? echo $dota2array->streams[32]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag32">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream33">
						<a href="<? echo $dota2array->streams[33]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[33]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[33]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[33]->viewers; ?> viewers on <strong><? echo $dota2array->streams[33]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag33">
						</div>
					</div>
					<div class="col-md-4" id="stream34">
						<a href="<? echo $dota2array->streams[34]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[34]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[34]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[34]->viewers; ?> viewers on <strong><? echo $dota2array->streams[34]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag34">
						</div>
					</div>
					<div class="col-md-4" id="stream35">
						<a href="<? echo $dota2array->streams[35]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[35]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[35]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[35]->viewers; ?> viewers on <strong><? echo $dota2array->streams[35]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag35">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream36">
						<a href="<? echo $dota2array->streams[36]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[36]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[36]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[36]->viewers; ?> viewers on <strong><? echo $dota2array->streams[36]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag36">
						</div>
					</div>
					<div class="col-md-4" id="stream37">
						<a href="<? echo $dota2array->streams[37]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[37]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[37]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[37]->viewers; ?> viewers on <strong><? echo $dota2array->streams[37]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag37">
						</div>
					</div>
					<div class="col-md-4" id="stream38">
						<a href="<? echo $dota2array->streams[38]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[38]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[38]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[38]->viewers; ?> viewers on <strong><? echo $dota2array->streams[38]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag38">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream39">
						<a href="<? echo $dota2array->streams[39]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[39]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[39]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[39]->viewers; ?> viewers on <strong><? echo $dota2array->streams[39]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag39">
						</div>
					</div>
					<div class="col-md-4" id="stream40">
						<a href="<? echo $dota2array->streams[40]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[40]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[40]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[40]->viewers; ?> viewers on <strong><? echo $dota2array->streams[40]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag40">
						</div>
					</div>
					<div class="col-md-4" id="stream41">
						<a href="<? echo $dota2array->streams[41]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[41]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[41]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[41]->viewers; ?> viewers on <strong><? echo $dota2array->streams[41]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag41">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream42">
						<a href="<? echo $dota2array->streams[42]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[42]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[42]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[42]->viewers; ?> viewers on <strong><? echo $dota2array->streams[42]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag42">
						</div>
					</div>
					<div class="col-md-4" id="stream43">
						<a href="<? echo $dota2array->streams[43]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[43]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[43]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[43]->viewers; ?> viewers on <strong><? echo $dota2array->streams[43]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag43">
						</div>
					</div>
					<div class="col-md-4" id="stream44">
						<a href="<? echo $dota2array->streams[44]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[44]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[44]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[44]->viewers; ?> viewers on <strong><? echo $dota2array->streams[44]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag44">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream45">
						<a href="<? echo $dota2array->streams[45]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[45]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[45]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[45]->viewers; ?> viewers on <strong><? echo $dota2array->streams[45]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag45">
						</div>
					</div>
					<div class="col-md-4" id="stream46">
						<a href="<? echo $dota2array->streams[46]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[46]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[46]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[46]->viewers; ?> viewers on <strong><? echo $dota2array->streams[46]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag46">
						</div>
					</div>
					<div class="col-md-4" id="stream47">
						<a href="<? echo $dota2array->streams[47]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[47]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[47]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[47]->viewers; ?> viewers on <strong><? echo $dota2array->streams[47]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag47">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream48">
						<a href="<? echo $dota2array->streams[48]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[48]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[48]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[48]->viewers; ?> viewers on <strong><? echo $dota2array->streams[48]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag48">
						</div>
					</div>
					<div class="col-md-4" id="stream49">
						<a href="<? echo $dota2array->streams[49]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[49]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[49]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[49]->viewers; ?> viewers on <strong><? echo $dota2array->streams[49]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag49">
						</div>
					</div>
					<div class="col-md-4" id="stream50">
						<a href="<? echo $dota2array->streams[50]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[50]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[50]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[50]->viewers; ?> viewers on <strong><? echo $dota2array->streams[50]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag50">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream51">
						<a href="<? echo $dota2array->streams[51]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[51]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[51]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[51]->viewers; ?> viewers on <strong><? echo $dota2array->streams[51]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag51">
						</div>
					</div>
					<div class="col-md-4" id="stream52">
						<a href="<? echo $dota2array->streams[52]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[52]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[52]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[52]->viewers; ?> viewers on <strong><? echo $dota2array->streams[52]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag52">
						</div>
					</div>
					<div class="col-md-4" id="stream53">
						<a href="<? echo $dota2array->streams[53]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[53]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[53]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[53]->viewers; ?> viewers on <strong><? echo $dota2array->streams[53]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag53">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream54">
						<a href="<? echo $dota2array->streams[54]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[54]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[54]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[54]->viewers; ?> viewers on <strong><? echo $dota2array->streams[54]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag54">
						</div>
					</div>
					<div class="col-md-4" id="stream55">
						<a href="<? echo $dota2array->streams[55]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[55]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[55]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[55]->viewers; ?> viewers on <strong><? echo $dota2array->streams[55]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag55">
						</div>
					</div>
					<div class="col-md-4" id="stream56">
						<a href="<? echo $dota2array->streams[56]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[56]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[56]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[56]->viewers; ?> viewers on <strong><? echo $dota2array->streams[56]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag56">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream57">
						<a href="<? echo $dota2array->streams[57]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[57]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[57]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[57]->viewers; ?> viewers on <strong><? echo $dota2array->streams[57]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag57">
						</div>
					</div>
					<div class="col-md-4" id="stream58">
						<a href="<? echo $dota2array->streams[58]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[58]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[58]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[58]->viewers; ?> viewers on <strong><? echo $dota2array->streams[58]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag58">
						</div>
					</div>
					<div class="col-md-4" id="stream59">
						<a href="<? echo $dota2array->streams[59]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $dota2array->streams[59]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $dota2array->streams[59]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $dota2array->streams[59]->viewers; ?> viewers on <strong><? echo $dota2array->streams[59]->channel->name; ?></strong></p>
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
	var stream0 = "<? echo $dota2array->streams[0]->channel->name; ?>";

	if(stream0 == "admiralbulldog") {
		$('#streamtag0').append("<span>Funny</span>");
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Pro</span>");

		$('#stream0').addClass('funny');
		$('#stream0').addClass('english');
		$('#stream0').addClass('pro');
	}
	if(stream0 == "ar1se") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Funny</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('funny');
	}
	if(stream0 == "arteezy") {
		$('#streamtag0').append("<span>Funny</span>");
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Pro</span>");

		$('#stream0').addClass('funny');
		$('#stream0').addClass('english');
		$('#stream0').addClass('pro');
	}
	if(stream0 == "bananaslamjamma") {
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('english');
	}
	if(stream0 == "blitzdota") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Educational</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('edu');
	}
	if(stream0 == "broxy_tv") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Funny</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('funny');
	}
	if(stream0 == "demon") {
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('english');
	}
	if(stream0 == "double_crosser") {
		$('#streamtag0').append("<span>Girl</span>");
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('girl');
		$('#stream0').addClass('english');
	}
	if(stream0 == "era") {
		$('#streamtag0').append("<span>Educational</span>");
		$('#streamtag0').append("<span>Swedish</span>");

		$('#stream0').addClass('edu');
	}
	if(stream0 == "illidan") {
		$('#streamtag0').append("<span>Russian</span>");
		$('#streamtag0').append("<span>Funny</span>");

		$('#stream0').addClass('russian');
		$('#stream0').addClass('funny');
	}
	if(stream0 == "matumbaman") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Girl ?!</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('girl');
	}
	if(stream0 == "merlini") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Educational</span>");
		$('#streamtag0').append("<span>Pro</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('edu');
		$('#stream0').addClass('pro');
	}
	if(stream0 == "miracle") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Pro</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('pro');
	}
	if(stream0 == "nigmanoname") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Funny</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('funny');
	}
	if(stream0 == "lizzard") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Funny</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('funny');
	}
	if(stream0 == "purge") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Educational</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('Funny');
	}
	if(stream0 == "pyrionflax") {
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('english');
	}
	if(stream0 == "refleksy") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Funny</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('funny');
	}
	if(stream0 == "s4") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Pro</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('pro');
	}
	if(stream0 == "sheever") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Girl</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('girl');
	}
	if(stream0 == "singsing") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>German</span>");
		$('#streamtag0').append("<span>Funny</span>");
		$('#streamtag0').append("<span>Girl</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('german');
		$('#stream0').addClass('funny');
		$('#stream0').addClass('girl');
	}
	if(stream0 == "siractionslacks") {
		$('#streamtag0').append("<span>English</span>");

		$('#stream0').addClass('english');
	}
	if(stream0 == "synderen") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Educational</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('edu');
	}
	if(stream0 == "thefluffiestbunny") {
		$('#streamtag0').append("<span>English</span>");
		$('#streamtag0').append("<span>Girl</span>");

		$('#stream0').addClass('english');
		$('#stream0').addClass('girl');
	}
	if(stream0 == "zai") {
		$('#streamtag0').append("<span>Girl</span>");

		$('#stream0').addClass('girl');
	}
	if(stream0 == "lightofheaven") {
		$('#streamtag0').append("<span>Russian</span>");

		$('#stream0').addClass('russian');
	}


	var stream1 = "<? echo $dota2array->streams[1]->channel->name; ?>";

	if(stream1 == "admiralbulldog") {
		$('#streamtag1').append("<span>Funny</span>");
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Pro</span>");

		$('#stream1').addClass('funny');
		$('#stream1').addClass('english');
		$('#stream1').addClass('pro');
	}
	if(stream1 == "ar1se") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Funny</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('funny');
	}
	if(stream1 == "arteezy") {
		$('#streamtag1').append("<span>Funny</span>");
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Pro</span>");

		$('#stream1').addClass('funny');
		$('#stream1').addClass('english');
		$('#stream1').addClass('pro');
	}
	if(stream1 == "bananaslamjamma") {
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('english');
	}
	if(stream1 == "blitzdota") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Educational</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('edu');
	}
	if(stream1 == "broxy_tv") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Funny</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('funny');
	}
	if(stream1 == "demon") {
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('english');
	}
	if(stream1 == "double_crosser") {
		$('#streamtag1').append("<span>Girl</span>");
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('girl');
		$('#stream1').addClass('english');
	}
	if(stream1 == "era") {
		$('#streamtag1').append("<span>Educational</span>");
		$('#streamtag1').append("<span>Swedish</span>");

		$('#stream1').addClass('edu');
	}
	if(stream1 == "illidan") {
		$('#streamtag1').append("<span>Russian</span>");
		$('#streamtag1').append("<span>Funny</span>");

		$('#stream1').addClass('russian');
		$('#stream1').addClass('funny');
	}
	if(stream1 == "matumbaman") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Girl ?!</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('girl');
	}
	if(stream1 == "merlini") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Educational</span>");
		$('#streamtag1').append("<span>Pro</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('edu');
		$('#stream1').addClass('pro');
	}
	if(stream1 == "miracle") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Pro</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('pro');
	}
	if(stream1 == "nigmanoname") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Funny</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('funny');
	}
	if(stream1 == "lizzard") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Funny</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('funny');
	}
	if(stream1 == "purge") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Educational</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('Funny');
	}
	if(stream1 == "pyrionflax") {
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('english');
	}
	if(stream1 == "refleksy") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Funny</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('funny');
	}
	if(stream1 == "s4") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Pro</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('pro');
	}
	if(stream1 == "sheever") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Girl</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('girl');
	}
	if(stream1 == "singsing") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>German</span>");
		$('#streamtag1').append("<span>Funny</span>");
		$('#streamtag1').append("<span>Girl</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('german');
		$('#stream1').addClass('funny');
		$('#stream1').addClass('girl');
	}
	if(stream1 == "siractionslacks") {
		$('#streamtag1').append("<span>English</span>");

		$('#stream1').addClass('english');
	}
	if(stream1 == "synderen") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Educational</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('edu');
	}
	if(stream1 == "thefluffiestbunny") {
		$('#streamtag1').append("<span>English</span>");
		$('#streamtag1').append("<span>Girl</span>");

		$('#stream1').addClass('english');
		$('#stream1').addClass('girl');
	}
	if(stream1 == "zai") {
		$('#streamtag1').append("<span>Girl</span>");

		$('#stream1').addClass('girl');
	}
	if(stream1 == "lightofheaven") {
		$('#streamtag1').append("<span>Russian</span>");

		$('#stream1').addClass('russian');
	}

	var stream2 = "<? echo $dota2array->streams[2]->channel->name; ?>";

	if(stream2 == "admiralbulldog") {
		$('#streamtag2').append("<span>Funny</span>");
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Pro</span>");

		$('#stream2').addClass('funny');
		$('#stream2').addClass('english');
		$('#stream2').addClass('pro');
	}
	if(stream2 == "ar1se") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Funny</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('funny');
	}
	if(stream2 == "arteezy") {
		$('#streamtag2').append("<span>Funny</span>");
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Pro</span>");

		$('#stream2').addClass('funny');
		$('#stream2').addClass('english');
		$('#stream2').addClass('pro');
	}
	if(stream2 == "bananaslamjamma") {
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('english');
	}
	if(stream2 == "blitzdota") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Educational</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('edu');
	}
	if(stream2 == "broxy_tv") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Funny</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('funny');
	}
	if(stream2 == "demon") {
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('english');
	}
	if(stream2 == "double_crosser") {
		$('#streamtag2').append("<span>Girl</span>");
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('girl');
		$('#stream2').addClass('english');
	}
	if(stream2 == "era") {
		$('#streamtag2').append("<span>Educational</span>");
		$('#streamtag2').append("<span>Swedish</span>");

		$('#stream2').addClass('edu');
	}
	if(stream2 == "illidan") {
		$('#streamtag2').append("<span>Russian</span>");
		$('#streamtag2').append("<span>Funny</span>");

		$('#stream2').addClass('russian');
		$('#stream2').addClass('funny');
	}
	if(stream2 == "matumbaman") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Girl ?!</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('girl');
	}
	if(stream2 == "merlini") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Educational</span>");
		$('#streamtag2').append("<span>Pro</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('edu');
		$('#stream2').addClass('pro');
	}
	if(stream2 == "miracle") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Pro</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('pro');
	}
	if(stream2 == "nigmanoname") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Funny</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('funny');
	}
	if(stream2 == "lizzard") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Funny</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('funny');
	}
	if(stream2 == "purge") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Educational</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('Funny');
	}
	if(stream2 == "pyrionflax") {
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('english');
	}
	if(stream2 == "refleksy") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Funny</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('funny');
	}
	if(stream2 == "s4") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Pro</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('pro');
	}
	if(stream2 == "sheever") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Girl</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('girl');
	}
	if(stream2 == "singsing") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>German</span>");
		$('#streamtag2').append("<span>Funny</span>");
		$('#streamtag2').append("<span>Girl</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('german');
		$('#stream2').addClass('funny');
		$('#stream2').addClass('girl');
	}
	if(stream2 == "siractionslacks") {
		$('#streamtag2').append("<span>English</span>");

		$('#stream2').addClass('english');
	}
	if(stream2 == "synderen") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Educational</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('edu');
	}
	if(stream2 == "thefluffiestbunny") {
		$('#streamtag2').append("<span>English</span>");
		$('#streamtag2').append("<span>Girl</span>");

		$('#stream2').addClass('english');
		$('#stream2').addClass('girl');
	}
	if(stream2 == "zai") {
		$('#streamtag2').append("<span>Girl</span>");

		$('#stream2').addClass('girl');
	}
	if(stream2 == "lightofheaven") {
		$('#streamtag2').append("<span>Russian</span>");

		$('#stream2').addClass('russian');
	}

	var stream3 = "<? echo $dota2array->streams[3]->channel->name; ?>";

	if(stream3 == "admiralbulldog") {
		$('#streamtag3').append("<span>Funny</span>");
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Pro</span>");

		$('#stream3').addClass('funny');
		$('#stream3').addClass('english');
		$('#stream3').addClass('pro');
	}
	if(stream3 == "ar1se") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Funny</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('funny');
	}
	if(stream3 == "arteezy") {
		$('#streamtag3').append("<span>Funny</span>");
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Pro</span>");

		$('#stream3').addClass('funny');
		$('#stream3').addClass('english');
		$('#stream3').addClass('pro');
	}
	if(stream3 == "bananaslamjamma") {
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('english');
	}
	if(stream3 == "blitzdota") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Educational</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('edu');
	}
	if(stream3 == "broxy_tv") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Funny</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('funny');
	}
	if(stream3 == "demon") {
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('english');
	}
	if(stream3 == "double_crosser") {
		$('#streamtag3').append("<span>Girl</span>");
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('girl');
		$('#stream3').addClass('english');
	}
	if(stream3 == "era") {
		$('#streamtag3').append("<span>Educational</span>");
		$('#streamtag3').append("<span>Swedish</span>");

		$('#stream3').addClass('edu');
	}
	if(stream3 == "illidan") {
		$('#streamtag3').append("<span>Russian</span>");
		$('#streamtag3').append("<span>Funny</span>");

		$('#stream3').addClass('russian');
		$('#stream3').addClass('funny');
	}
	if(stream3 == "matumbaman") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Girl ?!</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('girl');
	}
	if(stream3 == "merlini") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Educational</span>");
		$('#streamtag3').append("<span>Pro</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('edu');
		$('#stream3').addClass('pro');
	}
	if(stream3 == "miracle") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Pro</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('pro');
	}
	if(stream3 == "nigmanoname") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Funny</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('funny');
	}
	if(stream3 == "lizzard") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Funny</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('funny');
	}
	if(stream3 == "purge") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Educational</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('Funny');
	}
	if(stream3 == "pyrionflax") {
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('english');
	}
	if(stream3 == "refleksy") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Funny</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('funny');
	}
	if(stream3 == "s4") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Pro</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('pro');
	}
	if(stream3 == "sheever") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Girl</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('girl');
	}
	if(stream3 == "singsing") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>German</span>");
		$('#streamtag3').append("<span>Funny</span>");
		$('#streamtag3').append("<span>Girl</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('german');
		$('#stream3').addClass('funny');
		$('#stream3').addClass('girl');
	}
	if(stream3 == "siractionslacks") {
		$('#streamtag3').append("<span>English</span>");

		$('#stream3').addClass('english');
	}
	if(stream3 == "synderen") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Educational</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('edu');
	}
	if(stream3 == "thefluffiestbunny") {
		$('#streamtag3').append("<span>English</span>");
		$('#streamtag3').append("<span>Girl</span>");

		$('#stream3').addClass('english');
		$('#stream3').addClass('girl');
	}
	if(stream3 == "zai") {
		$('#streamtag3').append("<span>Girl</span>");

		$('#stream3').addClass('girl');
	}
	if(stream3 == "lightofheaven") {
		$('#streamtag3').append("<span>Russian</span>");

		$('#stream3').addClass('russian');
	}

	var stream4 = "<? echo $dota2array->streams[4]->channel->name; ?>";

	if(stream4 == "admiralbulldog") {
		$('#streamtag4').append("<span>Funny</span>");
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Pro</span>");

		$('#stream4').addClass('funny');
		$('#stream4').addClass('english');
		$('#stream4').addClass('pro');
	}
	if(stream4 == "ar1se") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Funny</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('funny');
	}
	if(stream4 == "arteezy") {
		$('#streamtag4').append("<span>Funny</span>");
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Pro</span>");

		$('#stream4').addClass('funny');
		$('#stream4').addClass('english');
		$('#stream4').addClass('pro');
	}
	if(stream4 == "bananaslamjamma") {
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('english');
	}
	if(stream4 == "blitzdota") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Educational</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('edu');
	}
	if(stream4 == "broxy_tv") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Funny</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('funny');
	}
	if(stream4 == "demon") {
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('english');
	}
	if(stream4 == "double_crosser") {
		$('#streamtag4').append("<span>Girl</span>");
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('girl');
		$('#stream4').addClass('english');
	}
	if(stream4 == "era") {
		$('#streamtag4').append("<span>Educational</span>");
		$('#streamtag4').append("<span>Swedish</span>");

		$('#stream4').addClass('edu');
	}
	if(stream4 == "illidan") {
		$('#streamtag4').append("<span>Russian</span>");
		$('#streamtag4').append("<span>Funny</span>");

		$('#stream4').addClass('russian');
		$('#stream4').addClass('funny');
	}
	if(stream4 == "matumbaman") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Girl ?!</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('girl');
	}
	if(stream4 == "merlini") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Educational</span>");
		$('#streamtag4').append("<span>Pro</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('edu');
		$('#stream4').addClass('pro');
	}
	if(stream4 == "miracle") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Pro</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('pro');
	}
	if(stream4 == "nigmanoname") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Funny</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('funny');
	}
	if(stream4 == "lizzard") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Funny</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('funny');
	}
	if(stream4 == "purge") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Educational</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('Funny');
	}
	if(stream4 == "pyrionflax") {
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('english');
	}
	if(stream4 == "refleksy") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Funny</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('funny');
	}
	if(stream4 == "s4") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Pro</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('pro');
	}
	if(stream4 == "sheever") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Girl</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('girl');
	}
	if(stream4 == "singsing") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>German</span>");
		$('#streamtag4').append("<span>Funny</span>");
		$('#streamtag4').append("<span>Girl</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('german');
		$('#stream4').addClass('funny');
		$('#stream4').addClass('girl');
	}
	if(stream4 == "siractionslacks") {
		$('#streamtag4').append("<span>English</span>");

		$('#stream4').addClass('english');
	}
	if(stream4 == "synderen") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Educational</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('edu');
	}
	if(stream4 == "thefluffiestbunny") {
		$('#streamtag4').append("<span>English</span>");
		$('#streamtag4').append("<span>Girl</span>");

		$('#stream4').addClass('english');
		$('#stream4').addClass('girl');
	}
	if(stream4 == "zai") {
		$('#streamtag4').append("<span>Girl</span>");

		$('#stream4').addClass('girl');
	}
	if(stream4 == "lightofheaven") {
		$('#streamtag4').append("<span>Russian</span>");

		$('#stream4').addClass('russian');
	}

	var stream5 = "<? echo $dota2array->streams[5]->channel->name; ?>";

	if(stream5 == "admiralbulldog") {
		$('#streamtag5').append("<span>Funny</span>");
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Pro</span>");

		$('#stream5').addClass('funny');
		$('#stream5').addClass('english');
		$('#stream5').addClass('pro');
	}
	if(stream5 == "ar1se") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Funny</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('funny');
	}
	if(stream5 == "arteezy") {
		$('#streamtag5').append("<span>Funny</span>");
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Pro</span>");

		$('#stream5').addClass('funny');
		$('#stream5').addClass('english');
		$('#stream5').addClass('pro');
	}
	if(stream5 == "bananaslamjamma") {
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('english');
	}
	if(stream5 == "blitzdota") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Educational</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('edu');
	}
	if(stream5 == "broxy_tv") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Funny</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('funny');
	}
	if(stream5 == "demon") {
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('english');
	}
	if(stream5 == "double_crosser") {
		$('#streamtag5').append("<span>Girl</span>");
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('girl');
		$('#stream5').addClass('english');
	}
	if(stream5 == "era") {
		$('#streamtag5').append("<span>Educational</span>");
		$('#streamtag5').append("<span>Swedish</span>");

		$('#stream5').addClass('edu');
	}
	if(stream5 == "illidan") {
		$('#streamtag5').append("<span>Russian</span>");
		$('#streamtag5').append("<span>Funny</span>");

		$('#stream5').addClass('russian');
		$('#stream5').addClass('funny');
	}
	if(stream5 == "matumbaman") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Girl ?!</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('girl');
	}
	if(stream5 == "merlini") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Educational</span>");
		$('#streamtag5').append("<span>Pro</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('edu');
		$('#stream5').addClass('pro');
	}
	if(stream5 == "miracle") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Pro</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('pro');
	}
	if(stream5 == "nigmanoname") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Funny</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('funny');
	}
	if(stream5 == "lizzard") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Funny</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('funny');
	}
	if(stream5 == "purge") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Educational</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('Funny');
	}
	if(stream5 == "pyrionflax") {
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('english');
	}
	if(stream5 == "refleksy") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Funny</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('funny');
	}
	if(stream5 == "s4") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Pro</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('pro');
	}
	if(stream5 == "sheever") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Girl</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('girl');
	}
	if(stream5 == "singsing") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>German</span>");
		$('#streamtag5').append("<span>Funny</span>");
		$('#streamtag5').append("<span>Girl</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('german');
		$('#stream5').addClass('funny');
		$('#stream5').addClass('girl');
	}
	if(stream5 == "siractionslacks") {
		$('#streamtag5').append("<span>English</span>");

		$('#stream5').addClass('english');
	}
	if(stream5 == "synderen") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Educational</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('edu');
	}
	if(stream5 == "thefluffiestbunny") {
		$('#streamtag5').append("<span>English</span>");
		$('#streamtag5').append("<span>Girl</span>");

		$('#stream5').addClass('english');
		$('#stream5').addClass('girl');
	}
	if(stream5 == "zai") {
		$('#streamtag5').append("<span>Girl</span>");

		$('#stream5').addClass('girl');
	}
	if(stream5 == "lightofheaven") {
		$('#streamtag5').append("<span>Russian</span>");

		$('#stream5').addClass('russian');
	}

	var stream6 = "<? echo $dota2array->streams[6]->channel->name; ?>";

	if(stream6 == "admiralbulldog") {
		$('#streamtag6').append("<span>Funny</span>");
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Pro</span>");

		$('#stream6').addClass('funny');
		$('#stream6').addClass('english');
		$('#stream6').addClass('pro');
	}
	if(stream6 == "ar1se") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Funny</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('funny');
	}
	if(stream6 == "arteezy") {
		$('#streamtag6').append("<span>Funny</span>");
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Pro</span>");

		$('#stream6').addClass('funny');
		$('#stream6').addClass('english');
		$('#stream6').addClass('pro');
	}
	if(stream6 == "bananaslamjamma") {
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('english');
	}
	if(stream6 == "blitzdota") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Educational</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('edu');
	}
	if(stream6 == "broxy_tv") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Funny</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('funny');
	}
	if(stream6 == "demon") {
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('english');
	}
	if(stream6 == "double_crosser") {
		$('#streamtag6').append("<span>Girl</span>");
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('girl');
		$('#stream6').addClass('english');
	}
	if(stream6 == "era") {
		$('#streamtag6').append("<span>Educational</span>");
		$('#streamtag6').append("<span>Swedish</span>");

		$('#stream6').addClass('edu');
	}
	if(stream6 == "illidan") {
		$('#streamtag6').append("<span>Russian</span>");
		$('#streamtag6').append("<span>Funny</span>");

		$('#stream6').addClass('russian');
		$('#stream6').addClass('funny');
	}
	if(stream6 == "matumbaman") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Girl ?!</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('girl');
	}
	if(stream6 == "merlini") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Educational</span>");
		$('#streamtag6').append("<span>Pro</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('edu');
		$('#stream6').addClass('pro');
	}
	if(stream6 == "miracle") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Pro</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('pro');
	}
	if(stream6 == "nigmanoname") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Funny</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('funny');
	}
	if(stream6 == "lizzard") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Funny</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('funny');
	}
	if(stream6 == "purge") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Educational</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('Funny');
	}
	if(stream6 == "pyrionflax") {
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('english');
	}
	if(stream6 == "refleksy") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Funny</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('funny');
	}
	if(stream6 == "s4") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Pro</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('pro');
	}
	if(stream6 == "sheever") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Girl</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('girl');
	}
	if(stream6 == "singsing") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>German</span>");
		$('#streamtag6').append("<span>Funny</span>");
		$('#streamtag6').append("<span>Girl</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('german');
		$('#stream6').addClass('funny');
		$('#stream6').addClass('girl');
	}
	if(stream6 == "siractionslacks") {
		$('#streamtag6').append("<span>English</span>");

		$('#stream6').addClass('english');
	}
	if(stream6 == "synderen") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Educational</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('edu');
	}
	if(stream6 == "thefluffiestbunny") {
		$('#streamtag6').append("<span>English</span>");
		$('#streamtag6').append("<span>Girl</span>");

		$('#stream6').addClass('english');
		$('#stream6').addClass('girl');
	}
	if(stream6 == "zai") {
		$('#streamtag6').append("<span>Girl</span>");

		$('#stream6').addClass('girl');
	}
	if(stream6 == "lightofheaven") {
		$('#streamtag6').append("<span>Russian</span>");

		$('#stream6').addClass('russian');
	}

	var stream7 = "<? echo $dota2array->streams[7]->channel->name; ?>";

	if(stream7 == "admiralbulldog") {
		$('#streamtag7').append("<span>Funny</span>");
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Pro</span>");

		$('#stream7').addClass('funny');
		$('#stream7').addClass('english');
		$('#stream7').addClass('pro');
	}
	if(stream7 == "ar1se") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Funny</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('funny');
	}
	if(stream7 == "arteezy") {
		$('#streamtag7').append("<span>Funny</span>");
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Pro</span>");

		$('#stream7').addClass('funny');
		$('#stream7').addClass('english');
		$('#stream7').addClass('pro');
	}
	if(stream7 == "bananaslamjamma") {
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('english');
	}
	if(stream7 == "blitzdota") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Educational</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('edu');
	}
	if(stream7 == "broxy_tv") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Funny</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('funny');
	}
	if(stream7 == "demon") {
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('english');
	}
	if(stream7 == "double_crosser") {
		$('#streamtag7').append("<span>Girl</span>");
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('girl');
		$('#stream7').addClass('english');
	}
	if(stream7 == "era") {
		$('#streamtag7').append("<span>Educational</span>");
		$('#streamtag7').append("<span>Swedish</span>");

		$('#stream7').addClass('edu');
	}
	if(stream7 == "illidan") {
		$('#streamtag7').append("<span>Russian</span>");
		$('#streamtag7').append("<span>Funny</span>");

		$('#stream7').addClass('russian');
		$('#stream7').addClass('funny');
	}
	if(stream7 == "matumbaman") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Girl ?!</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('girl');
	}
	if(stream7 == "merlini") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Educational</span>");
		$('#streamtag7').append("<span>Pro</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('edu');
		$('#stream7').addClass('pro');
	}
	if(stream7 == "miracle") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Pro</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('pro');
	}
	if(stream7 == "nigmanoname") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Funny</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('funny');
	}
	if(stream7 == "lizzard") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Funny</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('funny');
	}
	if(stream7 == "purge") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Educational</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('Funny');
	}
	if(stream7 == "pyrionflax") {
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('english');
	}
	if(stream7 == "refleksy") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Funny</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('funny');
	}
	if(stream7 == "s4") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Pro</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('pro');
	}
	if(stream7 == "sheever") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Girl</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('girl');
	}
	if(stream7 == "singsing") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>German</span>");
		$('#streamtag7').append("<span>Funny</span>");
		$('#streamtag7').append("<span>Girl</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('german');
		$('#stream7').addClass('funny');
		$('#stream7').addClass('girl');
	}
	if(stream7 == "siractionslacks") {
		$('#streamtag7').append("<span>English</span>");

		$('#stream7').addClass('english');
	}
	if(stream7 == "synderen") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Educational</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('edu');
	}
	if(stream7 == "thefluffiestbunny") {
		$('#streamtag7').append("<span>English</span>");
		$('#streamtag7').append("<span>Girl</span>");

		$('#stream7').addClass('english');
		$('#stream7').addClass('girl');
	}
	if(stream7 == "zai") {
		$('#streamtag7').append("<span>Girl</span>");

		$('#stream7').addClass('girl');
	}
	if(stream7 == "lightofheaven") {
		$('#streamtag7').append("<span>Russian</span>");

		$('#stream7').addClass('russian');
	}

	var stream8 = "<? echo $dota2array->streams[8]->channel->name; ?>";

	if(stream8 == "admiralbulldog") {
		$('#streamtag8').append("<span>Funny</span>");
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Pro</span>");

		$('#stream8').addClass('funny');
		$('#stream8').addClass('english');
		$('#stream8').addClass('pro');
	}
	if(stream8 == "ar1se") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Funny</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('funny');
	}
	if(stream8 == "arteezy") {
		$('#streamtag8').append("<span>Funny</span>");
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Pro</span>");

		$('#stream8').addClass('funny');
		$('#stream8').addClass('english');
		$('#stream8').addClass('pro');
	}
	if(stream8 == "bananaslamjamma") {
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('english');
	}
	if(stream8 == "blitzdota") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Educational</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('edu');
	}
	if(stream8 == "broxy_tv") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Funny</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('funny');
	}
	if(stream8 == "demon") {
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('english');
	}
	if(stream8 == "double_crosser") {
		$('#streamtag8').append("<span>Girl</span>");
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('girl');
		$('#stream8').addClass('english');
	}
	if(stream8 == "era") {
		$('#streamtag8').append("<span>Educational</span>");
		$('#streamtag8').append("<span>Swedish</span>");

		$('#stream8').addClass('edu');
	}
	if(stream8 == "illidan") {
		$('#streamtag8').append("<span>Russian</span>");
		$('#streamtag8').append("<span>Funny</span>");

		$('#stream8').addClass('russian');
		$('#stream8').addClass('funny');
	}
	if(stream8 == "matumbaman") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Girl ?!</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('girl');
	}
	if(stream8 == "merlini") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Educational</span>");
		$('#streamtag8').append("<span>Pro</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('edu');
		$('#stream8').addClass('pro');
	}
	if(stream8 == "miracle") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Pro</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('pro');
	}
	if(stream8 == "nigmanoname") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Funny</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('funny');
	}
	if(stream8 == "lizzard") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Funny</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('funny');
	}
	if(stream8 == "purge") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Educational</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('Funny');
	}
	if(stream8 == "pyrionflax") {
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('english');
	}
	if(stream8 == "refleksy") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Funny</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('funny');
	}
	if(stream8 == "s4") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Pro</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('pro');
	}
	if(stream8 == "sheever") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Girl</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('girl');
	}
	if(stream8 == "singsing") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>German</span>");
		$('#streamtag8').append("<span>Funny</span>");
		$('#streamtag8').append("<span>Girl</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('german');
		$('#stream8').addClass('funny');
		$('#stream8').addClass('girl');
	}
	if(stream8 == "siractionslacks") {
		$('#streamtag8').append("<span>English</span>");

		$('#stream8').addClass('english');
	}
	if(stream8 == "synderen") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Educational</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('edu');
	}
	if(stream8 == "thefluffiestbunny") {
		$('#streamtag8').append("<span>English</span>");
		$('#streamtag8').append("<span>Girl</span>");

		$('#stream8').addClass('english');
		$('#stream8').addClass('girl');
	}
	if(stream8 == "zai") {
		$('#streamtag8').append("<span>Girl</span>");

		$('#stream8').addClass('girl');
	}
	if(stream8 == "lightofheaven") {
		$('#streamtag8').append("<span>Russian</span>");

		$('#stream8').addClass('russian');
	}

	var stream9 = "<? echo $dota2array->streams[9]->channel->name; ?>";

	if(stream9 == "admiralbulldog") {
		$('#streamtag9').append("<span>Funny</span>");
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Pro</span>");

		$('#stream9').addClass('funny');
		$('#stream9').addClass('english');
		$('#stream9').addClass('pro');
	}
	if(stream9 == "ar1se") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Funny</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('funny');
	}
	if(stream9 == "arteezy") {
		$('#streamtag9').append("<span>Funny</span>");
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Pro</span>");

		$('#stream9').addClass('funny');
		$('#stream9').addClass('english');
		$('#stream9').addClass('pro');
	}
	if(stream9 == "bananaslamjamma") {
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('english');
	}
	if(stream9 == "blitzdota") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Educational</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('edu');
	}
	if(stream9 == "broxy_tv") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Funny</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('funny');
	}
	if(stream9 == "demon") {
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('english');
	}
	if(stream9 == "double_crosser") {
		$('#streamtag9').append("<span>Girl</span>");
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('girl');
		$('#stream9').addClass('english');
	}
	if(stream9 == "era") {
		$('#streamtag9').append("<span>Educational</span>");
		$('#streamtag9').append("<span>Swedish</span>");

		$('#stream9').addClass('edu');
	}
	if(stream9 == "illidan") {
		$('#streamtag9').append("<span>Russian</span>");
		$('#streamtag9').append("<span>Funny</span>");

		$('#stream9').addClass('russian');
		$('#stream9').addClass('funny');
	}
	if(stream9 == "matumbaman") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Girl ?!</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('girl');
	}
	if(stream9 == "merlini") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Educational</span>");
		$('#streamtag9').append("<span>Pro</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('edu');
		$('#stream9').addClass('pro');
	}
	if(stream9 == "miracle") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Pro</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('pro');
	}
	if(stream9 == "nigmanoname") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Funny</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('funny');
	}
	if(stream9 == "lizzard") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Funny</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('funny');
	}
	if(stream9 == "purge") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Educational</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('Funny');
	}
	if(stream9 == "pyrionflax") {
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('english');
	}
	if(stream9 == "refleksy") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Funny</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('funny');
	}
	if(stream9 == "s4") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Pro</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('pro');
	}
	if(stream9 == "sheever") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Girl</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('girl');
	}
	if(stream9 == "singsing") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>German</span>");
		$('#streamtag9').append("<span>Funny</span>");
		$('#streamtag9').append("<span>Girl</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('german');
		$('#stream9').addClass('funny');
		$('#stream9').addClass('girl');
	}
	if(stream9 == "siractionslacks") {
		$('#streamtag9').append("<span>English</span>");

		$('#stream9').addClass('english');
	}
	if(stream9 == "synderen") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Educational</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('edu');
	}
	if(stream9 == "thefluffiestbunny") {
		$('#streamtag9').append("<span>English</span>");
		$('#streamtag9').append("<span>Girl</span>");

		$('#stream9').addClass('english');
		$('#stream9').addClass('girl');
	}
	if(stream9 == "zai") {
		$('#streamtag9').append("<span>Girl</span>");

		$('#stream9').addClass('girl');
	}
	if(stream9 == "lightofheaven") {
		$('#streamtag9').append("<span>Russian</span>");

		$('#stream9').addClass('russian');
	}

	var stream10 = "<? echo $dota2array->streams[10]->channel->name; ?>";

	if(stream10 == "admiralbulldog") {
		$('#streamtag10').append("<span>Funny</span>");
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Pro</span>");

		$('#stream10').addClass('funny');
		$('#stream10').addClass('english');
		$('#stream10').addClass('pro');
	}
	if(stream10 == "ar1se") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Funny</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('funny');
	}
	if(stream10 == "arteezy") {
		$('#streamtag10').append("<span>Funny</span>");
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Pro</span>");

		$('#stream10').addClass('funny');
		$('#stream10').addClass('english');
		$('#stream10').addClass('pro');
	}
	if(stream10 == "bananaslamjamma") {
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('english');
	}
	if(stream10 == "blitzdota") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Educational</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('edu');
	}
	if(stream10 == "broxy_tv") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Funny</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('funny');
	}
	if(stream10 == "demon") {
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('english');
	}
	if(stream10 == "double_crosser") {
		$('#streamtag10').append("<span>Girl</span>");
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('girl');
		$('#stream10').addClass('english');
	}
	if(stream10 == "era") {
		$('#streamtag10').append("<span>Educational</span>");
		$('#streamtag10').append("<span>Swedish</span>");

		$('#stream10').addClass('edu');
	}
	if(stream10 == "illidan") {
		$('#streamtag10').append("<span>Russian</span>");
		$('#streamtag10').append("<span>Funny</span>");

		$('#stream10').addClass('russian');
		$('#stream10').addClass('funny');
	}
	if(stream10 == "matumbaman") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Girl ?!</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('girl');
	}
	if(stream10 == "merlini") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Educational</span>");
		$('#streamtag10').append("<span>Pro</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('edu');
		$('#stream10').addClass('pro');
	}
	if(stream10 == "miracle") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Pro</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('pro');
	}
	if(stream10 == "nigmanoname") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Funny</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('funny');
	}
	if(stream10 == "lizzard") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Funny</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('funny');
	}
	if(stream10 == "purge") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Educational</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('Funny');
	}
	if(stream10 == "pyrionflax") {
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('english');
	}
	if(stream10 == "refleksy") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Funny</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('funny');
	}
	if(stream10 == "s4") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Pro</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('pro');
	}
	if(stream10 == "sheever") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Girl</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('girl');
	}
	if(stream10 == "singsing") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>German</span>");
		$('#streamtag10').append("<span>Funny</span>");
		$('#streamtag10').append("<span>Girl</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('german');
		$('#stream10').addClass('funny');
		$('#stream10').addClass('girl');
	}
	if(stream10 == "siractionslacks") {
		$('#streamtag10').append("<span>English</span>");

		$('#stream10').addClass('english');
	}
	if(stream10 == "synderen") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Educational</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('edu');
	}
	if(stream10 == "thefluffiestbunny") {
		$('#streamtag10').append("<span>English</span>");
		$('#streamtag10').append("<span>Girl</span>");

		$('#stream10').addClass('english');
		$('#stream10').addClass('girl');
	}
	if(stream10 == "zai") {
		$('#streamtag10').append("<span>Girl</span>");

		$('#stream10').addClass('girl');
	}
	if(stream10 == "lightofheaven") {
		$('#streamtag10').append("<span>Russian</span>");

		$('#stream10').addClass('russian');
	}

	var stream11 = "<? echo $dota2array->streams[11]->channel->name; ?>";

	if(stream11 == "admiralbulldog") {
		$('#streamtag11').append("<span>Funny</span>");
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Pro</span>");

		$('#stream11').addClass('funny');
		$('#stream11').addClass('english');
		$('#stream11').addClass('pro');
	}
	if(stream11 == "ar1se") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Funny</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('funny');
	}
	if(stream11 == "arteezy") {
		$('#streamtag11').append("<span>Funny</span>");
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Pro</span>");

		$('#stream11').addClass('funny');
		$('#stream11').addClass('english');
		$('#stream11').addClass('pro');
	}
	if(stream11 == "bananaslamjamma") {
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('english');
	}
	if(stream11 == "blitzdota") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Educational</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('edu');
	}
	if(stream11 == "broxy_tv") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Funny</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('funny');
	}
	if(stream11 == "demon") {
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('english');
	}
	if(stream11 == "double_crosser") {
		$('#streamtag11').append("<span>Girl</span>");
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('girl');
		$('#stream11').addClass('english');
	}
	if(stream11 == "era") {
		$('#streamtag11').append("<span>Educational</span>");
		$('#streamtag11').append("<span>Swedish</span>");

		$('#stream11').addClass('edu');
	}
	if(stream11 == "illidan") {
		$('#streamtag11').append("<span>Russian</span>");
		$('#streamtag11').append("<span>Funny</span>");

		$('#stream11').addClass('russian');
		$('#stream11').addClass('funny');
	}
	if(stream11 == "matumbaman") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Girl ?!</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('girl');
	}
	if(stream11 == "merlini") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Educational</span>");
		$('#streamtag11').append("<span>Pro</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('edu');
		$('#stream11').addClass('pro');
	}
	if(stream11 == "miracle") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Pro</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('pro');
	}
	if(stream11 == "nigmanoname") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Funny</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('funny');
	}
	if(stream11 == "lizzard") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Funny</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('funny');
	}
	if(stream11 == "purge") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Educational</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('Funny');
	}
	if(stream11 == "pyrionflax") {
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('english');
	}
	if(stream11 == "refleksy") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Funny</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('funny');
	}
	if(stream11 == "s4") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Pro</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('pro');
	}
	if(stream11 == "sheever") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Girl</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('girl');
	}
	if(stream11 == "singsing") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>German</span>");
		$('#streamtag11').append("<span>Funny</span>");
		$('#streamtag11').append("<span>Girl</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('german');
		$('#stream11').addClass('funny');
		$('#stream11').addClass('girl');
	}
	if(stream11 == "siractionslacks") {
		$('#streamtag11').append("<span>English</span>");

		$('#stream11').addClass('english');
	}
	if(stream11 == "synderen") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Educational</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('edu');
	}
	if(stream11 == "thefluffiestbunny") {
		$('#streamtag11').append("<span>English</span>");
		$('#streamtag11').append("<span>Girl</span>");

		$('#stream11').addClass('english');
		$('#stream11').addClass('girl');
	}
	if(stream11 == "zai") {
		$('#streamtag11').append("<span>Girl</span>");

		$('#stream11').addClass('girl');
	}
	if(stream11 == "lightofheaven") {
		$('#streamtag11').append("<span>Russian</span>");

		$('#stream11').addClass('russian');
	}

	var stream12 = "<? echo $dota2array->streams[12]->channel->name; ?>";

	if(stream12 == "admiralbulldog") {
		$('#streamtag12').append("<span>Funny</span>");
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Pro</span>");

		$('#stream12').addClass('funny');
		$('#stream12').addClass('english');
		$('#stream12').addClass('pro');
	}
	if(stream12 == "ar1se") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Funny</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('funny');
	}
	if(stream12 == "arteezy") {
		$('#streamtag12').append("<span>Funny</span>");
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Pro</span>");

		$('#stream12').addClass('funny');
		$('#stream12').addClass('english');
		$('#stream12').addClass('pro');
	}
	if(stream12 == "bananaslamjamma") {
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('english');
	}
	if(stream12 == "blitzdota") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Educational</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('edu');
	}
	if(stream12 == "broxy_tv") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Funny</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('funny');
	}
	if(stream12 == "demon") {
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('english');
	}
	if(stream12 == "double_crosser") {
		$('#streamtag12').append("<span>Girl</span>");
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('girl');
		$('#stream12').addClass('english');
	}
	if(stream12 == "era") {
		$('#streamtag12').append("<span>Educational</span>");
		$('#streamtag12').append("<span>Swedish</span>");

		$('#stream12').addClass('edu');
	}
	if(stream12 == "illidan") {
		$('#streamtag12').append("<span>Russian</span>");
		$('#streamtag12').append("<span>Funny</span>");

		$('#stream12').addClass('russian');
		$('#stream12').addClass('funny');
	}
	if(stream12 == "matumbaman") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Girl ?!</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('girl');
	}
	if(stream12 == "merlini") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Educational</span>");
		$('#streamtag12').append("<span>Pro</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('edu');
		$('#stream12').addClass('pro');
	}
	if(stream12 == "miracle") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Pro</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('pro');
	}
	if(stream12 == "nigmanoname") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Funny</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('funny');
	}
	if(stream12 == "lizzard") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Funny</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('funny');
	}
	if(stream12 == "purge") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Educational</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('Funny');
	}
	if(stream12 == "pyrionflax") {
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('english');
	}
	if(stream12 == "refleksy") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Funny</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('funny');
	}
	if(stream12 == "s4") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Pro</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('pro');
	}
	if(stream12 == "sheever") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Girl</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('girl');
	}
	if(stream12 == "singsing") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>German</span>");
		$('#streamtag12').append("<span>Funny</span>");
		$('#streamtag12').append("<span>Girl</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('german');
		$('#stream12').addClass('funny');
		$('#stream12').addClass('girl');
	}
	if(stream12 == "siractionslacks") {
		$('#streamtag12').append("<span>English</span>");

		$('#stream12').addClass('english');
	}
	if(stream12 == "synderen") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Educational</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('edu');
	}
	if(stream12 == "thefluffiestbunny") {
		$('#streamtag12').append("<span>English</span>");
		$('#streamtag12').append("<span>Girl</span>");

		$('#stream12').addClass('english');
		$('#stream12').addClass('girl');
	}
	if(stream12 == "zai") {
		$('#streamtag12').append("<span>Girl</span>");

		$('#stream12').addClass('girl');
	}
	if(stream12 == "lightofheaven") {
		$('#streamtag12').append("<span>Russian</span>");

		$('#stream12').addClass('russian');
	}

	var stream13 = "<? echo $dota2array->streams[13]->channel->name; ?>";

	if(stream13 == "admiralbulldog") {
		$('#streamtag13').append("<span>Funny</span>");
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Pro</span>");

		$('#stream13').addClass('funny');
		$('#stream13').addClass('english');
		$('#stream13').addClass('pro');
	}
	if(stream13 == "ar1se") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Funny</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('funny');
	}
	if(stream13 == "arteezy") {
		$('#streamtag13').append("<span>Funny</span>");
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Pro</span>");

		$('#stream13').addClass('funny');
		$('#stream13').addClass('english');
		$('#stream13').addClass('pro');
	}
	if(stream13 == "bananaslamjamma") {
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('english');
	}
	if(stream13 == "blitzdota") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Educational</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('edu');
	}
	if(stream13 == "broxy_tv") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Funny</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('funny');
	}
	if(stream13 == "demon") {
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('english');
	}
	if(stream13 == "double_crosser") {
		$('#streamtag13').append("<span>Girl</span>");
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('girl');
		$('#stream13').addClass('english');
	}
	if(stream13 == "era") {
		$('#streamtag13').append("<span>Educational</span>");
		$('#streamtag13').append("<span>Swedish</span>");

		$('#stream13').addClass('edu');
	}
	if(stream13 == "illidan") {
		$('#streamtag13').append("<span>Russian</span>");
		$('#streamtag13').append("<span>Funny</span>");

		$('#stream13').addClass('russian');
		$('#stream13').addClass('funny');
	}
	if(stream13 == "matumbaman") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Girl ?!</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('girl');
	}
	if(stream13 == "merlini") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Educational</span>");
		$('#streamtag13').append("<span>Pro</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('edu');
		$('#stream13').addClass('pro');
	}
	if(stream13 == "miracle") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Pro</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('pro');
	}
	if(stream13 == "nigmanoname") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Funny</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('funny');
	}
	if(stream13 == "lizzard") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Funny</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('funny');
	}
	if(stream13 == "purge") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Educational</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('Funny');
	}
	if(stream13 == "pyrionflax") {
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('english');
	}
	if(stream13 == "refleksy") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Funny</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('funny');
	}
	if(stream13 == "s4") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Pro</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('pro');
	}
	if(stream13 == "sheever") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Girl</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('girl');
	}
	if(stream13 == "singsing") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>German</span>");
		$('#streamtag13').append("<span>Funny</span>");
		$('#streamtag13').append("<span>Girl</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('german');
		$('#stream13').addClass('funny');
		$('#stream13').addClass('girl');
	}
	if(stream13 == "siractionslacks") {
		$('#streamtag13').append("<span>English</span>");

		$('#stream13').addClass('english');
	}
	if(stream13 == "synderen") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Educational</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('edu');
	}
	if(stream13 == "thefluffiestbunny") {
		$('#streamtag13').append("<span>English</span>");
		$('#streamtag13').append("<span>Girl</span>");

		$('#stream13').addClass('english');
		$('#stream13').addClass('girl');
	}
	if(stream13 == "zai") {
		$('#streamtag13').append("<span>Girl</span>");

		$('#stream13').addClass('girl');
	}
	if(stream13 == "lightofheaven") {
		$('#streamtag13').append("<span>Russian</span>");

		$('#stream13').addClass('russian');
	}

	var stream14 = "<? echo $dota2array->streams[14]->channel->name; ?>";

	if(stream13 == "admiralbulldog") {
		$('#streamtag14').append("<span>Funny</span>");
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Pro</span>");

		$('#stream14').addClass('funny');
		$('#stream14').addClass('english');
		$('#stream14').addClass('pro');
	}
	if(stream14 == "ar1se") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Funny</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('funny');
	}
	if(stream14 == "arteezy") {
		$('#streamtag14').append("<span>Funny</span>");
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Pro</span>");

		$('#stream14').addClass('funny');
		$('#stream14').addClass('english');
		$('#stream14').addClass('pro');
	}
	if(stream14 == "bananaslamjamma") {
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('english');
	}
	if(stream14 == "blitzdota") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Educational</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('edu');
	}
	if(stream14 == "broxy_tv") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Funny</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('funny');
	}
	if(stream14 == "demon") {
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('english');
	}
	if(stream14 == "double_crosser") {
		$('#streamtag14').append("<span>Girl</span>");
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('girl');
		$('#stream14').addClass('english');
	}
	if(stream14 == "era") {
		$('#streamtag14').append("<span>Educational</span>");
		$('#streamtag14').append("<span>Swedish</span>");

		$('#stream14').addClass('edu');
	}
	if(stream14 == "illidan") {
		$('#streamtag14').append("<span>Russian</span>");
		$('#streamtag14').append("<span>Funny</span>");

		$('#stream14').addClass('russian');
		$('#stream14').addClass('funny');
	}
	if(stream14 == "matumbaman") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Girl ?!</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('girl');
	}
	if(stream14 == "merlini") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Educational</span>");
		$('#streamtag14').append("<span>Pro</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('edu');
		$('#stream14').addClass('pro');
	}
	if(stream14 == "miracle") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Pro</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('pro');
	}
	if(stream14 == "nigmanoname") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Funny</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('funny');
	}
	if(stream14 == "lizzard") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Funny</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('funny');
	}
	if(stream14 == "purge") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Educational</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('Funny');
	}
	if(stream14 == "pyrionflax") {
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('english');
	}
	if(stream14 == "refleksy") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Funny</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('funny');
	}
	if(stream14 == "s4") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Pro</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('pro');
	}
	if(stream14 == "sheever") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Girl</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('girl');
	}
	if(stream14 == "singsing") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>German</span>");
		$('#streamtag14').append("<span>Funny</span>");
		$('#streamtag14').append("<span>Girl</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('german');
		$('#stream14').addClass('funny');
		$('#stream14').addClass('girl');
	}
	if(stream14 == "siractionslacks") {
		$('#streamtag14').append("<span>English</span>");

		$('#stream14').addClass('english');
	}
	if(stream14 == "synderen") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Educational</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('edu');
	}
	if(stream14 == "thefluffiestbunny") {
		$('#streamtag14').append("<span>English</span>");
		$('#streamtag14').append("<span>Girl</span>");

		$('#stream14').addClass('english');
		$('#stream14').addClass('girl');
	}
	if(stream14 == "zai") {
		$('#streamtag14').append("<span>Girl</span>");

		$('#stream14').addClass('girl');
	}
	if(stream14 == "lightofheaven") {
		$('#streamtag14').append("<span>Russian</span>");

		$('#stream14').addClass('russian');
	}

	var stream15 = "<? echo $dota2array->streams[15]->channel->name; ?>";

	if(stream15 == "admiralbulldog") {
		$('#streamtag15').append("<span>Funny</span>");
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Pro</span>");

		$('#stream15').addClass('funny');
		$('#stream15').addClass('english');
		$('#stream15').addClass('pro');
	}
	if(stream15 == "ar1se") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Funny</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('funny');
	}
	if(stream15 == "arteezy") {
		$('#streamtag15').append("<span>Funny</span>");
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Pro</span>");

		$('#stream15').addClass('funny');
		$('#stream15').addClass('english');
		$('#stream15').addClass('pro');
	}
	if(stream15 == "bananaslamjamma") {
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('english');
	}
	if(stream15 == "blitzdota") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Educational</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('edu');
	}
	if(stream15 == "broxy_tv") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Funny</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('funny');
	}
	if(stream15 == "demon") {
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('english');
	}
	if(stream15 == "double_crosser") {
		$('#streamtag15').append("<span>Girl</span>");
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('girl');
		$('#stream15').addClass('english');
	}
	if(stream15 == "era") {
		$('#streamtag15').append("<span>Educational</span>");
		$('#streamtag15').append("<span>Swedish</span>");

		$('#stream15').addClass('edu');
	}
	if(stream15 == "illidan") {
		$('#streamtag15').append("<span>Russian</span>");
		$('#streamtag15').append("<span>Funny</span>");

		$('#stream15').addClass('russian');
		$('#stream15').addClass('funny');
	}
	if(stream15 == "matumbaman") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Girl ?!</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('girl');
	}
	if(stream15 == "merlini") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Educational</span>");
		$('#streamtag15').append("<span>Pro</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('edu');
		$('#stream15').addClass('pro');
	}
	if(stream15 == "miracle") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Pro</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('pro');
	}
	if(stream15 == "nigmanoname") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Funny</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('funny');
	}
	if(stream15 == "lizzard") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Funny</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('funny');
	}
	if(stream15 == "purge") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Educational</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('Funny');
	}
	if(stream15 == "pyrionflax") {
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('english');
	}
	if(stream15 == "refleksy") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Funny</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('funny');
	}
	if(stream15 == "s4") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Pro</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('pro');
	}
	if(stream15 == "sheever") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Girl</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('girl');
	}
	if(stream15 == "singsing") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>German</span>");
		$('#streamtag15').append("<span>Funny</span>");
		$('#streamtag15').append("<span>Girl</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('german');
		$('#stream15').addClass('funny');
		$('#stream15').addClass('girl');
	}
	if(stream15 == "siractionslacks") {
		$('#streamtag15').append("<span>English</span>");

		$('#stream15').addClass('english');
	}
	if(stream15 == "synderen") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Educational</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('edu');
	}
	if(stream15 == "thefluffiestbunny") {
		$('#streamtag15').append("<span>English</span>");
		$('#streamtag15').append("<span>Girl</span>");

		$('#stream15').addClass('english');
		$('#stream15').addClass('girl');
	}
	if(stream15 == "zai") {
		$('#streamtag15').append("<span>Girl</span>");

		$('#stream15').addClass('girl');
	}
	if(stream15 == "lightofheaven") {
		$('#streamtag15').append("<span>Russian</span>");

		$('#stream15').addClass('russian');
	}

	var stream16 = "<? echo $dota2array->streams[16]->channel->name; ?>";

	if(stream16 == "admiralbulldog") {
		$('#streamtag16').append("<span>Funny</span>");
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Pro</span>");

		$('#stream16').addClass('funny');
		$('#stream16').addClass('english');
		$('#stream16').addClass('pro');
	}
	if(stream16 == "ar1se") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Funny</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('funny');
	}
	if(stream16 == "arteezy") {
		$('#streamtag16').append("<span>Funny</span>");
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Pro</span>");

		$('#stream16').addClass('funny');
		$('#stream16').addClass('english');
		$('#stream16').addClass('pro');
	}
	if(stream16 == "bananaslamjamma") {
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('english');
	}
	if(stream16 == "blitzdota") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Educational</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('edu');
	}
	if(stream16 == "broxy_tv") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Funny</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('funny');
	}
	if(stream16 == "demon") {
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('english');
	}
	if(stream16 == "double_crosser") {
		$('#streamtag16').append("<span>Girl</span>");
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('girl');
		$('#stream16').addClass('english');
	}
	if(stream16 == "era") {
		$('#streamtag16').append("<span>Educational</span>");
		$('#streamtag16').append("<span>Swedish</span>");

		$('#stream16').addClass('edu');
	}
	if(stream16 == "illidan") {
		$('#streamtag16').append("<span>Russian</span>");
		$('#streamtag16').append("<span>Funny</span>");

		$('#stream16').addClass('russian');
		$('#stream16').addClass('funny');
	}
	if(stream16 == "matumbaman") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Girl ?!</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('girl');
	}
	if(stream16 == "merlini") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Educational</span>");
		$('#streamtag16').append("<span>Pro</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('edu');
		$('#stream16').addClass('pro');
	}
	if(stream16 == "miracle") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Pro</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('pro');
	}
	if(stream16 == "nigmanoname") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Funny</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('funny');
	}
	if(stream16 == "lizzard") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Funny</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('funny');
	}
	if(stream16 == "purge") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Educational</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('Funny');
	}
	if(stream16 == "pyrionflax") {
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('english');
	}
	if(stream16 == "refleksy") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Funny</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('funny');
	}
	if(stream16 == "s4") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Pro</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('pro');
	}
	if(stream16 == "sheever") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Girl</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('girl');
	}
	if(stream16 == "singsing") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>German</span>");
		$('#streamtag16').append("<span>Funny</span>");
		$('#streamtag16').append("<span>Girl</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('german');
		$('#stream16').addClass('funny');
		$('#stream16').addClass('girl');
	}
	if(stream16 == "siractionslacks") {
		$('#streamtag16').append("<span>English</span>");

		$('#stream16').addClass('english');
	}
	if(stream16 == "synderen") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Educational</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('edu');
	}
	if(stream16 == "thefluffiestbunny") {
		$('#streamtag16').append("<span>English</span>");
		$('#streamtag16').append("<span>Girl</span>");

		$('#stream16').addClass('english');
		$('#stream16').addClass('girl');
	}
	if(stream16 == "zai") {
		$('#streamtag16').append("<span>Girl</span>");

		$('#stream16').addClass('girl');
	}
	if(stream16 == "lightofheaven") {
		$('#streamtag16').append("<span>Russian</span>");

		$('#stream16').addClass('russian');
	}

	var stream17 = "<? echo $dota2array->streams[17]->channel->name; ?>";

	if(stream17 == "admiralbulldog") {
		$('#streamtag17').append("<span>Funny</span>");
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Pro</span>");

		$('#stream17').addClass('funny');
		$('#stream17').addClass('english');
		$('#stream17').addClass('pro');
	}
	if(stream17 == "ar1se") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Funny</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('funny');
	}
	if(stream17 == "arteezy") {
		$('#streamtag17').append("<span>Funny</span>");
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Pro</span>");

		$('#stream17').addClass('funny');
		$('#stream17').addClass('english');
		$('#stream17').addClass('pro');
	}
	if(stream17 == "bananaslamjamma") {
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('english');
	}
	if(stream17 == "blitzdota") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Educational</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('edu');
	}
	if(stream17 == "broxy_tv") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Funny</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('funny');
	}
	if(stream17 == "demon") {
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('english');
	}
	if(stream17 == "double_crosser") {
		$('#streamtag17').append("<span>Girl</span>");
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('girl');
		$('#stream17').addClass('english');
	}
	if(stream17 == "era") {
		$('#streamtag17').append("<span>Educational</span>");
		$('#streamtag17').append("<span>Swedish</span>");

		$('#stream17').addClass('edu');
	}
	if(stream17 == "illidan") {
		$('#streamtag17').append("<span>Russian</span>");
		$('#streamtag17').append("<span>Funny</span>");

		$('#stream17').addClass('russian');
		$('#stream17').addClass('funny');
	}
	if(stream17 == "matumbaman") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Girl ?!</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('girl');
	}
	if(stream17 == "merlini") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Educational</span>");
		$('#streamtag17').append("<span>Pro</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('edu');
		$('#stream17').addClass('pro');
	}
	if(stream17 == "miracle") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Pro</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('pro');
	}
	if(stream17 == "nigmanoname") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Funny</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('funny');
	}
	if(stream17 == "lizzard") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Funny</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('funny');
	}
	if(stream17 == "purge") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Educational</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('Funny');
	}
	if(stream17 == "pyrionflax") {
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('english');
	}
	if(stream17 == "refleksy") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Funny</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('funny');
	}
	if(stream17 == "s4") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Pro</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('pro');
	}
	if(stream17 == "sheever") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Girl</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('girl');
	}
	if(stream17 == "singsing") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>German</span>");
		$('#streamtag17').append("<span>Funny</span>");
		$('#streamtag17').append("<span>Girl</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('german');
		$('#stream17').addClass('funny');
		$('#stream17').addClass('girl');
	}
	if(stream17 == "siractionslacks") {
		$('#streamtag17').append("<span>English</span>");

		$('#stream17').addClass('english');
	}
	if(stream17 == "synderen") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Educational</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('edu');
	}
	if(stream17 == "thefluffiestbunny") {
		$('#streamtag17').append("<span>English</span>");
		$('#streamtag17').append("<span>Girl</span>");

		$('#stream17').addClass('english');
		$('#stream17').addClass('girl');
	}
	if(stream17 == "zai") {
		$('#streamtag17').append("<span>Girl</span>");

		$('#stream17').addClass('girl');
	}
	if(stream17 == "lightofheaven") {
		$('#streamtag17').append("<span>Russian</span>");

		$('#stream17').addClass('russian');
	}

	var stream18 = "<? echo $dota2array->streams[18]->channel->name; ?>";

	if(stream18 == "admiralbulldog") {
		$('#streamtag18').append("<span>Funny</span>");
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Pro</span>");

		$('#stream18').addClass('funny');
		$('#stream18').addClass('english');
		$('#stream18').addClass('pro');
	}
	if(stream18 == "ar1se") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Funny</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('funny');
	}
	if(stream18 == "arteezy") {
		$('#streamtag18').append("<span>Funny</span>");
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Pro</span>");

		$('#stream18').addClass('funny');
		$('#stream18').addClass('english');
		$('#stream18').addClass('pro');
	}
	if(stream18 == "bananaslamjamma") {
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('english');
	}
	if(stream18 == "blitzdota") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Educational</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('edu');
	}
	if(stream18 == "broxy_tv") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Funny</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('funny');
	}
	if(stream18 == "demon") {
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('english');
	}
	if(stream18 == "double_crosser") {
		$('#streamtag18').append("<span>Girl</span>");
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('girl');
		$('#stream18').addClass('english');
	}
	if(stream18 == "era") {
		$('#streamtag18').append("<span>Educational</span>");
		$('#streamtag18').append("<span>Swedish</span>");

		$('#stream18').addClass('edu');
	}
	if(stream18 == "illidan") {
		$('#streamtag18').append("<span>Russian</span>");
		$('#streamtag18').append("<span>Funny</span>");

		$('#stream18').addClass('russian');
		$('#stream18').addClass('funny');
	}
	if(stream18 == "matumbaman") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Girl ?!</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('girl');
	}
	if(stream18 == "merlini") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Educational</span>");
		$('#streamtag18').append("<span>Pro</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('edu');
		$('#stream18').addClass('pro');
	}
	if(stream18 == "miracle") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Pro</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('pro');
	}
	if(stream18 == "nigmanoname") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Funny</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('funny');
	}
	if(stream18 == "lizzard") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Funny</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('funny');
	}
	if(stream18 == "purge") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Educational</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('Funny');
	}
	if(stream18 == "pyrionflax") {
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('english');
	}
	if(stream18 == "refleksy") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Funny</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('funny');
	}
	if(stream18 == "s4") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Pro</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('pro');
	}
	if(stream18 == "sheever") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Girl</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('girl');
	}
	if(stream18 == "singsing") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>German</span>");
		$('#streamtag18').append("<span>Funny</span>");
		$('#streamtag18').append("<span>Girl</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('german');
		$('#stream18').addClass('funny');
		$('#stream18').addClass('girl');
	}
	if(stream18 == "siractionslacks") {
		$('#streamtag18').append("<span>English</span>");

		$('#stream18').addClass('english');
	}
	if(stream18 == "synderen") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Educational</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('edu');
	}
	if(stream18 == "thefluffiestbunny") {
		$('#streamtag18').append("<span>English</span>");
		$('#streamtag18').append("<span>Girl</span>");

		$('#stream18').addClass('english');
		$('#stream18').addClass('girl');
	}
	if(stream18 == "zai") {
		$('#streamtag18').append("<span>Girl</span>");

		$('#stream18').addClass('girl');
	}
	if(stream18 == "lightofheaven") {
		$('#streamtag18').append("<span>Russian</span>");

		$('#stream18').addClass('russian');
	}

	var stream19 = "<? echo $dota2array->streams[19]->channel->name; ?>";

	if(stream19 == "admiralbulldog") {
		$('#streamtag19').append("<span>Funny</span>");
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Pro</span>");

		$('#stream19').addClass('funny');
		$('#stream19').addClass('english');
		$('#stream19').addClass('pro');
	}
	if(stream19 == "ar1se") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Funny</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('funny');
	}
	if(stream19 == "arteezy") {
		$('#streamtag19').append("<span>Funny</span>");
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Pro</span>");

		$('#stream19').addClass('funny');
		$('#stream19').addClass('english');
		$('#stream19').addClass('pro');
	}
	if(stream19 == "bananaslamjamma") {
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('english');
	}
	if(stream19 == "blitzdota") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Educational</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('edu');
	}
	if(stream19 == "broxy_tv") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Funny</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('funny');
	}
	if(stream19 == "demon") {
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('english');
	}
	if(stream19 == "double_crosser") {
		$('#streamtag19').append("<span>Girl</span>");
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('girl');
		$('#stream19').addClass('english');
	}
	if(stream19 == "era") {
		$('#streamtag19').append("<span>Educational</span>");
		$('#streamtag19').append("<span>Swedish</span>");

		$('#stream19').addClass('edu');
	}
	if(stream19 == "illidan") {
		$('#streamtag19').append("<span>Russian</span>");
		$('#streamtag19').append("<span>Funny</span>");

		$('#stream19').addClass('russian');
		$('#stream19').addClass('funny');
	}
	if(stream19 == "matumbaman") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Girl ?!</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('girl');
	}
	if(stream19 == "merlini") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Educational</span>");
		$('#streamtag19').append("<span>Pro</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('edu');
		$('#stream19').addClass('pro');
	}
	if(stream19 == "miracle") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Pro</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('pro');
	}
	if(stream19 == "nigmanoname") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Funny</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('funny');
	}
	if(stream19 == "lizzard") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Funny</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('funny');
	}
	if(stream19 == "purge") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Educational</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('Funny');
	}
	if(stream19 == "pyrionflax") {
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('english');
	}
	if(stream19 == "refleksy") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Funny</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('funny');
	}
	if(stream19 == "s4") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Pro</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('pro');
	}
	if(stream19 == "sheever") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Girl</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('girl');
	}
	if(stream19 == "singsing") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>German</span>");
		$('#streamtag19').append("<span>Funny</span>");
		$('#streamtag19').append("<span>Girl</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('german');
		$('#stream19').addClass('funny');
		$('#stream19').addClass('girl');
	}
	if(stream19 == "siractionslacks") {
		$('#streamtag19').append("<span>English</span>");

		$('#stream19').addClass('english');
	}
	if(stream19 == "synderen") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Educational</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('edu');
	}
	if(stream19 == "thefluffiestbunny") {
		$('#streamtag19').append("<span>English</span>");
		$('#streamtag19').append("<span>Girl</span>");

		$('#stream19').addClass('english');
		$('#stream19').addClass('girl');
	}
	if(stream19 == "zai") {
		$('#streamtag19').append("<span>Girl</span>");

		$('#stream19').addClass('girl');
	}
	if(stream19 == "lightofheaven") {
		$('#streamtag19').append("<span>Russian</span>");

		$('#stream19').addClass('russian');
	}

	var stream20 = "<? echo $dota2array->streams[20]->channel->name; ?>";

	if(stream20 == "admiralbulldog") {
		$('#streamtag20').append("<span>Funny</span>");
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Pro</span>");

		$('#stream20').addClass('funny');
		$('#stream20').addClass('english');
		$('#stream20').addClass('pro');
	}
	if(stream20 == "ar1se") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Funny</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('funny');
	}
	if(stream20 == "arteezy") {
		$('#streamtag20').append("<span>Funny</span>");
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Pro</span>");

		$('#stream20').addClass('funny');
		$('#stream20').addClass('english');
		$('#stream20').addClass('pro');
	}
	if(stream20 == "bananaslamjamma") {
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('english');
	}
	if(stream20 == "blitzdota") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Educational</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('edu');
	}
	if(stream20 == "broxy_tv") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Funny</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('funny');
	}
	if(stream20 == "demon") {
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('english');
	}
	if(stream20 == "double_crosser") {
		$('#streamtag20').append("<span>Girl</span>");
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('girl');
		$('#stream20').addClass('english');
	}
	if(stream20 == "era") {
		$('#streamtag20').append("<span>Educational</span>");
		$('#streamtag20').append("<span>Swedish</span>");

		$('#stream20').addClass('edu');
	}
	if(stream20 == "illidan") {
		$('#streamtag20').append("<span>Russian</span>");
		$('#streamtag20').append("<span>Funny</span>");

		$('#stream20').addClass('russian');
		$('#stream20').addClass('funny');
	}
	if(stream20 == "matumbaman") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Girl ?!</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('girl');
	}
	if(stream20 == "merlini") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Educational</span>");
		$('#streamtag20').append("<span>Pro</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('edu');
		$('#stream20').addClass('pro');
	}
	if(stream20 == "miracle") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Pro</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('pro');
	}
	if(stream20 == "nigmanoname") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Funny</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('funny');
	}
	if(stream20 == "lizzard") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Funny</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('funny');
	}
	if(stream20 == "purge") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Educational</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('Funny');
	}
	if(stream20 == "pyrionflax") {
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('english');
	}
	if(stream20 == "refleksy") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Funny</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('funny');
	}
	if(stream20 == "s4") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Pro</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('pro');
	}
	if(stream20 == "sheever") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Girl</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('girl');
	}
	if(stream20 == "singsing") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>German</span>");
		$('#streamtag20').append("<span>Funny</span>");
		$('#streamtag20').append("<span>Girl</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('german');
		$('#stream20').addClass('funny');
		$('#stream20').addClass('girl');
	}
	if(stream20 == "siractionslacks") {
		$('#streamtag20').append("<span>English</span>");

		$('#stream20').addClass('english');
	}
	if(stream20 == "synderen") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Educational</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('edu');
	}
	if(stream20 == "thefluffiestbunny") {
		$('#streamtag20').append("<span>English</span>");
		$('#streamtag20').append("<span>Girl</span>");

		$('#stream20').addClass('english');
		$('#stream20').addClass('girl');
	}
	if(stream20 == "zai") {
		$('#streamtag20').append("<span>Girl</span>");

		$('#stream20').addClass('girl');
	}
	if(stream20 == "lightofheaven") {
		$('#streamtag20').append("<span>Russian</span>");

		$('#stream20').addClass('russian');
	}

	var stream21 = "<? echo $dota2array->streams[21]->channel->name; ?>";

	if(stream21 == "admiralbulldog") {
		$('#streamtag21').append("<span>Funny</span>");
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Pro</span>");

		$('#stream21').addClass('funny');
		$('#stream21').addClass('english');
		$('#stream21').addClass('pro');
	}
	if(stream21 == "ar1se") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Funny</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('funny');
	}
	if(stream21 == "arteezy") {
		$('#streamtag21').append("<span>Funny</span>");
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Pro</span>");

		$('#stream21').addClass('funny');
		$('#stream21').addClass('english');
		$('#stream21').addClass('pro');
	}
	if(stream21 == "bananaslamjamma") {
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('english');
	}
	if(stream21 == "blitzdota") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Educational</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('edu');
	}
	if(stream21 == "broxy_tv") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Funny</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('funny');
	}
	if(stream21 == "demon") {
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('english');
	}
	if(stream21 == "double_crosser") {
		$('#streamtag21').append("<span>Girl</span>");
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('girl');
		$('#stream21').addClass('english');
	}
	if(stream21 == "era") {
		$('#streamtag21').append("<span>Educational</span>");
		$('#streamtag21').append("<span>Swedish</span>");

		$('#stream21').addClass('edu');
	}
	if(stream21 == "illidan") {
		$('#streamtag21').append("<span>Russian</span>");
		$('#streamtag21').append("<span>Funny</span>");

		$('#stream21').addClass('russian');
		$('#stream21').addClass('funny');
	}
	if(stream21 == "matumbaman") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Girl ?!</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('girl');
	}
	if(stream21 == "merlini") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Educational</span>");
		$('#streamtag21').append("<span>Pro</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('edu');
		$('#stream21').addClass('pro');
	}
	if(stream21 == "miracle") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Pro</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('pro');
	}
	if(stream21 == "nigmanoname") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Funny</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('funny');
	}
	if(stream21 == "lizzard") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Funny</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('funny');
	}
	if(stream21 == "purge") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Educational</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('Funny');
	}
	if(stream21 == "pyrionflax") {
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('english');
	}
	if(stream21 == "refleksy") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Funny</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('funny');
	}
	if(stream21 == "s4") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Pro</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('pro');
	}
	if(stream21 == "sheever") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Girl</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('girl');
	}
	if(stream21 == "singsing") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>German</span>");
		$('#streamtag21').append("<span>Funny</span>");
		$('#streamtag21').append("<span>Girl</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('german');
		$('#stream21').addClass('funny');
		$('#stream21').addClass('girl');
	}
	if(stream21 == "siractionslacks") {
		$('#streamtag21').append("<span>English</span>");

		$('#stream21').addClass('english');
	}
	if(stream21 == "synderen") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Educational</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('edu');
	}
	if(stream21 == "thefluffiestbunny") {
		$('#streamtag21').append("<span>English</span>");
		$('#streamtag21').append("<span>Girl</span>");

		$('#stream21').addClass('english');
		$('#stream21').addClass('girl');
	}
	if(stream21 == "zai") {
		$('#streamtag21').append("<span>Girl</span>");

		$('#stream21').addClass('girl');
	}
	if(stream21 == "lightofheaven") {
		$('#streamtag21').append("<span>Russian</span>");

		$('#stream21').addClass('russian');
	}

	var stream22 = "<? echo $dota2array->streams[22]->channel->name; ?>";

	if(stream22 == "admiralbulldog") {
		$('#streamtag22').append("<span>Funny</span>");
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Pro</span>");

		$('#stream22').addClass('funny');
		$('#stream22').addClass('english');
		$('#stream22').addClass('pro');
	}
	if(stream22 == "ar1se") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Funny</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('funny');
	}
	if(stream22 == "arteezy") {
		$('#streamtag22').append("<span>Funny</span>");
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Pro</span>");

		$('#stream22').addClass('funny');
		$('#stream22').addClass('english');
		$('#stream22').addClass('pro');
	}
	if(stream22 == "bananaslamjamma") {
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('english');
	}
	if(stream22 == "blitzdota") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Educational</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('edu');
	}
	if(stream22 == "broxy_tv") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Funny</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('funny');
	}
	if(stream22 == "demon") {
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('english');
	}
	if(stream22 == "double_crosser") {
		$('#streamtag22').append("<span>Girl</span>");
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('girl');
		$('#stream22').addClass('english');
	}
	if(stream22 == "era") {
		$('#streamtag22').append("<span>Educational</span>");
		$('#streamtag22').append("<span>Swedish</span>");

		$('#stream22').addClass('edu');
	}
	if(stream22 == "illidan") {
		$('#streamtag22').append("<span>Russian</span>");
		$('#streamtag22').append("<span>Funny</span>");

		$('#stream22').addClass('russian');
		$('#stream22').addClass('funny');
	}
	if(stream22 == "matumbaman") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Girl ?!</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('girl');
	}
	if(stream22 == "merlini") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Educational</span>");
		$('#streamtag22').append("<span>Pro</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('edu');
		$('#stream22').addClass('pro');
	}
	if(stream22 == "miracle") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Pro</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('pro');
	}
	if(stream22 == "nigmanoname") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Funny</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('funny');
	}
	if(stream22 == "lizzard") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Funny</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('funny');
	}
	if(stream22 == "purge") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Educational</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('Funny');
	}
	if(stream22 == "pyrionflax") {
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('english');
	}
	if(stream22 == "refleksy") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Funny</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('funny');
	}
	if(stream22 == "s4") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Pro</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('pro');
	}
	if(stream22 == "sheever") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Girl</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('girl');
	}
	if(stream22 == "singsing") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>German</span>");
		$('#streamtag22').append("<span>Funny</span>");
		$('#streamtag22').append("<span>Girl</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('german');
		$('#stream22').addClass('funny');
		$('#stream22').addClass('girl');
	}
	if(stream22 == "siractionslacks") {
		$('#streamtag22').append("<span>English</span>");

		$('#stream22').addClass('english');
	}
	if(stream22 == "synderen") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Educational</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('edu');
	}
	if(stream22 == "thefluffiestbunny") {
		$('#streamtag22').append("<span>English</span>");
		$('#streamtag22').append("<span>Girl</span>");

		$('#stream22').addClass('english');
		$('#stream22').addClass('girl');
	}
	if(stream22 == "zai") {
		$('#streamtag22').append("<span>Girl</span>");

		$('#stream22').addClass('girl');
	}
	if(stream22 == "lightofheaven") {
		$('#streamtag22').append("<span>Russian</span>");

		$('#stream22').addClass('russian');
	}

	var stream23 = "<? echo $dota2array->streams[23]->channel->name; ?>";

	if(stream23 == "admiralbulldog") {
		$('#streamtag23').append("<span>Funny</span>");
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Pro</span>");

		$('#stream23').addClass('funny');
		$('#stream23').addClass('english');
		$('#stream23').addClass('pro');
	}
	if(stream23 == "ar1se") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Funny</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('funny');
	}
	if(stream23 == "arteezy") {
		$('#streamtag23').append("<span>Funny</span>");
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Pro</span>");

		$('#stream23').addClass('funny');
		$('#stream23').addClass('english');
		$('#stream23').addClass('pro');
	}
	if(stream23 == "bananaslamjamma") {
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('english');
	}
	if(stream23 == "blitzdota") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Educational</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('edu');
	}
	if(stream23 == "broxy_tv") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Funny</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('funny');
	}
	if(stream23 == "demon") {
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('english');
	}
	if(stream23 == "double_crosser") {
		$('#streamtag23').append("<span>Girl</span>");
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('girl');
		$('#stream23').addClass('english');
	}
	if(stream23 == "era") {
		$('#streamtag23').append("<span>Educational</span>");
		$('#streamtag23').append("<span>Swedish</span>");

		$('#stream23').addClass('edu');
	}
	if(stream23 == "illidan") {
		$('#streamtag23').append("<span>Russian</span>");
		$('#streamtag23').append("<span>Funny</span>");

		$('#stream23').addClass('russian');
		$('#stream23').addClass('funny');
	}
	if(stream23 == "matumbaman") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Girl ?!</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('girl');
	}
	if(stream23 == "merlini") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Educational</span>");
		$('#streamtag23').append("<span>Pro</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('edu');
		$('#stream23').addClass('pro');
	}
	if(stream23 == "miracle") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Pro</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('pro');
	}
	if(stream23 == "nigmanoname") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Funny</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('funny');
	}
	if(stream23 == "lizzard") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Funny</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('funny');
	}
	if(stream23 == "purge") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Educational</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('Funny');
	}
	if(stream23 == "pyrionflax") {
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('english');
	}
	if(stream23 == "refleksy") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Funny</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('funny');
	}
	if(stream23 == "s4") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Pro</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('pro');
	}
	if(stream23 == "sheever") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Girl</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('girl');
	}
	if(stream23 == "singsing") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>German</span>");
		$('#streamtag23').append("<span>Funny</span>");
		$('#streamtag23').append("<span>Girl</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('german');
		$('#stream23').addClass('funny');
		$('#stream23').addClass('girl');
	}
	if(stream23 == "siractionslacks") {
		$('#streamtag23').append("<span>English</span>");

		$('#stream23').addClass('english');
	}
	if(stream23 == "synderen") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Educational</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('edu');
	}
	if(stream23 == "thefluffiestbunny") {
		$('#streamtag23').append("<span>English</span>");
		$('#streamtag23').append("<span>Girl</span>");

		$('#stream23').addClass('english');
		$('#stream23').addClass('girl');
	}
	if(stream23 == "zai") {
		$('#streamtag23').append("<span>Girl</span>");

		$('#stream23').addClass('girl');
	}
	if(stream23 == "lightofheaven") {
		$('#streamtag23').append("<span>Russian</span>");

		$('#stream23').addClass('russian');
	}

	var stream24 = "<? echo $dota2array->streams[24]->channel->name; ?>";

	if(stream24 == "admiralbulldog") {
		$('#streamtag24').append("<span>Funny</span>");
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Pro</span>");

		$('#stream24').addClass('funny');
		$('#stream24').addClass('english');
		$('#stream24').addClass('pro');
	}
	if(stream24 == "ar1se") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Funny</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('funny');
	}
	if(stream24 == "arteezy") {
		$('#streamtag24').append("<span>Funny</span>");
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Pro</span>");

		$('#stream24').addClass('funny');
		$('#stream24').addClass('english');
		$('#stream24').addClass('pro');
	}
	if(stream24 == "bananaslamjamma") {
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('english');
	}
	if(stream24 == "blitzdota") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Educational</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('edu');
	}
	if(stream24 == "broxy_tv") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Funny</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('funny');
	}
	if(stream24 == "demon") {
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('english');
	}
	if(stream24 == "double_crosser") {
		$('#streamtag24').append("<span>Girl</span>");
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('girl');
		$('#stream24').addClass('english');
	}
	if(stream24 == "era") {
		$('#streamtag24').append("<span>Educational</span>");
		$('#streamtag24').append("<span>Swedish</span>");

		$('#stream24').addClass('edu');
	}
	if(stream24 == "illidan") {
		$('#streamtag24').append("<span>Russian</span>");
		$('#streamtag24').append("<span>Funny</span>");

		$('#stream24').addClass('russian');
		$('#stream24').addClass('funny');
	}
	if(stream24 == "matumbaman") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Girl ?!</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('girl');
	}
	if(stream24 == "merlini") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Educational</span>");
		$('#streamtag24').append("<span>Pro</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('edu');
		$('#stream24').addClass('pro');
	}
	if(stream24 == "miracle") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Pro</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('pro');
	}
	if(stream24 == "nigmanoname") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Funny</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('funny');
	}
	if(stream24 == "lizzard") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Funny</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('funny');
	}
	if(stream24 == "purge") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Educational</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('Funny');
	}
	if(stream24 == "pyrionflax") {
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('english');
	}
	if(stream24 == "refleksy") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Funny</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('funny');
	}
	if(stream24 == "s4") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Pro</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('pro');
	}
	if(stream24 == "sheever") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Girl</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('girl');
	}
	if(stream24 == "singsing") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>German</span>");
		$('#streamtag24').append("<span>Funny</span>");
		$('#streamtag24').append("<span>Girl</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('german');
		$('#stream24').addClass('funny');
		$('#stream24').addClass('girl');
	}
	if(stream24 == "siractionslacks") {
		$('#streamtag24').append("<span>English</span>");

		$('#stream24').addClass('english');
	}
	if(stream24 == "synderen") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Educational</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('edu');
	}
	if(stream24 == "thefluffiestbunny") {
		$('#streamtag24').append("<span>English</span>");
		$('#streamtag24').append("<span>Girl</span>");

		$('#stream24').addClass('english');
		$('#stream24').addClass('girl');
	}
	if(stream24 == "zai") {
		$('#streamtag24').append("<span>Girl</span>");

		$('#stream24').addClass('girl');
	}
	if(stream24 == "lightofheaven") {
		$('#streamtag24').append("<span>Russian</span>");

		$('#stream24').addClass('russian');
	}

	var stream25 = "<? echo $dota2array->streams[25]->channel->name; ?>";

	if(stream25 == "admiralbulldog") {
		$('#streamtag25').append("<span>Funny</span>");
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Pro</span>");

		$('#stream25').addClass('funny');
		$('#stream25').addClass('english');
		$('#stream25').addClass('pro');
	}
	if(stream25 == "ar1se") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Funny</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('funny');
	}
	if(stream25 == "arteezy") {
		$('#streamtag25').append("<span>Funny</span>");
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Pro</span>");

		$('#stream25').addClass('funny');
		$('#stream25').addClass('english');
		$('#stream25').addClass('pro');
	}
	if(stream25 == "bananaslamjamma") {
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('english');
	}
	if(stream25 == "blitzdota") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Educational</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('edu');
	}
	if(stream25 == "broxy_tv") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Funny</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('funny');
	}
	if(stream25 == "demon") {
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('english');
	}
	if(stream25 == "double_crosser") {
		$('#streamtag25').append("<span>Girl</span>");
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('girl');
		$('#stream25').addClass('english');
	}
	if(stream25 == "era") {
		$('#streamtag25').append("<span>Educational</span>");
		$('#streamtag25').append("<span>Swedish</span>");

		$('#stream25').addClass('edu');
	}
	if(stream25 == "illidan") {
		$('#streamtag25').append("<span>Russian</span>");
		$('#streamtag25').append("<span>Funny</span>");

		$('#stream25').addClass('russian');
		$('#stream25').addClass('funny');
	}
	if(stream25 == "matumbaman") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Girl ?!</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('girl');
	}
	if(stream25 == "merlini") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Educational</span>");
		$('#streamtag25').append("<span>Pro</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('edu');
		$('#stream25').addClass('pro');
	}
	if(stream25 == "miracle") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Pro</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('pro');
	}
	if(stream25 == "nigmanoname") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Funny</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('funny');
	}
	if(stream25 == "lizzard") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Funny</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('funny');
	}
	if(stream25 == "purge") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Educational</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('Funny');
	}
	if(stream25 == "pyrionflax") {
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('english');
	}
	if(stream25 == "refleksy") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Funny</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('funny');
	}
	if(stream25 == "s4") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Pro</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('pro');
	}
	if(stream25 == "sheever") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Girl</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('girl');
	}
	if(stream25 == "singsing") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>German</span>");
		$('#streamtag25').append("<span>Funny</span>");
		$('#streamtag25').append("<span>Girl</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('german');
		$('#stream25').addClass('funny');
		$('#stream25').addClass('girl');
	}
	if(stream25 == "siractionslacks") {
		$('#streamtag25').append("<span>English</span>");

		$('#stream25').addClass('english');
	}
	if(stream25 == "synderen") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Educational</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('edu');
	}
	if(stream25 == "thefluffiestbunny") {
		$('#streamtag25').append("<span>English</span>");
		$('#streamtag25').append("<span>Girl</span>");

		$('#stream25').addClass('english');
		$('#stream25').addClass('girl');
	}
	if(stream25 == "zai") {
		$('#streamtag25').append("<span>Girl</span>");

		$('#stream25').addClass('girl');
	}
	if(stream25 == "lightofheaven") {
		$('#streamtag25').append("<span>Russian</span>");

		$('#stream25').addClass('russian');
	}

	var stream26 = "<? echo $dota2array->streams[26]->channel->name; ?>";

	if(stream26 == "admiralbulldog") {
		$('#streamtag26').append("<span>Funny</span>");
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Pro</span>");

		$('#stream26').addClass('funny');
		$('#stream26').addClass('english');
		$('#stream26').addClass('pro');
	}
	if(stream26 == "ar1se") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Funny</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('funny');
	}
	if(stream26 == "arteezy") {
		$('#streamtag26').append("<span>Funny</span>");
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Pro</span>");

		$('#stream26').addClass('funny');
		$('#stream26').addClass('english');
		$('#stream26').addClass('pro');
	}
	if(stream26 == "bananaslamjamma") {
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('english');
	}
	if(stream26 == "blitzdota") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Educational</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('edu');
	}
	if(stream26 == "broxy_tv") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Funny</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('funny');
	}
	if(stream26 == "demon") {
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('english');
	}
	if(stream26 == "double_crosser") {
		$('#streamtag26').append("<span>Girl</span>");
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('girl');
		$('#stream26').addClass('english');
	}
	if(stream26 == "era") {
		$('#streamtag26').append("<span>Educational</span>");
		$('#streamtag26').append("<span>Swedish</span>");

		$('#stream26').addClass('edu');
	}
	if(stream26 == "illidan") {
		$('#streamtag26').append("<span>Russian</span>");
		$('#streamtag26').append("<span>Funny</span>");

		$('#stream26').addClass('russian');
		$('#stream26').addClass('funny');
	}
	if(stream26 == "matumbaman") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Girl ?!</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('girl');
	}
	if(stream26 == "merlini") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Educational</span>");
		$('#streamtag26').append("<span>Pro</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('edu');
		$('#stream26').addClass('pro');
	}
	if(stream26 == "miracle") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Pro</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('pro');
	}
	if(stream26 == "nigmanoname") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Funny</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('funny');
	}
	if(stream26 == "lizzard") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Funny</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('funny');
	}
	if(stream26 == "purge") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Educational</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('Funny');
	}
	if(stream26 == "pyrionflax") {
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('english');
	}
	if(stream26 == "refleksy") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Funny</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('funny');
	}
	if(stream26 == "s4") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Pro</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('pro');
	}
	if(stream26 == "sheever") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Girl</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('girl');
	}
	if(stream26 == "singsing") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>German</span>");
		$('#streamtag26').append("<span>Funny</span>");
		$('#streamtag26').append("<span>Girl</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('german');
		$('#stream26').addClass('funny');
		$('#stream26').addClass('girl');
	}
	if(stream26 == "siractionslacks") {
		$('#streamtag26').append("<span>English</span>");

		$('#stream26').addClass('english');
	}
	if(stream26 == "synderen") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Educational</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('edu');
	}
	if(stream26 == "thefluffiestbunny") {
		$('#streamtag26').append("<span>English</span>");
		$('#streamtag26').append("<span>Girl</span>");

		$('#stream26').addClass('english');
		$('#stream26').addClass('girl');
	}
	if(stream26 == "zai") {
		$('#streamtag26').append("<span>Girl</span>");

		$('#stream26').addClass('girl');
	}
	if(stream26 == "lightofheaven") {
		$('#streamtag26').append("<span>Russian</span>");

		$('#stream26').addClass('russian');
	}

	var stream27 = "<? echo $dota2array->streams[27]->channel->name; ?>";

	if(stream27 == "admiralbulldog") {
		$('#streamtag27').append("<span>Funny</span>");
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Pro</span>");

		$('#stream27').addClass('funny');
		$('#stream27').addClass('english');
		$('#stream27').addClass('pro');
	}
	if(stream27 == "ar1se") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Funny</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('funny');
	}
	if(stream27 == "arteezy") {
		$('#streamtag27').append("<span>Funny</span>");
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Pro</span>");

		$('#stream27').addClass('funny');
		$('#stream27').addClass('english');
		$('#stream27').addClass('pro');
	}
	if(stream27 == "bananaslamjamma") {
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('english');
	}
	if(stream27 == "blitzdota") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Educational</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('edu');
	}
	if(stream27 == "broxy_tv") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Funny</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('funny');
	}
	if(stream27 == "demon") {
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('english');
	}
	if(stream27 == "double_crosser") {
		$('#streamtag27').append("<span>Girl</span>");
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('girl');
		$('#stream27').addClass('english');
	}
	if(stream27 == "era") {
		$('#streamtag27').append("<span>Educational</span>");
		$('#streamtag27').append("<span>Swedish</span>");

		$('#stream27').addClass('edu');
	}
	if(stream27 == "illidan") {
		$('#streamtag27').append("<span>Russian</span>");
		$('#streamtag27').append("<span>Funny</span>");

		$('#stream27').addClass('russian');
		$('#stream27').addClass('funny');
	}
	if(stream27 == "matumbaman") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Girl ?!</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('girl');
	}
	if(stream27 == "merlini") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Educational</span>");
		$('#streamtag27').append("<span>Pro</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('edu');
		$('#stream27').addClass('pro');
	}
	if(stream27 == "miracle") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Pro</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('pro');
	}
	if(stream27 == "nigmanoname") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Funny</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('funny');
	}
	if(stream27 == "lizzard") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Funny</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('funny');
	}
	if(stream27 == "purge") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Educational</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('Funny');
	}
	if(stream27 == "pyrionflax") {
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('english');
	}
	if(stream27 == "refleksy") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Funny</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('funny');
	}
	if(stream27 == "s4") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Pro</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('pro');
	}
	if(stream27 == "sheever") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Girl</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('girl');
	}
	if(stream27 == "singsing") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>German</span>");
		$('#streamtag27').append("<span>Funny</span>");
		$('#streamtag27').append("<span>Girl</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('german');
		$('#stream27').addClass('funny');
		$('#stream27').addClass('girl');
	}
	if(stream27 == "siractionslacks") {
		$('#streamtag27').append("<span>English</span>");

		$('#stream27').addClass('english');
	}
	if(stream27 == "synderen") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Educational</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('edu');
	}
	if(stream27 == "thefluffiestbunny") {
		$('#streamtag27').append("<span>English</span>");
		$('#streamtag27').append("<span>Girl</span>");

		$('#stream27').addClass('english');
		$('#stream27').addClass('girl');
	}
	if(stream27 == "zai") {
		$('#streamtag27').append("<span>Girl</span>");

		$('#stream27').addClass('girl');
	}
	if(stream27 == "lightofheaven") {
		$('#streamtag27').append("<span>Russian</span>");

		$('#stream27').addClass('russian');
	}

	var stream28 = "<? echo $dota2array->streams[28]->channel->name; ?>";

	if(stream28 == "admiralbulldog") {
		$('#streamtag28').append("<span>Funny</span>");
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Pro</span>");

		$('#stream28').addClass('funny');
		$('#stream28').addClass('english');
		$('#stream28').addClass('pro');
	}
	if(stream28 == "ar1se") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Funny</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('funny');
	}
	if(stream28 == "arteezy") {
		$('#streamtag28').append("<span>Funny</span>");
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Pro</span>");

		$('#stream28').addClass('funny');
		$('#stream28').addClass('english');
		$('#stream28').addClass('pro');
	}
	if(stream28 == "bananaslamjamma") {
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('english');
	}
	if(stream28 == "blitzdota") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Educational</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('edu');
	}
	if(stream28 == "broxy_tv") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Funny</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('funny');
	}
	if(stream28 == "demon") {
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('english');
	}
	if(stream28 == "double_crosser") {
		$('#streamtag28').append("<span>Girl</span>");
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('girl');
		$('#stream28').addClass('english');
	}
	if(stream28 == "era") {
		$('#streamtag28').append("<span>Educational</span>");
		$('#streamtag28').append("<span>Swedish</span>");

		$('#stream28').addClass('edu');
	}
	if(stream28 == "illidan") {
		$('#streamtag28').append("<span>Russian</span>");
		$('#streamtag28').append("<span>Funny</span>");

		$('#stream28').addClass('russian');
		$('#stream28').addClass('funny');
	}
	if(stream28 == "matumbaman") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Girl ?!</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('girl');
	}
	if(stream28 == "merlini") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Educational</span>");
		$('#streamtag28').append("<span>Pro</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('edu');
		$('#stream28').addClass('pro');
	}
	if(stream28 == "miracle") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Pro</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('pro');
	}
	if(stream28 == "nigmanoname") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Funny</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('funny');
	}
	if(stream28 == "lizzard") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Funny</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('funny');
	}
	if(stream28 == "purge") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Educational</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('Funny');
	}
	if(stream28 == "pyrionflax") {
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('english');
	}
	if(stream28 == "refleksy") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Funny</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('funny');
	}
	if(stream28 == "s4") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Pro</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('pro');
	}
	if(stream28 == "sheever") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Girl</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('girl');
	}
	if(stream28 == "singsing") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>German</span>");
		$('#streamtag28').append("<span>Funny</span>");
		$('#streamtag28').append("<span>Girl</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('german');
		$('#stream28').addClass('funny');
		$('#stream28').addClass('girl');
	}
	if(stream28 == "siractionslacks") {
		$('#streamtag28').append("<span>English</span>");

		$('#stream28').addClass('english');
	}
	if(stream28 == "synderen") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Educational</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('edu');
	}
	if(stream28 == "thefluffiestbunny") {
		$('#streamtag28').append("<span>English</span>");
		$('#streamtag28').append("<span>Girl</span>");

		$('#stream28').addClass('english');
		$('#stream28').addClass('girl');
	}
	if(stream28 == "zai") {
		$('#streamtag28').append("<span>Girl</span>");

		$('#stream28').addClass('girl');
	}
	if(stream28 == "lightofheaven") {
		$('#streamtag28').append("<span>Russian</span>");

		$('#stream28').addClass('russian');
	}

	var stream29 = "<? echo $dota2array->streams[29]->channel->name; ?>";

	if(stream29 == "admiralbulldog") {
		$('#streamtag29').append("<span>Funny</span>");
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Pro</span>");

		$('#stream29').addClass('funny');
		$('#stream29').addClass('english');
		$('#stream29').addClass('pro');
	}
	if(stream29 == "ar1se") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Funny</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('funny');
	}
	if(stream29 == "arteezy") {
		$('#streamtag29').append("<span>Funny</span>");
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Pro</span>");

		$('#stream29').addClass('funny');
		$('#stream29').addClass('english');
		$('#stream29').addClass('pro');
	}
	if(stream29 == "bananaslamjamma") {
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('english');
	}
	if(stream29 == "blitzdota") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Educational</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('edu');
	}
	if(stream29 == "broxy_tv") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Funny</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('funny');
	}
	if(stream29 == "demon") {
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('english');
	}
	if(stream29 == "double_crosser") {
		$('#streamtag29').append("<span>Girl</span>");
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('girl');
		$('#stream29').addClass('english');
	}
	if(stream29 == "era") {
		$('#streamtag29').append("<span>Educational</span>");
		$('#streamtag29').append("<span>Swedish</span>");

		$('#stream29').addClass('edu');
	}
	if(stream29 == "illidan") {
		$('#streamtag29').append("<span>Russian</span>");
		$('#streamtag29').append("<span>Funny</span>");

		$('#stream29').addClass('russian');
		$('#stream29').addClass('funny');
	}
	if(stream29 == "matumbaman") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Girl ?!</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('girl');
	}
	if(stream29 == "merlini") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Educational</span>");
		$('#streamtag29').append("<span>Pro</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('edu');
		$('#stream29').addClass('pro');
	}
	if(stream29 == "miracle") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Pro</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('pro');
	}
	if(stream29 == "nigmanoname") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Funny</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('funny');
	}
	if(stream29 == "lizzard") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Funny</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('funny');
	}
	if(stream29 == "purge") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Educational</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('Funny');
	}
	if(stream29 == "pyrionflax") {
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('english');
	}
	if(stream29 == "refleksy") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Funny</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('funny');
	}
	if(stream29 == "s4") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Pro</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('pro');
	}
	if(stream29 == "sheever") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Girl</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('girl');
	}
	if(stream29 == "singsing") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>German</span>");
		$('#streamtag29').append("<span>Funny</span>");
		$('#streamtag29').append("<span>Girl</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('german');
		$('#stream29').addClass('funny');
		$('#stream29').addClass('girl');
	}
	if(stream29 == "siractionslacks") {
		$('#streamtag29').append("<span>English</span>");

		$('#stream29').addClass('english');
	}
	if(stream29 == "synderen") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Educational</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('edu');
	}
	if(stream29 == "thefluffiestbunny") {
		$('#streamtag29').append("<span>English</span>");
		$('#streamtag29').append("<span>Girl</span>");

		$('#stream29').addClass('english');
		$('#stream29').addClass('girl');
	}
	if(stream29 == "zai") {
		$('#streamtag29').append("<span>Girl</span>");

		$('#stream29').addClass('girl');
	}
	if(stream29 == "lightofheaven") {
		$('#streamtag29').append("<span>Russian</span>");

		$('#stream29').addClass('russian');
	}

	var stream30 = "<? echo $dota2array->streams[30]->channel->name; ?>";

	if(stream30 == "admiralbulldog") {
		$('#streamtag30').append("<span>Funny</span>");
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Pro</span>");

		$('#stream30').addClass('funny');
		$('#stream30').addClass('english');
		$('#stream30').addClass('pro');
	}
	if(stream30 == "ar1se") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Funny</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('funny');
	}
	if(stream30 == "arteezy") {
		$('#streamtag30').append("<span>Funny</span>");
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Pro</span>");

		$('#stream30').addClass('funny');
		$('#stream30').addClass('english');
		$('#stream30').addClass('pro');
	}
	if(stream30 == "bananaslamjamma") {
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('english');
	}
	if(stream30 == "blitzdota") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Educational</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('edu');
	}
	if(stream30 == "broxy_tv") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Funny</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('funny');
	}
	if(stream30 == "demon") {
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('english');
	}
	if(stream30 == "double_crosser") {
		$('#streamtag30').append("<span>Girl</span>");
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('girl');
		$('#stream30').addClass('english');
	}
	if(stream30 == "era") {
		$('#streamtag30').append("<span>Educational</span>");
		$('#streamtag30').append("<span>Swedish</span>");

		$('#stream30').addClass('edu');
	}
	if(stream30 == "illidan") {
		$('#streamtag30').append("<span>Russian</span>");
		$('#streamtag30').append("<span>Funny</span>");

		$('#stream30').addClass('russian');
		$('#stream30').addClass('funny');
	}
	if(stream30 == "matumbaman") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Girl ?!</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('girl');
	}
	if(stream30 == "merlini") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Educational</span>");
		$('#streamtag30').append("<span>Pro</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('edu');
		$('#stream30').addClass('pro');
	}
	if(stream30 == "miracle") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Pro</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('pro');
	}
	if(stream30 == "nigmanoname") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Funny</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('funny');
	}
	if(stream30 == "lizzard") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Funny</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('funny');
	}
	if(stream30 == "purge") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Educational</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('Funny');
	}
	if(stream30 == "pyrionflax") {
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('english');
	}
	if(stream30 == "refleksy") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Funny</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('funny');
	}
	if(stream30 == "s4") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Pro</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('pro');
	}
	if(stream30 == "sheever") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Girl</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('girl');
	}
	if(stream30 == "singsing") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>German</span>");
		$('#streamtag30').append("<span>Funny</span>");
		$('#streamtag30').append("<span>Girl</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('german');
		$('#stream30').addClass('funny');
		$('#stream30').addClass('girl');
	}
	if(stream30 == "siractionslacks") {
		$('#streamtag30').append("<span>English</span>");

		$('#stream30').addClass('english');
	}
	if(stream30 == "synderen") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Educational</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('edu');
	}
	if(stream30 == "thefluffiestbunny") {
		$('#streamtag30').append("<span>English</span>");
		$('#streamtag30').append("<span>Girl</span>");

		$('#stream30').addClass('english');
		$('#stream30').addClass('girl');
	}
	if(stream30 == "zai") {
		$('#streamtag30').append("<span>Girl</span>");

		$('#stream30').addClass('girl');
	}
	if(stream30 == "lightofheaven") {
		$('#streamtag30').append("<span>Russian</span>");

		$('#stream30').addClass('russian');
	}


	var stream31 = "<? echo $dota2array->streams[31]->channel->name; ?>";

	if(stream31 == "admiralbulldog") {
		$('#streamtag31').append("<span>Funny</span>");
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Pro</span>");

		$('#stream31').addClass('funny');
		$('#stream31').addClass('english');
		$('#stream31').addClass('pro');
	}
	if(stream31 == "ar1se") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Funny</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('funny');
	}
	if(stream31 == "arteezy") {
		$('#streamtag31').append("<span>Funny</span>");
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Pro</span>");

		$('#stream31').addClass('funny');
		$('#stream31').addClass('english');
		$('#stream31').addClass('pro');
	}
	if(stream31 == "bananaslamjamma") {
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('english');
	}
	if(stream31 == "blitzdota") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Educational</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('edu');
	}
	if(stream31 == "broxy_tv") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Funny</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('funny');
	}
	if(stream31 == "demon") {
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('english');
	}
	if(stream31 == "double_crosser") {
		$('#streamtag31').append("<span>Girl</span>");
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('girl');
		$('#stream31').addClass('english');
	}
	if(stream31 == "era") {
		$('#streamtag31').append("<span>Educational</span>");
		$('#streamtag31').append("<span>Swedish</span>");

		$('#stream31').addClass('edu');
	}
	if(stream31 == "illidan") {
		$('#streamtag31').append("<span>Russian</span>");
		$('#streamtag31').append("<span>Funny</span>");

		$('#stream31').addClass('russian');
		$('#stream31').addClass('funny');
	}
	if(stream31 == "matumbaman") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Girl ?!</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('girl');
	}
	if(stream31 == "merlini") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Educational</span>");
		$('#streamtag31').append("<span>Pro</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('edu');
		$('#stream31').addClass('pro');
	}
	if(stream31 == "miracle") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Pro</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('pro');
	}
	if(stream31 == "nigmanoname") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Funny</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('funny');
	}
	if(stream31 == "lizzard") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Funny</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('funny');
	}
	if(stream31 == "purge") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Educational</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('Funny');
	}
	if(stream31 == "pyrionflax") {
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('english');
	}
	if(stream31 == "refleksy") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Funny</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('funny');
	}
	if(stream31 == "s4") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Pro</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('pro');
	}
	if(stream31 == "sheever") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Girl</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('girl');
	}
	if(stream31 == "singsing") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>German</span>");
		$('#streamtag31').append("<span>Funny</span>");
		$('#streamtag31').append("<span>Girl</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('german');
		$('#stream31').addClass('funny');
		$('#stream31').addClass('girl');
	}
	if(stream31 == "siractionslacks") {
		$('#streamtag31').append("<span>English</span>");

		$('#stream31').addClass('english');
	}
	if(stream31 == "synderen") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Educational</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('edu');
	}
	if(stream31 == "thefluffiestbunny") {
		$('#streamtag31').append("<span>English</span>");
		$('#streamtag31').append("<span>Girl</span>");

		$('#stream31').addClass('english');
		$('#stream31').addClass('girl');
	}
	if(stream31 == "zai") {
		$('#streamtag31').append("<span>Girl</span>");

		$('#stream31').addClass('girl');
	}
	if(stream31 == "lightofheaven") {
		$('#streamtag31').append("<span>Russian</span>");

		$('#stream31').addClass('russian');
	}

	var stream32 = "<? echo $dota2array->streams[32]->channel->name; ?>";

	if(stream32 == "admiralbulldog") {
		$('#streamtag32').append("<span>Funny</span>");
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Pro</span>");

		$('#stream32').addClass('funny');
		$('#stream32').addClass('english');
		$('#stream32').addClass('pro');
	}
	if(stream32 == "ar1se") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Funny</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('funny');
	}
	if(stream32 == "arteezy") {
		$('#streamtag32').append("<span>Funny</span>");
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Pro</span>");

		$('#stream32').addClass('funny');
		$('#stream32').addClass('english');
		$('#stream32').addClass('pro');
	}
	if(stream32 == "bananaslamjamma") {
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('english');
	}
	if(stream32 == "blitzdota") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Educational</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('edu');
	}
	if(stream32 == "broxy_tv") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Funny</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('funny');
	}
	if(stream32 == "demon") {
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('english');
	}
	if(stream32 == "double_crosser") {
		$('#streamtag32').append("<span>Girl</span>");
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('girl');
		$('#stream32').addClass('english');
	}
	if(stream32 == "era") {
		$('#streamtag32').append("<span>Educational</span>");
		$('#streamtag32').append("<span>Swedish</span>");

		$('#stream32').addClass('edu');
	}
	if(stream32 == "illidan") {
		$('#streamtag32').append("<span>Russian</span>");
		$('#streamtag32').append("<span>Funny</span>");

		$('#stream32').addClass('russian');
		$('#stream32').addClass('funny');
	}
	if(stream32 == "matumbaman") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Girl ?!</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('girl');
	}
	if(stream32 == "merlini") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Educational</span>");
		$('#streamtag32').append("<span>Pro</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('edu');
		$('#stream32').addClass('pro');
	}
	if(stream32 == "miracle") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Pro</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('pro');
	}
	if(stream32 == "nigmanoname") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Funny</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('funny');
	}
	if(stream32 == "lizzard") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Funny</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('funny');
	}
	if(stream32 == "purge") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Educational</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('Funny');
	}
	if(stream32 == "pyrionflax") {
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('english');
	}
	if(stream32 == "refleksy") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Funny</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('funny');
	}
	if(stream32 == "s4") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Pro</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('pro');
	}
	if(stream32 == "sheever") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Girl</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('girl');
	}
	if(stream32 == "singsing") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>German</span>");
		$('#streamtag32').append("<span>Funny</span>");
		$('#streamtag32').append("<span>Girl</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('german');
		$('#stream32').addClass('funny');
		$('#stream32').addClass('girl');
	}
	if(stream32 == "siractionslacks") {
		$('#streamtag32').append("<span>English</span>");

		$('#stream32').addClass('english');
	}
	if(stream32 == "synderen") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Educational</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('edu');
	}
	if(stream32 == "thefluffiestbunny") {
		$('#streamtag32').append("<span>English</span>");
		$('#streamtag32').append("<span>Girl</span>");

		$('#stream32').addClass('english');
		$('#stream32').addClass('girl');
	}
	if(stream32 == "zai") {
		$('#streamtag32').append("<span>Girl</span>");

		$('#stream32').addClass('girl');
	}
	if(stream32 == "lightofheaven") {
		$('#streamtag32').append("<span>Russian</span>");

		$('#stream32').addClass('russian');
	}

	var stream33 = "<? echo $dota2array->streams[33]->channel->name; ?>";

	if(stream33 == "admiralbulldog") {
		$('#streamtag33').append("<span>Funny</span>");
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Pro</span>");

		$('#stream33').addClass('funny');
		$('#stream33').addClass('english');
		$('#stream33').addClass('pro');
	}
	if(stream33 == "ar1se") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Funny</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('funny');
	}
	if(stream33 == "arteezy") {
		$('#streamtag33').append("<span>Funny</span>");
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Pro</span>");

		$('#stream33').addClass('funny');
		$('#stream33').addClass('english');
		$('#stream33').addClass('pro');
	}
	if(stream33 == "bananaslamjamma") {
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('english');
	}
	if(stream33 == "blitzdota") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Educational</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('edu');
	}
	if(stream33 == "broxy_tv") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Funny</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('funny');
	}
	if(stream33 == "demon") {
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('english');
	}
	if(stream33 == "double_crosser") {
		$('#streamtag33').append("<span>Girl</span>");
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('girl');
		$('#stream33').addClass('english');
	}
	if(stream33 == "era") {
		$('#streamtag33').append("<span>Educational</span>");
		$('#streamtag33').append("<span>Swedish</span>");

		$('#stream33').addClass('edu');
	}
	if(stream33 == "illidan") {
		$('#streamtag33').append("<span>Russian</span>");
		$('#streamtag33').append("<span>Funny</span>");

		$('#stream33').addClass('russian');
		$('#stream33').addClass('funny');
	}
	if(stream33 == "matumbaman") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Girl ?!</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('girl');
	}
	if(stream33 == "merlini") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Educational</span>");
		$('#streamtag33').append("<span>Pro</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('edu');
		$('#stream33').addClass('pro');
	}
	if(stream33 == "miracle") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Pro</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('pro');
	}
	if(stream33 == "nigmanoname") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Funny</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('funny');
	}
	if(stream33 == "lizzard") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Funny</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('funny');
	}
	if(stream33 == "purge") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Educational</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('Funny');
	}
	if(stream33 == "pyrionflax") {
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('english');
	}
	if(stream33 == "refleksy") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Funny</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('funny');
	}
	if(stream33 == "s4") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Pro</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('pro');
	}
	if(stream33 == "sheever") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Girl</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('girl');
	}
	if(stream33 == "singsing") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>German</span>");
		$('#streamtag33').append("<span>Funny</span>");
		$('#streamtag33').append("<span>Girl</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('german');
		$('#stream33').addClass('funny');
		$('#stream33').addClass('girl');
	}
	if(stream33 == "siractionslacks") {
		$('#streamtag33').append("<span>English</span>");

		$('#stream33').addClass('english');
	}
	if(stream33 == "synderen") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Educational</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('edu');
	}
	if(stream33 == "thefluffiestbunny") {
		$('#streamtag33').append("<span>English</span>");
		$('#streamtag33').append("<span>Girl</span>");

		$('#stream33').addClass('english');
		$('#stream33').addClass('girl');
	}
	if(stream33 == "zai") {
		$('#streamtag33').append("<span>Girl</span>");

		$('#stream33').addClass('girl');
	}
	if(stream33 == "lightofheaven") {
		$('#streamtag33').append("<span>Russian</span>");

		$('#stream33').addClass('russian');
	}

	var stream34 = "<? echo $dota2array->streams[34]->channel->name; ?>";

	if(stream34 == "admiralbulldog") {
		$('#streamtag34').append("<span>Funny</span>");
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Pro</span>");

		$('#stream34').addClass('funny');
		$('#stream34').addClass('english');
		$('#stream34').addClass('pro');
	}
	if(stream34 == "ar1se") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Funny</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('funny');
	}
	if(stream34 == "arteezy") {
		$('#streamtag34').append("<span>Funny</span>");
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Pro</span>");

		$('#stream34').addClass('funny');
		$('#stream34').addClass('english');
		$('#stream34').addClass('pro');
	}
	if(stream34 == "bananaslamjamma") {
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('english');
	}
	if(stream34 == "blitzdota") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Educational</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('edu');
	}
	if(stream34 == "broxy_tv") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Funny</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('funny');
	}
	if(stream34 == "demon") {
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('english');
	}
	if(stream34 == "double_crosser") {
		$('#streamtag34').append("<span>Girl</span>");
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('girl');
		$('#stream34').addClass('english');
	}
	if(stream34 == "era") {
		$('#streamtag34').append("<span>Educational</span>");
		$('#streamtag34').append("<span>Swedish</span>");

		$('#stream34').addClass('edu');
	}
	if(stream34 == "illidan") {
		$('#streamtag34').append("<span>Russian</span>");
		$('#streamtag34').append("<span>Funny</span>");

		$('#stream34').addClass('russian');
		$('#stream34').addClass('funny');
	}
	if(stream34 == "matumbaman") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Girl ?!</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('girl');
	}
	if(stream34 == "merlini") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Educational</span>");
		$('#streamtag34').append("<span>Pro</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('edu');
		$('#stream34').addClass('pro');
	}
	if(stream34 == "miracle") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Pro</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('pro');
	}
	if(stream34 == "nigmanoname") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Funny</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('funny');
	}
	if(stream34 == "lizzard") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Funny</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('funny');
	}
	if(stream34 == "purge") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Educational</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('Funny');
	}
	if(stream34 == "pyrionflax") {
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('english');
	}
	if(stream34 == "refleksy") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Funny</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('funny');
	}
	if(stream34 == "s4") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Pro</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('pro');
	}
	if(stream34 == "sheever") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Girl</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('girl');
	}
	if(stream34 == "singsing") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>German</span>");
		$('#streamtag34').append("<span>Funny</span>");
		$('#streamtag34').append("<span>Girl</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('german');
		$('#stream34').addClass('funny');
		$('#stream34').addClass('girl');
	}
	if(stream34 == "siractionslacks") {
		$('#streamtag34').append("<span>English</span>");

		$('#stream34').addClass('english');
	}
	if(stream34 == "synderen") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Educational</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('edu');
	}
	if(stream34 == "thefluffiestbunny") {
		$('#streamtag34').append("<span>English</span>");
		$('#streamtag34').append("<span>Girl</span>");

		$('#stream34').addClass('english');
		$('#stream34').addClass('girl');
	}
	if(stream34 == "zai") {
		$('#streamtag34').append("<span>Girl</span>");

		$('#stream34').addClass('girl');
	}
	if(stream34 == "lightofheaven") {
		$('#streamtag34').append("<span>Russian</span>");

		$('#stream34').addClass('russian');
	}

	var stream35 = "<? echo $dota2array->streams[35]->channel->name; ?>";

	if(stream35 == "admiralbulldog") {
		$('#streamtag35').append("<span>Funny</span>");
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Pro</span>");

		$('#stream35').addClass('funny');
		$('#stream35').addClass('english');
		$('#stream35').addClass('pro');
	}
	if(stream35 == "ar1se") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Funny</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('funny');
	}
	if(stream35 == "arteezy") {
		$('#streamtag35').append("<span>Funny</span>");
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Pro</span>");

		$('#stream35').addClass('funny');
		$('#stream35').addClass('english');
		$('#stream35').addClass('pro');
	}
	if(stream35 == "bananaslamjamma") {
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('english');
	}
	if(stream35 == "blitzdota") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Educational</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('edu');
	}
	if(stream35 == "broxy_tv") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Funny</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('funny');
	}
	if(stream35 == "demon") {
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('english');
	}
	if(stream35 == "double_crosser") {
		$('#streamtag35').append("<span>Girl</span>");
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('girl');
		$('#stream35').addClass('english');
	}
	if(stream35 == "era") {
		$('#streamtag35').append("<span>Educational</span>");
		$('#streamtag35').append("<span>Swedish</span>");

		$('#stream35').addClass('edu');
	}
	if(stream35 == "illidan") {
		$('#streamtag35').append("<span>Russian</span>");
		$('#streamtag35').append("<span>Funny</span>");

		$('#stream35').addClass('russian');
		$('#stream35').addClass('funny');
	}
	if(stream35 == "matumbaman") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Girl ?!</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('girl');
	}
	if(stream35 == "merlini") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Educational</span>");
		$('#streamtag35').append("<span>Pro</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('edu');
		$('#stream35').addClass('pro');
	}
	if(stream35 == "miracle") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Pro</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('pro');
	}
	if(stream35 == "nigmanoname") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Funny</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('funny');
	}
	if(stream35 == "lizzard") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Funny</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('funny');
	}
	if(stream35 == "purge") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Educational</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('Funny');
	}
	if(stream35 == "pyrionflax") {
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('english');
	}
	if(stream35 == "refleksy") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Funny</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('funny');
	}
	if(stream35 == "s4") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Pro</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('pro');
	}
	if(stream35 == "sheever") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Girl</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('girl');
	}
	if(stream35 == "singsing") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>German</span>");
		$('#streamtag35').append("<span>Funny</span>");
		$('#streamtag35').append("<span>Girl</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('german');
		$('#stream35').addClass('funny');
		$('#stream35').addClass('girl');
	}
	if(stream35 == "siractionslacks") {
		$('#streamtag35').append("<span>English</span>");

		$('#stream35').addClass('english');
	}
	if(stream35 == "synderen") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Educational</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('edu');
	}
	if(stream35 == "thefluffiestbunny") {
		$('#streamtag35').append("<span>English</span>");
		$('#streamtag35').append("<span>Girl</span>");

		$('#stream35').addClass('english');
		$('#stream35').addClass('girl');
	}
	if(stream35 == "zai") {
		$('#streamtag35').append("<span>Girl</span>");

		$('#stream35').addClass('girl');
	}
	if(stream35 == "lightofheaven") {
		$('#streamtag35').append("<span>Russian</span>");

		$('#stream35').addClass('russian');
	}

	var stream36 = "<? echo $dota2array->streams[36]->channel->name; ?>";

	if(stream36 == "admiralbulldog") {
		$('#streamtag36').append("<span>Funny</span>");
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Pro</span>");

		$('#stream36').addClass('funny');
		$('#stream36').addClass('english');
		$('#stream36').addClass('pro');
	}
	if(stream36 == "ar1se") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Funny</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('funny');
	}
	if(stream36 == "arteezy") {
		$('#streamtag36').append("<span>Funny</span>");
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Pro</span>");

		$('#stream36').addClass('funny');
		$('#stream36').addClass('english');
		$('#stream36').addClass('pro');
	}
	if(stream36 == "bananaslamjamma") {
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('english');
	}
	if(stream36 == "blitzdota") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Educational</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('edu');
	}
	if(stream36 == "broxy_tv") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Funny</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('funny');
	}
	if(stream36 == "demon") {
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('english');
	}
	if(stream36 == "double_crosser") {
		$('#streamtag36').append("<span>Girl</span>");
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('girl');
		$('#stream36').addClass('english');
	}
	if(stream36 == "era") {
		$('#streamtag36').append("<span>Educational</span>");
		$('#streamtag36').append("<span>Swedish</span>");

		$('#stream36').addClass('edu');
	}
	if(stream36 == "illidan") {
		$('#streamtag36').append("<span>Russian</span>");
		$('#streamtag36').append("<span>Funny</span>");

		$('#stream36').addClass('russian');
		$('#stream36').addClass('funny');
	}
	if(stream36 == "matumbaman") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Girl ?!</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('girl');
	}
	if(stream36 == "merlini") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Educational</span>");
		$('#streamtag36').append("<span>Pro</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('edu');
		$('#stream36').addClass('pro');
	}
	if(stream36 == "miracle") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Pro</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('pro');
	}
	if(stream36 == "nigmanoname") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Funny</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('funny');
	}
	if(stream36 == "lizzard") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Funny</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('funny');
	}
	if(stream36 == "purge") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Educational</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('Funny');
	}
	if(stream36 == "pyrionflax") {
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('english');
	}
	if(stream36 == "refleksy") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Funny</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('funny');
	}
	if(stream36 == "s4") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Pro</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('pro');
	}
	if(stream36 == "sheever") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Girl</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('girl');
	}
	if(stream36 == "singsing") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>German</span>");
		$('#streamtag36').append("<span>Funny</span>");
		$('#streamtag36').append("<span>Girl</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('german');
		$('#stream36').addClass('funny');
		$('#stream36').addClass('girl');
	}
	if(stream36 == "siractionslacks") {
		$('#streamtag36').append("<span>English</span>");

		$('#stream36').addClass('english');
	}
	if(stream36 == "synderen") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Educational</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('edu');
	}
	if(stream36 == "thefluffiestbunny") {
		$('#streamtag36').append("<span>English</span>");
		$('#streamtag36').append("<span>Girl</span>");

		$('#stream36').addClass('english');
		$('#stream36').addClass('girl');
	}
	if(stream36 == "zai") {
		$('#streamtag36').append("<span>Girl</span>");

		$('#stream36').addClass('girl');
	}
	if(stream36 == "lightofheaven") {
		$('#streamtag36').append("<span>Russian</span>");

		$('#stream36').addClass('russian');
	}

	var stream37 = "<? echo $dota2array->streams[37]->channel->name; ?>";

	if(stream37 == "admiralbulldog") {
		$('#streamtag37').append("<span>Funny</span>");
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Pro</span>");

		$('#stream37').addClass('funny');
		$('#stream37').addClass('english');
		$('#stream37').addClass('pro');
	}
	if(stream37 == "ar1se") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Funny</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('funny');
	}
	if(stream37 == "arteezy") {
		$('#streamtag37').append("<span>Funny</span>");
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Pro</span>");

		$('#stream37').addClass('funny');
		$('#stream37').addClass('english');
		$('#stream37').addClass('pro');
	}
	if(stream37 == "bananaslamjamma") {
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('english');
	}
	if(stream37 == "blitzdota") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Educational</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('edu');
	}
	if(stream37 == "broxy_tv") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Funny</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('funny');
	}
	if(stream37 == "demon") {
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('english');
	}
	if(stream37 == "double_crosser") {
		$('#streamtag37').append("<span>Girl</span>");
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('girl');
		$('#stream37').addClass('english');
	}
	if(stream37 == "era") {
		$('#streamtag37').append("<span>Educational</span>");
		$('#streamtag37').append("<span>Swedish</span>");

		$('#stream37').addClass('edu');
	}
	if(stream37 == "illidan") {
		$('#streamtag37').append("<span>Russian</span>");
		$('#streamtag37').append("<span>Funny</span>");

		$('#stream37').addClass('russian');
		$('#stream37').addClass('funny');
	}
	if(stream37 == "matumbaman") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Girl ?!</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('girl');
	}
	if(stream37 == "merlini") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Educational</span>");
		$('#streamtag37').append("<span>Pro</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('edu');
		$('#stream37').addClass('pro');
	}
	if(stream37 == "miracle") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Pro</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('pro');
	}
	if(stream37 == "nigmanoname") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Funny</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('funny');
	}
	if(stream37 == "lizzard") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Funny</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('funny');
	}
	if(stream37 == "purge") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Educational</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('Funny');
	}
	if(stream37 == "pyrionflax") {
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('english');
	}
	if(stream37 == "refleksy") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Funny</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('funny');
	}
	if(stream37 == "s4") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Pro</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('pro');
	}
	if(stream37 == "sheever") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Girl</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('girl');
	}
	if(stream37 == "singsing") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>German</span>");
		$('#streamtag37').append("<span>Funny</span>");
		$('#streamtag37').append("<span>Girl</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('german');
		$('#stream37').addClass('funny');
		$('#stream37').addClass('girl');
	}
	if(stream37 == "siractionslacks") {
		$('#streamtag37').append("<span>English</span>");

		$('#stream37').addClass('english');
	}
	if(stream37 == "synderen") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Educational</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('edu');
	}
	if(stream37 == "thefluffiestbunny") {
		$('#streamtag37').append("<span>English</span>");
		$('#streamtag37').append("<span>Girl</span>");

		$('#stream37').addClass('english');
		$('#stream37').addClass('girl');
	}
	if(stream37 == "zai") {
		$('#streamtag37').append("<span>Girl</span>");

		$('#stream37').addClass('girl');
	}
	if(stream37 == "lightofheaven") {
		$('#streamtag37').append("<span>Russian</span>");

		$('#stream37').addClass('russian');
	}

	var stream38 = "<? echo $dota2array->streams[38]->channel->name; ?>";

	if(stream38 == "admiralbulldog") {
		$('#streamtag38').append("<span>Funny</span>");
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Pro</span>");

		$('#stream38').addClass('funny');
		$('#stream38').addClass('english');
		$('#stream38').addClass('pro');
	}
	if(stream38 == "ar1se") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Funny</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('funny');
	}
	if(stream38 == "arteezy") {
		$('#streamtag38').append("<span>Funny</span>");
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Pro</span>");

		$('#stream38').addClass('funny');
		$('#stream38').addClass('english');
		$('#stream38').addClass('pro');
	}
	if(stream38 == "bananaslamjamma") {
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('english');
	}
	if(stream38 == "blitzdota") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Educational</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('edu');
	}
	if(stream38 == "broxy_tv") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Funny</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('funny');
	}
	if(stream38 == "demon") {
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('english');
	}
	if(stream38 == "double_crosser") {
		$('#streamtag38').append("<span>Girl</span>");
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('girl');
		$('#stream38').addClass('english');
	}
	if(stream38 == "era") {
		$('#streamtag38').append("<span>Educational</span>");
		$('#streamtag38').append("<span>Swedish</span>");

		$('#stream38').addClass('edu');
	}
	if(stream38 == "illidan") {
		$('#streamtag38').append("<span>Russian</span>");
		$('#streamtag38').append("<span>Funny</span>");

		$('#stream38').addClass('russian');
		$('#stream38').addClass('funny');
	}
	if(stream38 == "matumbaman") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Girl ?!</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('girl');
	}
	if(stream38 == "merlini") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Educational</span>");
		$('#streamtag38').append("<span>Pro</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('edu');
		$('#stream38').addClass('pro');
	}
	if(stream38 == "miracle") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Pro</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('pro');
	}
	if(stream38 == "nigmanoname") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Funny</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('funny');
	}
	if(stream38 == "lizzard") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Funny</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('funny');
	}
	if(stream38 == "purge") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Educational</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('Funny');
	}
	if(stream38 == "pyrionflax") {
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('english');
	}
	if(stream38 == "refleksy") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Funny</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('funny');
	}
	if(stream38 == "s4") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Pro</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('pro');
	}
	if(stream38 == "sheever") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Girl</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('girl');
	}
	if(stream38 == "singsing") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>German</span>");
		$('#streamtag38').append("<span>Funny</span>");
		$('#streamtag38').append("<span>Girl</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('german');
		$('#stream38').addClass('funny');
		$('#stream38').addClass('girl');
	}
	if(stream38 == "siractionslacks") {
		$('#streamtag38').append("<span>English</span>");

		$('#stream38').addClass('english');
	}
	if(stream38 == "synderen") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Educational</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('edu');
	}
	if(stream38 == "thefluffiestbunny") {
		$('#streamtag38').append("<span>English</span>");
		$('#streamtag38').append("<span>Girl</span>");

		$('#stream38').addClass('english');
		$('#stream38').addClass('girl');
	}
	if(stream38 == "zai") {
		$('#streamtag38').append("<span>Girl</span>");

		$('#stream38').addClass('girl');
	}
	if(stream38 == "lightofheaven") {
		$('#streamtag38').append("<span>Russian</span>");

		$('#stream38').addClass('russian');
	}

	var stream39 = "<? echo $dota2array->streams[39]->channel->name; ?>";

	if(stream39 == "admiralbulldog") {
		$('#streamtag39').append("<span>Funny</span>");
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Pro</span>");

		$('#stream39').addClass('funny');
		$('#stream39').addClass('english');
		$('#stream39').addClass('pro');
	}
	if(stream39 == "ar1se") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Funny</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('funny');
	}
	if(stream39 == "arteezy") {
		$('#streamtag39').append("<span>Funny</span>");
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Pro</span>");

		$('#stream39').addClass('funny');
		$('#stream39').addClass('english');
		$('#stream39').addClass('pro');
	}
	if(stream39 == "bananaslamjamma") {
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('english');
	}
	if(stream39 == "blitzdota") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Educational</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('edu');
	}
	if(stream39 == "broxy_tv") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Funny</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('funny');
	}
	if(stream39 == "demon") {
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('english');
	}
	if(stream39 == "double_crosser") {
		$('#streamtag39').append("<span>Girl</span>");
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('girl');
		$('#stream39').addClass('english');
	}
	if(stream39 == "era") {
		$('#streamtag39').append("<span>Educational</span>");
		$('#streamtag39').append("<span>Swedish</span>");

		$('#stream39').addClass('edu');
	}
	if(stream39 == "illidan") {
		$('#streamtag39').append("<span>Russian</span>");
		$('#streamtag39').append("<span>Funny</span>");

		$('#stream39').addClass('russian');
		$('#stream39').addClass('funny');
	}
	if(stream39 == "matumbaman") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Girl ?!</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('girl');
	}
	if(stream39 == "merlini") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Educational</span>");
		$('#streamtag39').append("<span>Pro</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('edu');
		$('#stream39').addClass('pro');
	}
	if(stream39 == "miracle") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Pro</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('pro');
	}
	if(stream39 == "nigmanoname") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Funny</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('funny');
	}
	if(stream39 == "lizzard") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Funny</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('funny');
	}
	if(stream39 == "purge") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Educational</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('Funny');
	}
	if(stream39 == "pyrionflax") {
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('english');
	}
	if(stream39 == "refleksy") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Funny</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('funny');
	}
	if(stream39 == "s4") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Pro</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('pro');
	}
	if(stream39 == "sheever") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Girl</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('girl');
	}
	if(stream39 == "singsing") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>German</span>");
		$('#streamtag39').append("<span>Funny</span>");
		$('#streamtag39').append("<span>Girl</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('german');
		$('#stream39').addClass('funny');
		$('#stream39').addClass('girl');
	}
	if(stream39 == "siractionslacks") {
		$('#streamtag39').append("<span>English</span>");

		$('#stream39').addClass('english');
	}
	if(stream39 == "synderen") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Educational</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('edu');
	}
	if(stream39 == "thefluffiestbunny") {
		$('#streamtag39').append("<span>English</span>");
		$('#streamtag39').append("<span>Girl</span>");

		$('#stream39').addClass('english');
		$('#stream39').addClass('girl');
	}
	if(stream39 == "zai") {
		$('#streamtag39').append("<span>Girl</span>");

		$('#stream39').addClass('girl');
	}
	if(stream39 == "lightofheaven") {
		$('#streamtag39').append("<span>Russian</span>");

		$('#stream39').addClass('russian');
	}

	

	</script>





</body>
</html>
