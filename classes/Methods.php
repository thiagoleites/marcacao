<?php

/**
 * Metodos de consulta, alteraca, e insercao para pacientes
 *
 * @author thiago
 */
class Methods extends Conn
{

    private $conn;

    public function __construct()
    {
        $this->conn = parent::getConn();
    }

    public function retornaPacientes()
    {
        // $this->conn = parent::getConn();
        $sql = "select * from pacientes";
        $sql = $this->conn->prepare($sql);
        $sql->execute();

        return $sql;
    }

    public function exameMarcado()
    {
        // $this->conn = parent::getConn();
        $sql = "SELECT id_e, nome_e, data_exame FROM exames inner join pacient_realiza_exame on id_e = idexame WHERE idpaciente = {$uid}";
        $sql = $this->conn->prepare($sql);
        $sql->execute();
        return $sql;
    }
}
