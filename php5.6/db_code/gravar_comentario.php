<?php 
	//include 'db_code\connet_DB.php';  //coloquei aqui por caso precise
	$gravar_comentario = array(); // cria-se uma variavel geral para depois renomeala como "comentario"

			if (isset($_POST['nome_usuario']) && $_POST['nome_usuario'] != '') {
				$comentario = array(); // esta variavel é o nome da renomeiassao da variavel "gera a cima "
				$comentario['nome_usuario'] = $_POST['nome_usuario'];
			
			if (isset($_POST['comentario'])) {
				$comentario['comentario'] = $_POST['comentario'];
			
			} else {
				$comentario['comentario'] = '';
			}

			gravar_comentario_db($conexao, $comentario); // funçao para gravar no banco
				// uma função q recebe uma string e aponta para onde quiser do site 
			header('Location: index.php');
			die();

			}
	$gravar_comentario = select_banco($conexao); // mostar tudo que no banco tem, detro dessta variavel "geral"
	
	// este array serve para localizar o id do banco e regravar em cima , dando o update
	$comentario = array(
    	'id' => 0,
    	'nome_usuario'=>'',
    	'comentario'=>''
    	);


	
?>

