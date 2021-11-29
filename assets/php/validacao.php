<?php
    if (isset($_SESSION['user'])){
        if ($_SESSION['user']=="admin")
        	header("Location: logado.php");
        else
            header("Location: erro.php");
    }
?>