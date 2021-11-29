<?php 
	$valor = $_POST['valoratt'];
	include "connect.php";
    $query = "update tarifa SET valor = '$valor' where 1";
    mysqli_query($conn,$query) or die(mysqli_error($conn));
    header("Location: tarifa.php");
?>