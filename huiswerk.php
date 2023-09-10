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
echo "<br>";

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
echo "<br>";

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
echo "<br>";

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
echo "<br>";

$number5 = 13;

if ($number5 % 2 == 0) {
    echo "Is het getal $number5 even? Ja";
}
else {
    echo "Is het getal $number5 even? nee";
}

echo "<br>";

//opdracht: 6
echo "<br>";

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
echo "<br>";

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
echo "<br>";

$voteAge = 18;
$votePass = false;
$licenceAge = 16;
$age8 = 25;

if ($age8 >= $licenceAge && $age8 >= $voteAge && $votePass === true) {
    echo "je mag examen doen voor de scooter rijbewijs!";
    echo "<br>";
    echo "je mag stemmen!";
    echo "<br>";
    echo "Uw leeftijd is: $age8";
}
elseif ($age8 >= $licenceAge && $age8 >= $voteAge && $votePass === false) {
    echo "Je mag examen doen voor de scooter rijbewijs!";
    echo "<br>";
    echo "je mag NIET stemmen! je mist een stem pas";
    echo "<br>";
    echo "Uw leeftijd is: $age8";
}
elseif ($age8 >= $licenceAge && $age8 < $voteAge) {
    echo "Je mag examen doen voor de scooter rijbewijs!";
    echo "<br>";
    echo "je mag NIET stemmen! je bent nog te jong om te stemmen.";
    echo "<br>";
    echo "Uw leeftijd is: $age8";
}
else {
    echo "Je bent te jong om examen te doen voor de scooterrijbewijs";
    echo "<br>";
    echo "Je bent te jong om te stemmen.";
    echo "<br>";
    echo "Uw leeftijd is: $age8";
}
echo "<br>";

//opdracht: 9
echo "<br>";

$side1 = 2;
$side2 = 2;
$side3 = 1;

echo "Zijde 1: $side1 cm";
echo "<br>";
echo "Zijde 2: $side2 cm";
echo "<br>";
echo "Zijde 3: $side3 cm";
echo "<br>";

if ($side1 && $side2 > $side3) {
    echo "Kan wel!";
}
else {
    echo "Kan niet!";
}

echo "<br>";

//opdracht: 10
echo "<br>";

$start = 1;
$end = 12;
$sum = 0;

echo "Waarde van getal is: $end";
echo "<br>";

for ($i = 0; $i <= $end; $i++) {
    $sum += $i;
    if($i != $end)
    {
        echo $i.' + ';
    }
    else
    {
        echo $i;
    }
}

echo '= '.$sum;
echo "<br>";

//opdracht: 11
echo "<br>";

$start11 = 1;
$end11 = 5;
$sum11 = 1;

echo "Waarde van getal is: $end11";
echo "<br>";

for ($i = 1; $i <= $end11; $i++) {
    $sum11 *= $i;
    if($i != $end11)
    {
        echo $i.' x ';
    }
    else
    {
        echo $i;
    }
}

echo '= '.$sum11;
echo "<br>";

//opdracht: 13
echo "<br>";

$km_stand = 0;
$km_add = 1609;

echo '<table>';
echo '<tr> <th>Miles</th> <th>Kilometers</th> </tr>';

for ($row=1;$row<=10;$row++) {
    echo '<tr>';
    $km_stand += $km_add;
    for ($col=1;$col<=1;$col++) {
        echo '<td>'.$row.'</td>';
        echo '<td>'.$km_stand.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo "<br>";

//opdracht: 15 patroon 1
echo "<br>";

for ($x = 1; $x <= 6; $x++) {

    if ($x != 6) {
        echo $x. " ";
    }
    else {
        echo $x;
    }
}

echo "<br>";

$numbers = "";
for($i = 1; $i <= 6; $i++){
    $numbers .= $i . " ";
    echo $numbers . "<br>";

}






?>


</body>
</html>



