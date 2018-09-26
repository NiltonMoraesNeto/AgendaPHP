<?php
	require_once("conexao.php");	

	function loadLogin($conexao, $id)
	{
		$query = "SELECT `CPF`, `LOGIN`,`SENHA`, `ATIVO` FROM `agenda2`.`usuarios` WHERE ID_USUARIO = :id;";
		$statement = $conexao -> prepare($query);
		$statement -> bindValue(":id", $id, PDO::PARAM_INT);
		$statement -> execute();
		$usuario = $statement -> fetch(PDO::FETCH_ASSOC);
		
		echo json_encode($usuario);
		
	}
	
	function loadCpf($conexao, $idcontato)
	{
		$query = "SELECT `CPF_CNPJ` FROM `agenda2`.`contatos` WHERE ID_CONTATO = :idcontato;";
		$statement = $conexao -> prepare($query);
		$statement -> bindValue(":idcontato", $idcontato, PDO::PARAM_INT);
		$statement -> execute();
		$contato = $statement -> fetch(PDO::FETCH_ASSOC);
				
		echo json_encode($contato);
		
	}

	function loadGrupo($conexao, $idgrupo)
	{
		$query = "SELECT `ATIVO` FROM `agenda2`.`grupo` WHERE ID_GRUPO = :idgrupo;";
		$statement = $conexao -> prepare($query);
		$statement -> bindValue(":idgrupo", $idgrupo, PDO::PARAM_INT);
		$statement -> execute();
		$grupo = $statement -> fetch(PDO::FETCH_ASSOC);
		
		echo json_encode($grupo);
	}
	
	function loadContato($conexao, $idcontatoedit)
	{
		$query = "SELECT * FROM `agenda2`.`contatos` WHERE ID_CONTATO = :idcontatoedit;";
		$statement = $conexao -> prepare($query);
		$statement -> bindValue(":idcontatoedit", $idcontatoedit, PDO::PARAM_INT);
		$statement -> execute();
		$contato = $statement -> fetch(PDO::FETCH_ASSOC);
				
		echo json_encode($contato);
		
	}
	
	$id = $_GET['id'];
	$idcontato = $_GET['idcontato'];
	$idgrupo = $_GET['idgrupo'];
	$idcontatoedit = $_GET['idcontatoedit'];	

	if($id != "")
	{
		loadLogin($conexao, $id);
	}
	
	if($idcontato != "")
	{
		loadCpf($conexao, $idcontato);
	}

	if($idgrupo != "")
	{
		loadGrupo($conexao, $idgrupo);
	}
	
	if($idcontatoedit != "")
	{
		loadContato($conexao, $idcontatoedit);
	}

?>