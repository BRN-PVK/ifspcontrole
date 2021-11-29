<?php
	$modelo = $_POST['modelo'];
	$marca = $_POST['marca'];
	$placa = $_POST['placa'];
	$cor = $_POST['cor'];
	include "connect.php";
	$query = "INSERT INTO `carros` (`modelo`, `marca`, `placa`, `cor`) VALUES ('$modelo', '$marca', '$placa', '$cor')";
	if (mysqli_query($conn,$query)) {
		header("Location: sucesso.php");
	} 
	else{
		header("Location: erro.php");
	}
?>