<?
$csgojson = file_get_contents("https://api.twitch.tv/kraken/streams?game=counter-strike:+global+offensive&limit=100");
$csgoarray = json_decode($csgojson);
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
				<h4 style="font-size: 30px;">Counter-Strike: Global Offensive Streams</h4>
			</div>
			<div class="streampic">
				<div class="row">
					<div class="col-md-4" id="stream0">
						<a href="<? echo $csgoarray->streams[0]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[0]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[0]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[0]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[0]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag0">
						</div>
					</div>
					<div class="col-md-4" id="stream1">
						<a href="<? echo $csgoarray->streams[1]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[1]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[1]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[1]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[1]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag1">
						</div>
					</div>
					<div class="col-md-4" id="stream2">
						<a href="<? echo $csgoarray->streams[2]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[2]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[2]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[2]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[2]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag2">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream3">
						<a href="<? echo $csgoarray->streams[3]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[3]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[3]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[3]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[3]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag3">
						</div>
					</div>
					<div class="col-md-4" id="stream4">
						<a href="<? echo $csgoarray->streams[4]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[4]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[4]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[4]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[4]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag4">
						</div>
					</div>

					<div class="col-md-4" id="stream5">
						<a href="<? echo $csgoarray->streams[5]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[5]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[5]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[5]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[5]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag5">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream6">
						<a href="<? echo $csgoarray->streams[6]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[6]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[6]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[6]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[6]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag6">
						</div>
					</div>
					<div class="col-md-4" id="stream7">
						<a href="<? echo $csgoarray->streams[7]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[7]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[7]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[7]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[7]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag7">
						</div>
					</div>
					<div class="col-md-4" id="stream8">
						<a href="<? echo $csgoarray->streams[8]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[8]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[8]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[8]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[8]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag8">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream9">
						<a href="<? echo $csgoarray->streams[9]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[9]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[9]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[9]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[9]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag9">
						</div>
					</div>
					<div class="col-md-4" id="stream10">
						<a href="<? echo $csgoarray->streams[10]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[10]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[10]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[10]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[10]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag10">
						</div>
					</div>
					<div class="col-md-4" id="stream11">
						<a href="<? echo $csgoarray->streams[11]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[11]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[11]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[11]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[11]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag11">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream12">
						<a href="<? echo $csgoarray->streams[12]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[12]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[12]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[12]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[12]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag12">
						</div>
					</div>
					<div class="col-md-4" id="stream13">
						<a href="<? echo $csgoarray->streams[13]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[13]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[13]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[13]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[13]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag13">
						</div>
					</div>
					<div class="col-md-4" id="stream14">
						<a href="<? echo $csgoarray->streams[14]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[14]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[14]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[14]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[14]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag14">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream15">
						<a href="<? echo $csgoarray->streams[15]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[15]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[15]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[15]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[15]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag15">
						</div>
					</div>
					<div class="col-md-4" id="stream16">
						<a href="<? echo $csgoarray->streams[16]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[16]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[16]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[16]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[16]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag16">
						</div>
					</div>
					<div class="col-md-4" id="stream17">
						<a href="<? echo $csgoarray->streams[17]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[17]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[17]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[17]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[17]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag17">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream18">
						<a href="<? echo $csgoarray->streams[18]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[18]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[18]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[18]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[18]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag18">
						</div>
					</div>
					<div class="col-md-4" id="stream19">
						<a href="<? echo $csgoarray->streams[19]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[19]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[19]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[19]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[19]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag19">
						</div>
					</div>
					<div class="col-md-4" id="stream20">
						<a href="<? echo $csgoarray->streams[20]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[20]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[20]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[20]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[20]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag20">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream21">
						<a href="<? echo $csgoarray->streams[21]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[21]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[21]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[21]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[21]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag21">
						</div>
					</div>
					<div class="col-md-4" id="stream22">
						<a href="<? echo $csgoarray->streams[22]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[22]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[22]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[22]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[22]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag22">
						</div>
					</div>
					<div class="col-md-4" id="stream23">
						<a href="<? echo $csgoarray->streams[23]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[23]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[23]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[23]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[23]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag23">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream24">
						<a href="<? echo $csgoarray->streams[24]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[24]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[24]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[24]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[24]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag24">
						</div>
					</div>
					<div class="col-md-4" id="stream25">
						<a href="<? echo $csgoarray->streams[25]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[25]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[25]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[25]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[25]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag25">
						</div>
					</div>
					<div class="col-md-4" id="stream26">
						<a href="<? echo $csgoarray->streams[26]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[26]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[266]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[26]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[26]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag26">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream27">
						<a href="<? echo $csgoarray->streams[27]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[27]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[27]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[27]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[27]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag27">
						</div>
					</div>
					<div class="col-md-4" id="stream28">
						<a href="<? echo $csgoarray->streams[28]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[28]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[28]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[28]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[28]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag28">
						</div>
					</div>
					<div class="col-md-4" id="stream29">
						<a href="<? echo $csgoarray->streams[29]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[29]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[29]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[29]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[29]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag29">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream30">
						<a href="<? echo $csgoarray->streams[30]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[30]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[30]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[30]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[30]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag30">
						</div>
					</div>
					<div class="col-md-4" id="stream31">
						<a href="<? echo $csgoarray->streams[31]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[31]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[31]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[31]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[31]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag31">
						</div>
					</div>
					<div class="col-md-4" id="stream32">
						<a href="<? echo $csgoarray->streams[32]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[32]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[32]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[32]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[32]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag32">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream33">
						<a href="<? echo $csgoarray->streams[33]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[33]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[33]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[33]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[33]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag33">
						</div>
					</div>
					<div class="col-md-4" id="stream34">
						<a href="<? echo $csgoarray->streams[34]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[34]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[34]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[34]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[34]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag34">
						</div>
					</div>
					<div class="col-md-4" id="stream35">
						<a href="<? echo $csgoarray->streams[35]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[35]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[35]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[35]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[35]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag35">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream36">
						<a href="<? echo $csgoarray->streams[36]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[36]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[36]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[36]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[36]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag36">
						</div>
					</div>
					<div class="col-md-4" id="stream37">
						<a href="<? echo $csgoarray->streams[37]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[37]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[37]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[37]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[37]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag37">
						</div>
					</div>
					<div class="col-md-4" id="stream38">
						<a href="<? echo $csgoarray->streams[38]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[38]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[38]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[38]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[38]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag38">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream39">
						<a href="<? echo $csgoarray->streams[39]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[39]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[39]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[39]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[39]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag39">
						</div>
					</div>
					<div class="col-md-4" id="stream40">
						<a href="<? echo $csgoarray->streams[40]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[40]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[40]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[40]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[40]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag40">
						</div>
					</div>
					<div class="col-md-4" id="stream41">
						<a href="<? echo $csgoarray->streams[41]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[41]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[41]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[41]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[41]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag41">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream42">
						<a href="<? echo $csgoarray->streams[42]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[42]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[42]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[42]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[42]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag42">
						</div>
					</div>
					<div class="col-md-4" id="stream43">
						<a href="<? echo $csgoarray->streams[43]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[43]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[43]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[43]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[43]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag43">
						</div>
					</div>
					<div class="col-md-4" id="stream44">
						<a href="<? echo $csgoarray->streams[44]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[44]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[44]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[44]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[44]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag44">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream45">
						<a href="<? echo $csgoarray->streams[45]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[45]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[45]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[45]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[45]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag45">
						</div>
					</div>
					<div class="col-md-4" id="stream46">
						<a href="<? echo $csgoarray->streams[46]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[46]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[46]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[46]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[46]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag46">
						</div>
					</div>
					<div class="col-md-4" id="stream47">
						<a href="<? echo $csgoarray->streams[47]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[47]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[47]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[47]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[47]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag47">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream48">
						<a href="<? echo $csgoarray->streams[48]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[48]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[48]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[48]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[48]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag48">
						</div>
					</div>
					<div class="col-md-4" id="stream49">
						<a href="<? echo $csgoarray->streams[49]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[49]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[49]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[49]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[49]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag49">
						</div>
					</div>
					<div class="col-md-4" id="stream50">
						<a href="<? echo $csgoarray->streams[50]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[50]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[50]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[50]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[50]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag50">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream51">
						<a href="<? echo $csgoarray->streams[51]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[51]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[51]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[51]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[51]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag51">
						</div>
					</div>
					<div class="col-md-4" id="stream52">
						<a href="<? echo $csgoarray->streams[52]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[52]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[52]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[52]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[52]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag52">
						</div>
					</div>
					<div class="col-md-4" id="stream53">
						<a href="<? echo $csgoarray->streams[53]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[53]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[53]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[53]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[53]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag53">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream54">
						<a href="<? echo $csgoarray->streams[54]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[54]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[54]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[54]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[54]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag54">
						</div>
					</div>
					<div class="col-md-4" id="stream55">
						<a href="<? echo $csgoarray->streams[55]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[55]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[55]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[55]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[55]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag55">
						</div>
					</div>
					<div class="col-md-4" id="stream56">
						<a href="<? echo $csgoarray->streams[56]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[56]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[56]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[56]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[56]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag56">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" id="stream57">
						<a href="<? echo $csgoarray->streams[57]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[57]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[57]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[57]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[57]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag57">
						</div>
					</div>
					<div class="col-md-4" id="stream58">
						<a href="<? echo $csgoarray->streams[58]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[58]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[58]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[58]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[58]->channel->name; ?></strong></p>
						</div>
						<div class="streamtags" id="streamtag58">
						</div>
					</div>
					<div class="col-md-4" id="stream59">
						<a href="<? echo $csgoarray->streams[59]->channel->url; ?>" target="_blank">
						<div class="streamthumb">
						<img class="actualthumb" src="<?
						echo $csgoarray->streams[59]->preview->medium;
						?>">
						</div></a>
						<div class="streamtitle trun">
							<p><? echo $csgoarray->streams[59]->channel->status; ?></p>
						</div>
						<div>
						<p class="viewersandchannel"><? echo $csgoarray->streams[59]->viewers; ?> viewers on <strong><? echo $csgoarray->streams[59]->channel->name; ?></strong></p>
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

					<input class="hide-checkbox" type="checkbox" value="fragger" id="tagfragger" style="display: none;">
					<label for="tagfragger">Entry Fragger</label><br>

					<input class="hide-checkbox" type="checkbox" value="support" id="tagsupport" style="display: none;">
					<label for="tagsupport">Support</label><br>

					<input class="hide-checkbox" type="checkbox" value="lurk" id="taglurk" style="display: none;">
					<label for="taglurk">Lurk</label><br>

					<input class="hide-checkbox" type="checkbox" value="igl" id="tagigl" style="display: none;">
					<label for="tagigl">IGL</label><br><br>

					<input class="hide-checkbox" type="checkbox" value="rifler" id="tagrifler" style="display: none;">
					<label for="tagrifler">Rifler</label><br>

					<input class="hide-checkbox" type="checkbox" value="awper" id="tagawper" style="display: none;">
					<label for="tagawper">AWPer</label><br><br>

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
	var streamers = {
	    'esl_csgo': [
	        'tournament',
	        'competition',
	        'english'
	    ],
			'pgl': [
	        'english'
	    ],
			'freakazoid_tv': [
					'english'
			]
	};

	var setTwitchClass1 = function(streamer) {
	    var classNames = streamers[streamer];
	    for (i=0; i<classNames.length; i++) {
	        $('#stream0').addClass(classNames[i]);
					$('#streamtag0').append("<span>" + classNames[i] + "</span>");
	    }
	};

	setTwitchClass1('<? echo $csgoarray->streams[0]->channel->name; ?>');




	</script>






</body>
</html>
