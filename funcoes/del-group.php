<?php	require_once("conexao.php"); require_once("func-cadastros.php");

    $grupo = $_POST['grupo'];
    
	deletarGrupo($conexao, $grupo);