<!DOCTYPE html>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
		<style>
			#topBar {
				height: 60px;
				width: 100%;
				line-height: 60px;
				background: #FAFAFA;
				border-bottom-style: solid;
				border-bottom-width: 1px;
				border-bottom-color: #F2F2F2;
				font-family: Pompiere;
			}
			#topBarTitle {
				margin-left: 100px;
				float: left;
				font-size: 30px;
			}
			#topBarMenu {
				margin-right: 100px;
				float: right;
			}
			.topBarMenuOption {
				font-size: 24px;
				margin-right: 20px;
				float: left;
			}
			#searchBar {
				width: 20px;
				height: 20px;
			}
			#searchEntry, input {
				width: 120px;
				height: 25px;
				line-height: 20px;
				margin-left: 10px;
				border-style: solid;
				border-width: 2px;
				border-color: #C4C4C4;
				border-radius: 10px;
				outline: none;
				text-indent: 10px;
				font-family: Pompiere;
				float: none;
			}
			.ui-menu-item {
				width: 100px;
				height: 30px;
				line-height: 30px;
				list-style-type: none;
				background: #FFFFFF;
				border-style: solid;
				border-width: 1px;
				border-color: #E6E6E6;
				text-align: center;
				border-radius: 2px;
				cursor: pointer;
			}
			.ui-menu-item:hover {
				background: #FCFCFC;
			}
			.ui-helper-hidden-accessible {
				display: none;
			}
			.topBarMenuOption:hover {
				font-style: italic;
			}
			#turnTable {
				width: 100%;
				height: 350px;
				border-bottom-style: solid;
				border-bottom-width: 1px;
				border-bottom-color: #F0F0F0;
			}
			.turnTableControllArrow {
				width: 60px;
				height: 120px;
				z-index: 2;
				position: absolute;
				background: none;
				border-radius: 5px;
				text-align: center;
				line-height: 120px;
				font-size: 40px;
				font-family: Karla;
				color: #E8E8E8;
				cursor: pointer;
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			.turnTableControllArrow:hover {
				background: #FCFCFC;
			}
			.turnTableElement {
				width: 40%;
				height: 80%;
				margin-top: 2.5%;
				position: absolute;
				border-style: solid;
				border-width: 1px;
				border-color: #8F8F8F;
				text-decoration: none;
			}
			.turnTableElementTitle {
				padding-left: 10px;
				padding-top: 10px;
				padding-bottom: 10px;
				font-size: 24px;
				font-family: Pompiere;
				background: #FAFAFA;
				opacity: 0.5;
				color: #000000;
			}
			.turnTableElementContent {
				width: 100%;
				height: 50%;
				margin: auto;
				margin-left: 20px;
				font-size: 18px;
				font-family: Karla;
				color: #919191;
				text-align: left;
				font-style: italic;
			}
			.turnTableElementTag {
				width: 100%;
				padding-top: 10px;
				padding-left: 10px;
				color: #919191;
				font-family: Karla;
				border-top-style: solid;
				border-top-width: 1px;
				border-top-color: #F7F7F7;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}
			#aboutMe {
				width: 50%;
				margin: auto;
				margin-top: 80px;
			}
			#aboutMeTitle {
				font-family: Yanone Kaffeesatz;
				font-size: 24px;
				text-align: center;
				margin-top: 10px;
			}
			#aboutMeContent {
				font-family: Karla;
			}
			#socailContainer {
				float: right;
				margin-right: 5%;
				margin-top: -75px;
				padding-left: 20px;
				font-family: Pompiere;
				border-left-style: solid;
				border-left-width: 1px;
				border-left-color: #636363;
			}
			#socailTitle {
				font-size: 24px;
			}
			.socailType {
				margin-left: 35px;
				margin-top: 10px;
			}
			.bottomBar {
				width: 100%;
				color: #E6E6E6;
				font-family: Yanone Kaffeesatz;
				background: #1A1A1A;
			}
			#bottomBarGradiant {
				background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#1A1A1A));
			}
			#bottomBarContent {
				background: #1A1A1A;
			}
			#usageDiscalimer {
				padding-top: 10px;
				text-align: center;
				background: #1A1A1A;
			}
			.bottomBarItem {
				height: 30px;
				line-height: 30px;
				padding-top: 10px;
				background: #1A1A1A;
				font-style: italic;
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			#bottomBarItemsWraper {
				width: 300px;
				margin: auto;
				background: #1A1A1A;
				height: 1%;
				overflow: hidden;
			}
		</style>
	</head>
	<body onload="init();" style="margin: 0;">
		<?php
		$post1 = array();
		$post2 = array();
		$post3 = array();
		$post4 = array();
		$post5 = array();
		$i = 0;

		$connect = mysql_connect("localhost", "root", "");
		mysql_select_db($connect, "posts");
		//Code for the search box, prevents malicious users
		//$search = mysql_real_escape_string(htmlentities($_POST['search']));

		$query = mysql_query($connect, "
		SELECT * FROM `posts` ORDER BY 'postDate'
		");

		while ($row = mysql_fetch_array($query)) {
			/*echo "
			 $('#turnTableElementTitle" . $row['postKey'] . "').html('" . $row['postTitle'] . "');
			 ";*/
			switch ($row['postKey']) {
				case 1 :
					$post1['postTitle'] = $row['postTitle'];
					$post1['postKey'] = $row['postKey'];
					$post1['postContent'] = $row['postContent'];
					$post1['postTag'] = $row['postTag'];
					break;

				case 2 :
					$post2['postTitle'] = $row['postTitle'];
					$post2['postKey'] = $row['postKey'];
					$post2['postContent'] = $row['postContent'];
					$post2['postTag'] = $row['postTag'];
					break;

				case 3 :
					$post3['postTitle'] = $row['postTitle'];
					$post3['postKey'] = $row['postKey'];
					$post3['postContent'] = $row['postContent'];
					$post3['postTag'] = $row['postTag'];
					break;

				case 4 :
					$post4['postTitle'] = $row['postTitle'];
					$post4['postKey'] = $row['postKey'];
					$post4['postContent'] = $row['postContent'];
					$post4['postTag'] = $row['postTag'];
					break;

				case 5 :
					$post5['postTitle'] = $row['postTitle'];
					$post5['postKey'] = $row['postKey'];
					$post5['postContent'] = $row['postContent'];
					$post5['postTag'] = $row['postTag'];
					break;
			}

			//Getting autocomplete tags
			$autocompleteQuery = "SELECT postTitle FROM posts WHERE 1";
			$autocompleteQueryResult = mysql_query($connect, $autocompleteQuery) or die("no query");

			$autocompleteQueryResult_array = array();

			echo "
			<script>
			var searchAutocomplete = [";

			while ($autocompleteQueryRow = mysql_fetch_assoc($autocompleteQueryResult)) {
				echo '"' . $autocompleteQueryRow['postTitle'] . '",';
			}

			echo '
			"Programing", "Animation", "Robotics", "Other"];
			</script>';
		}
		?>

		<div id="topBar">
			<div id="topBarTitle">
				<strong>Noah Huppert</strong>
			</div>
			<div id="topBarMenu">
				<div class="topBarMenuOption">
					Programing&nbsp;
				</div>
				<div class="topBarMenuOption">
					Animation&nbsp;
				</div>
				<div class="topBarMenuOption">
					Robotics&nbsp;
				</div>
				<div class="topBarMenuOption">
					Other&nbsp;
				</div>
				<div class="topBarMenuOption">
					<strong>Archive</strong>&nbsp;
				</div>
				<form  class="topBarMenuOption" action="search.php" method="post">
					<img id="searchBar" src="search-icon.png">
					<input id="searchEntry" name="search" placeholder="Search"/>
				</form>
			</div>
		</div>
		<div id="turnTable">
			<div class='turnTableControllArrow' id='turnTableConrtollArrowLeft'>
				<
			</div>
			<div class='turnTableControllArrow' id='turnTableConrtollArrowRight'>
				>
			</div>
			<a href=<?php echo 'viewPost.php?postKey=' . $post5['postKey']; ?> id="turnTableElement1"class="turnTableElement">
			<div class="turnTableElementTitle">
				<?php
				echo $post5['postTitle'];
				?>
			</div> <!--Post Content-->
			<?php
			echo "
<div class='turnTableElementContent'>" . substr($post5['postContent'], 0, 250) . "</div>
<div class='turnTableElementTag'><strong style='font-family: Karla;'>Catagory: </strong>" . $post5['postTag'] . "</div>
";
			?></a>

			<!--Next Carosel Element-->
			<a href=<?php echo 'viewPost.php?postKey=' . $post4['postKey']; ?> id="turnTableElement2"class="turnTableElement">
			<div class="turnTableElementTitle">
				<?php
				echo $post4['postTitle'];
				?>
			</div> <!--Post Content-->
			<?php
			echo "
<div class='turnTableElementContent'>" . substr($post4['postContent'], 0, 250) . "</div>
<div class='turnTableElementTag'><strong style='font-family: Karla;'>Catagory: </strong>" . $post4['postTag'] . "</div>
";
			?></a>

			<!--Next Carosel Element-->
			<a href=<?php echo 'viewPost.php?postKey=' . $post3['postKey']; ?> id="turnTableElement3"class="turnTableElement">
			<div class="turnTableElementTitle">
				<?php
				echo $post3['postTitle'];
				?>
			</div> <!--Post Content-->
			<?php
			echo "
<div class='turnTableElementContent'>" . substr($post3['postContent'], 0, 250) . "</div>
<div class='turnTableElementTag'><strong style='font-family: Karla;'>Catagory: </strong>" . $post3['postTag'] . "</div>
";
			?></a>

			<!--Next Carosel Element-->
			<a href=<?php echo 'viewPost.php?postKey=' . $post2['postKey']; ?> id="turnTableElement4"class="turnTableElement">
			<div class="turnTableElementTitle">
				<?php
				echo $post2['postTitle'];
				?>
			</div> <!--Post Content-->
			<?php
			echo "
<div class='turnTableElementContent'>" . substr($post2['postContent'], 0, 250) . "</div>
<div class='turnTableElementTag'><strong style='font-family: Karla;'>Catagory: </strong>" . $post2['postTag'] . "</div>
";
			?></a>

			<!--Next Carosel Element-->
			<a href=<?php echo 'viewPost.php?postKey=' . $post1['postKey']; ?> id="turnTableElement5"class="turnTableElement">
			<div class="turnTableElementTitle">
				<?php
				echo $post1['postTitle'];
				?>
			</div> <!--Post Content-->
			<?php
			echo "
<div class='turnTableElementContent'>" . substr($post1['postContent'], 0, 250) . "</div>
<div class='turnTableElementTag'><strong style='font-family: Karla;'>Catagory: </strong>" . $post1['postTag'] . "</div>
";
			?>
			<!--<iframe class="turnTableElementContent" src="viewPost.php" scrolling="no"></iframe>
			<?php
			echo "
			<iframe class='turnTableElementContent' src='viewPost.php?postKey=" . $post1['postKey'] . "' scrolling='no'></iframe>";

			echo "
			<a class='turnTableElementLink' href='viewPost.php?postKey=" . $post1['postKey'] . "'></a>";
			?>--> </a>
		</div>
		<div id="aboutMe">
			<div id="aboutMeTitle">
				<strong>About Me</strong>
			</div>
			<div id="aboutMeContent">
				My name is Noah Huppert and I am <a id="age"></a> years old. I am currently attending Lincoln Sudbury High School.
				I enjoy programing and animating. I created this blog along with the other sites in this domain. You can check out my <a style="color: #636363; text-decoration: none;" href="portfolio">portfolio here</a>,
				or check out <a style="color: #636363; text-decoration: none;" href="archive">my recent blog posts here</a>. I am experenced
				in HTML, CSS, PHP, Javascript, Java, C#, and C++. I am a good problem solver and enjoy working with others.
			</div>
		</div>
		<div id="socailContainer">
			<div id="socailTitle">
				Follow Noah Huppert
			</div>
			<div class="socailType">
				<br>
				RSS
			</div>
			<div class="socailType">
				<a href="https://twitter.com/NoahHuppert"style="color: inherit; text-decoration: none;">Twitter</a>
			</div>
			<div class="socailType">
				<a href="https://plus.google.com/u/0/116292483735493618821/posts" style="color: inherit; text-decoration: none;">Google +</a>
				<br>
				<br>
			</div>
		</div>

		<div class="bottomBar">
			<div id="bottomBarGradiant">
				&nbsp;
			</div>
			<div id="bottomBarContent">
				<div id="usageDiscalimer">
					&copy;Noah Huppert. All code on this domain is coded by Noah Huppert. Do not distribute or claim as your own.
				</div>
				<div id='bottomBarItemsWraper'>
					<span style='float: left;' class='bottomBarItem'>
						<a style='color: #E6E6E6; text-decoration: none;' href="contactMe.php">Contact Noah Huppert</a>
					</span>
					<span style='float: right; cursor: pointer;' class='bottomBarItem'>
						Blog tools
					</span>
				</div>
				
			</div>
		</div>
		<script>
			var turnTableElement;
			var turnTableElementLeftNum;
			var turnTableElementRightNum;
			var turnTableElementRightNumPre;
			var turnTableElementCenter;
			var turnTableElementLeft;
			var turnTableElementRight;
			var turnTableElementRightPre;
			var date = new Date();
			var year = date.getFullYear();
			var tableMovedRecently = false;
			function init() {
				//Setting minum viewing width
				if ($(window).width() < 950) {
					$('body').css({
						'width' : '950px'
					});
				}
				if ($(window).width() > 950) {
					$('body').css({
						'width' : $(window).width(),
						'overflow-x' : 'hidden'
					});
				}

				$('.turnTableElement').css({
					'height' : ($('#turnTable').height() * 75) / 100
				});

				//Turn table
				turnTableElement = 5;
				turnTableElementLeftNum = turnTableElement - 1;
				turnTableElementRightNum = turnTableElement + 1;
				turnTableElementRightNumPre = turnTableElementRightNum + 1;
				turnTableElementCenter = '#turnTableElement5'
				turnTableElementLeft = '#turnTableElement4';
				turnTableElementRight = '#turnTableElement1';
				turnTableElementRightPre = '#turnTableElement' + turnTableElementRightNumPre;
				$('.turnTableElement').hide();
				$(turnTableElementCenter).show();
				$(turnTableElementLeft).show();
				$(turnTableElementRight).show();

				$((":hidden" )).css({
					'left' : (($(window).width() - $('.turnTableElement').width()) / 2) - (2 * ($('.turnTableElement').width()) + 75)
				});
				$(turnTableElementCenter).animate({
					left : ($(window).width() - $('.turnTableElement').width()) / 2,
					opacity : '1'
				}, 0);
				$(turnTableElementLeft).animate({
					left : (($(window).width() - $('.turnTableElement').width()) / 2) - ($('.turnTableElement').width() + 75),
					opacity : '0.4'
				}, 0);
				$(turnTableElementRight).animate({
					left : (($(window).width() - $('.turnTableElement').width()) / 2) + ($('.turnTableElement').width() + 75),
					opacity : '0.4'
				}, 0);
				turnTableElement = turnTableElement - 1;
				checkTurnTableLimits();
				turnTableElementLeftNum = turnTableElement - 1;
				turnTableElementRightNum = turnTableElement + 1;
				checkTurnTableLimits();
				turnTableElementRightNumPre = turnTableElementRightNum + 1;

				//Age
				$('#age').html(year - 1998);

				//Turn table element link
				//var iframeDoc = $('.turnTableElementContent').contents().get(0);
				//$(iframeDoc).bind('click', function( event ) {
				//	 alert('click');
				//});
				//Turn Table Element Content
				$('.turnTableElementContent').css({
					'margin-top' : ($('.turnTableElement').height() - $('.turnTableElementContent').height()) / 3
				});

				//Turn Table Controll Arows
				$('#turnTableConrtollArrowLeft').css({
					'margin-top' : ($('#turnTable').height() - 120) / 2,
					'margin-left' : (($(window).width() - $('.turnTableElement').width()) / 2) - 65
				});
				$('#turnTableConrtollArrowRight').css({
					'margin-top' : ($('#turnTable').height() - 120) / 2,
					'margin-left' : (($(window).width() + $('.turnTableElement').width()) / 2)
				});
				$('#turnTableConrtollArrowLeft').bind('click', function(event) {
					iterateCarosel('back');
				});
				$('#turnTableConrtollArrowRight').bind('click', function(event) {
					iterateCarosel('forward');
				});
				$('.turnTableControllArrow').mouseout(function() {
					tableMovedRecently = false;
				});
				$('.turnTableControllArrow').mouseover(function() {
					tableMovedRecently = true;
				});

				//Bottom Bar
				var bottomBarMarginTop;
				if (($('body').height() + 75) < $(window).height()) {
					bottomBarMarginTop = ($(window).height() - $('body').height()) + $('.bottomBar').height();
				}
				if (($('body').height() + 75) > $(window).height()) {
					bottomBarMarginTop = 80;
				}
				$('.bottomBar').css({
					'margin-top' : bottomBarMarginTop
				});

				//Search Box
				$('#searchEntry').hide();
				$('#searchEntry').autocomplete({
					source : searchAutocomplete
				});
				$('#searchBar').click(function() {
					$('#searchEntry').toggle('slow');
					$('#searchEntry').focus();
				});
			}

			//Turn Table
			window.setInterval(function() {
				if (tableMovedRecently == false) {
					iterateCarosel('forward');
				}
			}, 5000);

			function iterateCarosel(direction) {
				if (direction == 'back') {
					turnTableElement = turnTableElement + 1;
					checkTurnTableLimits();
					turnTableElementLeftNum = turnTableElement + 1;
					turnTableElementRightNum = turnTableElement - 1;
					checkTurnTableLimits();
					turnTableElementRightNumPre = turnTableElementRightNum - 1;
					checkTurnTableLimits();
					turnTableElementCenter = '#turnTableElement' + turnTableElement.toString();
					turnTableElementRight = '#turnTableElement' + turnTableElementLeftNum.toString();
					turnTableElementLeft = '#turnTableElement' + turnTableElementRightNum.toString();
					turnTableElementRightPre = '#turnTableElement' + turnTableElementRightNumPre.toString();

				}
				if (direction == 'forward') {
					turnTableElement = turnTableElement - 1;
					checkTurnTableLimits();
					turnTableElementLeftNum = turnTableElement - 1;
					turnTableElementRightNum = turnTableElement + 1;
					checkTurnTableLimits();
					turnTableElementRightNumPre = turnTableElementRightNum + 1;
					checkTurnTableLimits();
					turnTableElementCenter = '#turnTableElement' + turnTableElement.toString();
					turnTableElementLeft = '#turnTableElement' + turnTableElementLeftNum.toString();
					turnTableElementRight = '#turnTableElement' + turnTableElementRightNum.toString();
					turnTableElementRightPre = '#turnTableElement' + turnTableElementRightNumPre.toString();
				}

				$('.turnTableElement').hide();
				$(turnTableElementCenter).show();
				$(turnTableElementLeft).show();
				$(turnTableElementRight).show();
				$(turnTableElementRightPre).show();
				$((":hidden" )).css({
					'left' : (($(window).width() - $('.turnTableElement').width()) / 2) - (2 * ($('.turnTableElement').width()) + 75)
				});
				$(turnTableElementCenter).animate({
					left : ($(window).width() - $('.turnTableElement').width()) / 2,
					opacity : '1'
				}, 500);
				$(turnTableElementLeft).animate({
					left : (($(window).width() - $('.turnTableElement').width()) / 2) - ($('.turnTableElement').width() + 75),
					opacity : '0.4'
				}, 500);
				$(turnTableElementRightPre).animate({
					left : (($(window).width() - $('.turnTableElement').width()) / 2) + (2 * ($('.turnTableElement').width()) + 75),
					opacity : '0.4'
				}, 500);
				$(turnTableElementRight).animate({
					left : (($(window).width() - $('.turnTableElement').width()) / 2) + ($('.turnTableElement').width() + 75),
					opacity : '0.4'
				}, 500);

			}

			function checkTurnTableLimits() {
				switch(turnTableElement) {
					case 0:
						turnTableElement = 5;
						break;

					case 6:
						turnTableElement = 1;
						break;
				}
				switch(turnTableElementRightNumPre) {
					case 0:
						turnTableElementRightNumPre = 5;
						break;

					case 6:
						turnTableElementRightNumPre = 1;
						break;
				}
				switch(turnTableElementLeftNum) {
					case 0:
						turnTableElementLeftNum = 5;
						break;

					case 6:
						turnTableElementLeftNum = 1;
						break;
				}
				switch(turnTableElementRightNum) {
					case 0:
						turnTableElementRightNum = 5;
						break;

					case 6:
						turnTableElementRightNum = 1;
						break;
				}
			}
		</script>
	</body>
</html>