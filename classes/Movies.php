<?php

class Movie
{
    private $nome;
    private $regista;
    private $sceneggiatore;
    private $linguaOriginale;
    private $time;
    private $attori = [];


    public function __construct($_nome,$_regista,$_sceneggiatore, $_time,$_attori){
        $this->nome = $_nome;
        $this->regista = $_regista;
        $this->sceneggiatore = $_sceneggiatore;
        $this->time = $_time;
        $this->attori = $_attori;
    }

    public function getAttore(){
        return "{$this->attori}";
    }

    public function getNomeT(){
        return "{$this->nome}";
    }

    public function getMovie(){
        return "{$this->movie}";
    }

    public function getTime(){
        return "{$this->time}";
    }
}
