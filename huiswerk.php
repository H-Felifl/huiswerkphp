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
    case $time2 >= 6 && $time2 < 12 : echo "het is 's ochtend";      break;
    case $time2 >= 12 && $time2 < 18 : echo "het is 's middags";      break;
    case $time2 >= 18 && $time2 < 24 : echo "het is 's avonds";      break;
    default: echo "het is 's nachts"; break;
//    case $time2 >= 24 || $time2 < 6 : echo "het is 's nachts";      break;




}




?>


</body>
</html>



