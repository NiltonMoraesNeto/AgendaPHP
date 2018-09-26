<?php	require_once("conexao.php"); require_once("func-cadastros.php");

    $grupo = $_POST['grupo'];
    if(isset($_POST['ativog']) == "")
    	$ativog = 0;
    else
    	$ativog = 1;
    
	cadastroGrupo($conexao, $grupo, $ativog);