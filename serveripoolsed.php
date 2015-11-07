<?php

$eesnimi = "Elo";
$perenimi = "Trolla";
$vanus = 123;
$eesnimi_algab_vokaaliga = true;





// Objektid, klassid

class Person //Klass on nagu sabloon, vorm
{

    var $eesnimi;
    var $perenimi;
    var $vanus;
    var $sugu;

}

$isik = new Person();
$isik->eesnimi = "Elo";
$isik->perenimi = "Trolla";
$isik->vanus = 123;
$isik->sugu = "Naine";

/*   Need on objektid ($isik, $isik2)

$isik2 = new Person();
$isik2->eesnimi = "Vares";
$isik2->perenimi = "Vaaks";
$isik2->vanus = 11;
$isik2->sugu = "Mees";
*/

echo $isik->eesnimi.' '.$isik->perenimi.' '.'('.$isik->vanus.')'.' '.$isik->sugu.'<br>';





// Nimi algab/ei alga nt. vokaaliga

if (preg_match("/^[a, e, i, o, u, õ, ä, ö, ü]/i", $eesnimi))     /* 'i' - ei tee vahet suur- ja v'iket'htedel;
                                                                    '^' - j'rgnevad t'hed on rea/stringi alguses; */
{
    echo "Eesnimi algab vokaaliga";
}

else
{
    echo "Eesnimi ei alga vokaaliga";
}

?>