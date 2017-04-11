<?php
require_once 'model/FuncionariosDao.php';

$objFuncionario = new FuncionariosDao();
$funcionarios = $objFuncionario->listaFuncionarios();

foreach ($funcionarios as $funcionario){
    echo '
        <tr>
            <td>'.$funcionario["nome"].'</td>
            <td>'.$funcionario["email"].'</td>
            <td>'.$funcionario["telefone"].'</td>
            <td>'.$funcionario["categorias"].'</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
    ';
}