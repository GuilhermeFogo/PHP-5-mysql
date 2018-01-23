<?php 
include 'db_code\connet_DB.php';
deletar_comentarios($conexao, $_GET['id']);
header('Location: index.php');
// no arquivo de gravar comentario tem a explicação
 ?>