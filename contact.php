<br />
<br />
<div class="content">

	<p class="lead">
<?php
    $sql = "SELECT * FROM content WHERE section='contact'";

    $query = $system->database()->query($sql);

    $row = $query->fetch_assoc();

    echo $row['content'];

?>
</p>
<font class="lead" size="3" style="line-height: 18px;"><b><i>
<?php
    $sql = "SELECT * FROM content WHERE section='hours'";

    $query = $system->database()->query($sql);

    $row = $query->fetch_assoc();

    echo $row['content'];

?>
</i></b></font>

</div>
