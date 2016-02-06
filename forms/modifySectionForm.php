<?php


echo '<form action="index.php" method="POST">';

$conn = $system::database();


if(isset($_POST['section'])){  //edit post
	
	if(isset($_POST['html']) && $_POST['html']==TRUE){
	} else {
		print '
		 	<script src="http://js.nicedit.com/nicEdit-latest.js" 
					type="text/javascript">
				</script>
			<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

		  </script>';
	}
	
	$section = $_POST['section'];
	
	$result = $conn->query("SELECT * FROM content WHERE section='$section'");

	$row = $result->fetch_array(MYSQLI_ASSOC);
	
	?>
	<br />
	
	<h2><?= ucfirst($section) ?> Section</h2>
	
	<br /><br /> 

	<textarea rows="8" name="content" style="width:800px"><br />
		<?= $row['content'] ?>
	</textarea>
	<br />
	
	<input type="hidden" name="action" value="edit" />;
	
	<input type="hidden" name="id" value="<?= $row['id'] ?>" />
	
	<input type="hidden" name="section" value="section" />
	
	<input class="btn" type="submit" name="submit" value="submit" />
		
	
<?php  } ?>

	</form>