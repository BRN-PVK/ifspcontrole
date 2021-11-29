<?php   
	session_start();
    include 'headersair.php';
?>
				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Área do administrador</h1>
									</header>

									<div class="row">
										<div class="col-6">
											<p><strong>CADASTRO DA ENTRADA DE NOVOS CARROS</strong></p>
                                            <div class="major-actions">
								                <ul class="actions">
									            <li><a href="cadcar.php" class="button next scrolly">CADASTRAR</a></li>
								            </ul>
                                            </div>	
										</div>

										<div class="col-6">
                                            <p><strong>GERENCIAR CARROS DO ESTACIONAMENTO</strong></p>
                                            <div class="major-actions">
                                                <ul class="actions">
                                                <li><a href="admcar.php" class="button next scrolly">GERENCIAR</a></li>
                                                </ul>
                                            </div>	
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-6">
                                            <p><strong>ALTERAÇÃO DA TARIFA</strong></p>
                                            <div class="major-actions">
                                                <ul class="actions">
                                                <li><a href="tarifa.php" class="button next scrolly">TARIFA</a></li>
                                                </ul>
                                            </div>				
										</div>

										<div class="col-6">
                                            <p><strong>ADMINISTRAR LOJAS CONVENIADAS</strong></p>
                                            <div class="major-actions">
                                                <ul class="actions">
                                                <li><a data-toggle="modal" data-target="#exampleModal" class="button next scrolly">LOJAS</a></li>
                                                </ul>
                                            </div>
										</div>
									</div>
								</div>
							</section>
					</div>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">Gerenciamento das lojas</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="fields">
								<div class="field half">
									<label for="field-1">Cadastrar nova loja conveniada</label>
									<a href="cadloja.php" class="button next scrolly">CADASTRAR</a>
								</div>
								<div class="field half">
									<label for="field-2">Listar pagamentos pendentes</label>
									<a href="pendencias.php" class="button next scrolly">PENDÊNCIAS</a>
								</div>
							</div>
						</form>
					</div>
					</div>
				</div>
				</div>

<?php
    include 'footer.php';
?>