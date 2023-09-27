

<?php

//Hoofdstuk 6 opdracht 1 t/m 7

echo "<h3>Hoofdstuk 6 opdracht 1 t/m 7</h3>";
echo "<br>";

//opdracht: 1
echo "Opdracht: 1";
echo "<br>";

session_start(); //start session

$_SESSION['visit'] += 1; //set session variable

//Check if session is set
if(isset($_SESSION['visit'])){
    echo "Deze pagina heb je al: ".$_SESSION['visit']. " keer bekeken";
}

//opdracht: 2
echo "<br>";
echo "<br>";

echo "Opdracht: 2";


if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}

setcookie('visit_count', $visit_count, time() + 3600);

echo "<br>";
echo "In totaal heb je deze pagina al: $visit_count keer bekeken.";


// opdracht: 3
echo "<br>";
echo "<br>";
echo "Opdracht: 3";
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
echo "Opdracht: 4";
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
echo "Opdracht: 5";
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
echo "Opdracht: 6";
echo "<br>";


function convertCurrency($dollars, $exchangeRate = 0.94) {
    return $dollars * $exchangeRate;
}
$dollars = 86.74;
$euros = convertCurrency($dollars);
echo "$" . number_format($dollars, 2) . " is gelijk aan " . "€" . number_format($euros, 2) . ".";


//opdracht: 7
echo "<br>";
echo "<br>";
echo "Opdracht: 7";
echo "<br>";


function derdeMacht1() {
    $getal = 5;
    $sum = $getal * $getal * $getal;
    return $sum;
}
echo derdeMacht1();

echo "<br>";

function derdeMacht2($g) {
    return $g * $g * $g;
}

echo derdeMacht2(10);

echo "<br>";

function derdeMacht3($g) {

    for ($i = 0; $i <= 25; $i++) {

        $g = $i;

        $sum = $g * $g * $g;
        echo $i . " x " . $i . " x " . $i . " = " . $sum . "<br>";

    }

    return $sum;


}

derdeMacht3(0);





echo "<br>";
echo "<br>";
echo "<h3>Hoofdstuk 7 opdracht 1 t/m 4</h3>";
echo "<br>";
echo "<br>";

//opdracht: 1
echo "Opdracht: 1";
echo "<br>";
echo "<br>";

if (isset($_POST['uitreken'])) {

    $name = $_POST['bedrag'];

    if (empty($name)) {
        echo "name is empty";
    } else {
        echo $name;
    }

}






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



<form method="post" action="">

<label for="bedrag">Bedrag exclusief BTW &nbsp </label>
<input type="text" name="bedrag" id="bedrag">

<br>

<input type="radio" name="laag" id="laag">
<label for="laag">laag, 9%</label>

<br>

<input type="radio" name="hoog" id="hoog">
<label for="hoog">hoog, 21%</label>

<br>
<br>

<input type="submit" name="uitreken" value="uitreken">


</form>

<!-- <h3>Btw berekenen</h3> -->

<!-- <form method="post" action="">

<label for="">Bedrag exclusief BTW</label>
<input type="text" name="income" id="">
<br><br>
<input type="submit" value="verzenden">


</form> -->


<!-- <?php 

if (isset($_post))


?> -->





</body>
</html>