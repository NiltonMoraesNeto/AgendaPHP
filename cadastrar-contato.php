<?php
require_once("header.php");
require_once("funcoes/lista-select.php");

$grupos = listaGrupos($conexao);
$tipopessoa = listaTipoPessoa($conexao);

?>

	<h3>Cadastrar Contato</h3>
	<hr>

	<form id="formContato" method="post">
		<table class="table table-striped">
			<tr>
				<td colspan="2">
					<div class="form-group">
	    				<label for="grupo">Grupo:</label>    				
						<select class="form-control" name="grupo" id="grupo" required>
	                        <option>Selecione um grupo...</option>
	                        <?php foreach ($grupos as $grupo) : ?>
	                            <option value="<?=$grupo['ID_GRUPO']?>"><?=$grupo['NOME_GRUPO']?></option>
	                        <?php endforeach ?>
	                    </select>				
	  				</div>
	  			</td>
	  			<td colspan="2">
					<div class="form-group">
	    			<label for="tipopessoa">Tipo Pessoa:</label>
	    				<select class="form-control" name="tipopessoa" id="tipopessoa" required>
	                        <option>Selecione um tipo de pessoa...</option>
	                        <?php foreach ($tipopessoa as $tipo) : ?>
	                            <option value="<?=$tipo['ID_TIPO_PESSOA']?>"><?=$tipo['TIPO_PESSOA']?></option>
	                        <?php endforeach ?>
	                    </select>
	  				</div>
	  			</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
	    				<label for="nomePEmpresa">Nome Empresa/Pessoa:</label>
		    			<input type="text" class="form-control" id="nomePEmpresa" name="nomePEmpresa" required/>
	  				</div>
	  			</td>
	  			<td>
					<div class="form-group">
	    				<label for="contato">Contato:</label>
		    			<input type="text" class="form-control" id="contato" name="contato" required/>
	  				</div>
	  			</td>
				<td>
					<div class="form-group">
						<label for="dataNascimento">Data de Nascimento:</label>
						<input type="text" class="form-control date" id="dataNascimento" name="dataNascimento"/>
	  				</div>
	  			</td>
	  			<td>
					<div class="form-group">
	    				<label class="borderless">
	    					<label for="cpf">CPF&nbsp;</label><input type="radio" class="borderless" id="cpf" name="cpfcnpj" value="cpf" /> | 
	    					<label for="cnpj">CNPJ&nbsp;</label><input type="radio" class="borderless" id="cnpj" name="cpfcnpj" value="cnpj" />
	    				</label>
		    			<input type="text" class="form-control cpf-cnpj" id="cpf-cnpj" name="cpf-cnpj"/>
	  				</div>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<div class="form-group">
	  					<label for="cep">CEP:</label>
	  					<input type="text" class="form-control cep" id="cep" name="cep"/>
	  				</div>
	  			</td>
	  			<td>
	  				<div class="form-group">
	  					<label for="estado">Estado:</label>
	  					<input type="text" class="form-control" id="estado" name="estado" />
	  				</div>
	  			</td>
	  			<td>
	  				<div class="form-group">
	  					<label for="cidade">Cidade:</label>
	  					<input type="text" class="form-control" id="cidade" name="cidade" />
	  				</div>
	  			</td>
	  			<td>
	  				<div class="form-group">
	  					<label for="bairro">Bairro:</label>
	  					<input type="text" class="form-control" id="bairro" name="bairro" />
	  				</div>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">
	  				<div class="form-group">
	  					<label for="endereco">Endereço:</label>
	  					<input type="text" class="form-control" id="endereco" name="endereco" />
	  				</div>
	  			</td>
	  			<td>
	  				<div class="form-group">
	  					<label for="numero">Número:</label>
	  					<input type="text" class="form-control" id="numero" name="numero" />
	  				</div>
	  			</td>  			
	  			<td>
	  				<div class="form-group">
	  					<label for="complemento">Complemento:</label>
	  					<input type="text" class="form-control" id="complemento" name="complemento" />
	  				</div>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<div class="form-group">
	  					<label for="telFixo">Telefone Fixo:</label>
	  					<input type="text" class="form-control fone" id="telFixo" name="telFixo"/>
	  				</div>
	  			</td>
				<td>
	  				<div class="form-group">
	  					<label for="telSec">Telefone Secundário:</label>
	  					<input type="text" class="form-control fone" id="telSec" name="telSec"/>
	  				</div>  				
	  			</td>
	  			<td>
	  				<div class="form-group">
	  					<label for="telCelular">Telefone Celular:</label>
	  					<input type="text" class="form-control fone" id="telCelular" name="telCelular"/>
	  				</div>
	  			</td>
	  			<td>
	  				<div class="form-group">
	  					<label for="email">E-mail:</label>
	  					<input type="email" class="form-control" id="email" name="email" />
	  				</div>  				
	  			</td>
	  		</tr>	  		
	  		<tr>
	  			<td colspan="4">
	  				<div class="form-group">
	  					<label for="observacao">Observação:</label>
	  					<textarea id="observacao" name="observacao" class="form-control" style="resize: none"></textarea>
	  				</div>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="4">
	  				<div class="form-group">
	  					<label class="borderless"><label for="ativo">Ativo: &nbsp;</label><input type="checkbox" class="borderless" id="ativo" name="ativo"></label>
	  				</div>
	  			</td>
	  		</tr>	  		
	  		<tr>
	  			<td colspan="4">
	  				<button type="submit" class="btn btn-success" id="cad-contato" name="cad-contato">Salvar Contato</button>
	  				<button type="reset" class="btn btn-primary">Limpar Formulário</button>
	  			</td>
	  		</tr>
		</table>
	</form>

	<div align="center">
    	<div id="form" class="result"></div>
	</div>

<?php require_once("footer.php");?>