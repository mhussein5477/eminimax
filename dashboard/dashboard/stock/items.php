<!DOCTYPE html>
<html>
<head>
	<title>items</title>
	<link rel="stylesheet" type="text/css" href="items.css">
	<link rel="stylesheet" href="stock.css">
   <link rel="stylesheet" href="sidenav.css">
    <link rel="stylesheet" href="modal2.css">
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />


</head>
<body>

<?php
    include 'config.php';
  $sql = "SELECT items.id , brand.brand_name , items.name , items.quantity , items.b_date  FROM items , brand WHERE items.brand_id = brand.brand_id ORDER BY items.brand_id";  
  $result = $db->query($sql); 

?>




	<div class="wrapper" style="display: flex; padding-right: 0px; ">
			                                     
                                             <!-- side navigation-->
                                         <?php include 'sidenav.php' ?>

  



    <div class="content" style="width: 100%; padding-right: 0px;" >

   
                                                 <!--topnav-->   
                                     <?php  include'../../partials/topnav.php'; ?>



                                                 <!-- context-->

		<div class="items text-center">
			<button class="btn btn-outline-success"  onclick="document.getElementById('id01').style.display='block'">Add items</button>	
		    <!-- poping top menu -->
                   <?php include 'modal2.php'; ?>

    <table class="table table-hover">
        <thead>

                                   <tr>      
                                            
                                           <th scope="col">Brand</th>
                                           <th scope="col">Name</th>
                                           <th scope="col">Quantity</th>
                                            <th scope="col">Buying date ( Y / M / D )</th>
                                           <th scope="col">Edit</th>
                                   </tr>
                               </thead>
                               <tbody>

                              <?php while($list = mysqli_fetch_assoc($result)): ?>
                                    <tr>    
                                       
                                                            
                                           <td><?= $list['brand_name'] ?></td>
                                           <td><?= $list['name'] ?> </td>
                                           <td><?= $list['quantity'] ?></td>   
                                            <td><?= $list['b_date'] ?></td>     
                                   	       <td><i class="fas fa-pencil-alt" style="color: #707070;"></i></td> 
                                    </tr>

                                
                               <?php endwhile ?>

                                  </tbody>
              </table>
           
              </div>












	
	</div>

	</div>










<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
   
<!-- java script for toggle button-->
    <script src="../dashboard.js"> </script>
     <script>
         // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


     </script>
    <style>
   
    </style>

</body>
</html>