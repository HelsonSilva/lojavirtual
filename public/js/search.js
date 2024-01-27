
$(function () {

    $("body").on("click", "[data-action]", function () {
        var data = $(this).data();
        var id = data.id;
        var qtd = $("input[data-id='" + id + "']").val();
        var qtr = $("input[data-idr='" + id + "']").val();
        if (data.action === "add") {
            ajaxList(data, qtd);
        } else if (data.action === "edit") {
            ajaxList(data, qtr);
        } else if (data.action === "remove") {
            ajaxList(data, 0);
        } else if (data.action === "clean") {
            data.cod = 0;
            ajaxList(data, 0);
        }
    });

    function ajaxList(data, qtd) {
        var url = 'http://localhost:8989/lista/' + data.action;
        $.ajax({
            'method': 'post',
            'url': url,
            'data': {cod: data.cod, qtd: qtd},
            'dataType': 'json',
            success: function (r) {
                viewRender(r);
            }
        });

    }

    function viewRender(param) {
        $(".sc-produto-carrinho-footer").html(param);
        barraProgresso();
    }

$("#input-pesquisa").keyup(function () {
	    var campo = $("#input-pesquisa").val();
		var campo = $(this).val();
        if (campo.length!==0){
			$.ajax({
                method: 'post',
                url: 'http://localhost:8080/projetoemporio/Pesquisa',
                data: {search: 'yes', cod: campo},
                dataType: "json",
                success: function (retur) {
					ResultPesq(retur);
                                  
                },
                error: function () {
                    $('#msgs').html('<div class="alert alert-danger" role="alert"> Error <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }	 
		         
    });
	function ResultPesq(retur) {
		$(".section-produtos").html(retur.data);
		
	}
		} else
		
		{
		$.ajax({
                method: 'post',
                url: 'http://localhost:8080/projetoemporio/Pesquisa',
                data: {listData: 'yes'},
                dataType: "json",
                success: function (res) {
					ResData(res);
				//	console.log(res);
                                  
                },
                error: function () {
                    $('#msgs').html('<div class="alert alert-danger" role="alert"> Error <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }	 
		         
    });
	
	function ResData(res){
		$(".section-produtos").html(res.data);
	}
	
	function Resultlist(res) {
		
		$(".section-produtos").html(res.data);
	}
	}	
	});

    function barraProgresso() {

        var valorTotal = document.getElementById('valor-total-carrinho').innerHTML;
        var res = valorTotal.replace(',', '.');
        var valorRestante = document.getElementById('valor-restante');
        var restante;
        //var calculoRestante;
        var progesso = (res * 100) / 100;
        var vProg = progesso.toString();
        //var r;
        var vRestante;
        res = parseFloat(res);
        restante = 100 - res;
        vRestante = restante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
        if (vProg <= 100) {
            document.getElementsByClassName('progresso')[0].style.width = vProg + '%';           
            valorRestante.innerHTML = vRestante;
        } else {
            if (vProg >= 100) {
                document.getElementsByClassName('progresso')[0].style.width = '100%';
                document.getElementById('valor-restante').innerHTML = '0,00'
            }
        }
    }
    
    $("#cpf-search").click(function (e) {
        $('#mgs-cpf').html('');
        e.preventDefault();
        var data = $('#form-cpf input').val();
        var url = 'http://localhost:8080/projetoemporio/client/';
        $.ajax({
            'method': 'post',
            'url': url,
            'data': {cpf: data},
            'dataType': 'json',
            success: function(res) {
                if(res.res === false){
                    msgInval(res);
                } else if(res.res === true){
                    showData(res.data);
                }
            }
        });       
    });
    
    function msgInval(data){
        if(data.msg ==="s/n"){
            document.getElementById("checkbox-cadastro").checked = true;
            $(".mensagem-produto").css("right", "5px");
            $(".mensagem-produto").css("background-color", "rgb(255, 79, 90)");
            $("#p-mensagem-produto").css("color", "white");
            $("#img-mensagem-produto").css("display","none");
            $(".cpf").val(data.cpf);
            $("#p-mensagem-produto").html("Por favor realize o cadastro!");
            setInterval(function (){
            $(".mensagem-produto").css("right", "-110%");    
            $("#img-mensagem-produto").css("display","block");
            }, 5000);
        }
        else{
            $('#mgs-cpf').html(data.msg).fadeIn(200);
        }
    }
    
    function showData(result){
        for(const campo in result){
            if($('.'+campo)){
                $('.'+campo).val(result[campo]);
            }
        }
        $(".pesquisa-cliente").css("display","none");
        $(".dados-cliente").css("display", "flex");
    }
    
    $('#form-cad').submit(function (e){
        $('#msg-form').html('');
        e.preventDefault();
        $.post('http://localhost:8080/projetoemporio/Others/', $('#form-cad input'), function(res){
            if(res.res === false){
                msgForm(res.msg);
            } else if(res.res === true) {
                console.log('ok');
                showFormData(res.data);
            }
        },'json');
    });
    
    function msgForm(msg){
        $('#msg-form').html(msg).fadeIn(200);
    }
    
    function showFormData(result){
        for(const campo in result){
            if($('.'+campo)){
                $('.'+campo).val(result[campo]);
            }
        }
    }
    
});