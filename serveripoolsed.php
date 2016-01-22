<?php

$eesnimi = "Elo";
$perenimi = "Trolla";
$vanus = 123;

$arv1 = 1.23;
$arv2 = 2.34;



// 20. Floats.

// echo $arv1+$arv2;


// 18. Objektid, klassid

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

// echo $isik->eesnimi.' '.$isik->perenimi.' '.'('.$isik->vanus.')'.' '.$isik->sugu.'<br>';





// 19. Funktsioonid. Nimi algab/ei algab vokaaliga

/*
if (preg_match("/^[a, e, i, o, u, õ, ä, ö, ü]/i", $eesnimi))   // 'i' - ei tee vahet suur- ja v'iket'htedel; '^' - j'rgnevad t'hed on rea/stringi alguses;

{

    echo "$eesnimi $perenimi eesnimi algab vokaaliga";
}

else
{
    echo "$eesnimi $perenimi eesnimi ei alga vokaaliga";
}
*/


// 21. GET.   aadressiribale lisa ?koer=terjer. Parameetril 'koer' on v22rtus 'terjer'. $_GET v6tab 'koera' v22rtuse.

// if(isset($_GET['koer'])) {
//    echo $_GET ['koer']."</br>";
// };



// 22. $_POST

// if(isset($_POST['kass'])) {
//     echo 'Kass on: ' . $_POST['kass'];
// }



// 23. Require





/* Luua fail nimega index.php. Lisada sinna html5 boilerplate.

<body> osasse lisada PHP märgendi vahele kontroll, kas eksisteerib muutuja nimega $_GET['page']
ja kui eksisteerib, siis require'ida fail, mille nimeks on selle $_GET['page'] sisu pluss string ".php".
 Näiteks kui $_GET['page'] väärtuseks oli home, siis requiretakse home.php. */








?>






<!--   22. $_POST   -->

<form action="?" method="post">
    <input name="kass" placeholder="Kassitõug">
    <input type="submit">
</form>
