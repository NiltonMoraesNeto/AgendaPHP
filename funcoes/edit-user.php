<?php	require_once("conexao.php"); require_once("func-cadastros.php");

    $usuario = $_POST['usuario'];
	$cpf = $_POST['cpf'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    if(isset($_POST['ativou']) == "")
    	$ativou = 0;
    else
    	$ativou = 1;
    
	alteracaoUsuario($conexao, $usuario, $cpf, $login, $senha, $ativou);