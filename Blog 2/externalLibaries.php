<!DOCTYPE html>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
		<link href="headerfooter.css" rel="stylesheet" type="text/css">
		<style>
			a {
				color: #575757;
				text-decoration: none;
			}
			li{
				list-style-type: none;
			}
			.contentArea{
				width: 30%;
				height: 90%;
				margin: auto;
				margin-top: 5%;
			}
			#description{
				font-size: 18px;
				color: #4D4D4D;
			}
			#libarylist{
				font-size: 17px;
				color: #4D4D4D;
				text-align: center;
			}
			#listTitle{
				font-size: 18px;
			}
		</style>
	</head>
	<body onload="init();" style="margin: 0;">
		<?php
		include 'header.php';
		?>
		<div class='contentArea'>
			<h1 style='color: #4D4D4D; font-style: italic;'>External Libaries</h1>
			<div id='description'>
				My name is Noah Huppert. I personaly coded all the pages on this domain. I spent many many hours working to perfect my site and make the user experence a good one.
				If you have any complaints about the content or the way this blog works please <a href='contactMe.php'>Contact Me</a>. Without the use of
				the following external libaries this site would not be possible.
			</div>
			<ul id='libarylist'>
				<p id='listTitle'>
					External Libaries
				</p>
				<li>
					<a href='http://jquery.com/'>~jquery</a>
				</li>
				<li>
					<a href='http://jqueryui.com/'>~jquery-ui</a>
				</li>
				<li>
					<a href='http://www.google.com/fonts'>~Google  Fonts</a>
				</li>
			</ul>
		</div>
		<?php
		include 'footer.php';
		?>
	</body>
</html>