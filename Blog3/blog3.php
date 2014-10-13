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
				<?php
				$dummyText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id est ut nisl lacinia varius. Mauris elit turpis, viverra nec dolor non, pulvinar ultricies elit. Proin convallis volutpat lacus, non iaculis enim sagittis eget. Aliquam mattis dictum velit, non rhoncus lectus varius et. Maecenas a venenatis leo, eget porta libero. In consequat, est vitae placerat eleifend, est libero interdum est, in rutrum elit quam vitae justo. Suspendisse ut nisi tortor. Integer nisi elit, iaculis quis dignissim at, tincidunt vel tortor. Fusce eget tellus vehicula, commodo mi ut, sagittis tortor. Donec suscipit diam arcu, non dapibus felis auctor id. Etiam felis diam, egestas sit amet ipsum id, ornare molestie felis. Duis lobortis, elit id viverra posuere, ligula metus laoreet nisi, nec ultricies augue dolor nec nunc. Morbi pretium sem vitae nunc adipiscing ultricies.';
						
				foreach ($dom->getElementsByTagName('outline') as $node) {
				$dom -> saveHtml($node);
					if (strcmp($node -> getAttribute('article'), 'true') == 0) {
						$id = str_replace('.', '_', str_replace(' ', '_', $node ->getAttribute('text')));
						echo '
						<div class="tile">
							<h4>
								<a href="#">' . 
									$node ->getAttribute('text') . 
								'</a>
							</h4>
							<div class="content" id="' . $id . '_content">
								<a href="#">' . 
									//substr($node->childNodes->item(0)->getAttribute('text'), 0, 360 - rand(0, 200)) . '...
									 //str_replace('</outline>', '</li>', str_replace('<outline', '<li', str_replace('text', 'value', $dom->saveXML($node)))) . '
									 //preg_replace('/<outline/', '<outline id="' . $id . '"', $dom->saveXML($node), 1) . '
									// $node->childNodes . '
									str_replace('<outline', '<div', str_replace('</outline', '</div', $dom->saveXML($node))) . '
								</a>
							</div>
							<!--<script>
								$("#' . $id . '_content").html($("#' . $id . '").html());
							</script>-->
						</div>';
					}
				}
				?>
				<!--<div class="tile">
					<h4>
						<?php
						foreach ($dom->getElementsByTagName('outline') as $node) {
							$dom -> saveHtml($node);
							if (strcmp($node -> getAttribute('article'), 'true') == 0) {
								echo '<a href="#">' . $node ->getAttribute('text') . '</a></li>';
								//echo '<a href="#">' . 'Tile Title' . '</a></li>';
							}
						}
						?>
					</h4>
					<div class="content">
						<?php
						$dummyText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id est ut nisl lacinia varius. Mauris elit turpis, viverra nec dolor non, pulvinar ultricies elit. Proin convallis volutpat lacus, non iaculis enim sagittis eget. Aliquam mattis dictum velit, non rhoncus lectus varius et. Maecenas a venenatis leo, eget porta libero. In consequat, est vitae placerat eleifend, est libero interdum est, in rutrum elit quam vitae justo. Suspendisse ut nisi tortor. Integer nisi elit, iaculis quis dignissim at, tincidunt vel tortor. Fusce eget tellus vehicula, commodo mi ut, sagittis tortor. Donec suscipit diam arcu, non dapibus felis auctor id. Etiam felis diam, egestas sit amet ipsum id, ornare molestie felis. Duis lobortis, elit id viverra posuere, ligula metus laoreet nisi, nec ultricies augue dolor nec nunc. Morbi pretium sem vitae nunc adipiscing ultricies.';
						foreach ($dom->getElementsByTagName('outline') as $node) {
							$dom -> saveHtml($node);
							if (strcmp($node -> getAttribute('article'), 'true') == 0) {
								//echo '<a href="#">' . trim($node ->getAttribute('text'), 360) . '</a></li>';
								echo '<a href="#">' . substr($dummyText, 0, 360 - rand(0, 100)) . '</a></li>';
							}
						}
						?>
					</div>
				</div>-->
			</div>
		</div>		
	</body>
</html>
