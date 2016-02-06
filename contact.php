<br />
<br />
<div class="content">
	
<?php 
    $sql = "SELECT * FROM content WHERE section='contact'"; 

    $query = $system::database()->query($sql);

    $row = $query->fetch_assoc();

    echo $row['content'];

?>

</div>
