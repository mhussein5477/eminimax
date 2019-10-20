<?php
	

	include 'config.php';

	$brand_id= ((isset($_POST['brand']))?$_POST['brand']:'');
	$addbrand = ((isset($_POST['addbrand']))?$_POST['addbrand']:'');
	$itemname =  ((isset($_POST['itemname']))?$_POST['itemname']:'');
	$quantity =  ((isset($_POST['quantity']))?$_POST['quantity']:'');
	$bprice = ((isset($_POST['bprice']))?$_POST['bprice']:'');
	$new_date = date('Y-m-d', strtotime($_POST['dateFrom']));





	if (isset($_GET['add'])) {

            $sql = "INSERT INTO items(name,quantity,buying_price,brand_id,b_date) "
            				."VALUES('$itemname','$quantity','$bprice','$brand_id','$new_date')";
            $db->query($sql);
             
            header('Location: items.php');
	         	}

	 if (isset($_GET['add_cat'])) {

	 		$sql1 = "INSERT INTO brand(brand_name) "
            				."VALUES('$addbrand')";
            $db->query($sql1);
             
            header('Location: items.php');

	         	}

?>