
<br />
<div class="container-fluid">
<h1>Administrator</h1>
<hr>

<?php

$optionCount = 0;

$sql = "SELECT * FROM options";
$sql2 = 'SELECT * FROM content';

$conn = $system::database();

$query = $conn->query($sql);


$true = ''; $false = '';

$optionsData = array();

while($row = $query->fetch_assoc()){

    echo '<form class="form-horizontal" action="index.php" method="post">';
    
    echo '<h3>' . $row['prettyName'] . '</h3><br />';
    
    if($row['type'] == 'boolean'){
        
        if($row['value']){ $true = 'checked'; } else { $false = 'checked'; }
        
        echo '<input type="radio" ' . $true . 
                ' name="option' . $optionCount . 
                '" value="true">&nbsp;&nbsp;True</><br /><br />';

        echo '<input type="radio" ' . $false .
                ' name="option' . $optionCount . 
                '" value="false">&nbsp;&nbsp;False<br /><br />';

        echo '<input type="hidden" name="optionID" value="' . $row['id'] . '" />';
        echo '<input type="hidden" name="optionName" value="option' . $optionCount . '" />';
		echo '<input type="hidden" name="action" value="edit" />';


        echo '<input class="btn btn-primary" type="submit" value="submit">';
		
        echo '</form>';
                
        $optionCount++;
    }
}


$query2 = $conn->query($sql2);



while($row = $query2->fetch_assoc()){
    
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
	