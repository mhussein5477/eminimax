<?php
include 'config.php';

$username = $_POST['user'];
$category = $_POST['type'];
$password = $_POST['pass'];

$salt = "Shicenzi5477";
$password_encrypted = sha1($password.$salt);



            $sql = "INSERT INTO  users(user ,password ,type)".
            "VALUES ('$username','$password_encrypted','$category')";
 			$db->query($sql);
		 
            header('Location: index.php');
	         	


?>