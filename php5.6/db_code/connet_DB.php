<?php
$bd_Servidor = '127.0.0.1';
	$bd_Usuario = 'root';
	$bd_Senha = '';
	$bd_Banco = 'aplicacao_db';

		$conexao = mysqli_connect($bd_Servidor,$bd_Usuario,$bd_Senha,$bd_Banco);

		if (mysqli_connect_errno($conexao)) {
			echo "Problemas para conectar no banco. Verifique os dados!";
			die();
		}
		
		// esta funçãoesta sendo utilizada para procurar os ids, inseridos no banco
		function buscar_comentario($conexao, $id) {
			$sqlBusca = 'SELECT * FROM comentarios_site WHERE id = ' . $id;
			$resultado = mysqli_query($conexao, $sqlBusca);
			return mysqli_fetch_assoc($resultado);
		}

		function select_banco($conexao)
		{

			// variavel le o bando de dados
			$sqlBusca = 'SELECT * FROM comentarios_site';
				// a variavel resultado faz conexao e procura os dados no banco , com o auxilo o mysqli_query
			$resultado = mysqli_query($conexao, $sqlBusca);
				// cria um array para nao capturar o campo de array q ira varrer o banco de dados
			$comentarios = array();

						// esse loop serve para verificar se exite algo realmente no banco 
			while ($comentario = mysqli_fetch_assoc($resultado)) {
				// monstar todos os resultados q o loop encontrou 
				$comentarios[] = $comentario;
			}
			// retornar todos os valores pedidos
			return $comentarios;
		}

					// Gravar dados no Banco de dados
//----------------------------------------------------------------------------------------------------------
		function grava_senha($conexao , $grava_dados) // esta fanção fiz por função de desencargo 
		{
			$sqlGravar ="INSERT INTO senhas 
			(senha) 
			VALUES
			(
				md5('{$grava_dados['senha']}')
			)";
			mysqli_query($conexao, $sqlGravar);	
		}

		function grava_email($conexao, $grava_dados)
		{
			$sqlGravar ="INSERT INTO emails 
			(email) 
			VALUES
			(
				'{$grava_dados['email']}'
			)";
			mysqli_query($conexao, $sqlGravar);
		}

		function gravar_mensagem($conexao, $grava_dados)
		{
			$sqlGravar= "INSERT INTO mensagens 
			(mensagem) 
			VALUES
			(
				'{$grava_dados['mensagem']}'
			)";
			mysqli_query($conexao, $sqlGravar);
		}

		function gravar_nome_completo($conexao, $grava_dados)
		{
			$sqlGravar ="INSERT INTO usuarios 
			(nome_completo) 
			VALUES
			(
				'{$grava_dados['nome_completo']}'
			)";
			mysqli_query($conexao, $sqlGravar);
		}


		// Parte dos comentarios do site 

		function gravar_comentario_db($conexao, $comentario)
		{
			$sqlGravar ="INSERT INTO comentarios_site 
			(nome_usuario , comentario) 
			VALUES
			(
				'{$comentario['nome_usuario']}',
				'{$comentario['comentario']}'

			)";
			mysqli_query($conexao, $sqlGravar);
		}

			


			// deletar os dados do banco
//----------------------------------------------------------------------------------------------------------
		function delete_email($conexao , $delete_dados)
		{
			$sqlDelete= "DELETE FROM emails WHERE id='{$delete_dados['id']}'";
			mysqli_query($conexao, $sqlDelete);
		}

		function delete_mensagem($conexao , $delete_dados)
		{
			$sqlDelete ="DELETE FROM mensagens WHERE id ='{$delete_dados['id']}'";
			mysqli_query($conexao, $sqlDelete);
		}

		function delete_nome_completo($conexao, $delete_dados)
		{
			$sqlDelete ="DELETE FROM usuarios WHERE id = {$delete_dados['id']}";
			mysqli_query($conexao, $sqlDelete);
		}

		//Deletar os comentarios 

		function deletar_comentarios($conexao , $id)
		{
			$sqlDelete ="DELETE FROM comentarios_site WHERE id = {$id}";

			mysqli_query($conexao, $sqlDelete);

		}
					// UPDATES 
//----------------------------------------------------------------------------------------------------------
		function atualiza_email($conexao , $atualiza_dados)
		{
						// caso precise mudar de atualiza_dados para outro nome_do_array_no_forech()
			$sqlUpdate = "UPDATE emails SET email ='{$atualiza_dados['email']}' WHERE id = {$atualiza_dados['id']}";

			mysqli_query($conexao , $sqlUpdate);
		}

		function atualiza_nome_completo($conexao , $atualiza_dados)
		{
					// caso precise mudar de atualiza_dados para outro nome_do_array_no_forech()
			$sqlUpdate = "UPDATE usuarios SET nome_completo ='{$atualiza_dados['nome_completo']}' WHERE id = {$atualiza_dados['id']}";

			mysqli_query($conexao , $sqlUpdate);
		}

		function atualiza_mensagem($conexao , $atualiza_dados)
		{
			$sqlUpdate = "UPDATE mensagens SET mensagem ='{$atualiza_dados['mensagem']}' WHERE id = {$atualiza_dados['id']}";

			mysqli_query($conexao , $sqlUpdate);
		}

				// COMENTARIOS UPDATE 
		function atualiza_comentarios($conexao , $comentario_novo)
		{
			$sqlUpdate = "UPDATE comentarios_site SET comentario ='{$comentario_novo['comentario']}' WHERE id = {$comentario_novo['id']}";

			$sqlUpdate_2 = "UPDATE comentarios_site SET nome_usuario ='{$comentario_novo['nome_usuario']}' WHERE id = {$comentario_novo['id']}";

			mysqli_query($conexao , $sqlUpdate);
			mysqli_query($conexao , $sqlUpdate_2);
		}
 ?>