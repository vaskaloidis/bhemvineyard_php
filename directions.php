<br />
<br />
<div class="content">
<?php
//Google API Key
//AIzaSyBQNzy9L-k_JMxUPEdpAU15WZ1CO_hWhMg

?>

<h2 class="nobreak">Directions</h2><br />

<font class="lead" >

<?php

$sql = "SELECT * FROM content WHERE section='directions'";

$query = $system->database()->query($sql);

$row = $query->fetch_assoc();

echo $row['content'];

?>
</font>
<
<br>

<font class="lead" size="3" style="line-height: 18px;"><b><i>
<?php
    $sql = "SELECT * FROM content WHERE section='hours'";

    $query = $system->database()->query($sql);

    $row = $query->fetch_assoc();

    echo $row['content'];

?>
</i></b></font>

<br /><br />

<center>
<iframe style="height: 270px; width: 450px;" src="http://www.mapquest.com/embed?hk=19Nc9ii" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe>
</center>

</div>
