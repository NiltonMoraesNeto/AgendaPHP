<?php

require_once("header.php");

?>

    <h3>Pesquisar Contatos</h3>
	<hr>

    <form class="form-horizontal" id="pesquisaContato" method="post">
        <table class="search">
        	<tr>
        		<td class="col-md-6">
        			<div class="form-group input-group-sm">
            			<label class="col-md-12" for="usuario">Nome Contato/Empresa:</label>
            			<div class="col-md-12">
                			<input type="text" class="form-control" name="contatoEmpresa" id="contatoEmpresa" placeholder="Nome Contato/Empresa" />                        	
            			</div>
        			</div>			
        		</td>
        		<td class="col-md-5">
        			<div class="form-group input-group-sm">
        		    <label class="col-md-12" for="usuario">Contato:</label>
		                <div class="col-md-12">
	                		<input type="text" class="form-control" name="nomeContato" id="nomeContato" placeholder="Nome Contato" />
            		    </div>
        			</div>
        		</td>
        		<td class="col-md-1" style="text-align: center">        
		            <button type="submit" class="btn btn-info" style="margin-top: 10px;"><i class="glyphicon glyphicon-search"></i>&nbsp; Pesquisar</button>
        		</td>
        	</tr>
        </table>
    </form>

    <div align="center">
        <div id="form" class="result"></div>
    </div>
    
<?php require_once("footer.php");?>