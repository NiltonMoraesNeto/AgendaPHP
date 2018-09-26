<?php	require_once("conexao.php"); require_once("func-cadastros.php"); require_once("logica-session.php"); require_once("classes.php"); 

//Download PDF Recibo

$funcionario = utf8_encode($_POST['funcionario']);
$query = "select `nome_usuario` from `agenda2`.`usuarios` where id_usuario = ".$funcionario;
$statement = $conexao -> prepare($query);
$statement -> execute();
$result = $statement -> fetch(PDO::FETCH_ASSOC);

$nomefuncionario = utf8_encode($result['nome_usuario']);
$empresa		= utf8_encode($_POST['empresa']);
$valorrecibo		= utf8_encode($_POST['valorrecibo']);
$valorextenso		= utf8_encode($_POST['valorextenso']);
$motivo		= utf8_encode($_POST['motivo']);
$data		= utf8_encode($_POST['data']);
$cpf		= utf8_encode($_POST['cpf']);

// PEGA O ARQUIVO MODELO
$pdf = file_get_contents("../modeloRecibo.html");

// SUBSTITUI COM OS DADOS FORNECIDOS
$pdf = str_replace("#funcionario","$nomefuncionario",$pdf);
$pdf = str_replace("#empresa","$empresa",$pdf);
$pdf = str_replace("#valorrecibo","$valorrecibo",$pdf);
$pdf = str_replace("#valorextenso","$valorextenso",$pdf);
$pdf = str_replace("#motivo","$motivo",$pdf);
$pdf = str_replace("#data","$data",$pdf);
$pdf = str_replace("#cpf","$cpf",$pdf);

// SOLICITA A CLASS MPDF
require_once("../php/mpdf/mpdf.php");



// INSTANCIA A CLASS MPDF
$mpdf = new mPDF();

// ESCREVE O PDF
$mpdf->WriteHTML($pdf);

// SAIDA DO PDF NO NAVEGADOR
//$mpdf->Output("Recibo - ".$nomefuncionario.".pdf","D");
// SAIDA DO PDF NO DISCO C
$arquivo_contrato = $mpdf->Output("C:\Users\User\Downloads\\".$motivo." - ".$nomefuncionario.".pdf");

//FIM Download PDF Recibo




//Salvar BD

	$cadRecibo = new Recibo;	

	$cadRecibo->empresa = $_POST['empresa'];
	$cadRecibo->valorrecibo = $_POST['valorrecibo'];
	$cadRecibo->valorextenso = $_POST['valorextenso'];	
	$cadRecibo->motivo = $_POST['motivo'];	
	$cadRecibo->data = $_POST['data'];
	
	cadastroRecibo($conexao, $cadRecibo);
	die();