<?php 

class ContaBancaria
{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta; 
    private $saldo;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this -> banco = $banco;
        $this -> nomeTitular = $nomeTitular;
        $this -> numeroAgencia = $numeroAgencia;
        $this -> numeroConta = $numeroConta;
        $this -> saldo = $saldo;
    }

    public function obterSaldo()
    {
        return $this -> saldo;        
    }

    public function depositar($valor) 
    {
        $this -> saldo += $valor;
        return 'Deposito de R$ ' . $valor . ' realizado!';    
    }

    public function sacar($valor) 
    {
        $this -> saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado!';    
    }
}

$conta = new ContaBancaria(

    'Banco Vieira',
    'Hilda Jennings',
    '4011',
    '58450-00',
    280.000
);

echo $conta -> obterSaldo();

$conta -> depositar(200.00);

echo PHP_EOL;

echo $conta -> obterSaldo();

echo PHP_EOL;

echo $conta -> sacar(0);

echo PHP_EOL;