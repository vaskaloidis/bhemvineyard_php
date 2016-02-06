<?php


$isLoggedIn = 'yes';

$conn = $system::database();


if(isset($_POST['section'])){
	
	$content = $_POST['content'];
	$id = $_POST['id'];
	
	$query = $conn->query("UPDATE content SET content = '$content' WHERE id = '$id'");
	
	echo 'Update successful<br />';
	
}

?>
