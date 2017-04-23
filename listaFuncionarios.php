<?php
require_once 'model/FuncionariosDao.php';

$objFuncionario = new FuncionariosDao();
$funcionarios = $objFuncionario->listaFuncionarios();

foreach ($funcionarios as $funcionario){
    echo '
        <tr id="linha'.$funcionario["idFuncionario"].'">
            <td>'.$funcionario["nome"].'</td>
            <td>'.$funcionario["email"].'</td>
            <td>'.$funcionario["telefone"].'</td>
            <td>'.$funcionario["categorias"].'</td>
            <td>
                <a href="cadFuncionario/'.$funcionario["idFuncionario"].'">
                    <strong>
                        <i class="fa fa-pencil-square-o text-danger" style="font-size:13pt">
                        </i>
                    </strong>
                </a>
            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#modalExcluirFuncionario" data-name="'.$funcionario["nome"].'" data-id="'.$funcionario["idFuncionario"].'">
                    <strong>
                        <i class="fa fa-trash-o text-danger" style="font-size:13pt">
                        </i>
                    </strong>
                </a>
            </td>
        </tr>
    ';
}