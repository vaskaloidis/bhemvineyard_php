
<br />
<br />
<div class="content">
	
<h2 class="nobreak">About</h2><h2 class="muted nobreak">Us</h2>
<br />
<br />

<?php

$sql = "SELECT * FROM content WHERE section='about'"; 

$query = $system->database()->query($sql);

$row = $query->fetch_assoc();

echo $row['content'];



?>

</div>