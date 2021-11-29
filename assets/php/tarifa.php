<?php   
	include 'connect.php';
    include 'header.php';
	$resultado = mysqli_query($conn, "select * from tarifa");
	$tarifa = mysqli_fetch_assoc($resultado)
?>
				<!-- Main -->
                    <section>
						<div class="inner">
							<section>
								<header class="major">
									<h2>Alteração da tarifa</h2>
								</header>

								<form method="post" action="novovalor.php">
									<div class="fields">
										<div class="field half">
											<label for="valoranterior">Valor anterior</label>
											<?php 
											echo "<input type='text' name='valoranterior' id='valoranterior' value=".$tarifa['valor']." readonly/>"; 
											?>
										</div>
										<div class="field half">
											<label for="valoratt">Valor atualizado</label>
											<input type="text" name="valoratt" pattern="^[1-9]\d*(\.\d+)?$" id="valoratt" required/>
										</div>
										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" value="ALTERAR" class="primary" /></li>
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