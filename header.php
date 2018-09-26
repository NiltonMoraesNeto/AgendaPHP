<!DOCTYPE html>
<?php

require_once("funcoes/conexao.php");
require_once("funcoes/logica-session.php");

userCheckout();

error_reporting(E_ALL ^ E_NOTICE);

//var global para navbar
$GLOBALS['urlmenu'] = explode('/', rtrim($_SERVER['PHP_SELF'], '/'));

?>
<html lang="pt-br" >
	<head>

        <title>Fator agenda2</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <script src="//code.jquery.com/jquery-2.2.2.min.js"></script>
        <script src="js/jquery-1.11.3-jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>        
		<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
        <script src="js/scripts.js"></script>
		<link href='js/fullcalendar.css' rel='stylesheet' />
<link href='js/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src="js/jquery.min.js"></script> 
<script src="js/fullcalendar.min.js"></script>
<script src='js/lang-all.js'></script>

		
		
		<!--<link href='js/fullcalendar.css' rel='stylesheet' />
		<script src="js/jquery-ui.custom.min.js"></script>
		<script src="js/fullcalendar.min.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
		
		
		<script src="js/fullcalendar.js"></script>
		<script src="js/fullcalendar.min.js"></script>
		<script src="js/gcal.js"></script>
		<script src="js/jquery-ui.custom.min.js"></script>
		<link href='js/fullcalendar.css' rel='stylesheet' />
        <link href='js/fullcalendar.print.css' rel='stylesheet' media='print' />
		<script src='js/moment.min.js'></script>-->

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />

	</head>
	<body>
		<header class="header">
			<div style="float:left; margin-left: 12%;">
				<a href="home.php"> <img src="imagens/fatorl.png" height="48px" /> </a>
			</div>
			<div style="float:right; margin-right: 10%; width: 100px;" >
				<div class="input-group">
                    <form method="post" action="funcoes/logout.php">
						<button type="submit" class="btn btn-out">Sair &nbsp;<i class="glyphicon glyphicon-log-out"></i></button>
                    </form>
				</div>
			</div>
		</header>
		<nav class="navtop">
			<div>
				<ul class="none">
					<li>
						<?php												 						 
						 if(end($urlmenu) == "cadastrar-contato.php") {
						 	echo "<a class=\"active\" href=\"cadastrar-contato.php\">Cadastrar Contato</a>";
						 } else {
						 	echo "<a href=\"cadastrar-contato.php\">Cadastrar Contato</a>";
						 }
						?>	
					</li>
					<li>
						<?php												 
						 if(end($urlmenu) == "editar-contato.php") {
						 	echo "<a class=\"active\" href=\"editar-contato.php\">Editar Contato</a>";
						 } else {
						 	echo "<a href=\"editar-contato.php\">Editar Contato</a>";
						 }						 
						?>						
					</li>
					<li>
						<?php												 
						 if(end($urlmenu) == "cadastrar-funcionario.php") {
						 	echo "<a class=\"active\" href=\"pesquisar-conta.php\">Cadastrar Funcionário</a>";
						 } else {
						 	echo "<a href=\"cadastrar-funcionario.php\">Cadastrar Funcionário</a>";
						 }						 
						?>						
					</li>
					<li>
						<?php												 
						 if(end($urlmenu) == "pesquisar-contato.php") {
						 	echo "<a class=\"active\" href=\"pesquisar-contato.php\">Pesquisar Contatos</a>";
						 } else {
						 	echo "<a href=\"pesquisar-contato.php\">Pesquisar Contatos</a>";
						 }						 
						?>						
					</li>
					<li>
						<?php												 
						 if(end($urlmenu) == "cadastros.php") {
						 	echo "<a class=\"active\" href=\"cadastros.php\">Cadastros</a>";
						 } else {
						 	echo "<a href=\"cadastros.php\">Cadastros</a>";
						 }						 
						?>
					</li>
					<li>
						<?php												 
						 if(end($urlmenu) == "editar.php") {
						 	echo "<a class=\"active\" href=\"editar.php\">Editar</a>";
						 } else {
						 	echo "<a href=\"editar.php\">Editar</a>";
						 }						 
						?>
					</li>
					<li>
						<?php												 
						 if(end($urlmenu) == "compromissos.php") {
						 	echo "<a class=\"active\" href=\"compromissos.php\">Compromissos</a>";
						 } else {
						 	echo "<a href=\"compromissos.php\">Compromissos</a>";
						 }						 
						?>
					</li>
					<li>
						<?php												 
						 if(end($urlmenu) == "recibo.php") {
						 	echo "<a class=\"active\" href=\"recibo.php\">Recibo</a>";
						 } else {
						 	echo "<a href=\"recibo.php\">Recibo</a>";
						 }						 
						?>						
					</li>
				</ul>
			</div>
		</nav>
		<div class="container content">