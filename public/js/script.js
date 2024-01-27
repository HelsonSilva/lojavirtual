function verificarCheck() {

    var modoVisualizar = document.getElementById("check-modo-vizualizar").checked;

    var tmTela = screen.width;

    var btnConfirmaQuantidade = document.getElementsByClassName('form-adicionar-produto').length;

    console.log(btnConfirmaQuantidade);

    if (tmTela < 640 && modoVisualizar === true) {

        console.log(tmTela);

        document.getElementById("check-modo-vizualizar").checked = true;

        document.getElementsByClassName('section-produtos')[0].style.display = 'flex';

        document.getElementsByClassName('section-produtos')[0].style.flexFlow = 'wrap';

        document.getElementById("modo-lista").style.border = 'none';

        document.getElementById("modo-grade").style.border = '2px solid #b9b9b9';

        for (var cont = 0; cont < btnConfirmaQuantidade; cont++) {

            document.getElementsByClassName('form-adicionar-produto')[cont].style.flexFlow = 'wrap';

            document.getElementsByClassName('confirmar-produto')[cont].style.cssText = 'margin-left: 0; background: url(image/icons/btn-confirmar.png) center center / 110px no-repeat; width: 90%;'

        }

    }

}



function tipoVisualizacao(p) {

    var modoVisualizar = document.getElementById("check-modo-vizualizar").checked;

    var tmTela = screen.width;

    var btnConfirmaQuantidade = document.getElementsByClassName('form-adicionar-produto').length;

    var controle = p;

    console.log(tmTela);

    if (controle==='g' && tmTela < 640 && modoVisualizar === false) {

        console.log(tmTela);

        document.getElementById("check-modo-vizualizar").checked = true;

        document.getElementsByClassName('section-produtos')[0].style.display = 'flex';

        document.getElementsByClassName('section-produtos')[0].style.flexFlow = 'wrap';

        document.getElementById("modo-lista").style.border = 'none';

        document.getElementById("modo-grade").style.border = '2px solid #b9b9b9';

        for (var cont = 0; cont < btnConfirmaQuantidade; cont++) {

            document.getElementsByClassName('form-adicionar-produto')[cont].style.flexFlow = 'wrap';

            document.getElementsByClassName('confirmar-produto')[cont].style.cssText = 'margin-left: 0; background: url(image/icons/btn-confirmar.png) center center / 110px no-repeat; width: 90%;'

        }

    }else {

            if (controle==='l' &&tmTela < 640 && modoVisualizar === true) {

                document.getElementById("check-modo-vizualizar").checked = false;

                document.getElementsByClassName('section-produtos')[0].style.display = 'block';

                document.getElementById("modo-lista").style.border = '2px solid #b9b9b9';

                document.getElementById("modo-grade").style.border = 'none';

                for (var cont = 0; cont < btnConfirmaQuantidade; cont++) {

                    document.getElementsByClassName('form-adicionar-produto')[cont].style.flexFlow = 'nowrap';

                    document.getElementsByClassName('confirmar-produto')[cont].style.cssText = 'margin-left: 0; background: url(image/icons/icon-confirmar.jpg) center center / 30px no-repeat; width: 15px; margin-left: 10px;'

                }

            }

    }

}

document.getElementsByClassName("div-btn-ocultar-carrinho")[0].addEventListener("click", function () {

    var checkkCarrinho = document.getElementById("checkbox-carrinho-footer").checked;

    if (checkkCarrinho = true) {

        document.getElementById("checkbox-carrinho-footer").checked = false;

    }

});

