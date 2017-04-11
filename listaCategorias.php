<?php

require_once 'model/categoriaDao.php';
$objCategorias = new categoriaDao();
$categorias = $objCategorias->listaCategorias();

foreach ($categorias as $categoria) {
    echo '
        <div class="icheckbox_flat-green" style="position: relative;">
            <input type="checkbox" class="flat" name="categoriaCheck" id="categoriaCheck_' . $categoria["idCategoria"] . '" value="' . $categoria["idCategoria"] . '" style="position: absolute; opacity: 0;">
            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
        </div>

        <label for="categoriaCheck_' . $categoria["idCategoria"] . '" class="control-label">' . $categoria["descricao"] . '</label>
    ';
}