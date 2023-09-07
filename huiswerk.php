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













?>


</body>
</html>



