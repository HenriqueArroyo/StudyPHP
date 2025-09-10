<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span><?php
    echo "Bem vindo, " . $_COOKIE["usuario"] . "!<br>";
    echo date("H:i:s") . "<br>";
    echo $_SERVER["HTTP_USER_AGENT"] . "<br>" . $_SERVER["SERVER_NAME"];
    ?></span>
</body>
</html>