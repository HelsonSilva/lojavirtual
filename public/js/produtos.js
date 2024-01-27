function adicionarProduto(p) {

    var element = p;

    document.getElementById('preco' + element).style.display = 'none';

    document.getElementById('produto-btn-carrinho' + element).style.display = 'none';

    document.getElementById('produto-adicionar' + element).style.display = 'block';

}
function barraProgresso() {

        var valorTotal = document.getElementById('valor-total-carrinho').innerHTML;
        var res = valorTotal.replace(',', '.');
        var valorRestante = document.getElementById('valor-restante');
        var restante;
        var calculoRestante;
        var progresso = (res * 100) / 100;
        var vProg = progresso.toString();
        var r;
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

function quantidade(i, b) {

    var input = i;

    var btn = b;

    var elemento = document.getElementById('input-quantidade-produto' + input);

    if (b === 'p') {

        elemento.value++;

    } else {

        if (b == "n" && elemento.value !== "1") {

            elemento.value--;

        }

    }



}



function quantidadeCarrinho(i, b) {

    var input = i;

    var btn = b;

    var elemento = document.getElementsByClassName('quantidade-produto-footer')[input];

    if (b === 'p') {

        elemento.value++;

    } else {

        if (b == "n" && elemento.value !== "1") {

            elemento.value--;

        }

    }

}



function deletarProduto(n) {

    var produto = document.getElementById('produto-carrinho' + n);

    document.getElementsByClassName('mensagem-produto')[0].style.right = '5px';

    document.getElementsByClassName('mensagem-produto')[0].style.backgroundColor = '#ff4f5a';

    document.getElementById('p-mensagem-produto').style.color = 'white';

    document.getElementById('p-mensagem-produto').innerHTML = "Produto removido";

    window.setInterval(function() {

        document.getElementsByClassName('mensagem-produto')[0].style.right = '-100%';

    }, 5000);

    produto.style.display = "none";

}



function mensagemProduto() {

    var b = 'ativar';

    document.getElementById('p-mensagem-produto').innerHTML = "Produto adicionado";

    document.getElementById('p-mensagem-produto').style.color = '#484747';

    document.getElementsByClassName('mensagem-produto')[0].style.backgroundColor = 'white';

    if (b === 'ativar') {

        document.getElementsByClassName('mensagem-produto')[0].style.right = '5px';

        window.setInterval(function() {

            document.getElementsByClassName('mensagem-produto')[0].style.right = '-100%';

        }, 5000);

    }

}





function checkCarrinho() {

    var checkCarrinho = document.getElementById('checkbox-carrinho-footer').checked;
    var divTotalCarrinho = document.getElementById('total-carrinho');
    if (checkCarrinho === false) {
        divTotalCarrinho.style.bottom = '50px';

        document.getElementsByClassName('div-carrinho-footer')[0].style.bottom = '160px';

        document.body.style.overflow = 'hidden';

    } else {

        document.getElementsByClassName('total-carrinho')[0].style.bottom = '-80px';

        document.getElementsByClassName('div-carrinho-footer')[0].style.bottom = '-100%';

        document.body.style.overflow = 'auto';

    }

}

function total_carrinho() {
	var valorTotalCar = document.getElementById('valor-total-carrinho');
	if (valorTotalCar >== 100){
		
	}
}


function cadastroCliente(n) {

    var parametro = n;

    var areaPesquisa = document.getElementsByClassName('pesquisa-cliente')[0];

    var dadosCliente = document.getElementsByClassName('dados-cliente')[0];

    if (parametro === 'c') {

        areaPesquisa.style.display = 'none';

        dadosCliente.style.display = 'flex';

    }

}



function focusProduto(n) {

    var input = document.getElementById('quantidade-produto-footer' + n);

    var btnEdit = document.getElementById('btn-editar-quantidade'+ n);

    var btnConfirm = document.getElementById('confirmar-produto-carrinho' + n);

    input.disabled = false;

    input.focus();

    btnEdit.style.display = 'none';

    btnConfirm.style.display = 'initial';

}



function confirmaQuantidadeCarrinho(n) {

    var input = document.getElementById('quantidade-produto-footer' + n);

    var btnEdit = document.getElementById('btn-editar-quantidade'+ n);

    var btnConfirm = document.getElementById('confirmar-produto-carrinho' + n);

    btnEdit.style.display = 'inline';

    btnConfirm.style.display = 'none';

    input.disabled = true;

    document.getElementsByClassName('mensagem-produto')[0].style.right = '5px';

    document.getElementById('p-mensagem-produto').style.color = '#484747';

    document.getElementsByClassName('mensagem-produto')[0].style.backgroundColor = '#e2cc8b';

    document.getElementById('p-mensagem-produto').innerHTML = "Alteração realizada";

    window.setInterval(function() {

        document.getElementsByClassName('mensagem-produto')[0].style.right = '-100%';

    }, 5000);

}

document.getElementById('pagamento-dinheiro').addEventListener('click', function() {
    formaPagamento("dinheiro");
});

document.getElementById('pagamento-cartao').addEventListener('click', function() {
    formaPagamento("cartao");
});

function formaPagamento(n) {
    var pElemento = document.getElementById('pagamento-' + n);
    if (n === "dinheiro") {
        mudarCorPagamento("cartao");
        document.getElementsByClassName('dinheiro-troco')[0].style.display = 'block';
        document.getElementsByClassName('cartao')[0].style.display = "none";

    } else {
        mudarCorPagamento("dinheiro");
        document.getElementsByClassName('dinheiro-troco')[0].style.display = 'none';
        document.getElementsByClassName('cartao')[0].style.display = "block";
    }

    function mudarCorPagamento(m) {
        document.getElementById('pagamento-' + m).style.color = "#888";
        document.getElementById('pagamento-' + m).style.backgroundColor = "white";
    }
    pElemento.style.backgroundColor = "#607D8B";
    pElemento.style.color = "white";
}

function tipoCartao(n) {
    var tCartao = document.getElementsByClassName("cartao-pagamento")[n];
    if (n === 0) {
        mudarCorInput(1, 2)
    } else {
        if (n === 1) {
            mudarCorInput(0, 2);
        } else {
            if (n === 2) {
                mudarCorInput(0, 1);
            }
        }
    }

    function mudarCorInput(x, y) {
        document.getElementsByClassName("cartao-pagamento")[x].style.backgroundColor = "white";
        document.getElementsByClassName("cartao-pagamento")[y].style.backgroundColor = "white";
    }
    tCartao.style.backgroundColor = "#dcdcdc";
}