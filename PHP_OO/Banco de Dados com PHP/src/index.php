<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':

        echo '<h3>Produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo 'id: ' . $value['id'] . '<br> Descriçaõ: ' . $value['descricao'] . '<hr>';
        }

        break;

    case 'insert':

        $status = $produto->insert('Produto Teste de Gabriel 01');

        if (!$status) {

            echo 'Não foi possivel executar a operação!';
            return false;
        }

        echo 'Registro inserido com sucesso!';

        break;

    case 'update':
        $status = $produto->update('Produto alterado de Gabriel', 4);

        if (!$status) {

            echo 'Não foi possivel executar a operação!';
            return false;
        }

        echo 'Registro atualizado com sucesso!';

        break;


    case 'delete':

        $status = $produto->delete(3);

        if (!$status) {

            echo 'Não foi possivel executar a operação!';
            return false;
        }

        echo 'Registro removido com sucesso!';

        break;
}
