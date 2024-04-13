<?php

/*throw new Exception("Essa é uma exceção!");

echo "\n... executando ... \n";*/

/*function validarUsuario(array $usuario)
{
    if (empty ($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
    {
        throw new Exception("Campos obrigatorios não foram preenchidos!");
        return false;
    }
    
    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => 'Vieira',
    'idade' => 57,
];

$usuarioValido = validarUsuario($usuario);

if (!$usuarioValido) 
{
    echo 'Usuario invalido';
    return false;
}

echo "\n... executando ... \n";*/

/*function validarUsuario(array $usuario)
{
    if (empty ($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
    {
        throw new Exception("Campos obrigatorios não foram preenchidos!");
    }
    
    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

$satus = false;

try {
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e -> getMessage();
} finally {
    echo "Status da Operação: " . (int)$status; //cast
    die();
}

echo "\n... executando ... \n";*/

function divisao($num1, $num2)
{
    if ($num1 == 0 || $num2 == 0)
    {
        return throw new Exception("Um dos números é igual a zero. Divisão por zero não é permitida.");
    }
    else {
        return $num1 / $num2;
    } 
}

function testeDivisao()
{
    try {
        $resultado = divisao(10,2);
    } catch (Exception $e) 
    {
        echo $e -> getMessage();
    } finally {
        echo "O Resultado da divisão é: " . (int)$resultado;
        die();
    }   
}

testeDivisao();