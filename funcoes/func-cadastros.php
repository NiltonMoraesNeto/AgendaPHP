<?php	require_once("../show-alert.php");

	/* FUNCOES PARA GRUPO */

	function cadastroGrupo($conexao, $grupo, $ativog)
	{
		if($grupo == '')
    	{
			$_SESSION["danger"] = "Favor preencher todos os campos.";
			mostraAlerta("danger");
			die();
    	} 
    	else
    	{
    		$query = "SELECT * FROM `agenda2`.`grupo` WHERE NOME_GRUPO = :grupo";
			$statement = $conexao -> prepare($query);
			$statement -> bindValue(":grupo", $grupo, PDO::PARAM_STR);
			$statement -> execute();			
			if($statement -> fetch(PDO::FETCH_ASSOC))
			{
				$_SESSION["danger"] = "Este grupo já existe.";
				mostraAlerta("danger");
				die();
			}
	        else
	        {	        	
	            $query = "INSERT INTO `agenda2`.`grupo` (`NOME_GRUPO`, `ATIVO`, `ID_USUARIO`, `DATA_CAD`) VALUES (:grupo, :ativo, :iduser, now());";
	            $statement = $conexao -> prepare($query);
	            $statement -> bindValue(":grupo", $grupo, PDO::PARAM_STR);
	            $statement -> bindValue(":ativo", $ativog, PDO::PARAM_INT);
	            $statement -> bindValue(":iduser", 1, PDO::PARAM_INT);

	            if($statement -> execute())
	            {
					$_SESSION["success"] = "O grupo $grupo foi cadastrado.";
					mostraAlerta("success");
					die();
	            }
	            else
	            {	            	
					$_SESSION["danger"] = "Erro desconhecido, informe um desenvolvedor.";
					mostraAlerta("danger");
					die();
	            }
	        }
	    }
	}

	function alteracaoGrupo($conexao, $grupo, $ativog)
	{
		if($grupo == '' || $grupo == 'Selecione um grupo...')
    	{
			$_SESSION["danger"] = "Favor selecionar um grupo.";
			mostraAlerta("danger");
			die();
    	} 
    	else 
    	{
            $query = "UPDATE `agenda2`.`grupo` SET `ATIVO` = '$ativog' WHERE ID_GRUPO = '$grupo'";
            $statement = $conexao -> prepare($query);
	        if($statement -> execute())
	        {
	            $_SESSION["success"] = "As alterações foram salvas.";
				mostraAlerta("success");
				die();
	        }
	        else
	        {
				$_SESSION["danger"] = "Erro desconhecido, informe um desenvolvedor.";
				mostraAlerta("danger");
				die();
	        }
	    }
	}

	function deletarGrupo($conexao, $grupo)
	{
		if($grupo == '' || $grupo == 'Selecione um grupo...')
    	{
			$_SESSION["danger"] = "Favor selecionar um grupo.";
			mostraAlerta("danger");
			die();
    	} 
    	else 
    	{
            $query = "DELETE FROM `agenda2`.`grupo` WHERE ID_GRUPO = '$grupo'";
            $statement = $conexao -> prepare($query);
	        if($statement -> execute())
	        {
	            $_SESSION["success"] = "O grupo foi excluído.";
				mostraAlerta("success");				
				die();
	        }
	        else
	        {
				$_SESSION["danger"] = "Erro desconhecido, informe um desenvolvedor.";
				mostraAlerta("danger");
				die();
	        }
	    }
	}	

	/* FUNCOES PARA USUARIO */

	function cadastroUsuario($conexao, $usuario, $cpf, $login, $senha, $ativou)
	{
		if($usuario == '' || $login == '' || $senha == '')
    	{    		
			$_SESSION["danger"] = "Favor preencher todos os campos.";
			mostraAlerta("danger");
			die();
		} 
    	else 
    	{
    		$query = "SELECT * FROM `agenda2`.`usuarios` WHERE LOGIN = :login";
    		$statement = $conexao -> prepare($query);
    		$statement -> bindValue(":login", $login);
    		$statement -> execute();
			if($statement -> fetch(PDO::FETCH_ASSOC))
			{
				$_SESSION["danger"] = "Este nome de usuário já existe.";
				mostraAlerta("danger");
				die();
			}
	        else
	        { 
	            $query = "INSERT INTO `agenda2`.`usuarios` (`NOME_USUARIO`, `CPF`, `LOGIN`, `SENHA`, `ATIVO`, `ID_USUARIO_CAD`, `DATA_CAD`) VALUES (:usuario,:cpf,:login,:senha,:ativo,'1', now());";
	            $statement = $conexao -> prepare($query);
	            $statement -> bindValue(":usuario", $usuario, PDO::PARAM_STR);
				$statement -> bindValue(":cpf", $cpf, PDO::PARAM_STR);
	            $statement -> bindValue(":login", $login, PDO::PARAM_STR);
	            $statement -> bindValue(":senha", $senha, PDO::PARAM_STR);
	            $statement -> bindValue(":ativo", $ativou, PDO::PARAM_INT);
	            if($statement -> execute())
	            {
	            	$_SESSION["success"] = "Usuário(a) $usuario cadastrado(a).";
					mostraAlerta("success");
					die();
	            }
	            else
	            {
					$_SESSION["danger"] = "Erro desconhecido, informe um desenvolvedor.";
					mostraAlerta("danger");
					die();
	            }
	        }
	    }
	}

	function alteracaoUsuario($conexao, $usuario, $cpf, $login, $senha, $ativou)
	{
		if($usuario == '' || $login == '' || $senha == '')
    	{
			$_SESSION["danger"] = "Favor selecionar um usuário.";
			mostraAlerta("danger");
			die();
    	} 
    	else 
    	{
            $query = "UPDATE `agenda2`.`usuarios` SET `CPF` = :cpf, `LOGIN` = :login, `SENHA` = :senha, `ATIVO` = :ativo WHERE ID_USUARIO = :usuario";
            $statement = $conexao -> prepare($query);
            	$statement -> bindValue(":usuario", $usuario, PDO::PARAM_INT);
				$statement -> bindValue(":cpf", $cpf, PDO::PARAM_INT);
	            $statement -> bindValue(":login", $login, PDO::PARAM_STR);
	            $statement -> bindValue(":senha", $senha, PDO::PARAM_STR);
	            $statement -> bindValue(":ativo", $ativou, PDO::PARAM_INT);
	        if($statement -> execute())
	        {
	          	$_SESSION["success"] = "As alterações foram salvas.";
				mostraAlerta("success");
				die();
	        }
	        else
	        {
				$_SESSION["danger"] = "Erro desconhecido, informe um desenvolvedor.";
				mostraAlerta("danger");
				die();
	        }
	    }
	}

	function deletarUsuario($conexao, $usuario, $login)
	{
		if($usuario == '' || $login == '')
    	{
			$_SESSION["danger"] = "Favor selecionar um usuário.";
			mostraAlerta("danger");
			die();
    	} 
    	else 
    	{
            $query = "DELETE FROM `agenda2`.`usuarios` WHERE ID_USUARIO = :usuario";
            $statement = $conexao -> prepare($query);
            $statement -> bindValue(":usuario", $usuario, PDO::PARAM_INT);
	        if($statement -> execute())
	        {
	          	$_SESSION["success"] = "O usuário foi excluído.";
				mostraAlerta("success");
				die();
	        }
	        else
	        {
				$_SESSION["danger"] = "Erro desconhecido, informe um desenvolvedor.";
				mostraAlerta("danger");
				die();
	        }
	    }
	}

	/* CADASTRAR CONTATO */
	
	function cadastroContato($conexao, Contato $cadContato)
	{
		if($cadContato->grupo == '' || $cadContato->tipopessoa == '' || $cadContato->nomePEmpresa == '' || $cadContato->contato == '')
    	{
			$_SESSION["danger"] = "Favor preencher todos os campos.";
			mostraAlerta("danger");
			die();
    	} 
    	else
    	{
			$query = "SELECT `NOME_CONTATO`, `CONTATO` FROM `agenda2`.`contatos` WHERE NOME_CONTATO = :nomecontato and CONTATO = :contato";
			$statement = $conexao -> prepare($query);
			$statement -> bindValue(":nomecontato", $cadContato->nomePEmpresa, PDO::PARAM_STR);
			$statement -> bindValue(":contato",$cadContato->contato, PDO::PARAM_STR);
			$statement -> execute();
			if($statement -> fetch(PDO::FETCH_ASSOC))
			{
				$_SESSION["danger"] = "Este contato já existe.";
				mostraAlerta("danger");
				die();
			}
	        else
	        { 
	            $query = "INSERT INTO `agenda2`.`contatos` (`ID_GRUPO`,`ID_TIPO_PESSOA`,`NOME_CONTATO`,`CONTATO`,`DT_NASCIMENTO`,`CPF_CNPJ`,`CEP`,`ESTADO`,`CIDADE`,`BAIRRO`,`ENDERECO`,`NUMEROEND`,`COMPLEMENTO`,`TEL_FIXO`,`TEL_SECUNDARIO`,`TEL_CELULAR`,`EMAIL`,`OBSERVACOES`,`ATIVO`,`ID_USUARIO`,`DATA_CAD`) VALUES (:grupo,:tipopessoa,:nomepempresa,:contato,:dtnascimento,:cpfcnpj,:cep,:estado,:cidade,:bairro,:endereco,:numeroend,:complemento,:telfixo,:telsec,:telcelular,:email,:observacoes,:ativo,:usuario, now());";
	            $statement = $conexao -> prepare($query);
	            $statement -> bindValue(":grupo", $cadContato->grupo);
	            $statement -> bindValue(":tipopessoa", $cadContato->tipopessoa);
	            $statement -> bindValue(":nomepempresa", $cadContato->nomePEmpresa);
	            $statement -> bindValue(":contato", $cadContato->contato);
	            $statement -> bindValue(":dtnascimento", $cadContato->dtNascimento);
	            $statement -> bindValue(":cpfcnpj", $cadContato->cpfcnpj);
	            $statement -> bindValue(":estado", $cadContato->estado);
	            $statement -> bindValue(":cidade", $cadContato->cidade);
	            $statement -> bindValue(":cep", $cadContato->cep);
	            $statement -> bindValue(":bairro", $cadContato->bairro);
	            $statement -> bindValue(":endereco", $cadContato->endereco);
	            $statement -> bindValue(":numeroend", $cadContato->numeroEnd);
	            $statement -> bindValue(":complemento", $cadContato->complemento);
	            $statement -> bindValue(":telfixo", $cadContato->telFixo);
	            $statement -> bindValue(":telsec", $cadContato->telSec);
	            $statement -> bindValue(":telcelular", $cadContato->telCelular);
	            $statement -> bindValue(":email", $cadContato->email);
	            $statement -> bindValue(":observacoes", $cadContato->observacoes);
	            $statement -> bindValue(":ativo", $cadContato->ativo);
	            $statement -> bindValue(":usuario", $cadContato->usuario);

	            if($statement -> execute())
	            {
					$_SESSION["success"] = "O contato $cadContato->nomePEmpresa foi cadastrado.";
					mostraAlerta("success");
					die();
	            }
	            else
	            {
					$_SESSION["danger"] = "Erro desconhecido, informe um desenvolvedor.";
					mostraAlerta("danger");
					die();
	            }
	        }	        
	    }
	}
	//Editar Contato
	function alteracaoContato($conexao, $grupo, $tipopessoa, $nomePEmpresa, $contato, $dataNascimento, $cpf, $cep, $estado, $cidade, $bairro, $endereco, $numero, $complemento, $telFixo, $telSec, $telCelular, $email, $observacao, $ativo)
	{		
    	
            $query = "UPDATE `agenda2`.`contatos` SET `ID_GRUPO` = :grupo, `ID_TIPO_PESSOA` = :tipopessoa, `CONTATO` = :contato, `DT_NASCIMENTO` = :dataNascimento, `CPF_CNPJ` = :cpf, `CEP` = :cep, `ESTADO` = :estado, `CIDADE` = :cidade, `BAIRRO` = :bairro, `ENDERECO` = :endereco, `NUMEROEND` = :numero, `COMPLEMENTO` = :complemento, `TEL_FIXO` = :telFixo, `TEL_SECUNDARIO` = :telSec, `TEL_CELULAR` = :telCelular, `EMAIL` = :email, `OBSERVACOES` = :observacao, `ATIVO` = :ativo WHERE ID_CONTATO = :nomePEmpresa";
            $statement = $conexao -> prepare($query);
            	$statement -> bindValue(":nomePEmpresa", $nomePEmpresa, PDO::PARAM_INT);
				$statement -> bindValue(":grupo", $grupo, PDO::PARAM_INT);
	            $statement -> bindValue(":tipopessoa", $tipopessoa, PDO::PARAM_INT);
	            $statement -> bindValue(":contato", $contato, PDO::PARAM_STR);
	            $statement -> bindValue(":dataNascimento", $dataNascimento, PDO::PARAM_STR);
	            $statement -> bindValue(":cpf", $cpf, PDO::PARAM_STR);
	            $statement -> bindValue(":cep", $cep, PDO::PARAM_STR);
	            $statement -> bindValue(":estado", $estado, PDO::PARAM_STR);
	            $statement -> bindValue(":cidade", $cidade, PDO::PARAM_STR);
	            $statement -> bindValue(":bairro", $bairro, PDO::PARAM_STR);
	            $statement -> bindValue(":endereco", $endereco, PDO::PARAM_STR);
	            $statement -> bindValue(":numero", $numero, PDO::PARAM_INT);
	            $statement -> bindValue(":complemento", $complemento, PDO::PARAM_STR);
	            $statement -> bindValue(":telFixo", $telFixo, PDO::PARAM_STR);
	            $statement -> bindValue(":telSec", $telSec, PDO::PARAM_STR);
	            $statement -> bindValue(":telCelular", $telCelular, PDO::PARAM_STR);
	            $statement -> bindValue(":email", $email, PDO::PARAM_STR);
	            $statement -> bindValue(":observacao", $observacao, PDO::PARAM_STR);
	            $statement -> bindValue(":ativo", $ativo, PDO::PARAM_INT);
	        if($statement -> execute())
	        {
	          	$_SESSION["success"] = "As alterações foram salvas.";
				mostraAlerta("success");
				die();
	        }
	        else
	        {
				$_SESSION["danger"] = "Erro desconhecido, informe um desenvolvedor.";
				mostraAlerta("danger");
				die();
	        }
	    
	}
	
	/* CADASTRAR Recibo */
	
	function cadastroRecibo($conexao, Recibo $cadRecibo)
	{

		
		
		$query = "INSERT INTO `agenda2`.`recibo_vr` (`EMPRESA`,`VALOR_RECIBO`,`VALOR_EXTENSO`,`MOTIVO_RECIBO`,`DATA_CAD`) VALUES (:empresa,:valorrecibo,:valorextenso,:motivo, now());";
	            $statement = $conexao -> prepare($query);
	            $statement -> bindValue(":empresa", $cadRecibo->empresa);
	            $statement -> bindValue(":valorrecibo", $cadRecibo->valorrecibo);
	            $statement -> bindValue(":valorextenso", $cadRecibo->valorextenso);
	            $statement -> bindValue(":motivo", $cadRecibo->motivo);

				
	            if($statement -> execute())
	            {
					$_SESSION["success"] = "O recibo foi cadastrado e está salvo no C:\Users\User\Downloads da sua máquina";
					mostraAlerta("success");
					die();
	            }
	            else
	            {
					$_SESSION["danger"] = "Erro desconhecido, informe um desenvolvedor.";
					mostraAlerta("danger");
					die();
	            }
	}

	/* CADASTRAR FUNCIONARIO */

	function cadastroFuncionario($conexao, Funcionario $cadFuncionario)
	{
		
	}