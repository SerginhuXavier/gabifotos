<?php
date_default_timezone_set("America/Sao_Paulo");
require_once '../model/categoriaDao.php';

$opcao = filter_input(INPUT_POST, 'opcao');
switch ($opcao){
    case 'cadastrar':
        $categoria = filter_input(INPUT_POST, 'categoria');
        $dataCadastro = date("Y-m-d H:i:s");
        
        $objCategoria = new categoria();
        $objCategoriaDao = new categoriaDao();
        
        $objCategoria->setDescricao($categoria);
        $objCategoria->setDataCadastro($dataCadastro);
        $objCategoria->setStatus(1);
        
        $objCategoriaDao->cadCategoria($objCategoria);
        break;
}