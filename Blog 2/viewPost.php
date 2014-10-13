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
			.contentArea {
				width: 73%;
				height: 100%;
				margin: auto;
			}
			.postTitle{
				margin-top: 40px;
				font-size: 30px;
				font-style: italic;
				font-weight:bold;
				font-family: Pompiere;
			}
			.postTag{
				margin-top: 5px;
				font-size: 20px;
				font-style: italic;
				font-family: Yanone Kaffeesatz;
				float: left;
			}
			.postDate{
				margin-top: 5px;
				font-size: 20px;
				font-style: italic;
				font-family: Yanone Kaffeesatz;
				float: right;
			}
			.postContent{
				width: 97%;
				margin: auto;
				margin-top: 50px;
				font-size: 18px;
				font-family: Karla;
			}
		</style>
	</head>
	<body onload="init();" style="margin: 0;">
		<?php
		include 'header.php';
		?>

		<div class="contentArea">
			<div class='postTitle'>
				Post Title
			</div>
			<div class='postTag'>
				Post Tag
			</div>
			<div class='postDate'>
				1/23/13
			</div>
			<div class="postContent">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim tellus sit amet massa commodo,
				quis feugiat arcu vehicula. Cras ultrices pretium tempus. In hac habitasse platea dictumst. Nam
				interdum nibh quis odio luctus, et varius diam tristique. Praesent tempor lacus libero, sit amet
				aliquam massa iaculis et. Vivamus hendrerit justo a nisi cursus, id aliquam magna pretium. Fusce
				mollis ligula a feugiat sodales. Vivamus vulputate dapibus facilisis. Sed vestibulum interdum enim,
				id aliquam diam semper ut.

				Vestibulum justo velit, ullamcorper in pellentesque et, tempor ac odio. Ut ullamcorper viverra elementum.
				Maecenas placerat rutrum massa, fermentum tristique neque. Proin et dignissim arcu. Quisque nisi enim,
				gravida eu eleifend ac, dapibus eget velit. Suspendisse et tincidunt odio, vel adipiscing nisi. In
				mollis, dui vitae egestas scelerisque, elit orci varius dui, eget convallis purus nibh vitae ipsum.
				Suspendisse pulvinar nibh non turpis consequat auctor. Class aptent taciti sociosqu ad litora torquent
				per conubia nostra, per inceptos himenaeos.

				Donec dignissim nec velit ac mattis. Nam a lectus sem. Aliquam tellus orci, lacinia non sem ut, fringilla
				cursus mi. Nullam feugiat felis non rhoncus semper. Morbi ullamcorper magna blandit, vestibulum nunc vel,
				fermentum dolor. Phasellus suscipit, augue in tristique pellentesque, neque nibh laoreet lacus, in mattis
				quam urna vitae lectus. Vestibulum at purus ac arcu lobortis iaculis non in odio. Donec euismod urna sed
				ligula tincidunt tempus. Aliquam vel lorem est. Nullam tristique, augue ac porta semper, enim purus dictum
				massa, ac pretium urna leo a tellus.

				Donec erat dui, auctor sit amet pretium eget, consequat at elit. Phasellus suscipit, tortor in egestas
				hendrerit, odio libero hendrerit ligula, eu suscipit risus nulla imperdiet elit. Pellentesque euismod blandit
				erat quis faucibus. In tempus libero nec elit blandit auctor. Mauris quis leo vel nulla pulvinar cursus.
				Nullam venenatis odio ac fermentum vulputate. In id odio massa. Aenean pharetra sit amet enim euismod consequat.
				Nunc sit amet consequat elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
				mus. Ut dictum posuere augue, id tristique enim porttitor porta. Cras vel mollis ipsum. Integer fermentum, neque
				tristique lobortis pretium, libero felis aliquam nulla, quis porttitor ipsum quam in lacus. Suspendisse
				adipiscing condimentum neque in lobortis. Maecenas mollis lorem felis, nec volutpat diam ultrices vel. Integer
				laoreet euismod risus, quis suscipit orci dignissim sed.

				Vivamus a vehicula elit, vitae gravida mi. Proin dictum eget elit aliquam imperdiet. Proin ut mi congue, pretium
				risus elementum, pulvinar sapien. Ut orci felis, ultricies a elementum eget, euismod euismod augue. Donec porta
				rutrum erat nec cursus. Proin vel gravida arcu. Curabitur commodo nec risus et gravida. Maecenas sollicitudin
				libero sit amet libero malesuada, vitae sollicitudin risus molestie. Duis porta augue sit amet ante dapibus porta.
				Nullam congue vitae augue vitae pulvinar.
			</div>
		</div>

		<?php
		include 'footer.php';
		?>
	</body>
</html>