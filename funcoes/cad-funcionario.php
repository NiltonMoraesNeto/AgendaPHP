<?php require_once("conexao.php"); require_once("func-cadastros.php"); require_once("classes.php");

	$cadFuncionario = new Funcionario;

	$cadFuncionario->nome = $_POST['nomecompleto'];
	$cadFuncionario->rg = $_POST['rg'];
	$cadFuncionario->orgaoemissor = $_POST['orgaoemissor'];
	$cadFuncionario->dataemissao = $_POST['dataemissao'];
	$cadFuncionario->cpf = $_POST['cpf'];
	$cadFuncionario->tituloeleitor = $_POST['tituloeleitor'];
	$cadFuncionario->zonaeleitor = $_POST['zonaeleitor'];
	$cadFuncionario->sessaoeleitor = $_POST['sessaoeleitor'];
	$cadFuncionario->pis = $_POST['pis'];
	$cadFuncionario->numeroctps = $_POST['numeroctps'];
	$cadFuncionario->seriectps = $_POST['seriectps'];
	$cadFuncionario->ufpis = $_POST['ufpis'];
	$cadFuncionario->datanascimento = $_POST['datanascimento'];
	$cadFuncionario->municipionasc = $_POST['municipionasc'];
	$cadFuncionario->ufnasc = $_POST['ufnasc'];
	$cadFuncionario->nomemae = $_POST['nomemae'];
	$cadFuncionario->nomepai = $_POST['nomepai'];
	$cadFuncionario->estadocivil = $_POST['estadocivil'];
	$cadFuncionario->sexo = $_POST['sexo'];
	$cadFuncionario->corraca = $_POST['corraca'];
	$cadFuncionario->cep = $_POST['cep'];
	$cadFuncionario->estado = $_POST['estado'];
	$cadFuncionario->cidade = $_POST['cidade'];
	$cadFuncionario->bairro = $_POST['bairro'];
	$cadFuncionario->endereco = $_POST['endereco'];
	$cadFuncionario->numeroend = $_POST['numeroend'];
	$cadFuncionario->complemento = $_POST['complemento'];
	$cadFuncionario->telfixo = $_POST['telFixo'];
	$cadFuncionario->telsec = $_POST['telSec'];
	$cadFuncionario->telcelular = $_POST['telCelular'];
	$cadFuncionario->email = $_POST['email'];
	$cadFuncionario->grauinstrucao = $_POST['grauinstrucao'];
	$cadFuncionario->nomebanco = $_POST['banco'];
	$cadFuncionario->agenciabanco = $_POST['agencia'];
	$cadFuncionario->contabanco = $_POST['conta'];
	$cadFuncionario->tipocontabanco = $_POST['tipoconta'];	
	$cadFuncionario->funcao = $_POST['funcao'];
	$cadFuncionario->dataadmissao = $_POST['dataadmissao'];
	$cadFuncionario->salario = $_POST['salario'];
	$cadFuncionario->horaentrada = $_POST['horaentrada'];
	$cadFuncionario->horaalmoco = $_POST['horaalmoco'];
	$cadFuncionario->horasaida = $_POST['horasaida'];	
	$cadFuncionario->horaentradasabado = $_POST['horaentradasab'];
	$cadFuncionario->horasaidasabado = $_POST['horasaidasab'];
	$cadFuncionario->qtddiariavt = $_POST['qtddiariavt'];		
	$cadFuncionario->outrotipoponto = $_POST['outroponto'];
	
	//radio button	
	if(isset($_POST['dependentes']) == "" || $_POST['dependentes'] == "nao")
		$cadFuncionario->dependentes = "Não";
	else
		$cadFuncionario->dependentes = "Sim";

	if(isset($_POST['ptrabalho']) == "" || $_POST['ptrabalho'] == "nao")
		$cadFuncionario->primeirotrabalho = "Não";
	else
		$cadFuncionario->primeirotrabalho = "Sim";

	if(isset($_POST['aposentado']) == "" || $_POST['aposentado'] == "nao")
		$cadFuncionario->aposentado = "Não";
	else
		$cadFuncionario->aposentado = "Sim";

	if(isset($_POST['trabsabado']) == "" || $_POST['trabsabado'] == "nao")
		$cadFuncionario->trabalhasabado = "Não";
	else
		$cadFuncionario->trabalhasabado = "Sim";

	if(isset($_POST['valetransporte']) == "" || $_POST['valetransporte'] == "nao")
		$cadFuncionario->valetransporte = "Não";
	else
		$cadFuncionario->valetransporte = "Sim";

	if(isset($_POST['descvtransporte']) == "" || $_POST['descvtransporte'] == "nao")
		$cadFuncionario->descontovt = "Não";
	else
		$cadFuncionario->descontovt = "Sim";

	if(isset($_POST['tipovt']) == "" || $_POST['tipovt'] == "nao")
		$cadFuncionario->tipovt = "Não";
	else
		$cadFuncionario->tipovt = "Sim";

	if(isset($_POST['valerefeicao']) == "" || $_POST['valerefeicao'] == "nao")
		$cadFuncionario->valerefeicao = "Não";
	else
		$cadFuncionario->valerefeicao = "Sim";

	if(isset($_POST['tipovr']) == "" || $_POST['tipovr'] == "nao")
		$cadFuncionario->tipovr = "Não";
	else
		$cadFuncionario->tipovr = "Sim";

	if(isset($_POST['cartaoponto']) == "" || $_POST['cartaoponto'] == "nao")
		$cadFuncionario->cartaoponto = "Não";
	else
		$cadFuncionario->cartaoponto = "Sim";


	cadastroFuncionario($conexao, $cadFuncionario);
	die();
?>