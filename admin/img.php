 <?php require_once('header.php');

if(!isset($_GET['pid'])) {
  echo "<script>window.location.assign('pro.php');</script>";
}

$pro = $obj->getsinglepro($_GET['pid']);

if(mysqli_num_rows($pro)<=0) {
  echo"<script>alert('No such file found');</script>";
  echo"<script>window.location.assign('pro.php');</script>";
};

$pname;
foreach ($pro as $p ) {
  $pname = $p['pname'];
}

  ?>  
 <div class="row">
      <div class="col-sm-5 mx-auto">        
      <h1>Manage Images For <?php echo $pname; ?></h1>  

      <form action="" enctype="multipart/form-data" class="text-center p-5" method="post">
    
    <!-- Product Name -->
    <input type="file" id="" class="form-control mb-4" name="txtimg" required>

   
    <!--  button -->
    <button class="btn btn-info btn-block" type="submit" name="btnsave">Upload</button>
	</form>	
      </div>
      <?php
	if (isset($_POST['btnsave'])) {

     $type = $_FILES['txtimg']['type'];

     if ($type == "image/png"  || $type == "image/jpg" || $type == "image/jpeg") {
        $iname = $_FILES['txtimg']['name'];
        move_uploaded_file($_FILES['txtimg']['tmp_name'],"images/".$iname) or die ("Error in Upload image Function");
         $obj->addimg($iname,$_GET['pid']);
         echo "<script>
         alert('Image Add Success');
         </script>"; 
     }
     else{
      echo "<script>
      alert('Image Properties Just allow to PNG,JPEG,JPG');
      </script>";
     }

		// $obj->addpro($pname,$pprice,$pdetail,$ptags,$cid);
		// echo "<script>alert('Product has been saved as $pname')</script>";
	}
 
	 ?>

    </div>
    <div class="row">
    	<div class="col-sm-8 mx-auto">
    		<h2>All Images For <?php echo $pname; ?></h2>
    		<table class="table table-hover table-bordered table-striped">
    			
   <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Option</th>
     
          </tr>
  </thead>
  <tbody>
  	<?php
    $i = 1;
    			$pro = $obj->getimg($_GET['pid']);
    			foreach ($pro as $p ) {
    					echo "<tr>";
    					echo "<td>".$i."</td>";
              echo "<td><img src='images/".$p['iname']."' width='200' height='150'/></td>";
              // echo "<td><a href='img.php?pid".$p['pid']."' class='btn btn-success'>image</a></td>";
    					echo "</tr>";
              $i++;
    				}	
    			 ?>
   
   
  </tbody> 
</table>
    	</div>
    </div>

     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
   
  