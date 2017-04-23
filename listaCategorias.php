<?php

require_once 'model/categoriaDao.php';
require 'includes/head.php';
$objCategorias = new categoriaDao();
$categorias = $objCategorias->listaCategorias();
echo' 
    
';
foreach ($categorias as $categoria) {

    echo '
        <tr id="linha' . $categoria["idCategoria"] . '">
            <td>' . $categoria["descricao"] . '</td>
            <td>
                <a href="cadCategoria/' . $categoria["idCategoria"] . '">
                   <strong>
                        <i class="fa fa-pencil-square-o text-danger" style="font-size:13pt">
                        </i>
                    </strong>
                </a>
            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#modalExcluirFuncionario" data-name="' . $categoria["descricao"] . '" data-id="' . $categoria["idCategoria"] . '">
                   <strong>
                        <i class="fa fa-trash-o text-danger" style="font-size:13pt">
                        </i>
                    </strong>
                </a>
            </td>
        </tr>
    ';
}

//echo'      
//    </tbody>
//</table>
//';
