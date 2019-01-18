<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Snegil">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" lang="sv">
		<title>
			Webmall
		</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="scripts.js"></script>
	</head>
	<body>
				<div id="container">
						<div id="wholepage">
								<div id="logotyp">
										<img class="logoimage" src="Images/runezrocklogo.jpg">
								</div>
										<img id="bandimage" src="Images/runezrockband2.jpg">	
													
										<div id="infobar">
											<a target="_blank" href="https://www.facebook.com/Runez-Rock-109810822368941/">
											<img id="flogo" alt="Runez Rock finns på facebook!" src="Images/flogo2.png">
											</a>
											<iframe id="spotifyI" src="https://open.spotify.com/embed/track/40roys5JxjibSvp27c9ts6" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
										</div>
										
								<p id="about">
									<?php
									    $myfilename = "about.txt";
									    if(file_exists($myfilename)){
									      echo file_get_contents($myfilename);
									    }
									?>
								</p>
									
						</div>
				</div>
	</body>	
</html>