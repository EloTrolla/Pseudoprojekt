<?php

$eesnimi = "Elo";
$perenimi = "Trolla";
$vanus = 123;
$eesnimi_algab_vokaaliga = true;


$isik = array(
    "eesnimi" => "Elo",
    "perenimi" => "Trolla",
    "vanus" => "123"

);

echo "$isik[eesnimi] $isik[perenimi] ($isik[vanus])<br>";


if(preg_match( "/^[aeiouõäöü]/i", $eesnimi))     /* 'i' - ei tee vahet suur- ja v'iket'htedel;
                                                '^' - j'rgnevad t'hed on rea/stringi alguses; */
 {
    echo "Eesnimi algab vokaaliga";
}

else {
    echo "Eesnimi ei alga vokaaliga";
}

?>