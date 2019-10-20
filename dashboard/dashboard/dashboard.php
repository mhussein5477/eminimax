<!DOCTYPE html>
<html>
<head>
	<title>Dasboard</title>

	
   <link rel="stylesheet" href="dashboard.css">
   <link rel="stylesheet" href="sidenav.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<body>

<div class="wrapper" style="display: flex; ">

                                               <!-- side navigation-->
                                             <?php include 'sidenav.php' ?>





    <div class="content" style="width: 100%;" >

                                                    <!--topnav-->   
                                    <?php  include'../partials/topnav.php'; ?>

                                <!-- context in the dashboard-->

<div class="indash" style="padding: 10px; ">

<div class="canvas">
  


<?php
 
$dataPoints1 = array(
  array("label"=> "MONDAY", "y"=> 3600),
  array("label"=> "TUESDAY", "y"=> 3400),
  array("label"=> "WEDNESDAY", "y"=> 4000),
  array("label"=> "THURSDAY", "y"=> 3500),
  array("label"=> "FRIDAY", "y"=> 3900)

);
$dataPoints2 = array(
  array("label"=> "MONDAY", "y"=> 6400),
  array("label"=> "TUESDAY", "y"=> 7000),
  array("label"=> "WEDNESDAY", "y"=> 7200),
  array("label"=> "THURSDAY", "y"=> 8100),
  array("label"=> "FRIDAY", "y"=> 6300)
  
);
  
?>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Average sales compared with the previous week."
  },
  legend:{
    cursor: "pointer",
    verticalAlign: "center",
    horizontalAlign: "right",
    itemclick: toggleDataSeries
  },

  data: [{
    type: "column",
    name: "Last week",
    indexLabel: "{y}",
    yValueFormatString: "ksh#0.##",
    showInLegend: true, 
    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
  },{
    type: "column",
    name: "Current week",
    indexLabel: "{y}",
    yValueFormatString: "ksh#0.##",
    showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
function toggleDataSeries(e){
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else{
    e.dataSeries.visible = true;
  }
  chart.render();
}

 
}
</script>


<div id="chartContainer" style="height: 370px; width: 100%;"></div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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
    <script src="dashboard.js"> </script>
    
<style type="text/css">
  .canvas{
    margin-top: 5%;
    padding-left: 5%;
    padding-right: 5%;
  }
</style>




</body>
</html>