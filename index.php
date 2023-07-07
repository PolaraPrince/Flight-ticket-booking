<!DOCTYPE html>
<html>

<head>
	<title>Airline World</title>
	<style type="text/css">
		a:link {
			color: black
		}

		a:visited {
			color: black
		}

		a:hover {
			color: black
		}

		#gound {
			color: black
		}

		html {
			background: url();
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		#main_area {
			margin: auto auto;
			color: black;
			width: 800px;
			height: 400px;
			margin: 0 auto;
			color: black;
			border-radius: 25px;
			margin-top: 50px;
			padding-top: 30px;
			padding-right: 30px;
			padding-bottom: 30px;
			padding-left: 30px;
			background-color: rgba(0, 0, 0, 0.3);
			box-shadow: inset -4px -4px rgba(0, 0, 0, 0.5);
		}

		#welcometext {
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-size: 50px;
		}

		#registertext {
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-size: 25px;
		}

		#fillertext {
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-size: 35px;
		}
	</style>
</head>

<body>
	<?php
	session_start();
	include("nav.php")
	?>
	<div align="center" id="main_area">
		<div id="logo"><img src="Logo.png" alt="logo" height="100" width="100" align="left" /></div>
		<div id="welcometext">Welcome Arrow Ticket</div>
		<br /><br /><br /><br />
		<div id="fillertext">Book your beautiful journey</div>
		<br /><br /><br />
		<div id="registertext">
			<form action="register.php">
				<button type="submit">Click here</button>
			</form>
		</div>
		<div>
		</div>
	</div>
</body>

</html>