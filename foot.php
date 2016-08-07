<hr>
  <div class="row-fluid marketing ">
	
    <div class="span4">
      <h4 class="foot">The Vineyard</h4>
      <p>
        <?php 
            $sql = "SELECT * FROM content WHERE section='hours'"; 

            $query = $system->database()->query($sql);

            $row = $query->fetch_assoc();

            echo $row['content'];

        ?>
      </p>
      <p><a class="btn" href="index.php?about">About »</a></p>
    </div><!--/span-->
    <div class="span4">
      <h4 class="foot">The Wine</h4>
      <p>View our beautiful selection of wines, including our Christmas Town Red and our Cayuga White!</p>
      <p><a class="btn" href="index.php?wine">Shop Wine »</a></p>
    </div><!--/span-->
    <div class="span4">
      <h4 class="foot">Directions</h4>
      <p>Winery is 6.4 miles from center of Litchfield, CT. Go south on South St/CT-63 for 4 miles. Turn right onto East St/CT-109 and go 1.1 miles..</p>
      <p><a class="btn" href="index.php?directions">Directions »</a></p>
    </div><!--/span-->
</div>

<br />


      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Bethlehem Vineyard, Inc. &middot; 
			<?php if($admin!=true){ ?><a href="./login.php">Login</a><?php } else { ?>
				<a href="./logout.php">Logout</a> <?php } ?>
		</p>
      </footer>


 </div>

  </body>
</html>
