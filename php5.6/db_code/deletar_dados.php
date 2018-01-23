<?php 
		// este aquivo ainda nao foi utilizado

	//include 'db_code\connet_DB.php';  //coloquei aqui por caso precise
	$deletar_dados = array(); // cria-se uma variavel geral para depois renomeala como "comentario"

			if (isset($_POST['nome_usuario']) && $_POST['nome_usuario'] != '') {
				$del_dados = array(); // esta variavel é o nome da renomeiassao da variavel "gera a cima "
				$del_dados = $_GET['id'];
				$del_dados['nome_usuario'] = $_POST['nome_usuario'];
			
			if (isset($_POST['comentario'])) {
				$del_dados['comentario'] = $_POST['comentario'];
			
			} else {
				$del_dados['comentario'] = '';
			}

			deletar_comentarios($conexao, $del_dados); // funçao para gravar no banco
			
			}
	$deletar_dados = buscar_comentario($conexao); // mostar tudo que no banco tem, detro dessta variavel "geral"

 ?>