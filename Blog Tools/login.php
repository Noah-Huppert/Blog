<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="loginStyle.css" />
		<title>Login</title>
	</head>
	<body onload="init();">
		<?php
		include "header.php";
		?>

		<div id="loginBox">
			<div id="loginTitle">
				Please Login
				<div id="loginSubText">
					It is necessary for you to log in so your <br>identity can be verified.
				</div>
			</div>
			<form id="loginForm" method="get">
				<div id="loginUsernameContainer">
					Username:
					<input type="text" name="loginUsername" placeholder=" Username"/>
				</div>
				<div id="loginPasswordContainer">
					Password:&nbsp;
					<input type="password" name="loginPassword" placeholder=" Password"/>
				</div>
				<div id="loginButton">
					<input type="submit" name="login" value="Login"/>
				</div>
				
			</form>
		</div>

		<script>
			function init() {
				$('#loginBox').css({
					'margin-top' : ($(window).height() / 2) - 186
				});
			}
		</script>
	</body>
</html>