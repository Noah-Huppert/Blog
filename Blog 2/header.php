<?php
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "posts");

//Getting autocomplete tags
$autocompleteQuery = "SELECT postTitle FROM posts WHERE 1";
$autocompleteQueryResult = mysqli_query($connect, $autocompleteQuery) or die("no query");

$autocompleteQueryResult_array = array();

echo "
			<script>
			var searchAutocomplete = [";

while ($autocompleteQueryRow = mysqli_fetch_assoc($autocompleteQueryResult)) {
	echo '"' . $autocompleteQueryRow['postTitle'] . '",';
}

echo '
			"Programing", "Animation", "Robotics", "Other"];
			</script>';
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
<script>
	//Search Box
	$('#searchEntry').hide();
	$('#searchEntry').autocomplete({
		source : searchAutocomplete
	});
	$('#searchBar').click(function() {
		$('#searchEntry').toggle('slow');
		$('#searchEntry').focus();
	}); 
</script>