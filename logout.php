<?php $page = 'Home'; ?>
<?php include('head.php');

unset($_SESSION['admin']);

session_destroy();
session_unset();



 ?>



<strong>You have successfully logged out!</strong>
<?php include('foot.php'); ?>