 <?php require_once('header.php'); ?>  
 <div class="row">
      <div class="col-sm-5 mx-auto">        
      <h1>Manage Categories</h1>  

      <form action="" class="text-center border border-light p-5" method="post">
    
    <!-- Category Name -->
    <input type="text" id="" class="form-control mb-4" placeholder="Category Name" name="txtcname" required>
    
    <!--  button -->
    <button class="btn btn-info btn-block" type="submit" name="btnsave">Add Category</button>
	</form>	
      </div>
      <?php
	if (isset($_POST['btnsave'])) {
		$cname = $_POST['txtcname'];
		$obj->addcat($cname);
		echo "<script>alert('Category has been saved as $cname')</script>";
	}
	 ?>

    </div>
    <div class="row">
    	<div class="col-sm-6 mx-auto">
    		<h2>All Categories</h2>
    		<table class="table table-hover table-bordered table-striped">
    			
   <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
          </tr>
  </thead>
  <tbody>
  	<?php
    			$cat = $obj->getallcat();
    			foreach ($cat as $c ) {
    					echo "<tr>";
    					echo "<td>".$c['cid']."</td>";
    					echo "<td>".$c['cname']."</td>";
    					echo "</tr>";
    				}	
    			 ?>
   
   
  </tbody> 
</table>
    	</div>
    </div>

     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
   
  