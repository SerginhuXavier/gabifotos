<?php

require_once 'Banco.php';
require_once 'bean/Funcionario.php';

class FuncionariosDao extends Banco {

    public function listaFuncionarios() {
        $conexao = parent::conecta();

        $sql = "SELECT f.nome, f.email, f.telefone, f.idFuncionario,
                GROUP_CONCAT(c.descricao) AS categorias
                    FROM " . TBL_FUNCIONARIO . " f
                    LEFT JOIN " . TBL_FUNCIONARIO_CATEGORIAS . " fc ON f.idFuncionario = fc.idFuncionario
                    LEFT JOIN " . TBL_CATEGORIAS . " c ON c.idCategoria = fc.idCategoria
                        WHERE f.status = 1
                        GROUP BY f.idFuncionario";

        $banco = $conexao->query($sql) or die($conexao->error);

        $linhas = Array();
        while ($linha = $banco->fetch_assoc()) {
            $linhas[] = array_map('utf8_encode', $linha);
        }

        return $linhas;

        parent::desconecta();
    }

    public function cadFuncionario(funcionario $objFuncionario) {
        $conexao = parent::conecta();

        $sql = $conexao->prepare("INSERT INTO " . TBL_FUNCIONARIO . " SET 
            nome = ?,
            email = ?,
            telefone = ?,
            status = ?,
            dataCadastro = ?
        ");

        $sql->bind_param('sssis', $objFuncionario->getNome(), $objFuncionario->getEmail(), $objFuncionario->getTelefone(), $objFuncionario->getStatus(), $objFuncionario->getDataCadastro());

        $sql->execute() or die($sql->error);

        parent::desconecta();
    }

}
