<?php require_once("header.php");?>

<?php
	$contas = array();
	$query = "SELECT `NOME_CONTATO`, `CPF_CNPJ` FROM `agenda2`.`contatos2` ORDER BY `NOME_CONTATO` ASC;";
	$statement = $conexao -> prepare($query);
	$statement -> execute();
	
	while($result = $statement -> fetch(PDO::FETCH_ASSOC))
	{
		array_push($contas, $result);
	}	

	//var_dump($result);
	
?>

<?php require_once("footer.php");?>