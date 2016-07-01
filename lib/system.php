<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class system {
    
    public $page;
    
    public static $config;
    
    public function __construct(){
        require_once 'Mobile_Detect.php';
        require_once 'Config.php';
        self::$config = new Config('./etc/config.ini');
        // $this->page = '';
    }
    
    public function getPage(){
        return $this->page;
    }
    
    public function setPage($input){
        $this->page = $input;
    }
    
    public static function database(){
        
        $addr = self::$config->get('dbAddress');
        $username = self::$config->get('dbUsername');
        $password = self::$config->get('dbPassword');
        $database = self::$config->get('dbDatabase');
        
        //$conn = new mysqli("localhost", "root", "root", "bhemvineyard");
                
        $conn = new mysqli($addr, $username, $password, $database);
        
        return $conn;
    }
    
    public function getDevice(){
        
        

        $detect = new Mobile_Detect();
        if($detect->isMobile()){
                $device = 'mobile';
        } else if($detect->isTablet()){
                $device = 'tablet';
        } else {
                $device = 'default';
        }
        //$device = 'mobile';
        return $device;
    }

	public function getUrl(){
		return self::$config->get('url');
	}
	
	public function getDir(){
		return self::$config->get('dir');
	}
	
	public function getAdmin(){
		
		return self::$config->get('url') . 'index.php?admin';
	}
}

?>
