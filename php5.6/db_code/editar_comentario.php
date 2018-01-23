<?php 
	include 'db_code\connet_DB.php';  //coloquei aqui por caso precise
	$atualiza_comentario = array(); // cria-se uma variavel geral para depois renomeala como "comentario"

			if (isset($_POST['nome_usuario']) && $_POST['nome_usuario'] != '') {
				$comentario_novo = array(); // esta variavel é o nome da renomeiassao da variavel "gera a cima "
			
			// esta array captura o id da pagina , do banco , pela barra de navegação, esta localizada tambem em "connect_DB" e gravar_comentario
				$comentario_novo['id']= $_GET['id'];
				$comentario_novo['nome_usuario'] = $_POST['nome_usuario'];
			
			if (isset($_POST['comentario'])) {
				$comentario_novo['comentario'] = $_POST['comentario'];
			
			} else {
				$comentario_novo['comentario'] = '';
			}
			
			atualiza_comentarios($conexao, $comentario_novo); // funçao para atualizar no banco
			}

			// aqui ele faz conexao com o banco e pega o id do banco
			$atualiza_comentario = buscar_comentario($conexao , $_GET['id']);

 ?>