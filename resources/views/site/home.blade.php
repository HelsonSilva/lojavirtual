<!--------- BANNERS -------->
<div class="div-banners" id="div-banners">
    <div class="slide">
        <input type="radio" class="radio-banner" name="radio-banners" id="r1" checked>
        <input type="radio" class="radio-banner" name="radio-banners" id="r2">
        <input type="radio" class="radio-banner" name="radio-banners" id="r3">
        <input type="radio" class="radio-banner" name="radio-banners" id="r4">
        <div class="banner" id="banner1"> <img src="{{ url("image/banners/b1.jpg") }}" alt=""></div>
        <div class="banner" id="banner2"> <img src="{{ url("image/banners/b2.jpg") }}" alt=""></div>
        <div class="banner" id="banner3"> <img src="{{ url("image/banners/b7.jpg") }}" alt=""></div>
        <div class="banner" id="banner4"> <img src="{{ url("image/banners/b4.jpg") }}" alt=""></div>
        <div class="menu-banner">
            <label for="r1" class="lbl-banner" id="lbl-banner1" onclick="corMenuBanner('1')"></label>
            <label for="r2" class="lbl-banner" id="lbl-banner2" onclick="corMenuBanner('2')"></label>
            <label for="r3" class="lbl-banner" id="lbl-banner3" onclick="corMenuBanner('3')"></label>
            <label for=r4 class="lbl-banner" id="lbl-banner4" onclick="corMenuBanner('4')"></label>
        </div>
        <div class="btn-slide">
            <label for="" class="lbl-btn-slide" id="retornar" onclick="btnAnt()"></label>
            <label for="" class="lbl-btn-slide" id="avancar" onclick="btnProx()"></label>
        </div>
    </div>
    <div class="div-banner-estatico">
        <a href=""><img src="{{ url("image/banners/b5.jpg") }}" alt=""></a>
    </div>
</div>
<!------- //BANNERS -------->
<!---------- POPUP --------->
<div class="div-apresentacao">
    <div class="div-apresentacao-item">
        <input type="checkbox" id="checkbox-apresentacao">
        <label for="checkbox-apresentacao" class="lbl-apresentacao">
            <img src="{{ url("image/icons/icon-politica.png") }}" alt="">
            <p>Confira nossa politica de pedidos!</p>
        </label>
        <div class="div-apresentacao-politica">
        <!--<div class="">-->
            <div class="div-conteudo-politica">
                <h1>Ola, Seja bem vindo(a) ao Empório Radisco!</h1>
                <p>Antes de começar, veja nossa politica de pedidos</p>
                <div class="texto-politica" id="texto-politica-1">
                    <article class="article-politica">
                        <p>O Empório Radisco, traz um novo meio de atendimento aos nossos clientes. No Empório Radisco Online você pode montar sua lista de pedido dos produtos que deseja comprar, sem sair de casa e nós efetuaremos a entrega direto no
                            seu domicilio sem cobrar nada. Legal, não é?</p>
                        <p>Além disso o pagamento dos produtos, será realizado no momento da entrega em sua residência, para maior segurança do seu pedido e comodidade!
                        </p>
                        <p>Para isso é muito simples, basta você seguir alguns passo:</p>
                    </article>
                    <img src="{{ url("image/images/compra.jpg") }}" alt="">
                </div>
                <ul class="ul-passos">
                    <li class="passos passo1">
                        <span class="numero-passo">1</span>Selecione o seus produtos.
                    </li>
                    <li class="passos passo2">
                        <span class="numero-passo">2</span>Cadastre o seu CPF e endereço de entrega.
                    </li>
                    <li class="passos passo3">
                        <span class="numero-passo">3</span>Selecione a forma de pagamento.
                    </li>
                    <li class="passos passo4">
                        <span class="numero-passo numero-passo-4">4</span>Finalize seu pedido!
                    </li>
                </ul>
                <strong class="strong-politica">Simples não acha? Fique atento a algumas coisas: </strong>
                <div class="texto-politica" id="texto-politica-2">
                    <img src="{{ url("image/images/tempo.jpg") }}" alt="">
                    <article class="article-politica">
                        <p>O valor minimo para realizar o pedido deve ser igual ou superior a <strong>R$ 100,00</strong></p>
                        <p>O prazo de entrega dos produtos se dará dentro de 24hrs, após a finalização do pedido.</p>
                        <p>Ao finalizar o pedido, o acompanhamento será realizado via Whatsapp com o número cadastrado no site.</p>
                        <p>Uma vez efetuado o cadastro o sistema irá encontrar automaticamente seu dados de entrega pelo numero do seu CPF.</p>
                        <p>O pedidos serão Limitados somente para a cidade de capanema. </p>
                    </article>
                </div>
                <strong class="strong-politica">Agora que conhece nossa politica, clique em Fechar e aproveite as nossas ofertas! </strong>
                <label for="checkbox-apresentacao" class="btn-fechar-conteudo-politica">Fechar</label>
            </div>
        </div>
    </div>
    <div class="div-apresentacao-item">
        <a href="https://radisco.com.br" class="lbl-apresentacao">
            <img src="{{ url("image/icons/icon-site.png") }}" alt="">
            <p>Acesse nosso site institucional</p>
        </a>
    </div>
    <div class="div-apresentacao-item">
        <label for="" class="lbl-apresentacao">
            <img src="{{ url("image/icons/icon-whatsapp.png") }}" alt="">
            <p>Entre em contato consoco!</p>
        </label>
    </div>

</div>
<!--------- //POPUP -------->
<!--------- ####### -------->
<div class="div-img-ofertas">
    <img src="{{ url("image/images/Ofertas.png") }}" alt="">
</div>
<div class="mensagem-produto">
    <img src="{{ url("image/icons/produtos.png") }}" alt="" class="" id="img-mensagem-produto">
    <p id="p-mensagem-produto">Produto Adicionado</p>
</div>
<!--------- //##### -------->
<!-------- PRODUTOS -------->
<section class="section-produtos">
    <!--------- GRUPOS --------->
    <div class="menu-categoria-produtos">
        <ul class="lista-categoria-produtos">
            <li class="li-categoria-produtos">
                <a href="#" class="link-categoria-produtos">
                <img class="img-categoria-produtos" src="{{ url("image/groups/icons/bazar.png") }}" alt="">Bazar</a>
            </li>
            <li class="li-categoria-produtos">
                <a href="#" class="link-categoria-produtos">
                <img class="img-categoria-produtos" src="{{ url("image/groups/icons/bebidas.png") }}" alt="">Bebidas</a>
            </li>
            <li class="li-categoria-produtos">
                <a href="#" class="link-categoria-produtos">
                <img class="img-categoria-produtos" src="{{ url("image/groups/icons/conservados.png") }}" alt="">Conservados</a>
            </li>
            <li class="li-categoria-produtos">
                <a href="#" class="link-categoria-produtos">
                <img class="img-categoria-produtos" src="{{ url("image/groups/icons/descartaveis.png") }}" alt="">Descartáveis</a>
            </li>
            <li class="li-categoria-produtos">
                <a href="" class="link-categoria-produtos">
                <img class="img-categoria-produtos" src="{{ url("image/groups/icons/doces.png") }}" alt="">Doces</a>
            </li>
            <li class="li-categoria-produtos">
                <a href="" class="link-categoria-produtos">
                <img class="img-categoria-produtos" src="{{ url("image/groups/icons/frios.png") }}" alt="">Frios</a>
            </li>
            <li class="li-categoria-produtos">
                <a href="" class="link-categoria-produtos">
                <img class="img-categoria-produtos" src="{{ url("image/groups/icons/graos.png") }}" alt="">Grãos</a>
            </li>
            <li class="li-categoria-produtos">
                <a href="leza.html" class="link-categoria-produtos">
                <img class="img-categoria-produtos" src="{{ url("image/groups/icons/higiene_e_beleza.png") }}" alt="">Higiene&amp;Limpeza</a>
            </li>
            <li class="li-categoria-produtos">
                <a href="" class="link-categoria-produtos">
                <img class="img-categoria-produtos" src="{{ url("image/groups/icons/hortfruit.png") }}" alt="">Hortfruit</a>
            </li>
        </ul>
    </div>	
    <!------- //GRUPOS --------->
    <!------- ##PRODUTOS --------->
    
    
<!------ //PRODUTOS -------->