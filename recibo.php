<?php require_once("header.php");

require_once("funcoes/lista-select.php");


$contatos = listaContatos($conexao);

?>



<script type="text/javascript">
			function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
				var sep = 0;
				var key = '';
				var i = j = 0;
				var len = len2 = 0;
				var strCheck = '0123456789';
				var aux = aux2 = '';
				var whichCode = (window.Event) ? e.which : e.keyCode;
				if (whichCode == 13) return true;
				var t = new String(objTextBox.value);
				if (whichCode == 8){
				objTextBox.value = t.substring(0, t.length-1);
				} 
				key = String.fromCharCode(whichCode); // Valor para o código da Chave
				if (strCheck.indexOf(key) == -1) return false; // Chave inválida
				len = objTextBox.value.length;
				for(i = 0; i < len; i++)
					if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
				aux = '';
				for(; i < len; i++)
					if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
				aux += key;
				len = aux.length;
				if (len == 0) objTextBox.value = '';
				if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
				if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
				if (len > 2) {
					aux2 = '';
					for (j = 0, i = len - 3; i >= 0; i--) {
						if (j == 3) {
							aux2 += SeparadorMilesimo;
							j = 0;
						}
						aux2 += aux.charAt(i);
						j++;
					}
					objTextBox.value = '';
					len2 = aux2.length;
					for (i = len2 - 1; i >= 0; i--)
					objTextBox.value += aux2.charAt(i);
					objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
				}
				return false;
			}
			function formatar_mascara(src, mascara) 
			{
				var campo = src.value.length;
				var saida = mascara.substring(0,1);
				var texto = mascara.substring(campo);
				if(texto.substring(0,1) != saida) 
				{
					src.value += texto.substring(0,1);
				}
			}
			function checado()
			{
				if(document.getElementById("contatoCheck").checked == true)
				{
					document.getElementById("contatoCombo").disabled = true;
				}
				else
				{
					document.getElementById("contatoCombo").disabled = false;
				}
			}
        </script> 
    
    <h3>Recibo</h3>
	<hr>
	<!-- action="php/gerar_recibo.php" -->
	<form method="post" action="php/gerar_recibo.php">
		<table class="table table-striped">
			<tr>
				<td colspan="1">
					<div class="form-group">
	    				<label for="contato">Funcionário:</label>    				
						<select class="form-control" name="funcionario" id="funcionario" required>
	                        <option>Selecione um funcionario...</option>
	                        <?php foreach ($contatos as $contato) : ?>
	                            <option value="<?=$contato['ID_CONTATO']?>"><?=$contato['NOME_CONTATO']?></option>
	                        <?php endforeach ?>
	                    </select>				
	  				</div>
					</td>
                    <td colspan="1">
	  				<div class="form-group">
	  					<label for="empresa">CPF:</label>
	  					<input type="text" class="form-control cpf" id="cpf" name="cpf" readOnly/>
	  				</div>
	  			</td>					
				<td colspan="2">
	  				<div class="form-group">
	  					<label for="empresa">Empresa:</label>
	  					<input type="text" class="form-control" id="empresa" name="empresa" value="Sphera Internacional Ltda" readOnly/>
	  				</div>
	  			</td>
			</tr>	
			<tr>
	  			<td>
	  				<div class="form-group">
	  					<label for="valorrecibo">Valor do Recibo:</label>
	  					<input type="text" class="form-control" id="valorrecibo" name="valorrecibo" onKeyPress="return(MascaraMoeda(this,'.',',',event))"/>
	  				</div>
	  			</td>
	  			<td>
	  				<div class="form-group">
	  					<label for="valorextenso">Valor por Extenso:</label>
	  					<input type="text" class="form-control" id="valorextenso" name="valorextenso" />
	  				</div>
	  			</td>	  			
	  			<td>
	  				<div class="form-group">
	  					<label for="motivo">Motivo:</label>
	  					<input type="text" class="form-control" id="motivo" name="motivo" />
	  				</div>
	  			</td>
				<td>
	  				<div class="form-group">
	  					<label for="data">Data:</label>
	  					<input type="text" class="form-control date" id="data" name="data" />
	  				</div>
	  			</td>
	  		</tr>
			<tr>
	  			<td colspan="4">
	  				<button type="submit" class="btn btn-success">Gerar Recibo</button>
	  				<button type="reset" class="btn btn-primary">Limpar Formulário</button>
	  			</td>				
	  		</tr>
		</table>
	</form>
	
	<div align="center">
        <div id="form" class="result"></div>
    </div>

	
<?php require_once("footer.php");?>