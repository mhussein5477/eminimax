<?php
	
	include 'config.php';

	$new_date = date('Y-m-d', strtotime($_POST['salesdate']));
	$selling_date = date('Y-m-d', strtotime($_POST['date']));
	$item  = ((isset($_POST['item']))?$_POST['item']:'');
	$sprice= ((isset($_POST['sprice']))?$_POST['sprice']:'');
	$quantity = ((isset($_POST['quantity']))?$_POST['quantity']:'');



	if (isset($_GET['newdate'])) {

		$sql2="INSERT INTO dates(day) " ."VALUES ('$new_date')";
	
		 $db->query($sql2);
		
            header('Location: sales.php');
		   
	}


	if (isset($_GET['sales'])) {

		$sql3="UPDATE items Set
		 selling_id ='$selling_date' ,
		 selling_price = '$sprice' , 
	     quantity=(quantity-$quantity)
		  WHERE id= $item";
		 $db->query($sql3);
		
            header('Location: items1.php');
		   
	}





?>