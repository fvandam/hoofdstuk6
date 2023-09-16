<?php

function omtrek(int $straal, float|int $pi = 3.14159): int{
    $sum = ($straal * 2) * $pi;
    return $sum;
}

echo "De omtrek van een cirkel met straal 5 is: ".omtrek(5)."<br>";

function oppervlakte(int $straal, float|int $pi = 3.14159): int{
    $sum = ($straal * $straal)  * $pi;
    return $sum;
}

echo "De oppervlakte van een cirkel met de straal 5 is: ".oppervlakte(5);

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
