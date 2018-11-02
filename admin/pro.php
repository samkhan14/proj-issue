 <?php require_once('header.php'); ?>  
 <div class="row">
      <div class="col-sm-5 mx-auto">        
      <h1>Manage Products</h1>  

      <form action="" class="text-center border border-light p-5" method="post">
    
    <!-- Product Name -->
    <input type="text" id="" class="form-control mb-4" placeholder="Product Name" name="txtpname" required>

    <input type="text" id="" class="form-control mb-4" placeholder="Product price" name="txtpprice" required>

    <textarea  id="" class="form-control mb-4" placeholder="Products Detail" name="txtpdetail" required></textarea>

    <input type="text" id="" class="form-control mb-4" placeholder="Tags" name="txtptags" required>

    <select class="form-control mb-4" name="txtpcat">
      <option value="0">Select Category</option>
      <?php
      $cat = $obj->getallcat();
      foreach ($cat as $c ) {
        echo '<option value="'.$c['cid'].'">'.$c['cname'].'</option>';
      }
       ?>

    </select>
    
    <!--  button -->
    <button class="btn btn-info btn-block" type="submit" name="btnsave">Add Product</button>
	</form>	
      </div>
      <?php
	if (isset($_POST['btnsave'])) {
    $cid = $_POST['txtpcat'];
    if ($cid == 0) {
echo "Must select a category";
    }
    else{
		$pname = $_POST['txtpname'];
    $pprice = $_POST['txtpprice'];
    $pdetail = $_POST['txtpdetail'];
    $ptags = $_POST['txtptags'];
		$obj->addpro($pname,$pprice,$pdetail,$ptags,$cid);
		echo "<script>alert('Product has been saved as $pname')</script>";
	}
} 
	 ?>

    </div>
    <div class="row">
    	<div class="col-sm-8 mx-auto">
    		<h2>All Products</h2>
    		<table class="table table-hover table-bordered table-striped">
    			
   <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Product Details</th>
      <th scope="col">Tags</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
          </tr>
  </thead>
  <tbody>
  	<?php
    			$pro = $obj->getallpro();
    			foreach ($pro as $p ) {
    					echo "<tr>";
    					echo "<td>".$p['pid']."</td>";
    					echo "<td>".$p['pname']."</td>";
              echo "<td>".$p['pprice']."</td>";
              echo "<td>".$p['pdetails']."</td>";
              echo "<td>".$p['ptags']."</td>";
              echo "<td>".$p['cname']."</td>";
              echo "<td><a href='img.php?pid=".$p['pid']."' class='btn btn-success'>image</a></td>";
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
   
  