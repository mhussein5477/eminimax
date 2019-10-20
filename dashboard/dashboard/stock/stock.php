<!DOCTYPE html>
<html>
<head>
	<title>Stock</title>
   <link rel="stylesheet" href="stock.css">
   <link rel="stylesheet" href="sidenav.css">
    <link rel="stylesheet" href="modal.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />

</head>
<body>


<div class="wrapper" style="display: flex; padding-right: 0px; ">

                                         
                                             <!-- side navigation-->
                                          <?php include 'sidenav.php' ?>





    <div class="content" style="width: 100%; padding-right: 0px;" >

                                                 <!--topnav-->   
                                     <?php  include'../../partials/topnav.php'; ?>
                              










                                        <!-- context in the dashboard-->

<div class="row d-flex justify-content-center" style="width: 100%;"> 

	<div class="col-md-6">
				<div  class="container1 text-center">
	
	 			<button type="button" class="btn btn-outline-success" onclick="document.getElementById('id01').style.display='block'" ><i class="fas fa-plus" style="margin-right: 6px;"></i>Add category</button>
					</div>


  
                                          <!-- poping top menu -->
                                         <?php include 'modal.php'; ?>

	</div>


</div>
	<div class="col-md-7">
					<div class="row" style=" width: 178%; margin-top: 2%;"> 
						
            <div class="btn-group">
                 <button type="button" onclick="items()" class="btn" style="background: #0275d8; color: white;"><h1 style="font-size: 27px; margin-top: -10%; margin-left: -30%;">Phones</h1>
                  <h2 style="font-size: 18px; margin-left: -40%; margin-top: 55%;">Items : 20</h2></button>
                   <button type="button" class="btn dropdown-toggle dropdown-toggle-split" style="background: #0275d8; color: white; margin-top: 50%;"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-edit" style="margin-left: 50%;"></i>
                    </button>
                    <div class="dropdown-menu  animated fadeIn">
                       <a class="dropdown-item" href="#">Edit</a>
                       <a class="dropdown-item" href="#">Clear items</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Remove category</a>
               </div> <script> function items(){ window.location.pathname="eminimax/dashboard/dashboard/stock/items.php"; } </script>
               </div>









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

 <script>
         // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
     </script>
    





</body>
</html>