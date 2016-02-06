<?php

class content {
    
    function __construct(){
        
    }

    function Get_Wines($wine_tasting = false, $alternate = false){

            if($wine_tasting){
                    include('lib/content/wine_tasting.php');
            }

            include('lib/content/wines.php');
    }

    public static function getSection($input){

        $sql = "SELECT * FROM content WHERE section='about'"; 

        $query = $system::database()->query($sql);

        $row = $query->fetch_assoc();

        echo $row['content'];


    }
        
        
}


?>