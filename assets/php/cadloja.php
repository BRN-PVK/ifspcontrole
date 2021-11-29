<?php
	include 'connect.php';
    include 'header.php';
?>
				<!-- Main -->
                    <section>
						<div class="inner">
							<section>
								<header class="major">
									<h2>Cadastro de nova loja conveniada</h2>
								</header>

								<form method="post" action="cadastroloja.php">
									<div class="fields">
										<div class="field half">
											<label for="modelo">Nome</label>
											<input type="text" name="nome" id="nome" required/>
										</div>
										<div class="field half">
											<label for="marca">Dono</label>
											<input type="text" name="dono" id="dono" required/>
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