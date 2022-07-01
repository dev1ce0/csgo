<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
			<ul>
                <li style="--i:7;"><a href="index.html">Main</a></li>
                <li style="--i:6;"><a href="skins.html">Skins</a></li>
                <li style="--i:5;"><a href="CS_evo.html">CS Evolution</a></li>
                <li style="--i:4;"><a href="Legend_mom.html">Legendary moments</a></li>
                <li style="--i:3;"><a href="Pro_players.html">Best players</a></li>
                <li style="--i:2;"><a href="login.php">Log In</a></li>
                <li style="--i:1;"><a href="register.php">Sign Up</a></li>
            </ul>
		
</body>
</html>