<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Loja Virtual</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
        <link rel="stylesheet" href="{{ asset('css/carrinho.css') }}">
        <link rel="stylesheet" href="{{ asset('css/categorias.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pesquisa.css') }}">
        <meta name="theme-color" content="#171717">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,700&display=swap" rel="stylesheet">
        <script src="{{ asset('js/banner.js') }}"></script>
        <script src="{{ asset('js/produtos.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/search.js') }}"></script>
        <script src="{{ asset('js/lista.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </head>

    <body>
<!--------- HEADER --------->
        <header id="hd-cabecalho">
            <nav class="nav-menu-topo">
                <input type="checkbox" id="checkbox-menu">
                <label for="checkbox-menu" class="lbl-btn-menu"></label>
                <a href="#"><img src="{{ url('image/logo/diamante.png') }}" alt="Logo" id="img-logo-menu"></a>
                <form action="" method="GET" id="form-pesquisa-menu">
                    <input type="text" id="input-pesquisa" name="search" placeholder="Pesquisar..." required>
                    <input type="submit" value=" " id="input-btn-pesquisa" style="top: 9px;">
                </form>
                <nav class="nav-menu-lateral-carrinho">
                    <div class="div-valor-carrinho-topo">
                        <label>Valor Total:</label>
                        <label class="valor-carrinho-topo">R$ 20,00</label>
                    </div>
                    <a for="checkbox-menu-carrinho" class="lbl-btn-carrinho-menu" href="#"></a>
                </nav>
            </nav>
            <nav class="nav-menu-topo-categoria">
                <ul class="lista-categoria-menu">
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="{{ url('image/groups/icons/bazar.png') }}" alt="">Bazar</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="{{ url('image/groups/icons/bebidas.png') }}" alt="">Bebidas</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="{{ url('image/groups/icons/conservados.png') }}" alt="">Conservados</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="{{ url('image/groups/icons/descartaveis.png') }}" alt="">Descartáveis</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="{{ url('image/groups/icons/doces.png') }}" alt="">Doces</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="{{ url('image/groups/icons/frios.png') }}" alt="">Frios</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="{{ url('image/groups/icons/graos.png') }}" alt="">Grãos</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="{{ url('image/groups/icons/higiene_e_beleza.png') }}" alt="">Higiene e Beleza</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="{{ url('image/groups/icons/hortfruit.png') }}" alt="">Hortfruit</a>
                    </li>
                </ul>
            </nav>
        </header>
<!-------- //HEADER -------->
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
                <h1>Ola, Seja bem vindo(a) a Nossa Loja Virtual!</h1>
                <p>Antes de começar, veja nossa politica de pedidos</p>
                <div class="texto-politica" id="texto-politica-1">
                    <article class="article-politica">
                        <p>A nossa Loja Virtual, traz um novo meio de atendimento aos nossos clientes. Na Loja Virtual você pode montar sua lista de pedido dos produtos que deseja comprar, sem sair de casa e nós efetuaremos a entrega direto no
                            seu domicilio sem cobrar nada. Legal, não é?</p>
                        <p>Além disso o pagamento dos produtos, será realizado no momento da entrega em sua residência, para maior segurança do seu pedido e comodidade!</p>
                        <p>Para isso é muito simples, basta você seguir alguns passo:</p>
                    </article>
                    <img src="{{ url("image/images/compra2.jpg") }}" alt="">
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
                        <p>O pedidos serão limitados somente para a cidade de Capanema. </p>
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
    

@foreach ($produtos as $produto)

    <article class="produtos">
        <img src="{{ url("image/products/$produto->id/img.png") }}" alt="">
            <div class="produto-descricao">
                <h1>{{ $produto->nome }}</h1>
                <p>{{  $produto->descr }}</p>
                <p class="p-preco" id="preco {{ $produto->id }}"><span>Preço:</span>R$ {{number_format($produto->val, 2,",",".")}}</p>
                <div class="produto-adicionar" id="produto-adicionar {{ $produto->id }}">
                    <form action="" class="form-adicionar-produto">
                        <label class="btn-retirar-produto" onclick="quantidade('{{ $produto->id }}', 'n')"></label>
                        <input type="number" value="1" min="1" class="input-quantidade-produto" data-id="{{ $produto->id }}" id="input-quantidade-produto {{ $produto->id }}">
                        <label class="btn-adicionar-produto" onclick="quantidade('{{ $produto->id }}', 'p')"></label>
                        <label class="confirmar-produto" onclick="mensagemProduto()" for="check-mensagem-produto" data-cod="{{ $produto->cod }}" data-id="{{ $produto->id }}" data-action="add" type="button"></label>
                    </form>
                </div>
            </div>
            <button class="produto-btn-carrinho" id="produto-btn-carrinho {{ $produto->id }}" onclick="adicionarProduto('{{ $produto->id }}')"></button>
    </article>
    
@endforeach
</section>
    
<!------ //PRODUTOS -------->

<!--------- RODAPÉ --------->
<footer class="menu-footer">
    <nav id="nav-menu-footer">
        <a href="http://localhost:8989" class="menu-footer-item  footer-item-home"></a>
        <a href="#" class="menu-footer-item footer-item-categorias"></a>
        <label for="checkbox-carrinho-footer" class="menu-footer-item footer-item-carrinho" onclick="checkCarrinho(), barraProgresso()"></label>
    </nav>
    <input type="checkbox" class="checkbox" id="checkbox-carrinho-footer">
    <div class="div-carrinho-footer">
        <div class="carrinho-footer">
            <div class="div-btn-ocultar-carrinho" onclick="checkCarrinho()">
                <div class="div-btn-ocultar"></div>
            </div>
            <div class="div-carrinho-footer-cadastro">
                <div class="info-carrinho">
                    <div class="dados-carrinho">
                        <img src="{{ url('image/icons-footer/cart-f.png') }}" alt="">
                        <div class="dados-carrinho-campos">
                            <p class="p-protocolo" id="mgs-cpf" style="color: red; text-align: center;"></p>
                            <p class="p-protocolo"><strong>Protocolo:</strong> Ao finalizar</p>
                            <div class="pesquisa-cliente">
                                <form id="form-cpf">
                                    <input type="number" name="cpf" maxlength="11" pattern="\d{11}" placeholder="Digite os 11 digítos do seu CPF..." required>
                                    <input id="cpf-search" type="submit" value="Verificar"> 
                                </form>
                            </div>
                            <div class="dados-cliente">
                                <p class="p-dados-cliente">CPF: <input type="text" class="cpf input-dados-cliente" disabled></p>
                                <p class="p-dados-cliente">Endereço: <input type="text" class=" street input-dados-cliente" disabled></p>
                                <p class="p-dados-cliente">Contato: <input type="text" class=" fone input-dados-cliente" disabled></p>
                                <label for="checkbox-cadastro" class="btn-ediar-dados">Editar dados</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produtos-carrinho">
                <!------------ LISTA ------------>
                <form method="POST" action="" class="sc-produto-carrinho-footer">
                    <label data-action="clean" class="btn-limpar">Limpar lista</label>
                    <p class="total-itens-carrinho"><?= isset($_SESSION["list"]["qtd"]) ? $_SESSION["list"]["qtd"] : "0"; ?> itens</p>
                    <!------------ PRODUTOS ------------>            
                    <?php
                    if (isset($_SESSION['list'])) {

                        foreach ($_SESSION['list']['itens'] as $itens) {
                            extract($itens);
                            ?>
                    
                    <article class="produto-footer" id="produto-carrinho<?= $id; ?>">
                        <img src="{{ url('/image/products/<?= $id; ?>/img.png') }}" alt="" class="img-produto-footer">
                        <div class="descricao-produto-footer">
                            <div class="form-produto-footer">
                                <div class="div-descricao-produto-footer">
                                    <h1 class=""><?= $name; ?></h1>
                                    <p><?= $descr; ?></p>
                                </div>
                                <div class="div-quantidade">
                                    <label>Quantidade: 
                                        <input type="number" min="1" class="quantidade-produto-footer" data-idr="<?= $id; ?>" id="quantidade-produto-footer<?= $id; ?>" value="<?= $qtd; ?>" disabled>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="funcao-produto-carrinho">
                            <p class="valor-produto-carrinho">R$ <?= number_format($subt, 2, ',', '.'); ?></p>
                            <label class="confirmar-produto confirmar-produto-carrinho" data-cod="<?= $cod; ?>" data-id="<?= $id; ?>" data-action="edit" id="confirmar-produto-carrinho<?= $id; ?>" onclick="confirmaQuantidadeCarrinho(<?= $id; ?>), barraProgresso()" ></label>
                            <label class="btn-editar-quantidade" id="btn-editar-quantidade<?= $id; ?>" onclick="focusProduto(<?= $id; ?>)"></label>
                            <label class="btn-excluir-produto" data-cod="<?= $cod; ?>" data-action="remove" id="btn-excluir-produto'<?= $id; ?>" onclick="deletarProduto(<?= $id; ?>), barraProgresso()"></label>
                        </div>
                    </article>
                    <?php } } else { ?>
                    
                    <article class="produto-footer">
                        <p class="lista-vazia">lista vazia, adicione produtos!</p>  
                    </article>
                    <?php } ?>
                    
                    <!---------- //PRODUTOS ------------>
                    <div class="total-carrinho" id="total-carrinho">
                        <div class="div-barra-progresso">
                            <div class="barra-progresso">
                                <p class="valor-restante-carrinho">Restam <span id="valor-restante">0,00</span></p>
                                <div class="progresso">
                                    <p class="valor-total-carrinho">R$ <span id="valor-total-carrinho"><?= isset($_SESSION["list"]["total"]) ? number_format($_SESSION["list"]["total"], 2, ",", ".") : "0,00"; ?></span></p>
                                </div>
                            </div>
                        </div>
						<!--?php
						if($_SESSION["list"]["total"]>=100){
						?-->
                        <div class="btn-finalizar-carrinho">
                            <label for="checkbox-finalizar" class="btn-finalizar-pedido">Finalizar Pedido</label>
                        </div>
						<!--?php } else { ?>
						
						<div class="btn-finalizar-carrinho">
                            <label for="checkbox-finalizar" class="btn-finalizar-pedido">Pedido Aberto</label>
                        </div-->
						<!--?php } ?-->
					
                    </div>   
                </form>
                <!---------- //LISTA ------------>
            </div>
        </div>
        <input type="checkbox" id="checkbox-cadastro">
        <input type="checkbox" id="checkbox-finalizar">
        <div class="cadastro-cliente-carrinho">
            <div class="div-cadastro-cliente">
                <form action="" class="form-cadastro-cliente" id="form-cad">
                    <p id="msg-form" style="width:100%;text-align: center;font-size: .9em;"></p>
                    <?php isset($_SESSION['data']) ? extract($_SESSION['data']) : ''; ?>
                    
                    <label class="cadastro-campos campo-nome">Nome <br><input class="name input-cad" value="<?= isset($namep) ? $namep : '';?>" name="name" type="text"></label>
                    <label class="cadastro-campos">CPF<br><input class="cpf input-cad" name="cpf" value="<?= isset($_SESSION['data']['cpf']) ? $_SESSION['data']['cpf'] : '';?>" type="text" disabled></label>
                    <label class="cadastro-campos">CEP<br><input class="cep input-cad" name="cep" value="<?= isset($cep) ? $cep : '';?>" type="text"></label>
                    <br>
                    <label class="cadastro-campos">Rua<br><input class="street input-cad" name="street" value="<?= isset($street) ? $street : '';?>" type="text"></label>
                    <label class="cadastro-campos">Bairro<br><input class="district input-cad" name="district" value="<?= isset($district) ? $district : '';?>" type="text"></label>
                    <label class="cadastro-campos">Nº<br><input class="number input-cad" name="number" value="<?= isset($number) ? $number : '';?>" type="number"></label>
                    <label class="cadastro-campos">Complemento<br><input class="complement input-cad" value="<?= isset($complement) ? $complement : '';?>" name="complement" type="text"></label>
                    <label  class="cadastro-campos">Nº do Whatsapp<br><input class="fone input-cadinput-cad" name="fone" value="<?= isset($fone) ? $fone : '';?>" type="text"></label>
                    <input for="checkbox-cadastro" type="submit" class="btn-concluir-cadastro" name="btn-sub" value="Concluir" onclick="cadastroCliente('c')"><br>
                    <label for="checkbox-cadastro" class="lbl-fechar-cadastro-carrinho">Fechar</label>
                </form>
            </div>
        </div>
        <div class="formas-pagamento">
            <input type="checkbox" id="checkbox-mensagem-finalizar">
            <div class="formas">
                <h1>Selecione a forma de pagamento:</h1>
                <div class="pagamentos">
                    <label for="radio-cartao" id="pagamento-cartao"><img src="{{ url('image/icons/cartao.png') }}" alt=""><input type="radio" name="formas" id="radio-cartao" class="radio-formas" checked>Cartão</label>
                    <div class="cartao">
                        <label for="cred-vista" class="cartao-pagamento" id="lbl-cred-vista" onclick="tipoCartao(0)"><input type="radio" name="tipo-cartao" id="cred-vista" class="input-cartao-pagamento" value="cVista">Crédito a Vista</label>
                        <label for="debito" class="cartao-pagamento" id="lbl-debito" onclick="tipoCartao(1)"><input type="radio" name="tipo-cartao" id="debito" class="input-cartao-pagamento" value="debito">Débito</label>
                        <label for="banpara" class="cartao-pagamento" id="lbl-banpara" onclick="tipoCartao(2)"><input type="radio" name="tipo-cartao" id="banpara" class="input-cartao-pagamento" value="bCard">Banpará Card</label>
                    </div>  
                </div>
                <div class="pagamentos">
                    <label for="radio-dinheiro" id="pagamento-dinheiro"><img src="{{ url('image/icons/dinheiro.png') }}" alt=""><input type="radio" name="formas" id="radio-dinheiro" class="radio-formas">A vista</label>
                </div>
                <label for="" class="dinheiro-troco">Precisa-se de troco?<br><input type="text"></label>
                <div class="info-finalizar-pedido">
                    <div class="total-itens-finalizar">
                        <p class="info-p-lef">Total Itens:</p>
                        <p class="info-p-right">9</p>
                    </div>
                    <div class="prazo-entrega">
                        <p class="info-p-lef">Prazo de Entrega:</p>
                        <p class="info-p-right">24hrs</p>
                    </div>
                    <div class="valor-total-finalizar">
                        <p class="info-p-lef">Valor Total</p>
                        <p class="info-p-right info-p-right-valor-total">R$ 22,10</p>
                    </div>
                </div>
                <div class="finalizar-forma">
                    <p class="texto-atencao">* Seu pedido será enviado pelo Whatsapp!</p>
                    <label for="checkbox-mensagem-finalizar" class="confirmar-finalizar-forma">Confirmar</label>
                    <label for="checkbox-finalizar" class="cancelar-finalizar-forma">Cancelar</label>
                </div>
            </div>
            <div class="mensagem-finalizacao">
                <img src="{{ url('image/logo/logo.png') }}" alt="">
                <p class="texto-finalizar">Obrigado pela preferência, seu pedido está sendo processado!</p>
                <p class="protocolo">Seu nº de protocolo: <br><span>202000031</span></p>
                <label for="checkbox-mensagem-finalizar">Ok!</label>
            </div>
        </div>
    </div>
</footer>
<!------- //RODAPÉ --------->

</body>
</html>
