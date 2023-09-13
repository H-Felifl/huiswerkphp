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

//Hoofdstuk 6 opdracht 1 t/m 7

//opdracht: 1

session_start(); //start session

$_SESSION['visit'] += 1; //set session variable

//Check if session is set
if(isset($_SESSION['visit'])){
    echo "Deze pagina heb je al: ".$_SESSION['visit']. " keer bekeken";
    echo "<br>";
    echo "voordat je de internet browser hebt afgesloten";
}

//opdracht: 2













?>














</body>
</html>