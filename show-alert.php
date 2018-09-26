<?php

	error_reporting(E_ALL ^ E_NOTICE);

	session_start();
	function mostraAlerta($tipo) {
		if($tipo == "success")
			$msg = "Sucesso";
		else
			$msg = "Erro";		
		if(isset($_SESSION[$tipo])) {
		?>
			<div class="alert alert-<?= $tipo ?> alert-float-bottom fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong><?=$msg?>! </strong><?= $_SESSION[$tipo]?>
			</div>
		<?php
			unset($_SESSION[$tipo]);
		}
	}	