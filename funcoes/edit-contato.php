<?php	require_once("conexao.php"); require_once("func-cadastros.php");

    $grupo = $_POST['grupo'];
	$tipopessoa = $_POST['tipopessoa'];
    $nomePEmpresa = $_POST['nomePEmpresa'];
    $contato = $_POST['contato'];
	$dataNascimento = $_POST['dataNascimento'];
	$cpf = $_POST['cpf'];
	$cep = $_POST['cep'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$telFixo = $_POST['telFixo'];
	$telSec = $_POST['telSec'];
	$telCelular = $_POST['telCelular'];
	$email = $_POST['email'];
	$observacao = $_POST['observacao'];
    if(isset($_POST['ativo']) == "")
    	$ativo = 0;
    else
    	$ativo = 1;
    
	alteracaoContato($conexao, $grupo, $tipopessoa, $nomePEmpresa, $contato, $dataNascimento, $cpf, $cep, $estado, $cidade, $bairro, $endereco, $numero, $complemento, $telFixo, $telSec, $telCelular, $email, $observacao, $ativo);