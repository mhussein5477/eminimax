   
<?php
	include 'config.php';
	$sql2 = "SELECT * FROM brand";
	$result1 = $db->query($sql2);

?>

  <div id="id01" class="modal">
<div class="modal-content animated slideInDown" style=" height: 80%;">

 <div class="stockinput" >

 							<!-- add brand name form to the brand table-->
			    		<form  action="pushing.php?add_cat" method="POST" enctype="multipart/form-data">
			    			  <div class="input-group mb-3" style="width: 60%; margin-left: 20%;">
  								<input class="form-control form-control" type="text" placeholder="Add brand" name="addbrand" required> 
  								<div class="input-group-append" style=" margin-top: 1.5%; margin-bottom: 5%;">
  		
  			  					  		<button  type="submit" class="btn btn-success" style="width: 100%;  border-radius: 5px; margin-left: 13%; width: 100px;" type="button">Add</button>
  								</div>
  								<p style="margin-top: -5%;">( Add brand name then , add item. )</p>
							</div>

			    		</form>



			    				
											<!--main form to the item table-->
  <form class="" action="pushing.php?add" method="POST" enctype="multipart/form-data" > 
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

			    <select name="brand" class="browser-default custom-select" style="width: 60%; margin-top: 4%;">
			    	<option value="" disabled selected>Choose the brand</option>
			 			  <?php while($cat_list = mysqli_fetch_assoc($result1)): ?>
							<option value="<?= $cat_list['brand_id']; ?>"><?= $cat_list['brand_name']; ?></option>
						  <?php endwhile  ?>	
			    	
			    </select> <br>
						

					
						
			     

			     <input class="form-control form-control" type="text" placeholder="Item Name" name="itemname" required> <br>
			      <input class="form-control form-control" type="number" placeholder="Quantity" name="quantity" required> 
			      <br>
			      <input class="form-control form-control" type="number" name="bprice" placeholder="Buying price" required><br>
			       <input class="form-control form-control" type="date" value="<?php echo date('Y-m-d'); ?>" name="dateFrom" placeholder="Buying price Date"  style="width: 60%; margin-top: 2%;  margin-left: 20%;" required><br>
			      <input type="submit" class="btn btn-success">
      
  
  
  </form>
  </div>

  
    	
</div>


</div>