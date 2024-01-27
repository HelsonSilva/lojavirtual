function cadastroCliente(n) {
    var parametro = n;
    var areaPesquisa = document.getElementsByClassName('pesquisa-cliente')[0];
    var dadosCliente = document.getElementsByClassName('dados-cliente')[0];
    if (parametro === 'c') {
        areaPesquisa.style.display = 'none';
        dadosCliente.style.display = 'flex';
    }
}