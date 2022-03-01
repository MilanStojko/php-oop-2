<?php

class Show
{
    private $movie;
    private $date;
    private $orario;
    private $sala;

    public function __construct($_movie, $_date, $_orario, $_sala){
        $this-> movie = $_movie;
        $this-> date = $_date;
        $this-> orario = $_orario;
        $this-> sala = $_sala;
    }

    public function getDate(){
        return $this->date;
    }

    public function getMovie(){
        return $this->movie;
    }

    public function getOrario(){
        return $this->orario;
    }


}
