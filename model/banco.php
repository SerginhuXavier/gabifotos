<?php
require_once 'constantes.php';

class banco {

    private $db_host = DB_HOST;
    private $db_name = DB_NAME;
    private $db_user = DB_USER;
    private $db_pass = DB_PASS;
//    private $db_driver = DB_DRIVER;
    private $Conn;

    public function conecta() {
    $this->Conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name, 3306);
        
        return $this->Conn;
    }
    
    public function desconecta() {
        mysqli_close ($this->Conn);
    }

}
