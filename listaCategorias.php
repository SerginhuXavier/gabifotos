<?php
require_once 'model/categoriaDao.php';
require 'includes/head.php';
$objCategorias = new categoriaDao();
$categorias = $objCategorias->listaCategorias();

foreach ($categorias as $categoria) {
    echo '<input type="checkbox" class="flat" name="categoriaCheck" id="categoriaCheck_' . $categoria["idCategoria"] . '" value="' . $categoria["idCategoria"] . '">
        <label for="categoriaCheck_' . $categoria["idCategoria"] . '" class="control-label">' . $categoria["descricao"] . '</label>
    ';
}