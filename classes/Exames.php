<?php

class Exames extends Conn
{

    private $id;
    private $nome;
    private $codigo;

    private $conn;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Função retorna todos os exames cadastrados no banco de dados.
     * @var String
     */

    public function retornaExame()
    {
        $this->conn = parent::getConn();

        $sql = "SELECT * FROM exames";
        $sql = $this->conn->prepare($sql);
        $sql->execute();
        return $sql;
    }

    /**
     * Função retorna um único cadastro selecionado no banco de dados.
     * @var bool
     */
    public function retornaByIdExame($id)
    {
        $this->conn = parent::getConn();

        $sql = "SELECT * FROM exames WHERE id_e = $id";
        $sql = $this->conn->prepare($sql);
        $sql->execute();
        return $sql->fetch();
    }

    /**
     * Função atualiza o cadastro selecionado no banco de dados.
     * @var mixed
     */
    public function atualizaExame($id, $data)
    {
        $nome = $data['nome_e'];
        $codigo = $data['codigo_e'];
        $sql = "UPDATE exames SET
        nome_p = $nome,
        codigo_p = $codigo
        WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nome_p', $nome);
        $stmt->bindValue(':codigo_p', $codigo);
        $stmt->bindValue(':id', $id);
        $result = $stmt->execute();
    }
}
