<?php
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "posts");
//Code for the search box, prevents malicious users
//$search = mysqli_real_escape_string(htmlentities($_POST['search']));

function SQLSearch($searchString) {
	$query = mysqli_query($connect, "
		SELECT * FROM `posts` ORDER BY 'postDate'
		");

	while ($row = mysqli_fetch_array($query)) {
		
	}
}
?>