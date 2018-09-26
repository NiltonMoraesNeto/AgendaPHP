<?php

	//$conexao = mysqli_connect("localhost","root","","agenda2") or die("Erro de conexão");

	try {
		$conexao = new PDO("mysql:host=localhost;dbname=agenda2", "root", "");	
	} catch (PDOException $e) {
		echo $e -> getMessage();
	}