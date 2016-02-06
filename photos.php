<?php require $system->getDir() . 'head.php'; ?>

<style>
    .photo_section img{
        border:4px solid black;
        margin-right:20px;
        margin-left:20px;
        margin-bottom:20px;
        width:150px;
        height:auto
   }

   .photo_section {
       padding:25px;
       margin-bottom:50px;
       margin-top:25px;
       align:center;
       text-align: center;
   }

   img {
       max-width: none;
       height: none;
       border: 0;
       -ms-interpolation-mode: bicubic;
   }

</style>

<br />
<br />
<h2>Photos</h2>
<div class="photo_section">

<?php


$dir = './img/Photos/';

$directory = scandir($dir);

$count = 1;

foreach($directory as $key => $d){
    
    if($d === '.' || $d ==='..' || $d ==='.DS_Store'){
        //Nothing
    } else {
        echo '<a href="' . $dir . $d . '" ';
        echo '  data-lightbox="img' . $key . '">';
        echo '<img src="' . $dir . $d . '" />';
        echo '</a>';
    
        if($count == 9){
            echo '<br />';
            $count = 1;
        } else {
            $count++;
        }
    }
        

    
}

?>
</div>