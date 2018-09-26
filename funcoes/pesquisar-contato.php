<?php require_once("conexao.php");

	function listaContatos($conexao, $contatoEmpresa, $nomeContato){
		$contatos = array();
		if($contatoEmpresa == '' && $nomeContato == '')
			$query = "SELECT `NOME_CONTATO`, `CONTATO`, `TEL_FIXO`, `TEL_SECUNDARIO`, `TEL_CELULAR` FROM `agenda2`.`contatos` ORDER BY `NOME_CONTATO` ASC;";

		else if($contatoEmpresa != '' && $nomeContato != '')
			$query = "SELECT `NOME_CONTATO`, `CONTATO`, `TEL_FIXO`, `TEL_SECUNDARIO`, `TEL_CELULAR` FROM `agenda2`.`contatos` WHERE `NOME_CONTATO` LIKE '%$contatoEmpresa%' AND `CONTATO` LIKE '%$nomeContato%' ORDER BY `NOME_CONTATO` ASC;";
		
		else if($contatoEmpresa != '')
			$query = "SELECT `NOME_CONTATO`, `CONTATO`, `TEL_FIXO`, `TEL_SECUNDARIO`, `TEL_CELULAR` FROM `agenda2`.`contatos` WHERE `NOME_CONTATO` LIKE '%$contatoEmpresa%' ORDER BY `NOME_CONTATO` ASC;";

		else if($nomeContato != '')
			$query = "SELECT `NOME_CONTATO`, `CONTATO`, `TEL_FIXO`, `TEL_SECUNDARIO`, `TEL_CELULAR` FROM `agenda2`.`contatos` WHERE `CONTATO` LIKE '%$nomeContato%' ORDER BY `NOME_CONTATO` ASC;";

		$statement = $conexao -> prepare($query);
		$statement -> execute();
		
		while($result = $statement -> fetch(PDO::FETCH_ASSOC))
		{
			array_push($contatos, $result);
		}
		
		return $contatos;
	}

	$contatoEmpresa = $_POST['contatoEmpresa'];
	$nomeContato = $_POST['nomeContato'];

?>

<table id="tableContato" class="table table-striped table-bordered colorgb">
	<thead> 
		<tr>
			<th width="28%">Nome Contato/Empresa</th>
			<th width="20%">Contato</th>
			<th width="14%">Telefone Fixo</th>
			<th width="14%">Telefone Secundário</th>
			<th width="14%">Telefone Celular</th>
		</tr>
	</thead> 
	<tbody>
		<?php
			$contatos = listaContatos($conexao, $contatoEmpresa, $nomeContato);
			foreach($contatos as $contato) :
		?>
		<tr>	              	
			<td><?php echo $contato['NOME_CONTATO']; ?></td>
			<td><?php echo $contato['CONTATO']; ?></td>
			<td><?php echo $contato['TEL_FIXO']; ?></td>
			<td><?php echo $contato['TEL_SECUNDARIO']; ?></td>
			<td><?php echo $contato['TEL_CELULAR']; ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>