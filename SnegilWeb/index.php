<!DOCTYPE html>
<html>	
	<head>
		<meta name="author" content="Snegil">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" lang="sv">
			<title>
				Snegil's Playground
			</title>
		<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	 </head>
	 <body>	

	 	<div id="topContainer">
		 	<span id="logocontainer">
		 		<img src="Images/gitAvatar.png" class="logo">
		 	</span>
		 	<span id="text">
		 		Snegil
		 		<img src="Images/mapleVeer.png" class="maplelegendsChar">
		 	</span>
	 	</div>
	 	
	 		<div id="details">
	 		<?php
					$ref = "";
					$ip = $_SERVER["REMOTE_ADDR"];
					$browser = $_SERVER["HTTP_USER_AGENT"];
					if(isset($_SERVER["HTTP_REFERER"]))
						$ref = $_SERVER["HTTP_REFERER"];
					
					
					if($ref == ""){
						$ref = "This page was accessed directly";
					}
					
					echo "IP:".$ip." ♜ ";
					echo "Browser:".$browser." ♜ ";
					echo "Referer:".$ref."";
			?>
	 		</div>
	 		
	 	<div id="navigationbar">
	 		
	 		<a href="index.php">
	 		<span class="button">HOME</span>
	 		</a>
	 		
	 		<a href="index.php">
	 		<span class="button">EDITOR</span>
	 		</a>
	 		
	 		<a href="index.php">
	 		<span class="button">WAIT, WHY?</span>
	 		</a>
	 		
	 	</div>
	 	
	 	<div id="bottomContainer">

	 	</div>
	 </body>
</html>