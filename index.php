<?php
	session_start();
	include 'assets/php/connect.php';
    if (isset($_SESSION['user'])){
        if ($_SESSION['user']=="admin")
        	header("Location: assets/php/logado.php");
        else
            header("Location: assets/php/erro.php");
    }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>IFSP - Controle</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.php" class="logo"><strong>IFSP</strong> <span>CONTROLE</span></a>
				</header>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Gestão de estacionamentos</h1>
							</header>
							<div class="content">
								<p>Clique no botão a seguir para autenticar-se na plataforma.</p>
								<div class="major-actions">
								<ul class="actions">
									<li><a data-toggle="modal" data-target="#exampleModal" class="button next scrolly">AUTENTICAR</a></li>
								</ul>
								<div class="major-actions">
							</div>
						</div>
					</section>
	
				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="copyright">
							<li>Copyright © 2021 - Bruno Povliuk, Matheus H. da S. Lisboa, João P. J. de Brito</li>
						</ul>
					</div>
				</footer>

			</div>

			<!-- Modal -->
		    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		      <div class="modal-dialog modal-lg" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h4 class="modal-title" id="exampleModalLabel">Autenticação</h4>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		          </div>
		          <div class="modal-body">
		              <form method="post" action='assets/php/logar.php'>
		              	<div class="fields">
		              		<div class="field half">
		              			<label for="field-1">Usuário</label>
		              			<input type="text" id="field-1" name="user" placeholder="Insira seu usuário aqui" required="required">
		              		</div>

		              		<div class="field half">
		              			<label for="field-2">Senha</label>
		              			<input type="password" name="senha" placeholder="Insira sua senha aqui" id="field-2" required="required">
		              		</div>
	              		</div>
						<div class="modal-footer">
		            		<button type="button" data-dismiss="modal">Cancelar</button>
							<button type="submit">Logar</button>
		          		</div>
		              </form>
		          </div>
		        </div>
		      </div>
		    </div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>