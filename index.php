<?php 
require 'lib/content.php';
require 'lib/Config.php';
require 'lib/system.php';

$config = new Config('./etc/config.ini');
$content = new content();
$system = new system();

$alertMessage = false;
$alertError = false;

if(isset($_POST['loginSubmitted'])){

	if($_POST['username']==$config->get('username')){
		if($_POST['password']==$config->get('password')){
			$_SESSION['admin'] = TRUE;
			$alertMessage = "You ahve logged-in succesfully!";
			$pgae = 'Admin';
			require $system->getDir() . 'head.php';
			require $system->getDir() . 'admin.php';
		}
	} else {
		echo '<div class="alert alert-failure">Incorrect Username or Password</div>';
	}

} elseif(isset($_POST['form'])){

    if(isset($_POST['section'])){
        
        $admin = true;
        
        $page = 'Admin';

        require $system->getDir() . 'head.php';
		
        require $system->getDir() . 'forms/modifySectionForm.php';

    }	 
} elseif(isset($_POST['action'])){

	$action = $_POST['action'];
	
	if($action == 'edit'){
		
		if(isset($_POST['section'])){
						
			$page = 'Modify Section';
			
			require $system->getDir() . 'head.php';
			
			require $system->getDir() . 'actions/modifySectionAction.php';
			
		} elseif(isset($_POST['optionID'])){
			
			$page = 'Modify Options';
			
			require $system->getDir() . 'head.php';
			
			require $system->getDir() . 'actions/modifyOptionAction.php';
		}

	}
	echo '<h2>Update successful!</h2><br />';
	
	echo '<br />Return to <a href="' . $system->getUrl() . 'index.php?admin' . '">Admin section</a>';
	echo '<br />Return to <a href="' . $system->getUrl() . 'index.php?home">Bethlehem Vineyard Website</a><br />';
} elseif(!isset($_GET)  
		|| empty($_GET) 
		|| isset($_GET['home'])) {  //Home
		$system->setPage('Home');		
		require $system->getDir() . 'head.php';
		require $system->getDir() . 'home.php';
		require $system->getDir() . 'wines.php';

	} else if(isset($_GET['admin'])){ //Admin
		$pgae = 'Admin';
		require $system->getDir() . 'head.php';
		require $system->getDir() . 'admin.php';

	} else if(isset($_GET['wine'])){
		$system->setPage('Wine');
		require $system->getDir() . 'head.php';
		echo '<h2 class="muted nobreak">Wine</h2>';
		require $system->getDir() . 'wines.php';

	} else if(isset($_GET['about'])){ //About
		$system->setPage('About');
		require $system->getDir() . 'head.php';
		require $system->getDir() . 'about.php';

	} else if(isset($_GET['contact'])){ //Contact
		$system->setPage('Contact');
		require $system->getDir() . 'head.php';
		require $system->getDir() . 'contact.php';

	} else if(isset($_GET['directions'])){ //Directions
		$system->setPage('Directions');
		require $system->getDir() . 'head.php';
		require $system->getDir() . 'directions.php';

	} else if(isset($_GET['photo'])){ //Single Photo
		$system->setPage('Home');
		require 'photos.php';

	}else if(isset($_GET['success'])){ //Purchase
		$system->setPage('Successful Purchase');
		require $system->getDir() . 'head.php';
		require $system->getDir() . 'success.php';

	}else if(isset($_GET['photos'])){ //Photos
		$system->setPage('Photos');
		require $system->getDir() . 'photos.php';

	} else if(isset($_GET['logout'])) { //Logout
		require $system->getDir() . 'logout.php';	
		$system->setPage('Home');
		
		$alertMessage = "You have logged-out succesfully";

		require $system->getDir() . 'head.php';
		require $system->getDir() . 'home.php';
		require $system->getDir() . 'wines.php';

	} else { //Default
        require $system->getDir() . 'head.php';
		echo '<div style="margin:100px">';
		echo 'Web page cannot be found. <a href="?home>"Go Home.</a>';
		echo '</div>';
	}
        

?>
<br />



<?php require './foot.php'; ?>
