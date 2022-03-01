<?php

require_once __DIR__. "./classes/Sala.php";
require_once __DIR__. "./classes/Sala4d.php";
require_once __DIR__. "./classes/Movies.php";
require_once __DIR__. "./classes/Shows.php";
require_once __DIR__. "./classes/Actor.php";

$sale = [
    new Sala("Tomei",100,1,"Grande"),
    new Sala("Salvalaggio",100,2,"Grande"),
    new Sala("Pompei",100,3,"Grande"),
    new Sala("Bernardini",100,4,"Grande"),
    new Sala("Osnago",100,5,"Grande"),
    new Sala4d("Massaro",100,5,"Piccolo", true, false, true),
    new Sala4d("Massaro",100,5,"Piccolo", true, true, true)
];

$listaAttori = [
    new Actor("Matteo", "Buscemi Pompei", 1997),
    new Actor("Milan", "De Niro Stojkovic", 1997),
    new Actor("Lorenzo", "L.Jackson Osnago", 1997),
];

$titoli = [
    new Movie("Febbre Tomei", "Lorenzo Nolan Osnago", "Milan Fincher", "1.40",[$listaAttori[0],$listaAttori[1],$listaAttori[2]]),
    new Movie("Tutti pazzi per il Css", "Matteo Lynch Pompei", "Lorenzo Scorsese Bernardini", "1.40", [$listaAttori[0],$listaAttori[1],$listaAttori[2]]),
    new Movie("Ridi', ridi che la mamma ha fatto i gnocchi", "Simone Sorrentino Massaro", "Matteo Zalone Salvalaggio", "1.40", [$listaAttori[0],$listaAttori[1],$listaAttori[2]]),
];

$shows = [
    new Show($titoli[0], "28 novembre 2022", "21.20", $sale[0]),
    new Show($titoli[1], "28 novembre 2022", "21.20", $sale[1]),
    new Show($titoli[2], "28 novembre 2022", "21.20", $sale[2]),
    new Show($titoli[1], "28 novembre 2022", "21.20", $sale[3]),
    new Show($titoli[2], "28 novembre 2022", "21.20", $sale[4]),
    new Show($titoli[0], "28 novembre 2022", "21.20", $sale[5]),
    new Show($titoli[2], "28 novembre 2022", "21.20", $sale[6]),
];



$sale[1] -> set3d(true);

// foreach($cinemaroma as $sala){
//     echo "<h2> {$sala -> getinfo()}</h2>"."{$sala -> getVibration()}<br>"."{$sala -> getSmoke()}<br>"."{$sala -> getWater()}<br>";
// }

var_dump($shows);
var_dump($titoli);


//1) Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione alle informazioni aggiuntive per le sale immersive.
var_dump($sale); 



//2) Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
$sum = 0;
    foreach($sale as $key){
        $sum += $key -> getCapacity();
    }

var_dump($sum);

//3) Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.

$count = 0;
$today = "28 novembre 2022";
$movie = $titoli[0];

foreach($shows as $key){
    if(($today == $key->getDate()) && ($movie == $key ->getMovie())){
        $count++;
    }
};

var_dump($count);


//4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.

$ultimaOra = 0;

foreach ($shows as $key ) {
    if($today == $key->getDate()) {
        if($key->getOrario() > $ultimaOra){
            $ultimaOra = $key->getOrario();
        }
    }
}

$lengthFilm = 0;
foreach ($shows as $key ) {
    if($ultimaOra == $key->getOrario()){
        $lengthFilm = $key ->getMovie() -> getTime();
    }
}

$arrayUltimaOra = explode(".",$ultimaOra);
$arrayLengthFilm = explode(".",$lengthFilm);

$arrayUltimaOra [0] = $arrayUltimaOra[0] + $arrayLengthFilm[0];
$arrayUltimaOra [1] = $arrayUltimaOra[1] + $arrayLengthFilm[1];

if($arrayUltimaOra[1] > 59){
    $arrayUltimaOra [0] = $arrayUltimaOra [0]+1;
    $arrayUltimaOra [1] = $arrayUltimaOra [1]-60;
};

var_dump($arrayUltimaOra);
var_dump($arrayLengthFilm);