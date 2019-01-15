<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Snegil">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>
			Webmall
		</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="scripts.js"></script>
	</head>
	<body>
		<div id="slideshow">
			<img class="img" src="Images/slideshow1.png">
		</div>
		<div id="box">
			<div id="about">
				<?php
				    $myfilename = "about.txt";
				    if(file_exists($myfilename)){
				      echo file_get_contents($myfilename);
				    }
				?>
			</div>
			<div id="contact">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus tellus quis sapien volutpat pharetra. Proin ac lacus ac justo placerat gravida. Cras vel euismod leo. In eget enim a velit efficitur malesuada et vitae felis. Phasellus eget purus ac ex tristique egestas. Ut interdum leo risus, vitae ultrices enim volutpat maximus. Phasellus maximus elementum mauris, a rutrum libero dignissim non. 
			</div>
		</div>
	</body>	
</html>


