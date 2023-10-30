<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Loja Virtual</title>
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link rel="stylesheet" href="{{ url('css/banner.css') }}">
        <meta name="theme-color" content="#171717">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        <!--------- HEADER --------->
        <header id="hd-cabecalho">
            <nav class="nav-menu-topo">
                <input type="checkbox" id="checkbox-menu">
                <label for="checkbox-menu" class="lbl-btn-menu"></label>
                <a href="<?= URL ?>"><img src="{{ url('image/logo/logo.png') }}" alt="Logo Empório Radisco" id="img-logo-menu"></a>
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
                    <li class="li-item-categoria-menu" style="background-color: #272727;">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/icons/home.png" alt="">home</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/groups/icons/bazar.png" alt="">Bazar</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/groups/icons/bebidas.png" alt="">Bebidas</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/groups/icons/conservados.png" alt="">Conservados</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/groups/icons/descartaveis.png" alt="">Descartáveis</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/groups/icons/doces.png" alt="">Doces</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/groups/icons/frios.png" alt="">Frios</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/groups/icons/graos.png" alt="">Grãos</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/groups/icons/higiene_e_beleza.png" alt="">Higiene e Beleza</a>
                    </li>
                    <li class="li-item-categoria-menu">
                        <a href="#" class="link-li-item-categoria"><img src="<?= URL;?>assets/image/groups/icons/hortfruit.png" alt="">Hortfruit</a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-------- //HEADER -------->