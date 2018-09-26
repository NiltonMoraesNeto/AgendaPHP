<?php require_once("../funcoes/conexao.php");

$funcionario = utf8_encode($_POST['funcionario']);
$query = "select `nome_contato` from `agenda2`.`contatos` where id_contato = ".$funcionario;
$statement = $conexao -> prepare($query);
$statement -> execute();
$result = $statement -> fetch(PDO::FETCH_ASSOC);

$nomefuncionario = utf8_encode($result['nome_contato']);
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
require_once("mpdf/mpdf.php");

// INSTANCIA A CLASS MPDF
$mpdf = new mPDF();

// ESCREVE O PDF
$mpdf->WriteHTML($pdf);

// SAIDA DO PDF NO NAVEGADOR
$mpdf->Output("Recibo - ".$motivo." - ".$nomefuncionario.".pdf","D");
// SE QUISER SALVAR É SÓ DIRECIONAR O DIRETORIO
//$arquivo_contrato = $mpdf->Output("../requerimentos/".$nome.".pdf");