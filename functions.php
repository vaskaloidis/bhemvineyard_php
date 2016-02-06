<?php

function getSetup(){
	$setup = 'local'; //DATABSE & URL CONFIG
	return $setup;	
}


function dbConnect(){
	
	$setup = 'prod';
	
	if(getSetup()=='prod'){
		
		$conn = mysql_connect('localhost', 'root', 'worldcup2014');
		if(!$conn){
			die(mysql_error());
		}

		$db = mysql_select_db('bhemvineyard', $conn);

		if(!$db){
			die(mysql_error());
		}
		
	} elseif(getSetup()=='server') {
		
		$conn = mysql_connect('bhemvineyard.db.11135963.hostedresource.com', 'bhemvineyard', 'Cayuga1!');
		if(!$conn){
			die(mysql_error());
		}

		$db = mysql_select_db('bhemvineyard', $conn);

		if(!$db){
			die(mysql_error());
		}
	}

}



?>