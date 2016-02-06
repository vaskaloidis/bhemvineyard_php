<?php


//$system = new system();

$conn = $system::database();


$optionName = $_POST['optionName'];
$optionValue = $_POST[$optionName];

$query = 'UPDATE options SET value = ' . $optionValue . ' WHERE id = ' . $_POST["optionID"] . ' ';

$conn->query($query);




?>
