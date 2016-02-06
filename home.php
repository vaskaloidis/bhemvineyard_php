
	<br />

            <?php
            
            $query = $system::database()->query('SELECT * FROM content WHERE section="front_page_update_banner"');
            
            $row = $query->fetch_assoc();
            
            $query2 = $system::database()->query('SELECT * FROM options WHERE name="front_page_update_banner"');
            
            $option = $query2->fetch_assoc();
            
            if($option['value'] == true){
                echo '<div class="homeBanner">';
                    echo '<strong> ' . $row['content'] . '</strong>';
                echo '</div>';
            }
            
            ?>

	<br />
	<div style="padding-left:5%; padding-right:5%;">

<?php $sql = "SELECT * FROM content WHERE section='home'"; 

$query = $system::database()->query($sql);

$row = $query->fetch_assoc();

echo $row['content'];

?>
	
</div>

      <?php $content->Get_Wines(); ?>
<br />
