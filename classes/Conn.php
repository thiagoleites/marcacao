<?php

/**
 * Classe para conexão com banco de dados
 *
 * @author Thiago Leite
 */
class Conn {  
        
    private  $pdo;
    
    public function __construct() 
    {
    }
    public function Connect()
    {
        if(empty($this->pdo)){

            try {
                $this->pdo = new PDO("mysql:host=localhost;dbname=marcacao","root","");
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      
            } catch (PDOException $ex) {
                echo "Erro ao conectar" . $ex->getMessage();
                die();
            }

        }

        return $this->pdo;

    }
    
    public function getConn() {
        return $this->Connect();
    }

}
