<?php  session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina principal do GG</title>
		<!-- bloco de metas -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="refresh" content=" 120; url = index.php">
		<!-- Bloco de links -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
		
            <!-- Java Script / Jquery -->
	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script   src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/parametros.js"></script>

    <!-- No arquivo de paramentros temos mais funçoes que fazem diversas coisas -->
</head>
<body class="fundo-pagina-principal">
	
	<?php include 'db_code\logica_cadastro.php'; ?>
	<?php include 'db_code\gravar_comentario.php';  ?>
	
	<?php include 'menu_principal.php';  ?>
	
	<?php  include 'carroseu.php'; ?>
	
	<div class="container">
		<div class="col-md-6">
			<h2 id="quem_somos" class="h1 center">Quem-somos</h2>
			<figure>
				<img src="img/" class="img-responsive">
			</figure>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="col-md-6">
			<h2 id="nossa_equipe" class="h1 center">Nossa Equipe</h2>
			<figure>
				<img src="img/" class="img-responsive">
			</figure>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>


		<?php  include 'calculadora.php'; ?>

		<!-- colocar fotos no carroseu e fazer o formulario baseado no <a href=""></a> usando ID nas tags -->
	</div>
	<?php include 'formulario.php'; ?>
	<?php include 'comentarios.php'; ?>
	<?php include 'footer.php';  ?>
</body>
</html>
