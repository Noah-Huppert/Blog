<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Noah Huppert</title>
		
		<link rel="stylesheet" href="css/blog3.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css"
		

		<script src="js/bootstrap/bootstrap.min.js"></script>
		<script src="js/jquery/jquery.min.js" type="text/javascript"></script>
		<?php
		$dom = new DOMDocument;
		libxml_use_internal_errors(true);
		$html = file_get_contents('http://dl.dropboxusercontent.com/s/8u8lxfczjhrbkda/noahhuppert.opml');
		$dom -> loadHTML($html);
		
		function checkChildren($inputNode){
			if($inputNode->hasChildNodes() == true){
				echo '<ul style="list-style: none;">';
				foreach($inputNode->childNodes as $cNode){
					switch($cNode->hasChildNodes()){
						case true:
							if(strcmp($cNode -> getAttribute('article'), 'true') == 0){
								echo '<li id="' . $cNode -> getAttribute('text') . '" data-state="open"><img style="margin-bottom: 2px; margin-right: 6px;" width="7px" height="12px" src="img/closedArrow.PNG" />' . $cNode->getAttribute('text') . '</li>';
							} else{
								echo '<li data-state="open"><img style="margin-bottom: 2px; margin-right: 6px;" width="7px" height="12px" src="img/closedArrow.PNG" />' . $cNode->getAttribute('text') . '</li>';
							}
						break;
						case false:
							if(strcmp($cNode -> getAttribute('article'), 'true') == 0){
								echo '<li id="' . $cNode -> getAttribute('text') . '" >' . $cNode->getAttribute('text') . '</li>';
							} else{
								echo '<li>' . $cNode->getAttribute('text') . '</li>';
							}
						break;
					}
					checkChildren($cNode);
				}
				echo '</ul>';
			}
		}
		?>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			 <div class="navbar-header">
			 	<a class="navbar-brand" href="#">Noah Huppert</a>
			 </div>
			 <ul class="nav navbar-nav navbar-right">
						<?php
						foreach ($dom->getElementsByTagName('outline') as $node) {
							$dom -> saveHtml($node);
							if (strcmp($node -> getAttribute('catagory'), 'true') == 0) {
								echo '<li><a href="#">' . $node -> getAttribute('text') . '</a></li>';
							}
						}
						?>
						<li><a href="#">Archive</a></li>
			</ul>
		</nav>
		
		<div class="container">
			<div class="row">
				<ul id="opmlList" style="list-style: none;">
					<?php
					foreach ($dom->getElementsByTagName('outline') as $node) {
						$dom -> saveHtml($node);
						if (strcmp($node -> getAttribute('catagory'), 'true') == 0) {
							echo '<li  id="' . $node -> getAttribute('text') . '" data-state="open"><img style="margin-bottom: 2px; margin-right: 6px;" width="7px" height="12px" src="img/closedArrow.PNG" />' . $node->getAttribute('text') . '</li>';
							checkChildren($node);
						}
					}
					?>
				</ul>
			</div>
		</div>	
		<script>
		</script>
	</body>
</html>
