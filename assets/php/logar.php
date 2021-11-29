<?php
	session_start();
	$user =  $_POST['user'];
	$senha =  $_POST['senha'];
	include "connect.php";
	$SQL = "SELECT  login, senha
	        FROM users
	        WHERE login = '$user' AND senha=md5('$senha')";
	$result= mysqli_query($conn,$SQL) or die("Erro no banco de dados!");
	if(mysqli_num_rows($result)>0){
		$fetch = mysqli_fetch_array($result);
		$_SESSION["user"]=$user;
		$_SESSION["senha"]=$senha;
	 	header("Location: logado.php");
	}
	else {
		header("Location: erro.php");
	}
?>
