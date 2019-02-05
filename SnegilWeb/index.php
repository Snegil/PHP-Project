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
		 		<img src="https://maplelegends.com/avatar/create.php?name=veer" class="maplelegendsChar">
		 		<img src="https://maplelegends.com/avatar/create.php?name=anka" class="maplelegendsChar">
		 	</span>
	 	</div>
	 	
	 		<div id="details">
	 		<?php
					$ip = $_SERVER["REMOTE_ADDR"];
					$browser = $_SERVER["HTTP_USER_AGENT"];
					$ref = $_SERVER["HTTP_REFERER"];
					
					if($ref == ""){
						"This page was accessed directly";
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
	 		
	 		<div id="textarea">
	 			
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget euismod libero. Nam rutrum ac ante sed rhoncus. Etiam gravida pretium tortor sit amet pharetra. Vivamus at vulputate magna. Etiam consectetur scelerisque mi vehicula condimentum. Proin condimentum quam quis arcu semper sagittis. Fusce egestas ultricies fringilla. Nulla mattis ipsum et lectus mattis luctus. Proin vel sapien in ipsum vehicula aliquam. Aenean rutrum, enim sit amet accumsan pellentesque, dui ex convallis lorem, id ornare est sem et velit. Nulla in tempor ex, ac ornare turpis. Etiam luctus eu purus ut pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla hendrerit lacinia metus. Proin vitae odio non metus sagittis elementum.
			
			Mauris in rhoncus mauris, eu finibus lorem. Vestibulum mollis consequat turpis. Ut scelerisque nibh sed diam egestas euismod. Curabitur eu elit at ipsum maximus vestibulum condimentum et felis. Vestibulum porttitor, nibh non dapibus interdum, leo risus fringilla turpis, a gravida magna turpis ut odio. Fusce tristique iaculis magna, et finibus odio scelerisque id. Fusce scelerisque, mi a aliquet porttitor, enim nunc interdum sem, eu tincidunt justo quam non elit. Praesent pulvinar facilisis quam, ullamcorper interdum est euismod ut.
			
			Pellentesque urna felis, tincidunt eget augue ac, pellentesque laoreet ipsum. Praesent condimentum tellus quis tempus tincidunt. Donec eu lacus semper, vehicula ante eget, volutpat nulla. Curabitur id ex massa. Nullam ligula libero, molestie eu tortor id, dignissim mattis enim. Pellentesque congue sem eget odio auctor commodo. Mauris eu lectus sodales, placerat massa non, ultricies lorem. Maecenas non pellentesque orci. Curabitur dapibus mauris eget nisi tempor, ac volutpat mauris tincidunt. Maecenas sed ante nec augue hendrerit luctus. Integer accumsan quis purus eget pretium. Ut consectetur enim a ultricies mollis. Nullam ut eros aliquam, interdum ligula ac, lacinia odio. Sed sit amet auctor velit, nec facilisis nunc.
			
			Curabitur ante nunc, faucibus eu finibus pulvinar, facilisis et odio. Nunc lobortis odio tellus, vel maximus quam venenatis ac. Quisque mollis lectus euismod leo bibendum tincidunt. Phasellus facilisis euismod neque. Aenean at arcu dui. In ut lectus vitae felis venenatis lacinia et ac magna. Duis vitae urna sem. Praesent tempus aliquam neque rutrum mattis. Ut ut auctor diam. Ut ut vehicula nibh. Pellentesque sapien ante, pharetra at scelerisque quis, placerat nec diam. Quisque egestas aliquet lobortis. Curabitur ultrices neque sem, in mattis diam interdum eget. Suspendisse a ornare libero. Duis ac tincidunt metus, in pharetra tellus.
			
			Nunc aliquet erat et laoreet aliquam. Vivamus fringilla orci orci, sit amet interdum orci fermentum quis. Integer tempus condimentum consequat. Duis sodales aliquam augue a tempor. Nunc tincidunt, risus quis blandit congue, enim eros posuere massa, at pretium ligula odio eu mauris. Mauris justo sapien, iaculis vitae malesuada et, vehicula id massa. Sed dignissim urna et tristique dictum. Maecenas egestas neque vel lacus dignissim, placerat eleifend mi vehicula. Curabitur pretium ipsum sed ex tempor rhoncus. Sed eu auctor metus, in tempor lacus. In sed orci eu lacus iaculis dapibus ut quis felis. Fusce rutrum, dolor eu ullamcorper pharetra, nisi felis laoreet ex, ultricies scelerisque felis tellus lobortis lacus. Nullam sagittis nunc lectus, vitae dignissim lacus tincidunt id. Donec facilisis mi at felis iaculis euismod. Aliquam eleifend quam tortor, eget faucibus lorem iaculis a. Quisque pretium neque libero, nec tempor lacus faucibus at.			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget euismod libero. Nam rutrum ac ante sed rhoncus. Etiam gravida pretium tortor sit amet pharetra. Vivamus at vulputate magna. Etiam consectetur scelerisque mi vehicula condimentum. Proin condimentum quam quis arcu semper sagittis. Fusce egestas ultricies fringilla. Nulla mattis ipsum et lectus mattis luctus. Proin vel sapien in ipsum vehicula aliquam. Aenean rutrum, enim sit amet accumsan pellentesque, dui ex convallis lorem, id ornare est sem et velit. Nulla in tempor ex, ac ornare turpis. Etiam luctus eu purus ut pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla hendrerit lacinia metus. Proin vitae odio non metus sagittis elementum.
			
			Mauris in rhoncus mauris, eu finibus lorem. Vestibulum mollis consequat turpis. Ut scelerisque nibh sed diam egestas euismod. Curabitur eu elit at ipsum maximus vestibulum condimentum et felis. Vestibulum porttitor, nibh non dapibus interdum, leo risus fringilla turpis, a gravida magna turpis ut odio. Fusce tristique iaculis magna, et finibus odio scelerisque id. Fusce scelerisque, mi a aliquet porttitor, enim nunc interdum sem, eu tincidunt justo quam non elit. Praesent pulvinar facilisis quam, ullamcorper interdum est euismod ut.
			
			Pellentesque urna felis, tincidunt eget augue ac, pellentesque laoreet ipsum. Praesent condimentum tellus quis tempus tincidunt. Donec eu lacus semper, vehicula ante eget, volutpat nulla. Curabitur id ex massa. Nullam ligula libero, molestie eu tortor id, dignissim mattis enim. Pellentesque congue sem eget odio auctor commodo. Mauris eu lectus sodales, placerat massa non, ultricies lorem. Maecenas non pellentesque orci. Curabitur dapibus mauris eget nisi tempor, ac volutpat mauris tincidunt. Maecenas sed ante nec augue hendrerit luctus. Integer accumsan quis purus eget pretium. Ut consectetur enim a ultricies mollis. Nullam ut eros aliquam, interdum ligula ac, lacinia odio. Sed sit amet auctor velit, nec facilisis nunc.
			
			Curabitur ante nunc, faucibus eu finibus pulvinar, facilisis et odio. Nunc lobortis odio tellus, vel maximus quam venenatis ac. Quisque mollis lectus euismod leo bibendum tincidunt. Phasellus facilisis euismod neque. Aenean at arcu dui. In ut lectus vitae felis venenatis lacinia et ac magna. Duis vitae urna sem. Praesent tempus aliquam neque rutrum mattis. Ut ut auctor diam. Ut ut vehicula nibh. Pellentesque sapien ante, pharetra at scelerisque quis, placerat nec diam. Quisque egestas aliquet lobortis. Curabitur ultrices neque sem, in mattis diam interdum eget. Suspendisse a ornare libero. Duis ac tincidunt metus, in pharetra tellus.
			
			Nunc aliquet erat et laoreet aliquam. Vivamus fringilla orci orci, sit amet interdum orci fermentum quis. Integer tempus condimentum consequat. Duis sodales aliquam augue a tempor. Nunc tincidunt, risus quis blandit congue, enim eros posuere massa, at pretium ligula odio eu mauris. Mauris justo sapien, iaculis vitae malesuada et, vehicula id massa. Sed dignissim urna et tristique dictum. Maecenas egestas neque vel lacus dignissim, placerat eleifend mi vehicula. Curabitur pretium ipsum sed ex tempor rhoncus. Sed eu auctor metus, in tempor lacus. In sed orci eu lacus iaculis dapibus ut quis felis. Fusce rutrum, dolor eu ullamcorper pharetra, nisi felis laoreet ex, ultricies scelerisque felis tellus lobortis lacus. Nullam sagittis nunc lectus, vitae dignissim lacus tincidunt id. Donec facilisis mi at felis iaculis euismod. Aliquam eleifend quam tortor, eget faucibus lorem iaculis a. Quisque pretium neque libero, nec tempor lacus faucibus at.			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget euismod libero. Nam rutrum ac ante sed rhoncus. Etiam gravida pretium tortor sit amet pharetra. Vivamus at vulputate magna. Etiam consectetur scelerisque mi vehicula condimentum. Proin condimentum quam quis arcu semper sagittis. Fusce egestas ultricies fringilla. Nulla mattis ipsum et lectus mattis luctus. Proin vel sapien in ipsum vehicula aliquam. Aenean rutrum, enim sit amet accumsan pellentesque, dui ex convallis lorem, id ornare est sem et velit. Nulla in tempor ex, ac ornare turpis. Etiam luctus eu purus ut pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla hendrerit lacinia metus. Proin vitae odio non metus sagittis elementum.
			
			Mauris in rhoncus mauris, eu finibus lorem. Vestibulum mollis consequat turpis. Ut scelerisque nibh sed diam egestas euismod. Curabitur eu elit at ipsum maximus vestibulum condimentum et felis. Vestibulum porttitor, nibh non dapibus interdum, leo risus fringilla turpis, a gravida magna turpis ut odio. Fusce tristique iaculis magna, et finibus odio scelerisque id. Fusce scelerisque, mi a aliquet porttitor, enim nunc interdum sem, eu tincidunt justo quam non elit. Praesent pulvinar facilisis quam, ullamcorper interdum est euismod ut.
			
			Pellentesque urna felis, tincidunt eget augue ac, pellentesque laoreet ipsum. Praesent condimentum tellus quis tempus tincidunt. Donec eu lacus semper, vehicula ante eget, volutpat nulla. Curabitur id ex massa. Nullam ligula libero, molestie eu tortor id, dignissim mattis enim. Pellentesque congue sem eget odio auctor commodo. Mauris eu lectus sodales, placerat massa non, ultricies lorem. Maecenas non pellentesque orci. Curabitur dapibus mauris eget nisi tempor, ac volutpat mauris tincidunt. Maecenas sed ante nec augue hendrerit luctus. Integer accumsan quis purus eget pretium. Ut consectetur enim a ultricies mollis. Nullam ut eros aliquam, interdum ligula ac, lacinia odio. Sed sit amet auctor velit, nec facilisis nunc.
			
			Curabitur ante nunc, faucibus eu finibus pulvinar, facilisis et odio. Nunc lobortis odio tellus, vel maximus quam venenatis ac. Quisque mollis lectus euismod leo bibendum tincidunt. Phasellus facilisis euismod neque. Aenean at arcu dui. In ut lectus vitae felis venenatis lacinia et ac magna. Duis vitae urna sem. Praesent tempus aliquam neque rutrum mattis. Ut ut auctor diam. Ut ut vehicula nibh. Pellentesque sapien ante, pharetra at scelerisque quis, placerat nec diam. Quisque egestas aliquet lobortis. Curabitur ultrices neque sem, in mattis diam interdum eget. Suspendisse a ornare libero. Duis ac tincidunt metus, in pharetra tellus.
			
			Nunc aliquet erat et laoreet aliquam. Vivamus fringilla orci orci, sit amet interdum orci fermentum quis. Integer tempus condimentum consequat. Duis sodales aliquam augue a tempor. Nunc tincidunt, risus quis blandit congue, enim eros posuere massa, at pretium ligula odio eu mauris. Mauris justo sapien, iaculis vitae malesuada et, vehicula id massa. Sed dignissim urna et tristique dictum. Maecenas egestas neque vel lacus dignissim, placerat eleifend mi vehicula. Curabitur pretium ipsum sed ex tempor rhoncus. Sed eu auctor metus, in tempor lacus. In sed orci eu lacus iaculis dapibus ut quis felis. Fusce rutrum, dolor eu ullamcorper pharetra, nisi felis laoreet ex, ultricies scelerisque felis tellus lobortis lacus. Nullam sagittis nunc lectus, vitae dignissim lacus tincidunt id. Donec facilisis mi at felis iaculis euismod. Aliquam eleifend quam tortor, eget faucibus lorem iaculis a. Quisque pretium neque libero, nec tempor lacus faucibus at.			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget euismod libero. Nam rutrum ac ante sed rhoncus. Etiam gravida pretium tortor sit amet pharetra. Vivamus at vulputate magna. Etiam consectetur scelerisque mi vehicula condimentum. Proin condimentum quam quis arcu semper sagittis. Fusce egestas ultricies fringilla. Nulla mattis ipsum et lectus mattis luctus. Proin vel sapien in ipsum vehicula aliquam. Aenean rutrum, enim sit amet accumsan pellentesque, dui ex convallis lorem, id ornare est sem et velit. Nulla in tempor ex, ac ornare turpis. Etiam luctus eu purus ut pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla hendrerit lacinia metus. Proin vitae odio non metus sagittis elementum.
			
			Mauris in rhoncus mauris, eu finibus lorem. Vestibulum mollis consequat turpis. Ut scelerisque nibh sed diam egestas euismod. Curabitur eu elit at ipsum maximus vestibulum condimentum et felis. Vestibulum porttitor, nibh non dapibus interdum, leo risus fringilla turpis, a gravida magna turpis ut odio. Fusce tristique iaculis magna, et finibus odio scelerisque id. Fusce scelerisque, mi a aliquet porttitor, enim nunc interdum sem, eu tincidunt justo quam non elit. Praesent pulvinar facilisis quam, ullamcorper interdum est euismod ut.
			
			Pellentesque urna felis, tincidunt eget augue ac, pellentesque laoreet ipsum. Praesent condimentum tellus quis tempus tincidunt. Donec eu lacus semper, vehicula ante eget, volutpat nulla. Curabitur id ex massa. Nullam ligula libero, molestie eu tortor id, dignissim mattis enim. Pellentesque congue sem eget odio auctor commodo. Mauris eu lectus sodales, placerat massa non, ultricies lorem. Maecenas non pellentesque orci. Curabitur dapibus mauris eget nisi tempor, ac volutpat mauris tincidunt. Maecenas sed ante nec augue hendrerit luctus. Integer accumsan quis purus eget pretium. Ut consectetur enim a ultricies mollis. Nullam ut eros aliquam, interdum ligula ac, lacinia odio. Sed sit amet auctor velit, nec facilisis nunc.
			
			Curabitur ante nunc, faucibus eu finibus pulvinar, facilisis et odio. Nunc lobortis odio tellus, vel maximus quam venenatis ac. Quisque mollis lectus euismod leo bibendum tincidunt. Phasellus facilisis euismod neque. Aenean at arcu dui. In ut lectus vitae felis venenatis lacinia et ac magna. Duis vitae urna sem. Praesent tempus aliquam neque rutrum mattis. Ut ut auctor diam. Ut ut vehicula nibh. Pellentesque sapien ante, pharetra at scelerisque quis, placerat nec diam. Quisque egestas aliquet lobortis. Curabitur ultrices neque sem, in mattis diam interdum eget. Suspendisse a ornare libero. Duis ac tincidunt metus, in pharetra tellus.
			
			Nunc aliquet erat et laoreet aliquam. Vivamus fringilla orci orci, sit amet interdum orci fermentum quis. Integer tempus condimentum consequat. Duis sodales aliquam augue a tempor. Nunc tincidunt, risus quis blandit congue, enim eros posuere massa, at pretium ligula odio eu mauris. Mauris justo sapien, iaculis vitae malesuada et, vehicula id massa. Sed dignissim urna et tristique dictum. Maecenas egestas neque vel lacus dignissim, placerat eleifend mi vehicula. Curabitur pretium ipsum sed ex tempor rhoncus. Sed eu auctor metus, in tempor lacus. In sed orci eu lacus iaculis dapibus ut quis felis. Fusce rutrum, dolor eu ullamcorper pharetra, nisi felis laoreet ex, ultricies scelerisque felis tellus lobortis lacus. Nullam sagittis nunc lectus, vitae dignissim lacus tincidunt id. Donec facilisis mi at felis iaculis euismod. Aliquam eleifend quam tortor, eget faucibus lorem iaculis a. Quisque pretium neque libero, nec tempor lacus faucibus at.			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget euismod libero. Nam rutrum ac ante sed rhoncus. Etiam gravida pretium tortor sit amet pharetra. Vivamus at vulputate magna. Etiam consectetur scelerisque mi vehicula condimentum. Proin condimentum quam quis arcu semper sagittis. Fusce egestas ultricies fringilla. Nulla mattis ipsum et lectus mattis luctus. Proin vel sapien in ipsum vehicula aliquam. Aenean rutrum, enim sit amet accumsan pellentesque, dui ex convallis lorem, id ornare est sem et velit. Nulla in tempor ex, ac ornare turpis. Etiam luctus eu purus ut pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla hendrerit lacinia metus. Proin vitae odio non metus sagittis elementum.
			
			Mauris in rhoncus mauris, eu finibus lorem. Vestibulum mollis consequat turpis. Ut scelerisque nibh sed diam egestas euismod. Curabitur eu elit at ipsum maximus vestibulum condimentum et felis. Vestibulum porttitor, nibh non dapibus interdum, leo risus fringilla turpis, a gravida magna turpis ut odio. Fusce tristique iaculis magna, et finibus odio scelerisque id. Fusce scelerisque, mi a aliquet porttitor, enim nunc interdum sem, eu tincidunt justo quam non elit. Praesent pulvinar facilisis quam, ullamcorper interdum est euismod ut.
			
			Pellentesque urna felis, tincidunt eget augue ac, pellentesque laoreet ipsum. Praesent condimentum tellus quis tempus tincidunt. Donec eu lacus semper, vehicula ante eget, volutpat nulla. Curabitur id ex massa. Nullam ligula libero, molestie eu tortor id, dignissim mattis enim. Pellentesque congue sem eget odio auctor commodo. Mauris eu lectus sodales, placerat massa non, ultricies lorem. Maecenas non pellentesque orci. Curabitur dapibus mauris eget nisi tempor, ac volutpat mauris tincidunt. Maecenas sed ante nec augue hendrerit luctus. Integer accumsan quis purus eget pretium. Ut consectetur enim a ultricies mollis. Nullam ut eros aliquam, interdum ligula ac, lacinia odio. Sed sit amet auctor velit, nec facilisis nunc.
			
			Curabitur ante nunc, faucibus eu finibus pulvinar, facilisis et odio. Nunc lobortis odio tellus, vel maximus quam venenatis ac. Quisque mollis lectus euismod leo bibendum tincidunt. Phasellus facilisis euismod neque. Aenean at arcu dui. In ut lectus vitae felis venenatis lacinia et ac magna. Duis vitae urna sem. Praesent tempus aliquam neque rutrum mattis. Ut ut auctor diam. Ut ut vehicula nibh. Pellentesque sapien ante, pharetra at scelerisque quis, placerat nec diam. Quisque egestas aliquet lobortis. Curabitur ultrices neque sem, in mattis diam interdum eget. Suspendisse a ornare libero. Duis ac tincidunt metus, in pharetra tellus.
			
			Nunc aliquet erat et laoreet aliquam. Vivamus fringilla orci orci, sit amet interdum orci fermentum quis. Integer tempus condimentum consequat. Duis sodales aliquam augue a tempor. Nunc tincidunt, risus quis blandit congue, enim eros posuere massa, at pretium ligula odio eu mauris. Mauris justo sapien, iaculis vitae malesuada et, vehicula id massa. Sed dignissim urna et tristique dictum. Maecenas egestas neque vel lacus dignissim, placerat eleifend mi vehicula. Curabitur pretium ipsum sed ex tempor rhoncus. Sed eu auctor metus, in tempor lacus. In sed orci eu lacus iaculis dapibus ut quis felis. Fusce rutrum, dolor eu ullamcorper pharetra, nisi felis laoreet ex, ultricies scelerisque felis tellus lobortis lacus. Nullam sagittis nunc lectus, vitae dignissim lacus tincidunt id. Donec facilisis mi at felis iaculis euismod. Aliquam eleifend quam tortor, eget faucibus lorem iaculis a. Quisque pretium neque libero, nec tempor lacus faucibus at.
			 
			</div>
		 		
	 	</div>
	 </body>
</html>