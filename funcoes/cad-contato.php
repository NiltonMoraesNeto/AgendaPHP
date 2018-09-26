<?php	require_once("conexao.php"); require_once("func-cadastros.php"); require_once("logica-session.php"); require_once("classes.php");

	$cadContato = new Contato;

	$cadContato->grupo = $_POST['grupo'];
	$cadContato->tipopessoa = $_POST['tipopessoa'];
	$cadContato->nomePEmpresa = $_POST['nomePEmpresa'];	
	$cadContato->contato = $_POST['contato'];	
	$cadContato->dtNascimento = $_POST['dataNascimento'];
	$cadContato->cpfcnpj = $_POST['cpf-cnpj'];
	$cadContato->estado = $_POST['estado'];
	$cadContato->cidade = $_POST['cidade'];
	$cadContato->cep = $_POST['cep'];
	$cadContato->bairro = $_POST['bairro'];
	$cadContato->endereco = $_POST['endereco'];
	$cadContato->numeroEnd = $_POST['numero'];
	$cadContato->complemento = $_POST['complemento'];	
	$cadContato->telFixo = $_POST['telFixo'];
	$cadContato->telSec = $_POST['telSec'];
	$cadContato->telCelular = $_POST['telCelular'];	
	$cadContato->email = $_POST['email'];
	$cadContato->observacoes = $_POST['observacao'];
	$cadContato->usuario = 1;
	if(isset($_POST['ativo']) == "")
		$cadContato->ativo = 0;
	else
		$cadContato->ativo = 1;

	cadastroContato($conexao, $cadContato);
	die();