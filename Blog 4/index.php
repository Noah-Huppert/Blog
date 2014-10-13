<!DOCTYPE HTML>
<html>
	<head>
		
		<link rel='stylesheet' href="http://127.0.0.1/Blog4/css/styles.css"><!-- Main Styles -->
		<link rel="stylesheet" href="http://127.0.0.1/Blog4/css/font-awesome.css"><!-- Font Awesome Icons -->
		<link rel="stylesheet" href="http://127.0.0.1/Blog4/css/glyphicons.css"><!-- Glyphicons Icons -->
		<link rel="stylesheet" href="http://127.0.0.1/Blog4/css/fonts.css"><!-- Other Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Oleo+Script|Lobster|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'><!-- Google Fonts -->
		<!-- Collection link: http://www.google.com/fonts#UsePlace:use/Collection:Oleo+Script|Lobster|Open+Sans:400italic,700italic,400,700 -->
		
		<script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script><!-- Jquery -->
		<script src="http://127.0.0.1/Blog4/js/transit/jquery.transit.min.js" type="text/javascript"></script><!-- Jquery Transit -->
		<script src="http://127.0.0.1/Blog4/js/fastclick/google.fastbutton.js"  type="text/javascript"></script><!-- Google Fast Click -->
		<script src="http://127.0.0.1/Blog4/js/fastclick/jquery.fastclick.js"  type="text/javascript"></script><!-- Jquery Fast Click -->
		<script src="http://127.0.0.1/Blog4/js/javascript.js" type="text/javascript"></script><!-- Custom Javascript -->
		
		
		<?php
		//Global Define
		$url = $_SERVER['REQUEST_URI'];
		$p_title = "Home";
		$p_catagory;
		$p_article;
		
		$url_catagoryOffset = 2;//Where the root of webpage is in url
		
		
		//Global Setting
		$pathBreakdown = explode("/", $url);
		var_dump($url_catagoryOffset - count($pathBreakdown));
		if($url_catagoryOffset - count($pathBreakdown) <= -1){//Setting Page Catagory
			$p_catagory = $pathBreakdown[$url_catagoryOffset];
		}else{
			$p_catagory = "Home";
		}
		
		if(count($pathBreakdown) - $url_catagoryOffset > $url_catagoryOffset){//Settings Page Article
			$p_article = $pathBreakdown[$url_catagoryOffset + 1];
			$p_title = $p_article;
		} else{
			$p_article = "";
			$p_title = $p_catagory;
		}
		
		//Set vars in javascript
		echo '
		<script type="text/javascript">
		function phpInit(){
			var p_title = "' . $p_title . '";
			var p_catagory = "' . $p_catagory . '";
			var p_article = "' . $p_article . '";
			$(".h_option:contains(' . "'" . $p_catagory . "'" . ')").addClass("current");
		}
		</script>';
		?>
		
		
		<title>Noah Huppert - <?php echo $p_title; ?></title>
	</head>
	<body onload="init();">
		
		<div id="header" class="noSelect">
			<span id="title">Noah Huppert - <span id="pageLocation"><?php echo $p_title; ?></span></span>
			<span class="glyphicon glyphicon-align-justify"></span>
			<div id="h_nav" data-expand="false">
				<a class="h_option" href="http://127.0.0.1/Blog4/Home">Home</a>
				<a class="h_option" href="http://127.0.0.1/Blog4/Programming">Programming</a>
				<a class="h_option" href="http://127.0.0.1/Blog4/Animation">Animation</a>
				<a class="h_option" href="http://127.0.0.1/Blog4/Robotics">Robotics</a>
				<a class="h_option" href="http://127.0.0.1/Blog4/Other">Other</a>
			</div>
		</div>
		
	</body>
</html>