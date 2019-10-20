<!DOCTYPE html>
<html>
<head>
	<title>Sales</title>

	<link rel="stylesheet" type="text/css" href="sales.css">
	<link rel="stylesheet" href="sidenav.css">
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
  $dates = "SELECT * FROM dates order by id DESC";
    $result1 = $db->query($dates); 


?>


<div class="wrapper" style="display: flex; padding-right: 0px; ">

						                		<!-- side navigation-->
						                    <?php include 'sidenav.php'; ?>





<div class="content" style="width: 100%; padding-right: 0px;" >

                   								  <!--topnav-->
    
                    				 <?php  include'../../partials/topnav.php'; ?>

                           				   

                           				     <!-- context in the dashboard-->
           <div class="incontent">
           		
                      <form action="pushing1.php?newdate" method="POST" enctype="multipart/form-data">
                         <div class="row" style="padding-left: 30%; margin-top: 1.8%; width: 100%;">
                      <p style="font-size: 17px; color: #959595; margin-top: 0.5%; margin-right: 1%; ">( Create a day. )</p>
                      <input type="date" name="salesdate"  value1="<?php echo date('Y-m-d'); ?>" class="form-control form-control">
                        <input type="submit" class="btn btn-success" style="margin-left: 0.5%; margin-bottom: 1%;">
                      
                     </div>
                        
                      </form>
					          
					           	 	
					           		
           	  <div class="days">
                

                <table class="table table-hover">

                  <tr>
                      
                      <th scope="col">Date</th>
                      <th scope="col">view</th>
                  </tr>

                   <?php while($list = mysqli_fetch_assoc($result1)): ?>
                 
                  <tr>
                      <td><?= $list['day'] ?> </td>
                      <td> 
                          <? include 'pushing1.php';?>
                    <i value="<?= $list['id'] ?>" name="uniquerow" class="fas fa-eye" onclick="items()" style="color: #000; font-size: 15px; cursor: pointer;"></i><script> function items(){ window.location.pathname="eminimax/dashboard/dashboard/sales/items1.php"; }</script>
                      </td> 
                  </tr>



                   <?php endwhile ?>



                </table>

              </div>
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



<style>
	
.incontent input[type=date]{
	width: 25%;

}

.days{
  margin-top: 3%;
  padding-left: 10%;
  padding-right: 10%;
}
.days .items{
  background: #F0F0F0;


}


</style>









</body>
</html>