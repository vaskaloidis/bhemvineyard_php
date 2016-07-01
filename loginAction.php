<?php 

require 'lib/content.php';
require 'lib/Config.php';
require 'lib/system.php';

$config = new Config('./etc/config.ini');
$content = new content();
$system = new system();

if(isset($_POST['loginSubmitted'])){

	if($_POST['username']==$config->get('username')){
		if($_POST['password']==$config->get('password')){
			$_SESSION['admin'] = TRUE;
			echo 'You have successfully logged-in, continue to <a href="index.php?admin">Admin Section</a>';
		}
	} else {
		echo 'Incorrect Username or Password';
	}
} else {
	echo 'Unauthorized';
}
?>