<?php
session_start();

if(isset($_SESSION['page_views']))
{
    $_SESSION['page_views']++;
} Else {
    $_SESSION['page_views'] = 1;
}
echo "Deze pagina heb je al:  " . $_SESSION['page_views']." bekeken <br> voordat je de internet 
browser hebt afgesloten";
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
