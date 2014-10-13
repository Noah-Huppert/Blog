<!--NOTE TO FUTURE SELF WHEN POST ORDERING SYSTEM BREAKS SUDDENLY
	
	
	NOTE CURRENT POST ORDERING SYSTEM IS ONLY VALID UNTIL 999 POSTS
	
	
	
	
	TO FIX USE OTHER SYSTEM BESIDES PUTING POST NUMBER IN MILISECOND SPACE OF POST CREATION DATE
	
	
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Noah Huppert</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/Blog3/css/styles.css" />
		<link rel="stylesheet" href="/Blog3/css/bootstrap.min.css">
		<link rel="stylesheet" href="/Blog3/css/bootstrap-theme.min.css">
		<link href='http://fonts.googleapis.com/css?family=Sonsie+One|Coda+Caption:800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/code-prettify-desert.css"/>

		<script src="/Blog3/js/bootstrap/bootstrap.min.js"></script>
		<script src="/Blog3/js/jquery/jquery.min.js" type="text/javascript"></script>
		<script src='/Blog3/js/transit/jquery.transit.min.js'></script>
		<script src="/Blog3/js/google-code-prettify/run_prettify.js"></script>
		<?php
		$dom = new DOMDocument;
		libxml_use_internal_errors(true);
		$html = file_get_contents('http://dl.dropboxusercontent.com/s/8u8lxfczjhrbkda/noahhuppert.opml');
		$dom -> loadHTML($html);
		
		$domP = new DOMDocument;
		libxml_use_internal_errors(true);
		$htmlP = file_get_contents('http://dl.dropbox.com/s/b38ye2ds2x31nch/noahHuppertPortfolio.opml');
		$domP -> loadHTML($htmlP);
		
		function checkChildren($inputNode){
			if($inputNode->hasChildNodes() == true){
				if (strcmp($inputNode -> getAttribute('catagory'), 'true') == 0) {
					$catagory = $inputNode -> getAttribute('text');
				}
				echo '<ul style="list-style: none;">';
				foreach($inputNode->childNodes as $cNode){
					switch($cNode->hasChildNodes()){
						case true:
							if(strcmp($cNode -> getAttribute('article'), 'true') == 0){
								echo '<details open class="post expandible" id="' . str_replace(' ', '_', $cNode -> getAttribute('text')) . '" data-created="' . $cNode -> getAttribute('created') . '"><summary class="expandibleTitle"><a href="/Blog3/Blog/' . $catagory . '/' . str_replace(' ', '_', $cNode -> getAttribute('text')) .'">' . $cNode->getAttribute('text') . '</a><span class="mobileCollapse">Less</span></summary>';
								checkChildren($cNode);
								echo "</details>";
							} else{
								echo '<details open><summary data-state="open" class="expandible expandibleTitle">' . $cNode->getAttribute('text') . '<span class="mobileCollapse">Less</span></summary>';
								checkChildren($cNode);
								echo '</details>';
							}
						break;
						case false:
							if(strcmp($cNode -> getAttribute('article'), 'true') == 0){
								echo '<details open id="' . str_replace(' ', '_', $cNode -> getAttribute('text')) . '" data-created="' . $cNode -> getAttribute('created') . '"><summary class="post" data-state="open"><a href="/Blog3/Blog/' . $catagory . '/' . str_replace(' ', '_', $cNode -> getAttribute('text')) .'">' . $cNode->getAttribute('text') . '</a><span class="mobileCollapse">Less</span></summary>';
								//echo '<li class="post" id="' . str_replace(' ', '_', $cNode -> getAttribute('text')) . '" data-state="open">' . $cNode->getAttribute('text') . '</li>';
								checkChildren($cNode);
								echo "</details>";
							} else{
								echo '<li>' . $cNode->getAttribute('text') . '</li>';
								checkChildren($cNode);
							}
						break;
					}
					//checkChildren($cNode);
				}
				echo '</ul>';
			}
		}

		//FOR PORTFOLIO
		function checkChildrenP($inputNode){
			if($inputNode->hasChildNodes() == true){
				if (strcmp($inputNode -> getAttribute('catagory'), 'true') == 0) {
					$catagory = $inputNode -> getAttribute('text');
				}
				echo '<ul style="list-style: none;">';
				foreach($inputNode->childNodes as $cNode){
					switch($cNode->hasChildNodes()){
						case true:
							if(strcmp($cNode -> getAttribute('article'), 'true') == 0){
								echo '<details open class="post expandible" id="' . str_replace(' ', '_', $cNode -> getAttribute('text')) . '"><summary class="expandibleTitle"><a href="/Blog3/Portfolio/' . $catagory . '/' . str_replace(' ', '_', $cNode -> getAttribute('text')) .'">' . $cNode->getAttribute('text') . '</a><span class="mobileCollapse">Less</span></summary>';
								checkChildren($cNode);
								echo "</details>";
							} else{
								echo '<details open><summary data-state="open" class="expandible expandibleTitle">' . $cNode->getAttribute('text') . '<span class="mobileCollapse">Less</span></summary>';
								checkChildren($cNode);
								echo '</details>';
							}
						break;
						case false:
							if(strcmp($cNode -> getAttribute('article'), 'true') == 0){
								echo '<details open id="' . str_replace(' ', '_', $cNode -> getAttribute('text')) . '"><summary class="post" data-state="open"><a href="/Blog3/Portfolio/' . $catagory . '/' . str_replace(' ', '_', $cNode -> getAttribute('text')) .'">' . $cNode->getAttribute('text') . '</a><span class="mobileCollapse">Less</span></summary>';
								//echo '<li class="post" id="' . str_replace(' ', '_', $cNode -> getAttribute('text')) . '" data-state="open">' . $cNode->getAttribute('text') . '</li>';
								checkChildren($cNode);
								echo "</details>";
							} else{
								echo '<li>' . $cNode->getAttribute('text') . '</li>';
								checkChildren($cNode);
							}
						break;
					}
					//checkChildren($cNode);
				}
				echo '</ul>';
			}
		}
		?>
	</head>
	<body onload="load();" onresize="resize();">
		<div class="alert alert-danger" id="HTML5Message">
			It appears that your browser does not support HTML5, because of this some features on this website will not function properly. 
			If you would like to look into a HTML5 supported browser <a href="http://mobilehtml5.org/">click here</a>.
		</div>
		<noscript class="alert alert-danger" id="JSMessage">
			Javascript is not enabled on your browser, because of this the website will not function properly.
			 If you do not know how to enable JavaScript <a href="http://enable-javascript.com/">click here</a>
		</noscript>
		<!--<img id="bodyBackground" src="img/background1.jpg"/>-->
		<!--<div class="" id="topMenu">
		<div id="blogOptions" style="float: left;">
		<h3 class="menuOption bMenuOption">Blog</h3>
		<h4 class="menuOption bMenuOption">Programming</h4>
		<h4 class="menuOption bMenuOption">Animation</h4>
		<h4 class="menuOption bMenuOption">Robotics</h4>
		<h4 class="menuOption bMenuOption">Other</h4>
		<h4 class="menuOption">Archive</h4>
		</div>

		<img style="margin-left: 65px;" src="img/headerStar3.png" width="100" height="100" />

		<div style="float: right;" id="protfolioOptions">
		<h4 class="menuOption">Archive</h4>
		<h4 class="menuOption pMenuOption">Other</h4>
		<h4 class="menuOption pMenuOption">Robotics</h4>
		<h4 class="menuOption pMenuOption">Animation</h4>
		<h4 class="menuOption pMenuOption">Programming</h4>
		<h3 class="menuOption pMenuOption">Portfolio</h3>
		</div>
		</div>-->
		<div id="navContainer">
			<div id="navBar">
					<span data-toggle="dropdown" class="navMenuOption" id="blogButton">Blog</span>
					<!--<ul class="dropdown-menu">
   						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Programming</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Animation</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Robotics</a></li>
   						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Other</a></li>
					</ul>-->
					<div id="blogMenuOptions">
						<a href="/Blog3/Blog/Programming">Programming</a>
						<a href="/Blog3/Blog/Animation">&nbsp;Animation</a>
						<a href="/Blog3/Blog/Robotics">&nbsp;Robotics</a>
						<a href="/Blog3/Blog/Other">&nbsp;Other</a>
					</div>
					
					<div id="portfolioMenuOptions">
						<a href="/Blog3/Portfolio/Programming">Programming</a>
						<a href="/Blog3/Portfolio/Animation">&nbsp;Animation</a>
						<a href="/Blog3/Portfolio/Robotics">&nbsp;Robotics</a>
						<a href="/Blog3/Portfolio/Other">&nbsp;Other</a>
					</div>
				<!--<div class="col-md-2">-->
					<img style="cursor: pointer;" id="headerImage" src="/Blog3/img/headerStar3.png" width="100" height="100" />
				<!--</div>-->
				<span class="navMenuOption" id="portfolioButton">Portfolio</span>
			</div>
		</div>
		
		<div id="mNavBar">
			<span class="glyphicon glyphicon-align-justify" id="mMenuButton">&nbsp;</span>
			<div id="mOptions">
				<div class="mHeaderOption" id="mAboutMeButton">
					<a href="/Blog3/aboutMe">About Me</a>
				</div>
				<div class="mHeaderOption" id="mBlogButton">
					<a href="/Blog3/Blog">Blog</a>
				</div>
				<ul class="msubOptions" id="mBlogOptions">
					<li><a href="/Blog3/Blog/Programming">Programming</a></li>
					<li><a href="/Blog3/Blog/Animation">&nbsp;Animation</a></li>
					<li><a href="/Blog3/Blog/Robotics">&nbsp;Robotics</a></li>
					<li><a href="/Blog3/Blog/Other">&nbsp;Other</a></li>
				</ul>
				<div class="mHeaderOption" id="mBlogButton">
					<a href="/Blog3/Portfolio">Portfolio</a>
				</div>
				<ul class="msubOptions" id="mPortfolioOptions">
					<li><a href="/Blog3/Portfolio/Programming">Programming</a></li>
					<li><a href="/Blog3/Portfolio/Animation">&nbsp;Animation</a></li>
					<li><a href="/Blog3/Portfolio/Robotics">&nbsp;Robotics</a></li>
					<li><a href="/Blog3/Portfolio/Other">&nbsp;Other</a></li>
				</ul>
			</div>
		</div>

		<div style="background: #FFFFFF; padding: 0;" class="container">
			<div id="content">
				<div id="aboutMePage" class="page">
					<div class="text-center">
						<h2 style="font-family: Coda Caption;">About Me</h2>
						<div id="aboutMe" class="text-center" style="max-width: 600px; margin: auto; margin-top: 50px; margin-bottom: 50px;">
							My name is Noah Huppert and I am 15 years old. I am currently 
							attending Lincoln Sudbury High School. I enjoy programming and 
							animating. I created this blog along with the other sites in 
							this domain. You can check out my portfolio here, or check out 
							my recent blog posts here. I am experienced in HTML, CSS, PHP, 
							Javascript, Java, C#, and C++. I am a good problem solver and 
							enjoy working with others.
						</div>
						<hr>
						<h2 style="margin-top: 50px; font-family: Coda Caption;">Skills</h2>
						<div class="text-center" style="max-width: 600px; margin: auto; margin-top: 50px; margin-bottom: 50px;">
							Over the years of experience with programming and animation among 
							other things I have acquired many skills. Below I have listed a 
							personal rating of each of my skills.
							<br>
							<br>
							<div style="text-align: left; line-height: 18px;">
								<strong>Key:</strong>
								<br>
								Each Skill has 5 stars<br>
								Each star shows 20% confidence and knowledge about skill.
								<div>
									&nbsp;
								</div>
								<ul class="list-group" style="max-width: 450px; display: inline-block; font-size: 18px;">
									<li class="list-group-item">
										<span class="glyphicon glyphicon-star subStar"></span>
										<span class="skillListDivider" style="margin-left: 10px;"></span>
										<span style="font-size: 12px; margin-left: 10px;">A grayed out star shows a star that is possible to be filled, but is not. </span>
									</li>
									<li class="list-group-item">
										<span class="glyphicon glyphicon-star"></span>
										<span class="skillListDivider" style="margin-left: 10px;"></span>
										<span style="font-size: 12px; margin-left: 10px;">A solid star shows a completed star</span>
									</li>
									<li class="list-group-item">
										<span class="glyphicon glyphicon-star learningStar"></span>
										<span class="skillListDivider" style="margin-left: 10px;"></span>
										<span style="font-size: 12px; margin-left: 10px;">A light blue star shows a star that is in the progress of being learned</span>
									</li>
								</ul>
								<br>
								<span style="opacity: 0.4;">
									You might notice there is a learning stars after almost every
									catagory. I am constantly learning new things and practicing 
									each and every skill on a weekly basis.
								</span>
							</div>
						</div>
						
						<h4 style="margin-top: 50px; font-family: Coda Caption;">Overall</h4>
						<ul class="list-group skillsList largeTitles">
							<li class="list-group-item">
								<span class="skillTitle">Programming</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									70%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">3D Art</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									50%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">Robotics</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									60%
								</span>
							</li>
						</ul>
						
						<h4 style="margin-top: 50px; font-family: Coda Caption;">Programming</h4>
						<ul class="list-group skillsList">
							<li class="list-group-item">
								<span class="skillTitle">HTML</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									90%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">CSS</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									90%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">PHP</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									70%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">Javascript</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									70%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">Java</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									50%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">C++</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									30%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">C#</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									70%
								</span>
							</li>
						</ul>
						
						<h4 style="margin-top: 50px; font-family: Coda Caption;">3D Art</h4>
						<ul class="list-group skillsList largeTitles">
							<li class="list-group-item">
								<span class="skillTitle">Project Planning</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									50%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">3D modeling</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									70%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">3D animation</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									50%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">Texturing</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									30%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">Rendering</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									70%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">Particles</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									30%
								</span>
							</li>
						</ul>
						
						<h4 style="margin-top: 50px; font-family: Coda Caption;">Robotics</h4>
						<ul class="list-group skillsList largeTitles">
							<li class="list-group-item">
								<span class="skillTitle">Design</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									70%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">Fabrication</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
									<span class="glyphicon glyphicon-star subStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									30%
								</span>
							</li>
							<li class="list-group-item">
								<span class="skillTitle">Robot Coding</span>
								<span class="skillListDivider">&nbsp;</span>
								<span class="ratingStarContainer">
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star">&nbsp;</span>
									<span class="glyphicon glyphicon-star learningStar">&nbsp;</span>
								</span>
								<span class="altRatingStar">
									90%
								</span>
							</li>
						</ul>
					</div>
				</div>
				
				<div id="blogPage" class="page">
					<!--<div class="text-center">-->
						<h2 class="text-center" style="font-family: Coda Caption;">Blog</h2>
						<div id="order"></div>
						<div class="row">
							<ul id="opmlList" style="list-style: none;">
								<?php
								foreach ($dom->getElementsByTagName('outline') as $node) {
									$dom -> saveHtml($node);
									if (strcmp($node -> getAttribute('catagory'), 'true') == 0) {
										echo '<details open id="' . $node -> getAttribute('text') . '"><summary class="expandibleTitle"><a href="/Blog3/Blog/' . $node -> getAttribute('text') . '">' . $node->getAttribute('text') . '</a></summary>';
										checkChildren($node);
										echo "</details>";
									}
								}
								?>
							</ul>
							<ul id="opmlListClone">
								<div id="top"></div>
							</ul>
						</div>
					<!--</div>-->
				</div>
				
				<div id="portfolioPage" class="page">
					<!--<div class="text-center">-->
						<h4 style="font-family: Coda Caption;" class="text-center">Portfolio</h4>
						<div class="row">
							<ul id="opmlList" style="list-style: none;">
								<?php
								foreach ($domP->getElementsByTagName('outline') as $node) {
									$domP -> saveHtml($node);
									if (strcmp($node -> getAttribute('catagory'), 'true') == 0) {
										echo '<details open id="' . $node -> getAttribute('text') . '"><summary class="expandibleTitle"><a href="/Blog3/Portfolio/' . $node -> getAttribute('text') . '">' . $node->getAttribute('text') . '</a></summary>';
										checkChildrenP($node);
										echo "</details>";
									}
								}
								?>
							</ul>
						<!--</div>-->
					</div>
				</div>
			</div>
		</div>

		<script>
			function load() {
				setSize();
				setPage();
				setBackground();
				orderPosts();
			}
			
			function resize(){
				setSize();
				setBackground();
			}
			
			function setBackground(){
					if($(window).width() >= 767){
						$('body').css({
							'background' : 'url("/Blog3/img/backgroundL.jpg")'
						});
					}
					
					if($(window).width() < 767 && $(window).width() >= 553){
						$('body').css({
							'background' : 'url("/Blog3/img/backgroundM.jpg")'
						});
					}
					
					if($(window).width() < 553 && $(window).width() >= 350){
						$('body').css({
							'background' : 'url("/Blog3/img/backgroundS.jpg")'
						});
					}
					
					if($(window).width() < 350){
						$('body').css({
							'background' : 'url("/Blog3/img/backgroundXS.jpg")'
						});
					}
			}

			function setSize() {
				$('#JSMessage').hide();
				if (!('open' in document.createElement('details'))) {//Detects if browser can support HTML5 and displays appropriate message.
  					$('#HTML5Message').show();
				}
				$('#blogMenuOptions').css({
					'y' : '-120'
				});
				
				$('#portfolioMenuOptions').css({
					'y' : '-120'
				});
				if($(window).width() >= 767 && (($(window).width() / 4) * 3) <= 1440){//making sure there is a little space on the side of content
					$('.container').width(($(window).width() / 4) * 3);
					$('.mobileCollapse').hide();//remove easier expand collapse button 
					$('#mNavBar').hide();
					$('#navContainer').show();
				}
				if($(window).width() <= 767){//making sure there is a little space on the side of content
					$('.container').width($(window).width() - 20);
					$('.mobileCollapse').show();//easier expand collapse button 
					$('#mNavBar').show();
					$('#navContainer').hide();
				}
				if($(window).width() <= 553){//Making sure rating stars do now leak outside of content area
					$('#opmlList details details').css({//Makes indent size of each item less
						'margin-left' : '-25px'
					});
					$('#opmlList details details li').css({//Makes indent size of each content item less
						'margin-left' : '-25px'
					});
					$('#opmlList details details').attr("closed","");
					$('#opmlList details details').removeAttr("open");
					$('#opmlListClone details').attr("closed","");
					$('#opmlListClone details').removeAttr("open");
					$('.mobileCollapse').html('More');
					$('.altRatingStar').show();
					$('.skillListDivider').hide();
					$('.ratingStarContainer').hide();
				}
				
				if($(window).width() > 553){//Making sure rating stars do now leak outside of content area
					$('#opmlList details details').css({
						'margin-left' : ''
					});
					$('#opmlList details details li').css({
						'margin-left' : ''
					});
					$('#opmlList details details').attr("open","");
					$('#opmlList details details').removeAttr("closed");
					$('#opmlListClone details').attr("open","");
					$('#opmlListClone details').removeAttr("closed");
					$('.mobileCollapse').html('Less');
					$('.altRatingStar').hide();
					$('.skillListDivider').show();
					$('.ratingStarContainer').show();
				}
				$('.mobileCollapse').click(function(){//Make so label corsponds to details state
					switch($(this).html()){
						case 'More':
							$(this).html('Less');
						break;
						
						case 'Less':
							$(this).html('More');
						break;
					}
				});
				$('#opmlList details details summary').click(function(){//Make so label corsponds to details state
					switch($(this).children(".mobileCollapse").first().html()){
						case 'More':
							$(this).children(".mobileCollapse").first().html('Less');
						break;
						
						case 'Less':
							$(this).children(".mobileCollapse").first().html('More');
						break;
					}
				});
				$('#mMenuButton').click(function(){
					switch($('#mOptions').css('display')){
						case 'none':
							$('#mOptions').show();
						break;
						
						default:
							$('#mOptions').hide();
						break;
					}
				});
			}
			
			function orderPosts(){
				var months = new Array("null", "Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec");
				var baseYear = 2013;
				var counter = 0;
				var monthCounter = 0;
				var dayCounter = 0;
				var yearCounter = baseYear;
				var dates = new Array();
				var tempDate;// = new Array();
				var tempDateArray = new Array();
				var sortA = new Array();
				var sortB = new Array();
				$('#blogPage .post').each(function(){
					/*if(yearCounter <= new Date().getFullYear()){
						$(this).append($(this).data("created") + "<br>");
						//yearCounter = yearCounter + 1;
					}*/
					tempDate = $(this).data("created");
					tempDateArray = tempDate.split(",");
					tempDate = tempDateArray[1];
					tempDateArray = tempDate.split(" ");
					tempDate = tempDateArray[3] + "-" + months.indexOf(tempDateArray[2]) + "-" + tempDateArray[1] + " "  + "0:0:" + counter;// + " " + tempDateArray[4];
					//Mon, 28 Oct 2013 01:31:15 GMT
					//year, month, day, hours, minutes, seconds, milliseconds
					tempDate[1] = $(this);
					dates.push(new Date(tempDate));
					$(this).attr("data-postnumber", doubleNumber(counter));
					counter = counter + 1;
				});
				var sortedDates = dates.slice(0).sort(function(a,b){
					 return (new Date(b))-(new Date(a))
				});
				while(monthCounter < dates.length){
					//$('#order').append(sortedDates[monthCounter] + " | " + '#blogPage .post[data-postnumber=' + sortedDates[monthCounter].toString().split(" ")[4].split(":")[2] + ']' + "<br>");
					$('#blogPage .post[data-postnumber=' + sortedDates[monthCounter].toString().split(" ")[4].split(":")[2] + ']').attr("data-postorder", monthCounter);
					monthCounter = monthCounter + 1;
				}
				counter = 0;
				while(counter < $('#blogPage .post').length){
					$('#top').append("<details open>" + $('#blogPage .post[data-postorder="' + counter + '"]').html() + "</details>");
					counter = counter + 1;
				}
			}
			
			function doubleNumber(inputNumber){
				if(inputNumber < 10){
					return "0" + inputNumber;
				}
				return inputNumber;
			}
			
			function setPage(){
				var rawURL = document.URL;//
				var splitURL = rawURL.split('/');
				var URLOffset = 4;//Were new paths start for page. In this case http: | //127.0.0.1/ | Blog3/ | aboutMe <-- New pages start here on 4th split
				var URLSelectCounter = 0;
				var URLCatagory = splitURL[URLOffset];
				var URLPage = ['0'];
				while(URLSelectCounter < splitURL.length - URLOffset){
					URLPage[URLSelectCounter] = splitURL[URLOffset + URLSelectCounter];
					URLSelectCounter = URLSelectCounter + 1;
				}
				$('.page').hide();
				//If urlPage is not set show aboutMe
				if(URLPage[0] != 'Blog' && URLPage[0] != 'Portfolio'){
					$('#portfolioButton').click(function(){
						window.location = '/Blog3/Portfolio/';
					});
					$('#blogButton').click(function(){
						window.location = '/Blog3/Blog/';
					});
					$('#aboutMePage').show();
				}
				if(URLPage[0] == 'Blog' || URLPage[0] == 'Portfolio'){//If urlPage is defined as valid
					switch(URLPage[0]){
						case 'Blog':
							$('#portfolioButton').click(function(){
								window.location = '/Blog3/Portfolio/';
							});
							$('#blogPage').show();
							$('#opmlList').hide();
							switch(URLPage[1]){
								case 'Programming':
									$('#blogPage #Animation').hide();
									$('#blogPage #Robotics').hide();
									$('#blogPage #Other').hide();
									$('#blogPage #Programming').show();
									$('#opmlListClone').hide();
									$('#opmlList').show();
									showPost();
								break;
								
								case 'Animation':
									$('#blogPage #Programming').hide();
									$('#blogPage #Robotics').hide();
									$('#blogPage #Other').hide();
									$('#blogPage #Animation').show();
									$('#opmlListClone').hide();
									$('#opmlList').show();
									showPost();
								break;
								
								case 'Robotics':
									$('#blogPage #Animation').hide();
									$('#blogPage #Programming').hide();
									$('#blogPage #Other').hide();
									$('#blogPage #Robotics').show();
									$('#opmlListClone').hide();
									$('#opmlList').show();
									showPost();
								break;
								
								case 'Other':
									$('#blogPage #Animation').hide();
									$('#blogPage #Robotics').hide();
									$('#blogPage #Programming').hide();
									$('#blogPage #Other').show();
									$('#opmlListClone').hide();
									$('#opmlList').show();
									showPost();
								break;
							}
						break;
						
						case 'Portfolio':
							$('#blogButton').click(function(){
								window.location = '/Blog3/Blog/';
							});
							$('#portfolioPage').show();
							switch(URLPage[1]){
								case 'Programming':
									$('#portfolioPage #Animation').hide();
									$('#portfolioPage #Robotics').hide();
									$('#portfolioPage #Other').hide();
									$('#portfolioPage #Programming').show();
									showPost();
								break;
								
								case 'Animation':
									$('#portfolioPage #Programming').hide();
									$('#portfolioPage #Robotics').hide();
									$('#portfolioPage #Other').hide();
									$('#portfolioPage #Animation').show();
									showPost();
								break;
								
								case 'Robotics':
									$('#portfolioPage #Animation').hide();
									$('#portfolioPage #Programming').hide();
									$('#portfolioPage #Other').hide();
									$('#portfolioPage #Robotics').show();
									showPost();
								break;
								
								case 'Other':
									$('#portfolioPage #Animation').hide();
									$('#portfolioPage #Robotics').hide();
									$('#portfolioPage #Programming').hide();
									$('#portfolioPage #Other').show();
									showPost();
								break;
							}
						break;
					}
				}
				//If url page is aboutMe show about me page
				if(URLPage[0] == 'aboutMe'){
					$('#aboutMePage').show();
				}
				
				function showPost(){
					if(URLPage.length >= 3 && URLPage[2] != ''){
						switch(URLPage[0]){
							case 'Blog':
								$('#blogPage .post').hide();
								$('#blogPage #' + URLPage[2]).show();
							break;
							
							case 'Portfolio':
								$('#portfolioPage .post').hide();
								$('#portfolioPage #' + URLPage[2]).show();
							break;
						}
					}
				}
			}
			
			//Top Menus
			$('#blogButton').click(function(){//Blog Menu Options
				switch($('#headerImage').css('opacity')){
					case '0':
						$('#headerImage').transition({y: 0, opacity: 1, delay: 300});
      					$('#portfolioButton').transition({y: 0, opacity: 1, delay: 300});
      					$('#blogButton').transition({x: 0});
      					$('#blogMenuOptions').transition({y: -120});
      				break;
      				
      				case '1':
      					$('#headerImage').transition({y: 120, opacity: 0});
      					$('#portfolioButton').transition({y: -120, opacity: 0});
      					$('#blogButton').transition({x: -100, delay: 200});
      					$('#blogMenuOptions').transition({y: 45, delay: 300});
      				break;
				}
			});
			
			$('#portfolioButton').click(function(){
				switch($('#headerImage').css('opacity')){//Portfolio Menu Options
					case '0':
						$('#headerImage').transition({y: 0, opacity: 1, delay: 300});
      					$('#blogButton').transition({y: 0, opacity: 1, delay: 300});
      					$('#portfolioButton').transition({x: 0});
      					$('#portfolioMenuOptions').transition({y: -120});
      				break;
      				
      				case '1':
      					$('#headerImage').transition({y: 120, opacity: 0});
      					$('#blogButton').transition({y: -120, opacity: 0});
      					$('#portfolioButton').transition({x: 110, delay: 200});
      					$('#portfolioMenuOptions').transition({y: 45, delay: 300});
      				break;
				}
			});
			
			//Header image on click
			$('#headerImage').click(function(){
				$('#headerImage').transition({rotate: 360, duration: 1000}).transition({rotate: 0, duration: 0});
				setTimeout(function () {
       				window.location = '/Blog3/aboutMe';
   				}, 1000);
			});
		</script>
	</body>
</html>