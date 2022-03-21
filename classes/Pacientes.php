<?php

/**
 * Description of Pacientes
 *
 * @author thiago
 */
class Pacientes  {
    private $id, $nome, $end, $nasc, $cpf, $sus, $cell, $acs, $ubs;
    
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEnd() {
        return $this->end;
    }

    public function getNasc() {
        return $this->nasc;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getSus() {
        return $this->sus;
    }

    public function getCell() {
        return $this->cell;
    }

    public function getAcs() {
        return $this->acs;
    }

    public function getUbs() {
        return $this->ubs;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setEnd($end): void {
        $this->end = $end;
    }

    public function setNasc($nasc): void {
        $this->nasc = $nasc;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    public function setSus($sus): void {
        $this->sus = $sus;
    }

    public function setCell($cell): void {
        $this->cell = $cell;
    }

    public function setAcs($acs): void {
        $this->acs = $acs;
    }

    public function setUbs($ubs): void {
        $this->ubs = $ubs;
    }


    
}
