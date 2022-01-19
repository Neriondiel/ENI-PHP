<?php
// tableau 2 D
$tabFilms[0]["name"] = "The Matrix";
$tabFilms[0]["year"] = 1999;
$tabFilms[1]["name"] = "Star Wars";
$tabFilms[1]["year"] = 1977;
var_dump($tabFilms);
// autre possibilé
$film["name"] = "The Matrix";
$film["year"] = 1999;
$tabFilms2 [] = $film;
$film["name"] = "Star Wars";
$film["year"] = 1977;
$tabFilms2 [] = $film;
var_dump($tabFilms2);
echo '<pre>';
print_r($tabFilms2);
 // autre 
 $tabFilms3 =[
     0 => 
        [ 
         "name" => "the Matrix",
         "year" => 1999,
        ],
    1 => 
    [ 
        "name" => "Star Wars",
        "year" => 1999,
    ]
];
echo '<pre>';
print_r($tabFilms3);

