<?php	
	require_once("conexao.php");
	require_once("logica-session.php");

	$usuario = userLogin($conexao, $_POST['login'], $_POST['senha']);

	if($usuario == null) {
		$_SESSION["danger"] = "Login ou senha inválido!";
		header("Location: ../index.php");
	} else {		
		$_SESSION['USUARIO'] = $usuario["ID_USUARIO"];
		header("Location: ../index.php");
	}
	die();