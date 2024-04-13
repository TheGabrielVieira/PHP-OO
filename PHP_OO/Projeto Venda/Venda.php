<?php

class Venda
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorToral;

    public function __construct($data, $produto, $quantidade, $valorToral)
    {
        $this -> data = $data;
        $this -> produto = $produto;
        $this -> quantidade = $quantidade;
        $this -> valorToral = $valorToral;
    }

    public function exibirVenda()
    {
        echo 'Data da venda: ' . $this -> data;
        echo PHP_EOL;
        echo 'Produto: ' . $this -> produto;
        echo PHP_EOL;
        echo 'Quantidade: ' . $this -> quantidade;
        echo PHP_EOL;
        echo 'Valor Total: R$' . $this -> valorToral;

    }
}

$caixa = new Venda(
    '01/10/2024',
    'Camiseta',
    2,
    50.00
);

echo $caixa -> exibirVenda();

