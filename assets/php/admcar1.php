<?php
	session_start();
    date_default_timezone_set("America/Sao_Paulo");
	include "connect.php";
	include "header.php";
	$id=$_POST['id'];
	$_SESSION['id'] = $id;
	$SQL = "SELECT  *
	        FROM carros, tarifa
	        WHERE carros.placa = '$id'";
	$result_id = mysqli_query($conn,$SQL) or die("Erro no banco de dados!");
	if(mysqli_num_rows($result_id)>0){
		$fetch = mysqli_fetch_array($result_id);
		$placa=$id;
		$marca=$fetch['marca'];
		$modelo=$fetch['modelo'];
		$cor=$fetch['cor'];
        $entrada=$fetch['entrada'];
        $saida=date('Y-m-d G:i:s');
        $valorinicial=$fetch['valor'];
        $entrada1 = new DateTime($entrada);
        $saida1 = new DateTime($saida);
        $tempo=$entrada1->diff($saida1);
        $minutes = $tempo->days * 24 * 60;
        $minutes += $tempo->h * 60;
        $minutes += $tempo->i;
        $valor=$valorinicial + ($valorinicial*0.5*((ceil($minutes/60)) - 1));
	}
	else {
		header("Location: erro.php");
	}
?>
	<!-- Main -->
    <section>
		<div class="inner">
		    <section>
				<header class="major">
					<h2>Registrar pagamento</h2>
				</header>
				<form method="post" action="admcar2.php">
					<div class="fields">
                        <div class="field half">
							<label for="modelo">Modelo</label>
							<input type="text" name="modelo" id="modelo" value="<?=$modelo?>" readonly/>
						</div>
                        <div class="field half">
							<label for="marca">Marca</label>
							<input type="text" name="marca" id="marca" value="<?=$marca?>" readonly/>
						</div>
						<div class="field half">
							<label for="placa">Placa</label>
							<input type="text" name="placa" id="placa" value="<?=$placa?>" readonly/>
						</div>
                        <div class="field half">
							<label for="cor">Cor</label>
							<input type="text" name="cor" id="cor" value="<?=$cor?>" readonly/>
						</div>
                        <div class="field half">
							<label for="cor">Entrada</label>
							<input type="text" name="entrada" id="entrada" value="<?=$entrada?>" readonly/>
						</div>
                        <div class="field half">
							<label for="cor">Saída</label>
							<input type="text" name="saida" id="saida" value="<?=$saida?>" readonly/>
						</div>
                        <div class="field half">
							<label for="cor">Valor</label>
							<input type="text" name="valor" id="valor" value="<?=$valor?>" readonly/>
						</div>
                        <div class="field half">
							<label for="cor">Loja conveniada</label>
							<select class="form-select" name="selecionado">   
                            <option value="" selected = selected></option>
                                <?php
                                $sql = "SELECT * FROM lojas";
                                $dados = mysqli_query($conn,$sql);
                                $linha = mysqli_fetch_assoc($dados);
                                $resultado = mysqli_num_rows($dados);

                                if($resultado > 0) {
                                    do {
                                    echo "<option value='".$linha['idloja']."'>".$linha['nome']."</option>";
                                    }while($linha = mysqli_fetch_assoc($dados));
                                }
                                ?>
                            </select>
						</div>
						<div class="field half text-right">
							<ul class="actions">
								<li><input type="submit" value="ENVIAR" class="primary" /></li>
							</ul>
						</div>

					</div>
				</form>
			</section>
        </div>
    </section>

<?php 
    include 'footer.php'; 
?>
