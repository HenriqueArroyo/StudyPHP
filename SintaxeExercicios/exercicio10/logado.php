<?php

session_start();

echo "Nome do servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Navegador do usuário: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

setcookie("tema", "escuro", time() + 3600, "/");

if (!isset($_COOKIE)) {
    echo "Tema escolhido: " + $_COOKIE["tema"];
}




?>