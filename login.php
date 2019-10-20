<?php

include 'config.php';


$username = $_POST['user'];
$password = $_POST['pass'];
$category="admin";
$category1="user";


$salt = "Shicenzi5477";
$password_encrypted = sha1($password.$salt);

$sql = mysqli_query($db, "SELECT count(*) as total from users WHERE user = '".$username."' 
	and password = '".$password_encrypted."'   and type = '".$category."' ");
$row = mysqli_fetch_array($sql);


$sql1 = mysqli_query($db, "SELECT count(*) as total1 from users WHERE user = '".$username."' 
    and password = '".$password_encrypted."'   and type = '".$category1."' ");
$row1 = mysqli_fetch_array($sql1);

 
if($row["total"] > 0){ header('Location: dashboard/dashboard/dashboard.php');
    ?>
    <script>
        alert('Login successful');
    </script>
     
    <?php
}

elseif ($row1["total1"] > 0) { header('Location: dashboard/dashboard/dashboard2.php');
  
}

else{
    ?>
    <script>
        alert('Invalid password or Username / Username exist');   
        window.location.pathname="eminimax/index.php";
    </script>
    <?php
}

 
 
?>