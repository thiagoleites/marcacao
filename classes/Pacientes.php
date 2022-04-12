<?php

class Pacientes extends Conn
{
    private $id;
    private $data;
    private $error;

    private $conn;

    public function getData()
    {
        return $this->data;
    }

    public function getError()
    {
        return $this->error;
    }

    /**
     * Faz uma consulta no banco e retorna todos os registros na tabela pacientes.
     * @return mixed
     */
    public function allPacientes()
    {
        $this->conn = parent::getConn();
        try {
            $sql = "SELECT * FROM pacientes";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            die();
        }
    }

    /**
     * Retorna o cadastro relacionado ao ID.
     * @return $id
     */
    public function PacienteId($id)
    {
        $this->conn = parent::getConn();
        try {
            $sql = "SELECT * FROM pacientes WHERE id_p = $id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
