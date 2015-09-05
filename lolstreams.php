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



    <div class="col-md-4" id="stream15">
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


    <div class="col-md-4" id="stream21">
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
    <label for="tagportuguese">Portuguese</label><br>

    <input class="hide-checkbox" type="checkbox" value="other-language" id="tagotherlang" style="display: none;">
    <label for="tagotherlang">Other Language</label><br><br>

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

var streamers = {
'imaqtpie': [
    'challenger',
    'pro',
    'english',
    'funny'
],
'helenalive': [
    'english',
    'girl'
],
'grossie_gore': [
    'english',
    'master'
],
'riotgames': [
  'competition',
  'tournament',
  'riot',
  'english'
],
'riotgames2': [
  'competition',
  'riot',
  'tournament',
  'english'
],
'riotgamesturkish': [
  'competition',
  'tournament',
  'turkish'
],
'nightblue3': [
  'master',
  'english',
  'edu'
],
'domingo': [
  'french'
],
'skumbagkrepo': [
  'caster',
  'english',
  'master',
  '#BELGIAN'
],
'tsm_theoddone': [
  'english',
  'master',
  'edu'
],
'trick2g': [
  'master',
  'english',
  'funny'
],
'thaldrinlol': [
  'turkish'
],
'wingsofdeath': [
  'master',
  'english'
],
'zerator': [
  'french'
],
'kaypealol': [
  'english',
  'girl',
  'plat'
],
'froggen': [
  'pro',
  'english',
  'challenger'
],
'sp4zie': [
  'english',
  'funny',
  'plat'
],
'mushisgosu': [
  'challenger',
  'girl',
  'english'
],
'cowsep': [
  'english',
  'funny'
],
'scarra': [
  'english',
  'master',
  'funny'
],
'flosd': [
  'english',
  'challenger',
  'funny'
],
'phreakstream': [
  'riot',
  'caster',
  'english',
  'edu'
],
'goodguygarry': [
  'funny',
  'english'
],
'fattypillow': [
  'other-language',
  'czech'
],
'ogaminglol': [
  'english'
],
'summonersinnlive': [
  'german',
  'tournament',
  'competition'
],
'arquel': [
  'other-language',
  'polish'
],
'axtlol': [
  'portuguese'
],
'leko92': [
  'portuguese'
],
'milleniumtvlol': [
  'french'
],
'raihnbowkidz': [
  'girl',
  'english'
],
'reventxz': [
  'master',
  'spanish'
],
'cyanide': [
  'pro',
  'english',
  'master'
],
'toyz_hkes': [
  'other-language',
  'master',
  'pro'
],
'spectatefaker': [
  'english',
  'pro'
],
'sirhcez': [
  'master',
  'english',
  'funny'
],
'hkesports': [
  'competition',
  'tournament',
  'other-language'
],
'esl_lol_es': [
  'spanish',
  'competition',
  'tournament'
],
'hkesports_2': [
  'other-language',
  'tournament',
  'competition'
],
'sickmotionlol': [
  'english',
  'master'
],
'blem': [
  'master',
  'english'
],
'riotgames3': [
  'riot',
  'competition',
  'tournament',
  'english'
],
'aphromoo': [
  'pro',
  'english',
  'challenger',
  'funny'
],
'esl_spain': [
  'spanish',
  'competition',
  'tournament'
],
'asiagodtonegg3be0': [
  'other-language',
  'master'
],
'lvpes': [
  'spanish',
  'competition',
  'tournament'
],
'dinterlolz': [
  'other-language',
  'master'
],
'miramisu': [
  'english',
  'girl'
],
'japanesports2': [
  'competition',
  'tournament',
  'other-language'
],
'esl_lol_uk': [
  'competition',
  'tournament',
  'english'
],
'keanelol': [
  'pro',
  'english',
  'master'
],
'spiderpigylol': [
  'portuguese'
],
'inkiiing': [
  'other-language'
],
'efsanehir': [
  'turkish'
],
'djaktv': [
  'french'
],
'z8543662': [
  'other-language'
],
'foxxell': [
  'master'
],
'flyaway0325': [
  'other-language'
],
'whiteshu': [
  'other-language'
],
'jerkutus': [
  'master'
],
'nylanaaa': [
  'german'
],
'mr_morjus': [
  'russian'
],
'sadiebb': [
  'other-language'
],
'deathfong': [
  'other-language'
],
'chen810830': [
  'other-language'
],
'asusae920016': [
  'other-language'
],
'mayfiest_turkey': [
  'turkish'
],
'sylrus': [
  'french'
],
'unexpectedbanana': [
  'plat'
],
'brunecia': [
  'english',
  'other-language'
],
'mintbaby1113': [
  'other-language'
],
'gplaytv1': [
  'russian'
],
'jacky132qqq': [
  'other-language'
],
'electrokidi': [
  'spanish'
],
'cwcmanbb0v0': [
  'other-language'
],
'olleh': [
  'other-language'
],
'girlstorule': [
  'girl',
  'russian'
],
'ligadocoruja': [
  'portuguese'
],
'wondergamingpl': [
  'other-language'
],
'shadowshoescn': [
  'chinese',
  'other-language'
],
'urgot1': [
  'other-language'
],
'ailahdiyenriven': [
  'turkish'
],
'narkuss_lol': [
  'master',
  'french'
],
'lcshu': [
  'competition',
  'tournament',
  'other-language',
  'hungarian'
]
};

var setTwitchClass0 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream0').addClass(classNames[i]);
    $('#streamtag0').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass0('<? echo $lolarray->streams[0]->channel->name; ?>');

var setTwitchClass1 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream1').addClass(classNames[i]);
    $('#streamtag1').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass1('<? echo $lolarray->streams[1]->channel->name; ?>');

var setTwitchClass2 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream2').addClass(classNames[i]);
    $('#streamtag2').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass2('<? echo $lolarray->streams[2]->channel->name; ?>');

var setTwitchClass3 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream3').addClass(classNames[i]);
    $('#streamtag3').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass3('<? echo $lolarray->streams[3]->channel->name; ?>');

var setTwitchClass4 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream4').addClass(classNames[i]);
    $('#streamtag4').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass4('<? echo $lolarray->streams[4]->channel->name; ?>');

var setTwitchClass5 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream5').addClass(classNames[i]);
    $('#streamtag5').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass5('<? echo $lolarray->streams[5]->channel->name; ?>');

var setTwitchClass6 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream6').addClass(classNames[i]);
    $('#streamtag6').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass6('<? echo $lolarray->streams[6]->channel->name; ?>');

var setTwitchClass7 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream7').addClass(classNames[i]);
    $('#streamtag7').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass7('<? echo $lolarray->streams[7]->channel->name; ?>');

var setTwitchClass8 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream8').addClass(classNames[i]);
    $('#streamtag8').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass8('<? echo $lolarray->streams[8]->channel->name; ?>');

var setTwitchClass9 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream9').addClass(classNames[i]);
    $('#streamtag9').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass9('<? echo $lolarray->streams[9]->channel->name; ?>');

var setTwitchClass10 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream10').addClass(classNames[i]);
    $('#streamtag10').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass10('<? echo $lolarray->streams[10]->channel->name; ?>');

var setTwitchClass11 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream11').addClass(classNames[i]);
    $('#streamtag11').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass11('<? echo $lolarray->streams[11]->channel->name; ?>');

var setTwitchClass12 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream12').addClass(classNames[i]);
    $('#streamtag12').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass12('<? echo $lolarray->streams[12]->channel->name; ?>');

var setTwitchClass13 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream13').addClass(classNames[i]);
    $('#streamtag13').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass13('<? echo $lolarray->streams[13]->channel->name; ?>');

var setTwitchClass14 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream14').addClass(classNames[i]);
    $('#streamtag14').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass14('<? echo $lolarray->streams[14]->channel->name; ?>');

var setTwitchClass15 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream15').addClass(classNames[i]);
    $('#streamtag15').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass15('<? echo $lolarray->streams[15]->channel->name; ?>');

var setTwitchClass16 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream16').addClass(classNames[i]);
    $('#streamtag16').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass16('<? echo $lolarray->streams[16]->channel->name; ?>');

var setTwitchClass17 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream17').addClass(classNames[i]);
    $('#streamtag17').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass17('<? echo $lolarray->streams[17]->channel->name; ?>');

var setTwitchClass18 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream18').addClass(classNames[i]);
    $('#streamtag18').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass18('<? echo $lolarray->streams[18]->channel->name; ?>');

var setTwitchClass19 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream19').addClass(classNames[i]);
    $('#streamtag19').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass19('<? echo $lolarray->streams[19]->channel->name; ?>');

var setTwitchClass20 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream20').addClass(classNames[i]);
    $('#streamtag20').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass20('<? echo $lolarray->streams[20]->channel->name; ?>');

var setTwitchClass21 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream21').addClass(classNames[i]);
    $('#streamtag21').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass21('<? echo $lolarray->streams[21]->channel->name; ?>');

var setTwitchClass22 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream22').addClass(classNames[i]);
    $('#streamtag22').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass22('<? echo $lolarray->streams[22]->channel->name; ?>');

var setTwitchClass23 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream23').addClass(classNames[i]);
    $('#streamtag23').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass23('<? echo $lolarray->streams[23]->channel->name; ?>');

var setTwitchClass24 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream24').addClass(classNames[i]);
    $('#streamtag24').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass24('<? echo $lolarray->streams[24]->channel->name; ?>');

var setTwitchClass25 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream25').addClass(classNames[i]);
    $('#streamtag25').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass25('<? echo $lolarray->streams[25]->channel->name; ?>');

var setTwitchClass26 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream26').addClass(classNames[i]);
    $('#streamtag26').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass26('<? echo $lolarray->streams[26]->channel->name; ?>');

var setTwitchClass27 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream27').addClass(classNames[i]);
    $('#streamtag27').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass27('<? echo $lolarray->streams[27]->channel->name; ?>');

var setTwitchClass28 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream28').addClass(classNames[i]);
    $('#streamtag28').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass28('<? echo $lolarray->streams[28]->channel->name; ?>');

var setTwitchClass29 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream29').addClass(classNames[i]);
    $('#streamtag29').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass29('<? echo $lolarray->streams[29]->channel->name; ?>');

var setTwitchClass30 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream30').addClass(classNames[i]);
    $('#streamtag30').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass30('<? echo $lolarray->streams[30]->channel->name; ?>');

var setTwitchClass31 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream31').addClass(classNames[i]);
    $('#streamtag31').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass31('<? echo $lolarray->streams[31]->channel->name; ?>');

var setTwitchClass32 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream32').addClass(classNames[i]);
    $('#streamtag32').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass32('<? echo $lolarray->streams[32]->channel->name; ?>');

var setTwitchClass33 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream33').addClass(classNames[i]);
    $('#streamtag33').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass33('<? echo $lolarray->streams[33]->channel->name; ?>');

var setTwitchClass34 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream34').addClass(classNames[i]);
    $('#streamtag34').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass34('<? echo $lolarray->streams[34]->channel->name; ?>');

var setTwitchClass35 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream35').addClass(classNames[i]);
    $('#streamtag35').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass35('<? echo $lolarray->streams[35]->channel->name; ?>');

var setTwitchClass36 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream36').addClass(classNames[i]);
    $('#streamtag36').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass36('<? echo $lolarray->streams[36]->channel->name; ?>');

var setTwitchClass37 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream37').addClass(classNames[i]);
    $('#streamtag37').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass37('<? echo $lolarray->streams[37]->channel->name; ?>');

var setTwitchClass38 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream38').addClass(classNames[i]);
    $('#streamtag38').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass38('<? echo $lolarray->streams[38]->channel->name; ?>');

var setTwitchClass39 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream39').addClass(classNames[i]);
    $('#streamtag39').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass39('<? echo $lolarray->streams[39]->channel->name; ?>');

var setTwitchClass40 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream40').addClass(classNames[i]);
    $('#streamtag40').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass40('<? echo $lolarray->streams[40]->channel->name; ?>');

var setTwitchClass41 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream41').addClass(classNames[i]);
    $('#streamtag41').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass41('<? echo $lolarray->streams[41]->channel->name; ?>');

var setTwitchClass42 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream42').addClass(classNames[i]);
    $('#streamtag42').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass42('<? echo $lolarray->streams[42]->channel->name; ?>');

var setTwitchClass41 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream42').addClass(classNames[i]);
    $('#streamtag42').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass42('<? echo $lolarray->streams[42]->channel->name; ?>');

var setTwitchClass43 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream43').addClass(classNames[i]);
    $('#streamtag43').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass43('<? echo $lolarray->streams[43]->channel->name; ?>');

var setTwitchClass44 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream44').addClass(classNames[i]);
    $('#streamtag44').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass44('<? echo $lolarray->streams[44]->channel->name; ?>');

var setTwitchClass45 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream45').addClass(classNames[i]);
    $('#streamtag45').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass45('<? echo $lolarray->streams[45]->channel->name; ?>');

var setTwitchClass46 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream46').addClass(classNames[i]);
    $('#streamtag46').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass46('<? echo $lolarray->streams[46]->channel->name; ?>');

var setTwitchClass47 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream47').addClass(classNames[i]);
    $('#streamtag47').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass47('<? echo $lolarray->streams[47]->channel->name; ?>');

var setTwitchClass48 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream48').addClass(classNames[i]);
    $('#streamtag48').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass48('<? echo $lolarray->streams[48]->channel->name; ?>');

var setTwitchClass49 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream49').addClass(classNames[i]);
    $('#streamtag49').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass49('<? echo $lolarray->streams[49]->channel->name; ?>');

var setTwitchClass50 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream50').addClass(classNames[i]);
    $('#streamtag50').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass50('<? echo $lolarray->streams[50]->channel->name; ?>');

var setTwitchClass51 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream51').addClass(classNames[i]);
    $('#streamtag51').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass51('<? echo $lolarray->streams[51]->channel->name; ?>');

var setTwitchClass52 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream52').addClass(classNames[i]);
    $('#streamtag52').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass52('<? echo $lolarray->streams[52]->channel->name; ?>');

var setTwitchClass53 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream53').addClass(classNames[i]);
    $('#streamtag53').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass53('<? echo $lolarray->streams[53]->channel->name; ?>');

var setTwitchClass54 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream54').addClass(classNames[i]);
    $('#streamtag54').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass54('<? echo $lolarray->streams[54]->channel->name; ?>');

var setTwitchClass55 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream55').addClass(classNames[i]);
    $('#streamtag55').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass55('<? echo $lolarray->streams[55]->channel->name; ?>');

var setTwitchClass56 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream56').addClass(classNames[i]);
    $('#streamtag56').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass56('<? echo $lolarray->streams[56]->channel->name; ?>');

var setTwitchClass57 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream57').addClass(classNames[i]);
    $('#streamtag57').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass57('<? echo $lolarray->streams[57]->channel->name; ?>');

var setTwitchClass58 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream58').addClass(classNames[i]);
    $('#streamtag58').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass58('<? echo $lolarray->streams[58]->channel->name; ?>');

var setTwitchClass59 = function(streamer) {
var classNames = streamers[streamer];
if (classNames != null) {
for (i=0; i<classNames.length; i++) {
    $('#stream59').addClass(classNames[i]);
    $('#streamtag59').append("<span>" + classNames[i] + "</span>");
}
}
};

setTwitchClass59('<? echo $lolarray->streams[59]->channel->name; ?>');



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
