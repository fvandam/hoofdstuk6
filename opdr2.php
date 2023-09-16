<?php
session_start();

var_dump($_COOKIE);
if (isset($_COOKIE['page_views'])) {
    setcookie('page_views', $_COOKIE['page_views'] + 1, time() + 3600);
    $cookie_count = $_COOKIE['page_views'] + 1;
} else {
    setcookie('page_views', 1, time() + 3600);
    $cookie_count = 1;
}

if(isset($_SESSION['page_views'])) {
    $viewcount = $_SESSION['page_views']++;
} else {
    $viewcount = $_SESSION['page_views'] = 1;
}

echo "Deze pagina heb je al:  " . $viewcount." bekeken <br> voordat je de internet 
browser hebt afgesloten $cookie_count";


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
