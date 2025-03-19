<?php
require_once "../conexao.php";
require_once "../funcoes.php";

listarProdutos($conexao, $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade);

?>