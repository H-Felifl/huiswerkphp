<?php

if (isset($_POST['submit'])) {

    if (!empty($_POST['voornaam']) && !empty($_POST['achternaam']) && !empty($_POST['email'])) {

        echo "suuuiii";
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
    <title>oefen toets</title>
</head>
<body>


<form action="" method="post">

    <label>Voornaam: </label>
    <input type="text" name="voornaam" value="">
    <br>
    <label>Achternaam: </label>
    <input type="text" name="achternaam" value="">
    <br>
    <label>Email: </label>
    <input type="text" name="email" value="">
    <br>
    <br>
    <label>Welke iphone wil je kopen?</label>
    <br>
    <input type="radio" name="iphone" value="iphone11"> iphone 11 <br>
    <input type="radio" name="iphone" value="iphone12"> iphone 12 <br>
    <input type="radio" name="iphone" value="iphone13"> iphone 13
    <br>
    <br>
    <label>Welke versie wil jij kopen?</label>
    <br>
    <input type="radio" name="versie" value="mini"> mini <br>
    <input type="radio" name="versie" value="normaal"> normaal <br>
    <input type="radio" name="versie" value="pro"> pro
    <br>
    <br>
    <label>Welke kleur?</label>
    <br>
    <input type="radio" name="kleur" value="rood"> rood <br>
    <input type="radio" name="kleur" value="blauw"> blauw <br>
    <input type="radio" name="kleur" value="zwart"> zwart
    <br>
    <br>
    <br>
    <button name="submit">verzenden</button>


</form>













</body>
</html>