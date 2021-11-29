<?php
	include 'connect.php';
    include 'header.php';
?>
				<!-- Main -->
                    <section>
						<div class="inner">
							<section>
								<header class="major">
									<h2>Cadastro da entrada de novo carro</h2>
								</header>

								<form method="post" action="cadastrocarro.php">
									<div class="fields">
										<div class="field half">
											<label for="modelo">Modelo</label>
											<input type="text" name="modelo" id="modelo" required/>
										</div>
										<div class="field half">
											<label for="marca">Marca</label>
											<input type="text" name="marca" id="marca" required/>
										</div>
										<div class="field half">
											<label for="placa">Placa</label>
											<input type="text" name="placa" id="placa" required/>
										</div>
                                        <div class="field half">
											<label for="cor">Cor</label>
											<input type="text" name="cor" id="cor" required/>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" value="CADASTRAR" class="primary" /></li>
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