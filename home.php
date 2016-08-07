
	<br />

            <?php
            
            $query = $system->database()->query('SELECT * FROM content WHERE section="front_page_update_banner"');
            
            $row = $query->fetch_assoc();
            
            echo '<div class="homeBanner">';

            echo '<strong> ' . $row['content'] . '</strong>';

            $sql = "SELECT * FROM content WHERE section='hours'"; 

            $query = $system->database()->query($sql);

            $row = $query->fetch_assoc();

            echo '<br><font size="3" style="line-height: 18px;"><b><i>';

            echo $row['content'];

            echo '</i></b></font>';

            echo '</div>';

        ?>



	<br />
	<div style="padding-left:5%; padding-right:5%;">

<?php $sql = "SELECT * FROM content WHERE section='home'"; 

$query = $system->database()->query($sql);

$row = $query->fetch_assoc();

echo $row['content'];

?>
	
</div>

      <?php $content->Get_Wines(); ?>
<br />
