
<?php
	include 'config.php';
	$sql3 = "SELECT * FROM dates ORDER BY id DESC";
	$result1 = $db->query($sql3);

	$sql4= "SELECT *FROM items";
		$result2 = $db->query($sql4);

?>

        
  <div id="id02" class="modal">

  <form class="modal-content animated slideInDown" action="pushing1.php?sales" method="POST" enctype="multipart/form-data" style=" height: 60%;"> 
   
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="salesinput">
				

				<select name="sale_category" class="browser-default custom-select" style="width: 60%; margin-top: 4%;">
			    	<option>Category</option>
			    	<option>Phones</option>
			    	<option>Covers</option>

			    </select> <br>

			   <select name="item" class="browser-default custom-select" style="width: 60%; margin-top: 4%;">
			    	<option value="" disabled selected>item</option>
			 			  <?php while($item_list = mysqli_fetch_assoc($result2)): ?>
							<option value="<?= $item_list['id']; ?>"><?= $item_list['name']; ?></option>
						  <?php endwhile  ?>	
			    	
			    </select> <br>

			    <input class="form-control form-control" type="number" name="quantity" placeholder="Quantity"> <br>
			    <input class="form-control form-control" type="number" name="sprice" placeholder="Selling Price"> <br>
			    <select name="date" class="browser-default custom-select" style="width: 60%; margin-top: 4%;">
			    	<option value="" disabled selected>Choose the sellingdate</option>
			 			  <?php while($day_list = mysqli_fetch_assoc($result1)): ?>
							<option value="<?= $day_list['day']; ?>"><?= $day_list['day']; ?></option>
						  <?php endwhile  ?>	
			    	
			    </select> <br>
						
			    	


      <input type="submit" class="btn btn-success" style="margin-top: 3%;" >
      
    </div>
    
  </form>

  
    

</div>