<?php

    //lista de usuarios na pagina editar
    function listaUsuarios($conexao)
    {
       	$query = "SELECT `ID_USUARIO`, `NOME_USUARIO` FROM `agenda2`.`usuarios` ORDER BY `NOME_USUARIO` ASC";                                   
        $resultado = $conexao -> prepare($query);
        $resultado -> execute();
        $usuarios = $resultado -> fetchAll(PDO::FETCH_ASSOC);

        return $usuarios;
    }
	
	//lista de contatos na pagina recibo
    function listaContatos($conexao)
    {
       	$query = "SELECT `ID_CONTATO`, `NOME_CONTATO` FROM `agenda2`.`contatos` WHERE `ID_GRUPO` = 1 ORDER BY `NOME_CONTATO` ASC";                                   
        $resultado = $conexao -> prepare($query);
        $resultado -> execute();
        $contatos = $resultado -> fetchAll(PDO::FETCH_ASSOC);

        return $contatos;
    }
	
	//lista de contatos na pagina recibo
    function listaContatosEditar($conexao)
    {
       	$query = "SELECT `ID_CONTATO`, `NOME_CONTATO` FROM `agenda2`.`contatos` ORDER BY `NOME_CONTATO` ASC";                                   
        $resultado = $conexao -> prepare($query);
        $resultado -> execute();
        $contatos = $resultado -> fetchAll(PDO::FETCH_ASSOC);

        return $contatos;
    }

    //lista de grupos na pagina editar
    function listaGrupos($conexao)
    {
    	$query = "SELECT `ID_GRUPO`, `NOME_GRUPO` FROM `agenda2`.`grupo` ORDER BY `NOME_GRUPO` ASC;";                                   
        $resultado = $conexao -> prepare($query);
        $resultado -> execute();
        $grupos = $resultado -> fetchAll(PDO::FETCH_ASSOC);

        return $grupos;
    }

    function listaTipoPessoa($conexao)
    {                
        $query = "SELECT `ID_TIPO_PESSOA`, `TIPO_PESSOA` FROM `agenda2`.`tipo_pessoa`";
        $resultado = $conexao -> prepare($query);
        $resultado -> execute();
        $tipopessoa = $resultado -> fetchAll(PDO::FETCH_ASSOC);

        return $tipopessoa;
    }