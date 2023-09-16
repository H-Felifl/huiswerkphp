

<?php

//Hoofdstuk 6 opdracht 1 t/m 7

//opdracht: 1

session_start(); //start session

$_SESSION['visit'] += 1; //set session variable

//Check if session is set
if(isset($_SESSION['visit'])){
    echo "Deze pagina heb je al: ".$_SESSION['visit']. " keer bekeken";
}

//opdracht: 2


if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}

setcookie('visit_count', $visit_count, time() + 3600);

echo "<br>";
echo "<br>";
echo "In totaal heb je deze pagina al: $visit_count keer bekeken.";


// opdracht: 3
echo "<br>";
echo "<br>";


function makePostcode() {

    $getal = rand(1000, 9999);
    $length = 2;
    $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
    $caps = strtoupper($randomletter);

    echo "Een willekeurig postcode is: $getal  $caps";

}

$givePostcode = makePostcode();

echo $givePostcode;

//opdracht: 4
echo "<br>";
echo "<br>";

function solveOmtrek($P, $r) {

    $r = $r * 2;
    $sum = $P * $r;

    $sum_rounded = round($sum, 1);
    return $sum_rounded;

}

echo "De omtrek van een cirkel met straal 5 is: " . solveOmtrek(3.14159, 5);
echo "<br>";

function solveOpp ($P, $r) {

    $r = $r * $r;
    $sum = $P * $r;
    $sum_rounded = round($sum, 1);

    return $sum_rounded;
}
echo "De oppervlakte van een cirkel met straal 5 is: " . solveOpp(3.14159, 5);


//opdracht: 5
echo "<br>";
echo "<br>";


function solveSpeed($s, $a) {

    $sum1 = 2 * $s * $a;
    $sum2Root = sqrt($sum1);
    $sumEnd = $sum2Root * 3.6;
    $sumEndRounded = round($sumEnd);

    return $sumEndRounded;

}

echo "Snelheid van een auto met remspoor van 50 meter is: " . solveSpeed(50, 5.5) . "km/h.";

//opdracht: 6
echo "<br>";
echo "<br>";








?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



</body>
</html>