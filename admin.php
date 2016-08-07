
<br />
<div class="container-fluid">
<h1>Administrator</h1>
<hr>

<?php

$optionCount = 0;

$sql = 'SELECT * FROM content';

$conn = $system->database();

$query = $conn->query($sql);

while($row = $query->fetch_assoc()){
    
	$section = $row['section'];
	echo '<h3>Edit "'; 
	echo ucfirst($row["section"]);
	echo '" Section</h3><br /><br />'; ?>
	
	<form action="index.php" method="post">
		
			<button type="submit" class="btn btn-small btn-primary">Edit Section</button>
			
			<small><b>html:</b></small> 
			
			<input type="checkbox" name="html" value="TRUE" /><br >
            <input type="hidden" name="form_submitted" value="form_submitted" />

			<input type="hidden" name="section" value="<?php echo $row['section']; ?>" />
			
			<input type="hidden" name="edit" value="edit" />
			<input type="hidden" name="form" value="form" />
			
		</form>
		
	<div class="sections">
		<?php
		echo $row['content'];
		?>
	</div>
	<br />
	<br />
	
<?php } ?>

	
	</div>
	