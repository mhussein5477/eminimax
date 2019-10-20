<!DOCTYPE html>
<html>
<head>
	<title>Net amount</title>
   <link rel="stylesheet" href="net.css">
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


<div class="wrapper" style="display: flex; padding-right: 0px; ">

                                         
                                             <!-- side navigation-->
                                          <?php include 'sidenav.php'; ?>





    <div class="content" style="width: 100%; padding-right: 0px;" >

                                                 <!--topnav-->   
                                     <?php  include'../../partials/topnav.php'; ?>
                              










                                        <!-- context in the dashboard-->
<h2 style="">Expenditures</h2>
                                 
       <div class="row">
         
        <div class="col-md-6">
            <div class="Monthly">
              <h4>Monthly</h4>
              <br>
             <select class="form-control" name="month" style="  width: 75%;   margin-left: 3%;"> 
                    <option value="January"> January </option>
                   <option value="February"> February </option>
                   <option value="March">March</option>
                   <option  value="April">April</option>
                   <option value="May">May</option>
                   <option value="June">June</option>
                   <option value="July">July</option>
                   <option value="August">August</option>
                   <option value="September">September</option>
                   <option value="October">October</option>
                   <option value="November">November</option>
                   <option value="December">December</option>



              </select>
              <input type="number" name="rent" placeholder="Rent" class="form-control form-control">
              <input type="number" name="bills" placeholder="Bills (Electric , etc )" class="form-control form-control">
              <input type="number" name="salaries" placeholder="Salaries" class="form-control form-control">
              <input type="number" name="othercost" placeholder="Other costs" class="form-control form-control">
            <input type="submit" class="btn btn-success" style="width: 35%; margin-left: 3%; margin-top: 2%; ">
              
            </div>


        </div>

         <div class="col-md-6" >
            <div class="expendituregraph" style="margin-right: 20%;">
              <h4>Yearly Graph</h4>
              <div id="chartContainer" style="height: 370px; width: 100%; "></div>
              <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
              
            </div>


        </div>

       </div>

				

	
<?php
 
$dataPoints = array(
  array("label"=> "Rent", "y"=> 180,000),
  array("label"=> "Bills", "y"=> 80,000),
  array("label"=> "Salaries", "y"=> 100,800),
  array("label"=> "Other costs", "y"=> 72,000)
  
);
  
?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  
  subtitles: [{
    text: "Total months expenditures",

  }],
  data: [{
    type: "pie",
    showInLegend: "true",
    legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "{label} - #percent%",
    yValueFormatString: "##0#k",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>


  <div class="monthlyexp text-center">
    <h3>Previous Months</h3>
    <table class="table table-hover">
  <thead>
        <tr>
        <th>Months</th>
      <th>Total expenditure</th>
      <th>Profit</th>
      <th>View</th>
        </tr>
    </thead>
    <tbody>
        <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-1" aria-expanded="false" aria-controls="group-of-rows-1">
             <td>February</td>
             <td>180,000</td>
              <td>60,000</td>
              <td><i class="fa fa-caret-down" style="color: #000; cursor: pointer; font-size: 15px;"></td>
        </tr>
    </tbody>
    <tbody id="group-of-rows-1" class="collapse">
        <tr>
            <td>Salary - 20,000</td>
            <td>Bills - 30,000</td>
            <td>Rent - 40,000</td>  
            <td>Other - 50,000</td>
            <td><i class="fa fa-trash" aria-hidden="true" style="color: #000; cursor: pointer; font-size: 13px;"></i></td>
        </tr>
       
    </tbody>

    <tbody>
        <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-2" aria-expanded="false" aria-controls="group-of-rows-2">
             <td>March</td>
             <td>210,000</td>
              <td>120,000</td>
             <td><i class="fa fa-caret-down" style="color: #000; cursor: pointer; font-size: 15px;"></td>
        </tr>
    </tbody>
    <tbody id="group-of-rows-2" class="collapse">
        <tr>
            <td>Salary - 40,000</td>
            <td>Bills - 20,000</td>
            <td>Rent - 50,000</td>  
            <td>Other - 80,000</td>
            <td><i class="fa fa-trash" aria-hidden="true" style="color: #000; cursor: pointer; font-size: 13px;"></i></td>
        </tr>
      
    </tbody>

      <tbody>
        <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-3" aria-expanded="false" aria-controls="group-of-rows-3">
              <td>April</td>
              <td>480,000</td>
             <td>210,000</td>
             <td><i class="fa fa-caret-down" style="color: #000; cursor: pointer; font-size: 15px;"></td>
        </tr>
    </tbody>
       <tbody id="group-of-rows-3" class="collapse">
        <tr>
            <td>Salary - 45,000</td>
            <td>Bills - 13,000</td>
            <td>Rent - 55,000</td>  
            <td>Other - 60,000</td>
                <td><i class="fa fa-trash" aria-hidden="true" style="color: #000; cursor: pointer; font-size: 13px;"></i></td>
        </tr>
      
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



<style>
  .row{
    width: 100%;
  }

  h2{
  font-size: 27px;
  text-align: center;
  margin-top: 2%;
}

.Monthly{
  margin-top:3%;
  margin-left: 10%;
  width: 70%;
  border: 1px solid green;
  padding-bottom:  5%;
  padding-top: 3%;
    border-radius: 10px;
}

.Monthly input[type=number]{
  width: 75%;
  margin-left: 3%;
  position: center;
  float: center;
  margin-top: 2%;
  display:inline-block;
}


h4{
  text-align: center;
}
.monthlyexp{
  padding-right: 15%;
  padding-left: 11%;
  margin-top: 10%;
  padding-bottom: 10%;

}
.table{
  margin-top: 3%;
}
.table .collapse{
  background: #F4F4F4;
}

</style>

</body>
</html>