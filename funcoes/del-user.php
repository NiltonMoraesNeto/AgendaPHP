<?php	require_once("conexao.php"); require_once("func-cadastros.php");

    $usuario = $_POST['usuario'];
    $login = $_POST['login'];
    
	deletarUsuario($conexao, $usuario, $login);