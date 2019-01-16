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
										<img class="logoimage" src="Images/runezrocklogoedit.png">
								</div>
										<img id="bandimage" src="Images/runezrockband2.jpg">						
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