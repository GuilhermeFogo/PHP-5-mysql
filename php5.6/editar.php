<!DOCTYPE html>
<html>
<head>
	<title>Pagina principal do GG</title>
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
</head>
<body class="fundo-pagina-principal">
		<?php include 'db_code/editar_comentario.php' ?>
<div class="container">
	<div class=" row col-md-12">
		<p class="h3">O que achou do Site Comente:</p>
				<form class="form-group" method="post">
					<label  for="nome">Nome:</label>
					<input type="text" name="nome_usuario" required="on" class="form-control" placeholder="Nome Completo">
					<label for="comentario">Comentario:</label>
					<textarea class="form-control" name="comentario" placeholder="Seu comentário" required="on"></textarea>
					<br>
					<input type="submit" name="gravar" value="Atualizar Comentario" class="btn btn-md btn-primary">
				</form>

			<a href="index.php" class="voltar">Voltar</a>
	</div>
</div>
</body>
</html>