<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
?>

<!--------- RODAPÉ --------->
<footer class="menu-footer">
    <nav id="nav-menu-footer">
        <a href="http://localhost:8080/projetoemporio/" class="menu-footer-item  footer-item-home"></a>
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
                        <img src="<?= URL; ?>assets/image/icons-footer/cart-f.png" alt="">
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
                        <img src="<?= URL; ?>assets/image/products/<?= $id; ?>/img.png" alt="" class="img-produto-footer">
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
                    <label for="radio-cartao" id="pagamento-cartao"><img src="<?= URL; ?>assets/image/icons/cartao.png" alt=""><input type="radio" name="formas" id="radio-cartao" class="radio-formas" checked>Cartão</label>
                    <div class="cartao">
                        <label for="cred-vista" class="cartao-pagamento" id="lbl-cred-vista" onclick="tipoCartao(0)"><input type="radio" name="tipo-cartao" id="cred-vista" class="input-cartao-pagamento" value="cVista">Crédito a Vista</label>
                        <label for="debito" class="cartao-pagamento" id="lbl-debito" onclick="tipoCartao(1)"><input type="radio" name="tipo-cartao" id="debito" class="input-cartao-pagamento" value="debito">Débito</label>
                        <label for="banpara" class="cartao-pagamento" id="lbl-banpara" onclick="tipoCartao(2)"><input type="radio" name="tipo-cartao" id="banpara" class="input-cartao-pagamento" value="bCard">Banpará Card</label>
                    </div>  
                </div>
                <div class="pagamentos">
                    <label for="radio-dinheiro" id="pagamento-dinheiro"><img src="<?= URL; ?>assets/image/icons/dinheiro.png" alt=""><input type="radio" name="formas" id="radio-dinheiro" class="radio-formas">A vista</label>
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
                <img src="<?= URL; ?>assets/image/logo/logo.png" alt="">
                <p class="texto-finalizar">Obrigado pela preferência, seu pedido está sendo processado!</p>
                <p class="protocolo">Seu nº de protocolo: <br><span>202000031</span></p>
                <label for="checkbox-mensagem-finalizar">Ok!</label>
            </div>
        </div>
    </div>
</footer>
<!------- //RODAPÉ --------->
<script src="<?= URL; ?>assets/js/banner.js"></script>
<script src="<?= URL; ?>assets/js/produtos.js"></script>
<script src="<?= URL; ?>assets/js/jquery.js"></script>
<script src="<?= URL; ?>assets/js/search.js"></script>
</body>
</html>
