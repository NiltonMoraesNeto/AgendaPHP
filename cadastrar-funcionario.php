<?php	require_once("header.php"); ?>	
	
	<h3>Cadastrar Funcionário</h3>
	<hr>

	<form name="form" method="post" action="php/gerar_pdf.php">
		<table class="table table-striped">
			<tr>
				<td colspan="4">
					<div class="form-group">
						<label for="contato">Nome completo:</label>
						<input type="text" class="form-control" id="nomecompleto" name="nomecompleto" required/>			
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="form-group">
						<label for="rg">RG:</label>
						<input type="text" class="form-control" id="rg" name="rg" />			
					</div>
				</td>
				<td colspan="1">
					<div class="form-group">
						<label for="orgaoemissor">Orgão emissor:</label>
						<input type="text" class="form-control" id="orgaoemissor" name="orgaoemissor"/>
					</div>
				</td>
				<td colspan="1">
					<div class="form-group">
						<label for="dataemissao">Data de emissão:</label>
						<input type="text" class="form-control date" id="dataemissao" name="dataemissao"/>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
						<label for="cpf">CPF:</label>
						<input type="text" class="form-control cpf" id="cpf" name="cpf"  />
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="tituloeleitor">Título de eleitor:</label>
						<input type="text" class="form-control" id="tituloeleitor" name="tituloeleitor" />
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="zonaeleitor">Zona:</label>
						<input type="text" class="form-control" id="zonaeleitor" name="zonaeleitor" />
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="sessaoeleitor">Sessão:</label>
						<input type="text" class="form-control" id="sessaoeleitor" name="sessaoeleitor" />
					</div>
				</td>				
			</tr>
			<tr>
				<td>
					<div class="form-group">
						<label for="pis">PIS:</label>
						<input type="text" class="form-control" id="pis" name="pis" />
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="numeroctps">Número CTPS:</label>
						<input type="text" class="form-control" id="numeroctps" name="numeroctps" />
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="seriectps">Série:</label>
						<input type="text" class="form-control" id="seriectps" name="seriectps" />
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="ufpis">UF:</label>
						<input type="text" class="form-control" id="ufpis" name="ufpis" />
					</div>
				</td>				
			</tr>
			<tr>
				<td>
					<div class="form-group">
						<label for="datanascimento">Data de Nascimento:</label>
						<input type="text" class="form-control date" id="datanascimento" name="datanascimento"  />
					</div>
				</td>
				<td colspan="2">
					<div class="form-group">
						<label for="municipionasc">Município:</label>
						<input type="text" class="form-control" id="municipionasc" name="municipionasc" />
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="ufnasc">UF:</label>
						<input type="text" class="form-control" id="ufnasc" name="ufnasc" />
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="form-group">
						<label for="nomemae">Nome da mãe:</label>
						<input type="text" class="form-control" id="nomemae" name="nomemae"  />
					</div>
				</td>
				<td colspan="2">
					<div class="form-group">
						<label for="nomepai">Nome do pai:</label>
						<input type="text" class="form-control" id="nomepai" name="nomepai" />
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
						<label for="estadocivil">Estado civil:</label>
						<input type="text" class="form-control" id="estadocivil" name="estadocivil" />
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="sexo">Sexo:</label>
						<input type="text" class="form-control" id="sexo" name="sexo" />
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="corraca">Cor/Raça:</label>
						<input type="text" class="form-control" id="corraca" name="corraca" />
					</div>
				</td>
				<td>
					<div class="form-group" style="text-align: center">
						<label>Dependentes até 21 anos:</label><br>
						<div>
							<label for="depsim">SIM&nbsp;</label><input type="radio" id="depsim" name="dependentes" value="Sim" /> | 
							<label for="depnao">NAO&nbsp;</label><input type="radio" id="depnao" name="dependentes" value="Não" />
						</div>
					</div>
				</td>
			</tr>
			<tr>
	  			<td>
	  				<div class="form-group">
	  					<label for="cep">CEP:</label>
	  					<input type="text" class="form-control cep" id="cep" name="cep" />
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
	  					<label for="numeroend">Número:</label>
	  					<input type="text" class="form-control" id="numeroend" name="numeroend" />
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
	  					<input type="text" class="form-control" id="telFixo" name="telFixo" />
	  				</div>
	  			</td>
				<td>
	  				<div class="form-group">
	  					<label for="telSec">Telefone Secundário:</label>
	  					<input type="text" class="form-control" id="telSec" name="telSec"/>
	  				</div>  				
	  			</td>
	  			<td>
	  				<div class="form-group">
	  					<label for="telCelular">Telefone Celular:</label>
	  					<input type="text" class="form-control" id="telCelular" name="telCelular" />
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
						<label for="grauinstrucao">Grau de instrução:</label>
						<input type="text" class="form-control" id="grauinstrucao" name="grauinstrucao" />			
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
						<label for="banco">Banco:</label>
						<input type="text" class="form-control" id="banco" name="banco" />			
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="agencia">Agência:</label>
						<input type="text" class="form-control" id="agencia" name="agencia" />			
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="conta">Conta:</label>
						<input type="text" class="form-control" id="conta" name="conta" />			
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="tipoconta">Tipo de conta:</label>
						<select class="form-control" name="tipoconta" id="tipoconta">
							<option></option>
							<option>Corrente</option>
							<option>Poupança</option>
						</select>
					</div>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<div class="form-group" style="text-align: center">
						<label>Primeiro trabalho:</label><br>
						<div>
							<label for="trabsim">SIM&nbsp;</label><input type="radio" id="trabsim" name="ptrabalho" value="Sim" /> | 
							<label for="trabnao">NAO&nbsp;</label><input type="radio" id="trabnao" name="ptrabalho" value="Não" />
						</div>
					</div>
				</td>
				<td>
					<div class="form-group" style="text-align: center">
						<label>É aposentado:</label><br>
						<div>
							<label for="aposentadosim">SIM&nbsp;</label><input type="radio" id="aposentadosim" name="aposentado" value="Sim" /> | 
							<label for="aposentadonao">NAO&nbsp;</label><input type="radio" id="aposentadonao" name="aposentado" value="Não" />
						</div>
					</div>
				</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3">
					<div class="from-group">
						<label for="funcao">Função:</label>
						<input class="form-control" id="funcao" name="funcao" />
					</div>
				</td>
				<td>
					<div class="from-group">
						<label for="dataadmissao">Data admissão:</label>
						<input class="form-control date" id="dataadmissao" name="dataadmissao" />
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<div class="from-group">
						<label for="salario">Salário:</label>
						<input class="form-control" id="salario" name="salario" />
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="from-group">
						<label for="horaentrada">Horário de entrada:</label>
						<input class="form-control hora" id="horaentrada" name="horaentrada" />
					</div>
				</td>
				<td>
					<div class="from-group">
						<label for="horaalmoco">Horário de almoço:</label>
						<input class="form-control horaas" id="horaalmoco" name="horaalmoco" />
					</div>
				</td>
				<td>
					<div class="from-group">
						<label for="horasaida">Horário de saída:</label>
						<input class="form-control hora" id="horasaida" name="horasaida" />
					</div>
				</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="form-group" style="text-align: center">
						<label>Trabalha aos Sábados:</label><br>
						<div>
							<label for="trabsabsim">SIM&nbsp;</label><input type="radio" id="trabsabsim" name="trabsabado" value="Sim" /> | 
							<label for="trabsabnao">NAO&nbsp;</label><input type="radio" id="trabsabnao" name="trabsabado" value="Não" />
						</div>
					</div>
				</td>
				<td>
					<div class="from-group">
						<label for="horaentradasab">Horário de entrada:</label>
						<input class="form-control hora" id="horaentradasab" name="horaentradasab" />
					</div>
				</td>
				<td>
					<div class="from-group">
						<label for="horasaidasab">Horário de saída:</label>
						<input class="form-control hora" id="horasaidasab" name="horasaidasab" />
					</div>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<div class="form-group" style="text-align: center">
						<label>Vale transportes:</label><br>
						<div>
							<label for="valetrsim">SIM&nbsp;</label><input type="radio" id="valetrsim" name="valetransporte" value="Sim" /> | 
							<label for="valetrnao">NAO&nbsp;</label><input type="radio" id="valetrnao" name="valetransporte" value="Não" />
						</div>
					</div>
				</td>
				<td>
					<div class="from-group">
						<label for="qtddiariavt">Quantidade diária:</label>
						<input class="form-control" id="qtddiariavt" name="qtddiariavt" />
					</div>
				</td>
				<td>
					<div class="form-group" style="text-align: center">
						<label>Desconto 6% V.T. folha:</label><br>
						<div>
							<label for="descvtsim">SIM&nbsp;</label><input type="radio" id="descvtsim" name="descvtransporte" value="Sim" /> | 
							<label for="descvtnao">NAO&nbsp;</label><input type="radio" id="descvtnao" name="descvtransporte" value="Não" />
						</div>
					</div>
				</td>
				<td>
					<div class="form-group" style="text-align: center">
						<label>Fornecimento vale transporte:</label><br>
						<div>
							<label for="cartransporte">Cartão transporte&nbsp;</label><input type="radio" id="cartransporte" name="tipovt" value="Cartão" /> | 
							<label for="dinheirovt">Dinheiro&nbsp;</label><input type="radio" id="dinheirovt" name="tipovt" value="Dinheiro" />
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group" style="text-align: center">
						<label>Vale refeição:</label><br>
						<div>
							<label for="vrsim">SIM&nbsp;</label><input type="radio" id="vrsim" name="valerefeicao" value="Sim" /> | 
							<label for="vrnao">NAO&nbsp;</label><input type="radio" id="vrnao" name="valerefeicao" value="Não" />
						</div>
					</div>
				</td>
				<td>
					<div class="form-group" style="text-align: center">
						<label>Vale refeição em:</label><br>
						<div>
							<label for="vrdinheiro">Dinheiro&nbsp;</label><input type="radio" id="vrdinheiro" name="tipovr" value="Dinheiro" /> | 
							<label for="vrcartao">Cartão&nbsp;</label><input type="radio" id="vrcartao" name="tipovr" value="Cartão" />
						</div>
					</div>
				</td>
				<td>
					<div class="form-group" style="text-align: center">
						<label>Cartão ponto?</label><br>
						<div>
							<label for="cardpontosim">SIM&nbsp;</label><input type="radio" id="cardpontosim" name="cartaoponto" value="Sim" /> | 
							<label for="cardpontonao">NAO&nbsp;</label><input type="radio" id="cardpontonao" name="cartaoponto" value="Não" />
						</div>
					</div>
				</td>
				<td>
					<div class="from-group">
						<label for="outroponto">Outro tipo de ponto:</label>
						<input class="form-control" id="outroponto" name="outroponto" />
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<div class="from-group">
						<label for="outroponto">Outros benefícios:</label>
						<input class="form-control" id="outrosbeneficios" name="outrosbeneficios" />
					</div>
				</td>				
			</tr>
			<tr>			
				<td colspan="4">
				<label>*Contrato de Experiência - Assinar com X a opção desejada</label>
					<div>
							<label for="xp3060">30 + 60&nbsp;</label><input type="radio" id="xp3060" name="tipoxp" value="30+60" /> | 
							<label for="xp4545">45 + 45&nbsp;</label><input type="radio" id="xp4545" name="tipoxp" value="45+45" /> |
							<label for="xp3030">30 + 30&nbsp;</label><input type="radio" id="xp3030" name="tipoxp" value="30+30" /> |
							<label for="xp30direto">30 Dias Direto&nbsp;</label><input type="radio" id="xp30direto" name="tipoxp" value="30 dias direto" /> |
							<label for="xp45direto">45 Dias Direto&nbsp;</label><input type="radio" id="xp45direto" name="tipoxp" value="45 dias direto" /> |
							<label for="xp60direto">60 Dias Direto&nbsp;</label><input type="radio" id="xp60direto" name="tipoxp" value="60 dias direto" /> |
							<label for="xp90direto">90 Dias Direto&nbsp;</label><input type="radio" id="xp90direto" name="tipoxp" value="90 dias direto" /> |
							<label for="efetivosemxp">Efetivo sem Experiência&nbsp;</label><input type="radio" id="efetivosemxp" name="tipoxp" value="Efetivo sem Experiência" />
						</div>					
				</td>				
			</tr>
			<tr>
				<td colspan="4">
					<button type="submit" class="btn btn-success" id="cad-contato" name="cad-contato">Salvar Funcionário</button>
					<button type="reset" class="btn btn-primary">Limpar Formulário</button>
				</td>
			</tr>
			
		</table>
	</form>

	<div align="center">
		<div id="form" class="result"></div>
	</div>


<?php require_once("footer.php"); ?>