<?php

if(!isset($system)){
    require 'system.php';
    $system = new system();
}


if(isset($_SESSION['admin']) && $_SESSION['admin']){
	$admin = true;
} else {
	$admin = false;
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Bethlehem Vineyard - <?= $system->getPage() ?></title>

    <?php
    if($system->getDevice()=='mobile'){
            echo '<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">';
    }
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--     <link href="<?= $system->getUrl(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <meta name="description" content="Bethlehem Vineyard Winery">
    <meta name="author" content="Bethlehem Vineayrd Winery">
<!-- 
    <link href="<?= $system->getUrl(); ?>css/bootstrap.css" rel="stylesheet">
	<link href="<?= $system->getUrl(); ?>css/bootstrap-responsive.css" rel="stylesheet"> -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


	<link href="<?= $system->getUrl(); ?>css/style.css" rel="stylesheet">

	<?php if($system->getPage()=='Photos'){ ?>
		<link rel="stylesheet" href="<?= $system->getUrl(); ?>css/lightbox.css" media="screen"/>
	<?php } ?>
	

	<script src="<?= $system->getUrl(); ?>js/jquery.js"></script>
	<script src="<?= $system->getUrl(); ?>js/lightbox-2.6.min.js"></script>
	<script>

	</script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
   	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

<?php
if(isset($_GET['directions'])){ ?>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<script type="text/javascript"   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQNzy9L-k_JMxUPEdpAU15WZ1CO_hWhMg&sensor=true">
    </script>

	<script>
	function initialize() {
	  var mapOptions = {
	    zoom: 8,
	    center: new google.maps.LatLng(41.668536, -73.188561),
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	  };

	  var map = new google.maps.Map(document.getElementById('map-canvas'),
	      mapOptions);
	}

	function loadScript() {
	  var script = document.createElement('script');
	  script.type = 'text/javascript';
	  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&' +
	      'callback=initialize';
	  document.body.appendChild(script);
	}

	window.onload = loadScript;
    </script>
<?php } ?>

  </head>

  <body>
	
<div class="everything">
<div class="header">
	<a href="index.php">
		<img class="logo" src="<?= $system->getUrl(); ?>img/logo.jpg" />
	</a>

	<?php if($system->getDevice() == 'mobile') { $padding = 'padding-bottom:75px;'; } else { $padding = ''; } ?>
		
		<ul class="nav nav-pills pull-right" style="padding-top:10px; <?= $padding ?>">
        	<li style="font-size:1.5em" class="lead"><a href="./index.php?home">
				Home</a></li>
			<li style="font-size:1.5em" class="lead"><a href="./index.php?about">
                                About</a></li>
			<li style="font-size:1.5em" class="lead"><a href="./index.php?wine">
				Wine</a></li>
			<li style="font-size:1.5em" class="lead"><a href="./index.php?contact">
				Contact/Hours</a></li>
			<li style="font-size:1.5em" class="lead"><a href="./index.php?directions">
				Directions</a></li>
				<li style="font-size:1.5em" class="lead"><a href="./index.php?photos">
					Photos</a></li>
			<?php if($admin){ ?>
				<li style="font-size:1.5em" class="lead"><a href="?admin"> Admin </a></li>
				<?php } ?>

		</ul>
</div>

<img src="<?= $system->getUrl(); ?>img/Slides/slide<?= rand(1, 4); ?>.jpg" class="slide" />

<div class="container">
    <br />