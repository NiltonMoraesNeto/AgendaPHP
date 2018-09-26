<?php
$nomecompleto		= utf8_encode($_POST['nomecompleto']);
$rg		= utf8_encode($_POST['rg']);
$orgaoemissor		= utf8_encode($_POST['orgaoemissor']);
$dataemissao		= utf8_encode($_POST['dataemissao']);
$cpf		= utf8_encode($_POST['cpf']);
$tituloeleitor		= utf8_encode($_POST['tituloeleitor']);
$zonaeleitor		= utf8_encode($_POST['zonaeleitor']);
$sessaoeleitor		= utf8_encode($_POST['sessaoeleitor']);
$pis		= utf8_encode($_POST['pis']);
$numeroctps		= utf8_encode($_POST['numeroctps']);
$seriectps		= utf8_encode($_POST['seriectps']);
$ufpis		= utf8_encode($_POST['ufpis']);
$datanascimento		= utf8_encode($_POST['datanascimento']);
$municipionasc		= utf8_encode($_POST['municipionasc']);
$ufnasc		= utf8_encode($_POST['ufnasc']);
$nomemae		= utf8_encode($_POST['nomemae']);
$nomepai		= utf8_encode($_POST['nomepai']);
$estadocivil		= utf8_encode($_POST['estadocivil']);
$sexo		= utf8_encode($_POST['sexo']);
$corraca		= utf8_encode($_POST['corraca']);
$dependentes		= utf8_encode($_POST['dependentes']);
$cep		= utf8_encode($_POST['cep']);
$estado		= utf8_encode($_POST['estado']);
$cidade		= utf8_encode($_POST['cidade']);
$bairro		= utf8_encode($_POST['bairro']);
$endereco		= utf8_encode($_POST['endereco']);
$numeroend		= utf8_encode($_POST['numeroend']);
$complemento		= utf8_encode($_POST['complemento']);
$telFixo		= utf8_encode($_POST['telFixo']);
$telSec		= utf8_encode($_POST['telSec']);
$telCelular		= utf8_encode($_POST['telCelular']);
$email		= utf8_encode($_POST['email']);
$grauinstrucao		= utf8_encode($_POST['grauinstrucao']);
$banco		= utf8_encode($_POST['banco']);
$agencia		= utf8_encode($_POST['agencia']);
$conta		= utf8_encode($_POST['conta']);
$tipoconta		= utf8_encode($_POST['tipoconta']);
$ptrabalho		= utf8_encode($_POST['ptrabalho']);
$aposentado		= utf8_encode($_POST['aposentado']);
$funcao		= utf8_encode($_POST['funcao']);
$dataadmissao		= utf8_encode($_POST['dataadmissao']);
$salario		= utf8_encode($_POST['salario']);
$horaentrada		= utf8_encode($_POST['horaentrada']);
$horaalmoco		= utf8_encode($_POST['horaalmoco']);
$horasaida		= utf8_encode($_POST['horasaida']);
$trabsabado		= utf8_encode($_POST['trabsabado']);
$horaentradasab		= utf8_encode($_POST['horaentradasab']);
$horasaidasab		= utf8_encode($_POST['horasaidasab']);
$valetransporte		= utf8_encode($_POST['valetransporte']);
$qtddiariavt		= utf8_encode($_POST['qtddiariavt']);
$descvtransporte		= utf8_encode($_POST['descvtransporte']);
$tipovt		= utf8_encode($_POST['tipovt']);
$valerefeicao		= utf8_encode($_POST['valerefeicao']);
$tipovr		= utf8_encode($_POST['tipovr']);
$cartaoponto		= utf8_encode($_POST['cartaoponto']);
$outroponto		= utf8_encode($_POST['outroponto']);
$outrosbeneficios		= utf8_encode($_POST['outrosbeneficios']);
$tipoxp		= utf8_encode($_POST['tipoxp']);

// PEGA O ARQUIVO MODELO
$pdf = file_get_contents("../modelo.html");

// SUBSTITUI COM OS DADOS FORNECIDOS
$pdf = str_replace("#nomecompleto","$nomecompleto",$pdf);
$pdf = str_replace("#rg","$rg",$pdf);
$pdf = str_replace("#orgaoemissor","$orgaoemissor",$pdf);
$pdf = str_replace("#dataemissao","$dataemissao",$pdf);
$pdf = str_replace("#cpf","$cpf",$pdf);
$pdf = str_replace("#tituloeleitor","$tituloeleitor",$pdf);
$pdf = str_replace("#zonaeleitor","$zonaeleitor",$pdf);
$pdf = str_replace("#sessaoeleitor","$sessaoeleitor",$pdf);
$pdf = str_replace("#pis","$pis",$pdf);
$pdf = str_replace("#numeroctps","$numeroctps",$pdf);
$pdf = str_replace("#seriectps","$seriectps",$pdf);
$pdf = str_replace("#ufpis","$ufpis",$pdf);
$pdf = str_replace("#datanascimento","$datanascimento",$pdf);
$pdf = str_replace("#municipionasc","$municipionasc",$pdf);
$pdf = str_replace("#ufnasc","$ufnasc",$pdf);
$pdf = str_replace("#nomemae","$nomemae",$pdf);
$pdf = str_replace("#nomepai","$nomepai",$pdf);
$pdf = str_replace("#estadocivil","$estadocivil",$pdf);
$pdf = str_replace("#sexo","$sexo",$pdf);
$pdf = str_replace("#corraca","$corraca",$pdf);
$pdf = str_replace("#dependentes","$dependentes",$pdf);
$pdf = str_replace("#cep","$cep",$pdf);
$pdf = str_replace("#estado","$estado",$pdf);
$pdf = str_replace("#cidade","$cidade",$pdf);
$pdf = str_replace("#bairro","$bairro",$pdf);
$pdf = str_replace("#endereco","$endereco",$pdf);
$pdf = str_replace("#numeroend","$numeroend",$pdf);
$pdf = str_replace("#complemento","$complemento",$pdf);
$pdf = str_replace("#telFixo","$telFixo",$pdf);
$pdf = str_replace("#telSec","$telSec",$pdf);
$pdf = str_replace("#telCelular","$telCelular",$pdf);
$pdf = str_replace("#email","$email",$pdf);
$pdf = str_replace("#grauinstrucao","$grauinstrucao",$pdf);
$pdf = str_replace("#banco","$banco",$pdf);
$pdf = str_replace("#agencia","$agencia",$pdf);
$pdf = str_replace("#conta","$conta",$pdf);
$pdf = str_replace("#tipoconta","$tipoconta",$pdf);
$pdf = str_replace("#ptrabalho","$ptrabalho",$pdf);
$pdf = str_replace("#aposentado","$aposentado",$pdf);
$pdf = str_replace("#funcao","$funcao",$pdf);
$pdf = str_replace("#dataadmissao","$dataadmissao",$pdf);
$pdf = str_replace("#salario","$salario",$pdf);
$pdf = str_replace("#horaentrada","$horaentrada",$pdf);
$pdf = str_replace("#horaalmoco","$horaalmoco",$pdf);
$pdf = str_replace("#horasaida","$horasaida",$pdf);
$pdf = str_replace("#trabsabado","$trabsabado",$pdf);
$pdf = str_replace("#horaentradasab","$horaentradasab",$pdf);
$pdf = str_replace("#horasaidasab","$horasaidasab",$pdf);
$pdf = str_replace("#valetransporte","$valetransporte",$pdf);
$pdf = str_replace("#qtddiariavt","$qtddiariavt",$pdf);
$pdf = str_replace("#descvtransporte","$descvtransporte",$pdf);
$pdf = str_replace("#tipovt","$tipovt",$pdf);
$pdf = str_replace("#valerefeicao","$valerefeicao",$pdf);
$pdf = str_replace("#tipovr","$tipovr",$pdf);
$pdf = str_replace("#cartaoponto","$cartaoponto",$pdf);
$pdf = str_replace("#outroponto","$outroponto",$pdf);
$pdf = str_replace("#outrosbeneficios","$outrosbeneficios",$pdf);
$pdf = str_replace("#tipoxp","$tipoxp",$pdf);

// SOLICITA A CLASS MPDF
require_once("mpdf/mpdf.php");

// INSTANCIA A CLASS MPDF
$mpdf = new mPDF();

// ESCREVE O PDF
$mpdf->WriteHTML($pdf);

// SAIDA DO PDF NO NAVEGADOR
$mpdf->Output("Documentos para Admissão - ".$nomecompleto.".pdf","D");
// SE QUISER SALVAR É SÓ DIRECIONAR O DIRETORIO
//$arquivo_contrato = $mpdf->Output("../requerimentos/".$nome.".pdf");