<?php

require_once("header.php");

?>

<h3>Cadastros</h3>
<hr>

<div class="col-md-6">
    <h4>Cadastrar Novo Usuário</h4>
    <div class="forms">
        <form class="form-horizontal" id="formUsuario" method="post">
            <div class="form-group input-group-sm">
                <label class="col-md-12" for="usuario">Usuário:</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="usuario" id="usuario" >
                </div>
            </div>
            <div class="form-group input-group-sm">
                <label class="col-md-12" for="cpf">CPF:</label>
                <div class="col-md-12">
                    <input type="text" class="form-control cpf" name="cpf" id="cpf" >
                </div>
            </div>			
            <div class="form-group input-group-sm">
                <label class="col-md-12" for="login">Login:</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="login" id="login" >
                </div>
            </div>                
            <div class="form-group input-group-sm">
                <label class="col-md-12" for="senha">Senha:</label>
                <div class="col-md-12">
                    <input type="password" class="form-control" name="senha" id="senha" >
                </div>
            </div>                
            <div class="form-group input-group-sm">
                <label class="col-md-1" for="ativou">Ativo:</label>
                <div class="col-md-11">
                    <input type="checkbox" name="ativou" id="ativou" value="1">
                </div>
            </div>                
            <div class="form-group">
                <div class="col-md-5">                    
                    <button type="submit" class="btn btn-success action" id="cad-user" name="cad-user">Salvar Usuário</button>
                </div>
            </div>
        </form>                        
    </div>
</div>

<div class="col-md-6">
    <h4>Cadastrar Novo Grupo</h4>
    <div class="forms">
        <form class="form-horizontal" id="formGrupo" method="post">
            <div class="form-group input-group-sm">
                <label class="col-md-12" for="grupo">Grupo:</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="grupo" id="grupo" >
                </div>
            </div>
            <div class="form-group input-group-sm">
                <label class="col-md-1" for="ativog">Ativo:</label>
                <div class="col-md-11">
                    <input type="checkbox" name="ativog" id="ativog" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5">
                    <button type="submit" class="btn btn-success action" id="cad-group" name="cad-group">Salvar Grupo</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div align="center">
    <div id="form" class="result"></div>
</div>

<?php require_once("footer.php");?>