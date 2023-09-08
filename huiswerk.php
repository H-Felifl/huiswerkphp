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

<?php
//opdracht: 1
$time = date("H");

if ($time >= 6 && $time < 12) {
    echo "Het is ochtend";
}
elseif ($time >= 12 && $time < 18) {
    echo "Het is middag";
}
elseif ($time >= 18 && $time < 24) {
    echo "het is 's avonds";
}
else {
    echo "het is 's nachts";
}


//opdracht: 2

//$time2 = date("H");
$time2 = 5;

echo "<br>";

switch ($time2) {
    case $time2 >= 6 && $time2 < 12 : echo "Het is 's ochtend";      break;
    case $time2 >= 12 && $time2 < 18 : echo "Het is 's middags";      break;
    case $time2 >= 18 && $time2 < 24 : echo "Het is 's avonds";      break;
    default: echo "Het is 's nachts"; break;
//    case $time2 >= 24 || $time2 < 6 : echo "het is 's nachts";      break;



}

echo "<br>";


//opdracht: 3

$number1 = 10;
$number2 = 15;


if ($number1 < $number2) {
    $multi = $number2 * 2;
    $sum3 = $multi + $number1;
    echo "Uitkomst: ",$sum3;
}
else if ($number1 > $number2) {
    $multi2 = $number1 * 2;
    $sum32 = $multi2 + $number2;
    echo "Uitkomst: ",$sum32;
}

echo "<br>";

//opdracht: 4

$price = 100;
$int = 1.19;
$int55 = 1.11;
$int16 = 1.16;

if ($price >= 150) {
    $priceNew = $price * $int;
    echo "Oude prijs: $price. Na verhoging van 19% is de prijs: $priceNew";

}
else if ($price < 55) {
    $priceNew = $price * $int55;
    echo "Oude prijs: $price. Na verhoging van 11% is de prijs: $priceNew";

}
else if ($price >= 55 && $price < 150) {
    $priceNew = $price * $int16;
    echo "Oude prijs: $price. Na verhoging van 16% is de prijs: $priceNew";

}

echo "<br>";

//opdracht: 5

$number5 = 13;

if ($number5 % 2 == 0) {
    echo "Is het getal $number5 even? Ja";
}
else {
    echo "Is het getal $number5 even? nee";
}

echo "<br>";

//opdracht: 6

$time6 = date("H:i");
//$time6 = "17:00";
$temp6 = 20;
$humidity = 85;

if ($time6 >= "17:00" && $temp6 >= 20 && $humidity >= 85) {
    echo "airco OFF";

}
else if ($time6 >= "08:00") {
    echo "airco ONN";
}

echo "<br>";

//opdracht: 7

$priceIphone = 1000;
$spaargeld = 1004;


if ($spaargeld < 750) {

    $restGeld1 = $priceIphone - $spaargeld;

    echo "Je kunt beter een baantje zoeken. je mist nog $restGeld1 euro";
}
else if ($spaargeld >= 750 && $spaargeld < 1000) {

    $restGeld2 = $priceIphone - $spaargeld;

    echo "je bent er bijna, maar je mist nog $restGeld2 euro";
}
else {

    $restGeld3 = $spaargeld - $priceIphone;

    echo "u hebt een voldoende bedrag om de aankopen te maken. u zult na de aankopen nog over hebben: $restGeld3 euro";
}

echo "<br>";

//opdracht: 8

$voteAge = 18;
$votePass = false;
$licenceAge = 16;
$age8 = 17;

if ($age8 >= $licenceAge && $age8 >= $voteAge && $votePass = true) {
    echo "je mag examen doen voor de scooter rijbewijs en je mag stemmen";
}
elseif ($age8 >= $licenceAge && $age8 >= $voteAge && $votePass = false) {
    echo "Je kunt wel voor je scooter rijbewijs gaan maar je mist nog een stem pas.";
}
else if ($age8 < $licenceAge && $age8 < $voteAge) {
    echo "Je bent te jong om voor je scooterrijbewijs te gaan en om te stemmen";
}











?>


</body>
</html>



