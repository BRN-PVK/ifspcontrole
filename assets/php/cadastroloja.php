<?php
	$nome = $_POST['nome'];
	$dono = $_POST['dono'];
	include "connect.php";
	$query = "INSERT INTO `lojas` (`nome`, `dono`) VALUES ('$nome', '$dono')";
	if (mysqli_query($conn,$query)) {
		header("Location: sucesso.php");
	} 
	else{
		header("Location: erro.php");
	}
?>