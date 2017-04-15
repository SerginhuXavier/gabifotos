<?php
date_default_timezone_set("America/Sao_Paulo");
require_once '../model/funcionariosDao.php';

$opcao = filter_input(INPUT_POST, 'opcao');
switch ($opcao){
    case 'cadastrar':
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $categorias = filter_input(INPUT_POST, 'categorias');
        $dataCadastro = date("Y-m-d H:i:s");
        
        $objFuncionario = new funcionario();
        $objFuncionarioDao = new FuncionariosDao();
        
        $objFuncionario->setNome($nome);
        $objFuncionario->setEmail($email);
        $objFuncionario->setTelefone($telefone);
        $objFuncionario->setStatus(1);
        $objFuncionario->setDataCadastro($dataCadastro);
        
        $objFuncionarioDao->cadFuncionario($objFuncionario);
        break;
    case 'alterar':
        $idFuncionario = (int) filter_input(INPUT_POST, 'idFuncionario');
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $categorias = filter_input(INPUT_POST, 'categorias');
        
        $objFuncionario = new funcionario();
        $objFuncionarioDao = new FuncionariosDao();
        
        $objFuncionario->setIdFuncionario($idFuncionario);
        $objFuncionario->setNome($nome);
        $objFuncionario->setEmail($email);
        $objFuncionario->setTelefone($telefone);
        
        $objFuncionarioDao->altFuncionario($objFuncionario);
        break;
    
    case 'excluir':
        $idFuncionario = filter_input(INPUT_POST, 'idFuncionario');
        
        $objFuncionario = new funcionario();
        $objFuncionarioDao = new FuncionariosDao();
        
        $objFuncionario->setIdFuncionario($idFuncionario);
        $objFuncionario->setStatus(0);
        
        $objFuncionarioDao->delFuncionario($objFuncionario);
        break;
}