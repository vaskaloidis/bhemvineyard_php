<?php

class Config{
	public $ini = array();

	public function get($input){
   	 
    	$CONFIG = $this->ini['CONFIG'];
   	 
    	return $CONFIG[$input];
	}
    
	public function __construct($path) {
   	$this->ini = parse_ini_file($path, true);
   	 
	}    
}

?>