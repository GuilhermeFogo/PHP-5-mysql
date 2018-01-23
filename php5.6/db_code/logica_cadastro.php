<?php
		include 'connet_DB.php';
	$grava_dados= array();

	
	if (isset($_POST['mensagem']) && $_POST['mensagem'] != '') {
				$grava_dados['mensagem'] = $_POST['mensagem'];
			
			if (isset($_POST['nome_completo'])) {
				$grava_dados['nome_completo'] =$_POST['nome_completo'];
			
			} else {
				$grava_dados['nome_completo'] = '';
			}
			
			if (isset($_POST['email'])) {
				$grava_dados['email'] = $_POST['email'];
			} else {
				$grava_dados['email'] ="";
			}
				grava_email($conexao, $grava_dados);
				gravar_nome_completo($conexao, $grava_dados);
				gravar_mensagem($conexao, $grava_dados);
		}
	
?>