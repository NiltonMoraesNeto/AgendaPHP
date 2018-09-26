//create, edit, delete usuario/grupo
$(document).ready(function() {   
    $('.action').click(function() {
        var id = this.id;
       
        if(id == 'cad-user') {
            var url = "cad-user";
            var form = "#formUsuario";
        }

        else if(id == 'edit-user') {
            var url = "edit-user";
            var form = "#formUsuario";
        }
		
		else if(id == 'edit-contato') {
            var url = "edit-contato";
            var form = "#formContatoEdit";
        }

        else if(id == 'del-user') {
            var url = "del-user";
            var form = "#formUsuario";
        }   

        else if(id == 'cad-group') {
            var url = "cad-group";
            var form = "#formGrupo";
        }

        else if(id == 'edit-group') {
            var url = "edit-group";
            var form = "#formGrupo";
        }

        else if(id == 'del-group') {
            var url = "del-group";
            var form = "#formGrupo";
        }

        $(document).on('submit', form, function() {
            var data = $(this).serialize();     
            $.ajax({
                type : 'POST',
                url  : 'funcoes/' + url +'.php',
                data : data,
                success :  function(data) {
                    $(".result").fadeIn(500).show(function() {
                        $(".result").html(data);
                    });
                }
            });
            return false;
        });
    });
});

//cadastra recibo
$(document).ready(function() {   
    $(document).on('submit', "#formRecibo", function() {
            var data = $(this).serialize();
            $.ajax({
                type : 'POST',
                url  : 'funcoes/cad-recibo.php',
                data : data,
                success :  function(data) {
                    $(".result").fadeIn(500).show(function() {
                        $(".result").html(data);
                    });
                }
            });
        return false;
    });
});

//cadastra contato
$(document).ready(function() {   
    $(document).on('submit', "#formContato", function() {
            var data = $(this).serialize();
            $.ajax({
                type : 'POST',
                url  : 'funcoes/cad-contato.php',
                data : data,
                success :  function(data) {
                    $(".result").fadeIn(500).show(function() {
                        $(".result").html(data);
                    });
                }
            });
        return false;
    });
});

//cadastra funcionario
$(document).ready(function() {   
    $(document).on('submit', "#formFuncionario", function() {
            var data = $(this).serialize();
            $.ajax({
                type : 'POST',
                url  : 'funcoes/cad-funcionario.php',
                data : data,
                success :  function(data) {
                    $(".result").fadeIn(500).show(function() {
                        $(".result").html(data);
                    });
                }
            });
        return false;
    });
});

//pesquisa contato
$(document).ready(function() {   
    $(document).on('submit', "#pesquisaContato", function() {
            var data = $(this).serialize();
            $.ajax({
                type : 'POST',
                url  : 'funcoes/pesquisar-contato.php',
                data : data,
                success :  function(data) {
                    $(".result").fadeIn(500).show(function() {
                        $(".result").html(data);
                    });
                }
            });
        return false;
    });
});

//carrega usuario no editar
$(document).ready(function(){
    $("#usuario").change(function() {        
        var ID_USUARIO = document.getElementById("usuario").value;

        if (ID_USUARIO != "")
        {            
            $.getJSON("funcoes/editar.php", {id: ID_USUARIO, idcontato:"", idgrupo: "", idcontatoedit:""}, function(result) {                
                $("#cpf").val(result.CPF);
				$("#login").val(result.LOGIN);
                $("#senha").val(result.SENHA);
                var check = parseInt(result.ATIVO) ? true : false;
                $("#ativou").attr("checked", check);
            });            
        }
    });
});

//carrega funcionario CPF no recibo
$(document).ready(function(){
    $("#funcionario").change(function() {        
        var ID_CONTATO = document.getElementById("funcionario").value;

        if (ID_CONTATO != "")
        {
            $.getJSON("funcoes/editar.php", {id: "", idcontato: ID_CONTATO, idgrupo: "", idcontatoedit:""}, function(result) {                
                $("#cpf").val(result.CPF_CNPJ);		
            });            
        }
    });
});

//carrega grupo no editar
$(document).ready(function(){
    $("#grupo").change(function() {        
        var ID_GRUPO = document.getElementById("grupo").value;

        if (ID_GRUPO != "")
        {
            $.getJSON("funcoes/editar.php", {id: "", idcontato: "", idgrupo: ID_GRUPO, idcontatoedit:""}, function(result) {                
                var check = parseInt(result.ATIVO) ? true : false;                
                $("#ativog").attr("checked", check);                
            });            
        }
    });    
});

//carrega nomePEmpresa no editar Contato
$(document).ready(function(){
    $("#nomePEmpresa").change(function() {        
        var ID_CONTATO = document.getElementById("nomePEmpresa").value;

        if (ID_CONTATO != "")
        {            
            $.getJSON("funcoes/editar.php", {id:"", idcontato:"", idgrupo: "", idcontatoedit: ID_CONTATO}, function(result) {                
                $("#grupo").val(result.ID_GRUPO);
                $("#tipopessoa").val(result.ID_TIPO_PESSOA);
				$("#contato").val(result.CONTATO);                
                $("#dataNascimento").val(result.DT_NASCIMENTO);
                $("#cpf").val(result.CPF_CNPJ);
                $("#cep").val(result.CEP);
                $("#estado").val(result.ESTADO);
                $("#cidade").val(result.CIDADE);
                $("#bairro").val(result.BAIRRO);
                $("#endereco").val(result.ENDERECO);
                $("#numero").val(result.NUMEROEND);
                $("#complemento").val(result.COMPLEMENTO);
                $("#telFixo").val(result.TEL_FIXO);
                $("#telSec").val(result.TEL_SECINDARIO);
                $("#telCelular").val(result.TEL_CELULAR);
                $("#email").val(result.EMAIL);
                $("#observacao").val(result.OBSERVACOES);
				var check = parseInt(result.ATIVO) ? true : false;                
                $("#ativo").attr("checked", check)
            });            
        }
    });
});

//carrega endereco via cep
$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#endereco").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#estado").val("");
        $("#ibge").val("");
    }
            
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#endereco").val("...")
                $("#bairro").val("...")
                $("#cidade").val("...")
                $("#estado").val("...")
                $("#ibge").val("...")

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#endereco").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });

		
		
		
jQuery(function($){
    $(".cep").mask("99.999-999");

    $(".date").mask("99/99/9999");

    $(".cpf").mask("999.999.999-99");

    $(".hora").mask("99:99");

    $(".horaas").mask("99:99 às 99:99");

    $(".cpf-cnpj").mask("999.999.999-99");
	
	 $(".fone").mask("+99(999)9?999-99999999");
	 
	 

    $('#formContato input').on('change', function() {
        var rdo = $('input[name=cpfcnpj]:checked', '#formContato').val(); 
        if(rdo == "cpf")
            $(".cpf-cnpj").mask("999.999.999-99");
        else if(rdo == "cnpj")
            $(".cpf-cnpj").mask("99.999.999/9999-99");
    });
	
	
});