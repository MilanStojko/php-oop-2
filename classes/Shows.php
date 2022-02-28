<?php

class Show
{
    private $movie;
    private $date;
    private $time;
    private $duration;
    private $sala;

    public function __construct($_movie, $_date, $_time, $_duration, $_sala){
        $this-> movie = $_movie;
        $this-> date = $_date;
        $this-> time = $_time;
        $this-> duration = $_duration;
        $this-> sala = $_sala;
    }
}
