		
		<html>
		<head>
		</head>
		<body>
			<?
			$loljson = file_get_contents("https://api.twitch.tv/kraken/streams?game=league+of+legends");
			$lolarray=json_decode($loljson);
			echo $lolarray->streams[0]->game;
			?>
			<img src="<? echo $lolarray->streams[0]->preview->medium;?>">
			
		</body>
		</html>