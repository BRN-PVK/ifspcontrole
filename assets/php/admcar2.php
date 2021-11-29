<?php 
    include 'connect.php';
    $loja=$_POST['selecionado'];
    $_SESSION['selecionado'] = $loja;
    $SQL = "SELECT  *
            FROM lojas, tarifa
            WHERE idloja = '$loja'";
    $result_id = mysqli_query($conn,$SQL) or die("Erro no banco de dados!");
    if(mysqli_num_rows($result_id)>0){
        $fetch = mysqli_fetch_array($result_id);
        $valor = $fetch['valor']*0.5;
        $total = $fetch['pendencias'] + $valor;
    }
	
    $query = "update lojas SET pendencias = '$total' where idloja = '$loja'";
    mysqli_query($conn,$query) or die(mysqli_error($conn));
    $placa=$_POST['placa'];
	$query1 = "DELETE FROM carros WHERE placa = '$placa'";
	mysqli_query($conn, $query1) or die(mysqli_error($conn));
    header("Location: sucesso.php");
?>