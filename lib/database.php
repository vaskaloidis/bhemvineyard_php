<?php

class database {
    
    public static $conn;
    
    public function __construct() {
        

    }
    
    public function __destruct() {

        self::$conn->close();
    }
}


?>