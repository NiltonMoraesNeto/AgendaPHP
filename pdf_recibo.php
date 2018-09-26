<?
while (ob_get_level())
ob_end_clean();
header("Content-Encoding: None", true);
?>
<?php
require_once("header.php");
require_once('fpdf/fpdf.php');

$id_contato = $_GET['id_contato'];
$usuario = $_GET['usuario'];


mysql_select_db($database_cnnagenda2, $cnnagenda2);
$query_rdsOpen = "SELECT * FROM RECIBO_VR ORDER BY ID_RECIBO_VR DESC";
$rdsOpen = mysql_query($query_rdsOpen, $cnnagenda2) or die(mysql_error());
$row_rdsOpen = mysql_fetch_assoc($rdsOpen);
$totalRows_rdsOpen = mysql_num_rows($rdsOpen);

if($funcionarios == '') //Seleciona todos os funcionarios
{
	mysql_select_db($database_cnnagenda2, $cnnagenda2);
	$query_rdsFator = "SELECT * FROM CONTATOS WHERE ID_GRUPO = 1 ORDER BY NOME_CONTATO ASC";
	$rdsFator = mysql_query($query_rdsFator, $cnnagenda2) or die(mysql_error());
	$row_rdsFator = mysql_fetch_assoc($rdsFator);
	$totalRows_rdsFator = mysql_num_rows($rdsFator);
}
else
{
	mysql_select_db($database_cnnagenda2, $cnnagenda2);
	$query_rdsFator = "SELECT * FROM CONTATOS WHERE ID_GRUPO = 1 AND ID_CONTATO in(".$funcionarios.") ORDER BY NOME_CONTATO ASC";
	$rdsFator = mysql_query($query_rdsFator, $cnnagenda2) or die(mysql_error());
	$row_rdsFator = mysql_fetch_assoc($rdsFator);
	$totalRows_rdsFator = mysql_num_rows($rdsFator);
}

	
	$pdf= new FPDF("P","pt","A4");
		
	do {
		$pdf->AddPage();
		$pdf->ln(80);
		$pdf->Image('images/sphera.jpg',64,64,128);
		$pdf->SetFont('Arial', '', 12);
		$pdf->ln(10);
		$pdf->MultiCell(550,10,'Sphera Internacional - Rua Carmelo Rangel, 373 - Batel',0,0,'C');
		$pdf->ln(80);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(60,  7, iconv('utf-8','iso-8859-1', 'Recibo: ' . 'R$' ). '' . number_format($row_rdsOpen['VALOR_RECIBO'], 2, ',','.') ,0);
		$pdf->SetX(35); 
		$pdf->ln(30); 
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(100, 7, 'Recebi(emos) de: '. ' ' . $row_rdsOpen['EMPRESA'] ,0); 
		$pdf->SetX(180);  
		$pdf->ln(30);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(100, 7, iconv('utf-8', 'iso-8859-1', 'A importância de: '). $row_rdsOpen['VALOR_EXTENSO'],0);
		$pdf->SetX(180);  
		$pdf->ln(30);
		$pdf->SetFont('Arial', '', 12); 
		$pdf->Cell(100, 7, 'Proveniente de: '		   . $row_rdsOpen['MOTIVO_RECIBO'],0);
		$pdf->SetX(35); 
		$pdf->ln(30);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(180, 7, iconv('utf-8','iso-8859-1', 'Para maior clareza, firmo o presente'),0); 
		$pdf->SetX(35); 
		$pdf->ln(30);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(180, 7, 'Curitiba, ' . ConverteDataBR($row_rdsOpen['DATA_CAD']) ,0); 
	   
	  	$pdf->SetX(25);
	  	$pdf->ln(30);
	  	$pdf->SetFont('Arial', '', 12); 
	  	$pdf->Cell(550, 5, iconv('utf-8','iso-8859-1', 'Nome: '.$row_rdsFator['NOME_CONTATO'].'  CPF: '.$row_rdsFator['CPF_CNPJ']),0);
	  	$pdf->ln(150);
		$pdf->SetFont('Arial', '', 12);
	  	$pdf->Cell(550, 7, iconv('utf-8','iso-8859-1', 'Assinatura: ___________________________________________'),0); 
		$pdf->ln(240);
	}  while ($row_rdsFator = mysql_fetch_assoc($rdsFator));

$pdf->Output('ContatoID_'.'abc'.'.pdf', 'D');
?>