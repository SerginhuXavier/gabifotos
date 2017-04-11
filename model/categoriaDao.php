<?php
require_once 'banco.php';
include_once 'bean/categoria.php';

class categoriaDao extends banco {

    public function listaCategorias() {
        $conexao = parent::conecta();

        $sql = "SELECT * FROM ".TBL_CATEGORIAS." WHERE status = 1";
        
        $banco = $conexao->query($sql);
        
        $linhas = array();
        while ($linha = $banco->fetch_assoc()){
            $linhas[] = array_map('utf8_encode', $linha);
        }

        return $linhas;
        parent::desconecta();
    }

    public function cadCategoria(categoria $objCategoria){
        $conexao = parent::conecta();
        
        $sql = $conexao->prepare("INSERT INTO ".TBL_CATEGORIAS." SET 
            descricao = ?,
            status = ?,
            dataCadastro = ?
        ");
        
        $sql->bind_param('sis', $objCategoria->getDescricao(), $objCategoria->getStatus(), $objCategoria->getDataCadastro());
        
        $sql->execute() or die($sql->error);
        
        parent::desconecta();
    }
}
