<?php
class Actor 
{
    private $nome;
    private $cognome;
    private $anno;

    public function __construct($_nome, $_cognome, $_anno){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->anno = $_anno;
    }

    public function getInfoAct(){
        return "{$this->nome}"."{$this->cognome}"."{$this->anno}";
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }

    public function setCognomet($_cognome){
        $this->cognome = $_cognome;
    }

    public function setAnno($_anno){
        $this->anno = $_anno;
    }
}
