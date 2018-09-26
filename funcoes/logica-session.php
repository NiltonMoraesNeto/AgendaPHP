<?php

	session_start();
	
	function userCheckout() {		
		if (!isset($_SESSION['USUARIO'])) {
			$_SESSION["danger"] = "Você precisa estar logado!";
			header("Location: index.php");
			die();
		}
	}

	function userCheckin() {
		if(isset($_SESSION['USUARIO'])){
			header("Location: home.php");
		}
	}

	function userLogin($conexao, $login, $senha) {				
		$query = "SELECT * FROM usuarios WHERE LOGIN=:login AND SENHA=:senha and ATIVO = 1;";
		$buscaUsuario = $conexao -> prepare($query);		
		$buscaUsuario -> bindValue(":login", $login, PDO::PARAM_STR);
		$buscaUsuario -> bindValue(":senha", md5($senha));
		$buscaUsuario -> execute();
		$usuario = $buscaUsuario -> fetch(PDO::FETCH_ASSOC);

		return $usuario;
	}

	function userLogout() {
		session_start();
		session_destroy();
	}