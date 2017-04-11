<?php
class categoria {
    private $idCategoria;
    private $descricao;
    private $dataCadastro;
    private $status;
    
    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}
