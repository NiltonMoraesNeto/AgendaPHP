<!DOCTYPE html>
<?php	
	require_once("funcoes/logica-session.php");
	userCheckin();
	error_reporting(E_ALL ^ E_NOTICE);
?>
<html lang="pt-br" >
	<head>        
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Controle de agenda2 - Fator Consultoria</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />		
		<link rel="stylesheet" type="text/css" href="css/login.css" />
	</head>
	<body>
		<div class="login-center">
			<img src="imagens/fatorl.png" width="350px" />
			<section class="title">agenda2</section>
			
			<form method="post" class="login" action="funcoes/login.php" style="margin-bottom: 15px">
				<div>
					<label for="usuario">Usuário:</label>
					<input class="form-control input-block" type="text" name="login" id="login" required>
				</div>
				<div>
					<label for="senha">Senha:</label><a href="#" style="float: right">Esqueceu sua senha?</a>
					<input class="form-control input-block" type="password" name="senha" id="senha" required>
				</div>
				<button class="btn btn-blue btn-block" type="submit" value="Entrar" name="btnlogin" id="btnlogin">Entrar</button>
			</form>
			<?php
				require_once("show-alert.php");
				
				if(isset($_SESSION['LOGIN'])) {
					header("Location: home.php");
				}

				mostraAlerta("danger");
        	?>
		</div>        
	</body>
</html>
