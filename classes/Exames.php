<?php

/**
 * Gerencimento de exames.
 *
 * @author thiago
 * 
 */

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

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function setCodigo($codigo): void
    {
        $this->codigo = $codigo;
    }

    public function retornaExame()
    {
        $this->conn = parent::getConn();

        $sql = "SELECT * FROM exames";
        $sql = $this->conn->prepare($sql);
        $sql->execute();
        return $sql;
    }
    public function retornaByIdExame($id)
    {
        $this->conn = parent::getConn();

        $sql = "SELECT * FROM exames WHERE id_e = $id";
        $sql = $this->conn->prepare($sql);
        $sql->execute();
        return $sql->fetch();

//        while($result = $sql->fetchAll()){
//            return $result;
//        }
    }

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

        if ($result) {
            echo "Dados atualizados";
        } else {
            echo "Erro ao atualizar dados";
        }
    }
}
