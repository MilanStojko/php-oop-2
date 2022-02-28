<?php

class Movie
{
    private $nome;
    private $regista;
    private $sceneggiatore;
    private $linguaOriginale;
    private $attori = [];


    public function __construct($_nome,$_regista,$_sceneggiatore,$_attori){
        $this->nome = $_nome;
        $this->regista = $_regista;
        $this->sceneggiatore = $_sceneggiatore;
        $this->attori = $_attori;
    }

    public function setAttore($_attore){
        $this-> attore = $_attore;
    }

    public function getAttore(){
        return "{$this->attore}";
    }
}
