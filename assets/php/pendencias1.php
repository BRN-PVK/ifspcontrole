<?php 
	$nome = $_POST['nome'];
	include "connect.php";
    $query = "update lojas SET pendencias = 0 where nome = '$nome'";
    mysqli_query($conn,$query) or die(mysqli_error($conn));
    header("Location: pendencias.php");
?>