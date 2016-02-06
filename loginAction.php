<?php 
if(isset($_POST['loginSubmitted'])){

	if($_POST['username']=='joe'){
		if($_POST['password']=='whitewine'){
			$_SESSION['admin'] = TRUE;
                        //echo 'I am upgrading the Admin section Mr. Reardon, so for now it is temporarily unavailable. I am available to update any site content myself until it is back up in the next day or two.';
			echo 'You have successfully logged in Joe, continue to <a href="index.php?admin">Admin Section</a>';
		}
	} else 	if($_POST['username']=='vas'){
				if($_POST['password']=='cayuga'){
					$_SESSION['admin'] = TRUE;
					echo 'You have successfully logged in Vas, continue to <a href="index.php?admin">Admin Section</a>';
				}
	} else {
		echo 'Incorrect Username or Password';
	}



}
?>