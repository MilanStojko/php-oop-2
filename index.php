<?php

require_once __DIR__. "./classes/Sala.php";
require_once __DIR__. "./classes/Sala4d.php";
require_once __DIR__. "./classes/Movies.php";
require_once __DIR__. "./classes/Shows.php";

$sale = [
    new Sala("Tomei",100,1,"Glande"),
    new Sala("Salvalaggio",100,2,"Glande"),
    new Sala("Pompei",100,3,"Glande"),
    new Sala("Bernardini",100,4,"Glande"),
    new Sala("Osnago",100,5,"Glande"),
    new Sala4d("Massaro",100,5,"Piccolo", true, false, true),
    new Sala4d("Massaro",100,5,"Piccolo", true, true, true)
];

$titoli = [
    new Movie("Febbre Tomei", "Lorenzo Nolan Osnago", "Milan Fincher",["Matteo Buscemi Pompei", "Milan De Niro Stojkovic", "Lorenzo L.Jackson Osnago"] ),
    new Movie("Tutti pazzi per il Css", "Matteo Lynch Pompei", "Lorenzo Scorsese Bernardini", ["Matteo Buscemi Pompei", "Milan De Niro Stojkovic", "Lorenzo L.Jackson Osnago"]),
    new Movie("Ridi', ridi che la mamma ha fatto i gnocchi", "Simone Sorrentino Massaro", "Matteo Zalone Salvalaggio", ["Matteo Buscemi Pompei", "Milan De Niro Stojkovic", "Lorenzo L.Jackson Osnago"]),
];

$shows = [
    new Show($titoli[0], "28 novembre 2022", "21.20", "h:1.40", $sale[0]),
    new Show($titoli[1], "28 novembre 2022", "21.20", "h:1.40", $sale[1]),
    new Show($titoli[2], "28 novembre 2022", "21.20", "h:1.40", $sale[2]),
    new Show($titoli[1], "28 novembre 2022", "21.20", "h:1.40", $sale[3]),
    new Show($titoli[2], "28 novembre 2022", "21.20", "h:1.40", $sale[4]),
    new Show($titoli[0], "28 novembre 2022", "21.20", "h:1.40", $sale[5]),
    new Show($titoli[2], "28 novembre 2022", "21.20", "h:1.40", $sale[6]),
];



$sale[1] -> set3d(true);

// foreach($cinemaroma as $sala){
//     echo "<h2> {$sala -> getinfo()}</h2>"."{$sala -> getVibration()}<br>"."{$sala -> getSmoke()}<br>"."{$sala -> getWater()}<br>";
// }

var_dump($shows);
var_dump($titoli);
