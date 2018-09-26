<?php

require_once("header.php");
require_once("funcoes/lista-select.php");

$usuarios = listaUsuarios($conexao);
$grupos = listaGrupos($conexao);

?>
    <h3>Editar</h3>
	<hr>

	<div class="col-md-6">
        <h4>Editar Usuário</h4>
        <div class="forms">
            <form class="form-horizontal" id="formUsuario" method="post">
                    <div class="form-group input-group-sm">
                        <label class="col-md-12" for="usuario">Usuário:</label>
                        <div class="col-md-12">                            
                            <select class="form-control" name="usuario" id="usuario">
                                <option>Selecione um usuário...</option>
                                <?php foreach ($usuarios as $usuario) : ?>
                                    <option value="<?=$usuario['ID_USUARIO']?>"><?=$usuario['NOME_USUARIO']?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group input-group-sm">
                        <label class="col-md-12" for="cpf">CPF:</label>
                        <div class="col-md-12">
                            <input type="text" value="" class="form-control cpf" name="cpf" id="cpf"/>
                        </div>
                    </div>					
                    <div class="form-group input-group-sm">
                        <label class="col-md-12" for="login">Login:</label>
                        <div class="col-md-12">
                            <input type="text" value="" class="form-control" name="login" id="login"/>
                        </div>
                    </div>
                    <div class="form-group input-group-sm">
                        <label class="col-md-12" for="senha">Senha:</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>
                    </div> 
                    <div class="form-group input-group-sm">
                        <label class="col-md-1" for="ativou">Ativo:</label>
                        <div class="col-md-11">
                            <input type="checkbox" name="ativou" id="ativou" />
                        </div>
				    </div>                
                    <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success action" id="edit-user" name="edit-user">Salvar Alterações</button>
                        <button type="submit" class="btn btn-danger action"  id="del-user" name="del-user">Excluir Usuário</button>
                    </div>
                </div>
            </form>            
        </div>
    </div>

    <div class="col-md-6">
        <h4>Editar Grupo</h4>
        <div class="forms">
            <form class="form-horizontal" id="formGrupo" method="post">
                    <div class="form-group input-group-sm">
                        <label class="col-md-12" for="grupo">Grupo:</label>
                        <div class="col-md-12">
                            <select class="form-control" name="grupo" id="grupo">
                                <option>Selecione um grupo...</option>
                                <?php foreach ($grupos as $grupo) : ?>
                                    <option value="<?=$grupo['ID_GRUPO']?>"><?=$grupo['NOME_GRUPO']?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group input-group-sm">
                        <label class="col-md-1" for="ativog">Ativo:</label>
                        <div class="col-md-11">
                            <input type="checkbox" name="ativog" id="ativog">
                        </div>
				    </div>                
                    <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success action" id="edit-group" name="edit-group">Salvar Alterações</button>
                        <button type="submit" class="btn btn-danger action"  id="del-group" name="del-group">Excluir Grupo</button>                    
                    </div>
                </div>
            </form>            
        </div>
    </div>

    <div align="center">
        <div id="form" class="result"></div>
    </div>

<?php require_once("footer.php");?>