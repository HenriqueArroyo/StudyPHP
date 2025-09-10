<?php
//iniciar sessão (obrigatório)
session_start();

//definir valores
$_SESSION["usuario"] = "Henrique";
$_SESSION["logado"] = true;

//acessar valores
echo $_SESSION["usuario"];
echo "<br>";
echo "<br>";

// Remover valor
unset($_SESSION["usuario"]);

session_destroy();


echo $_SERVER["PHP_SELF"]. "<br>";   // Nome do arquivo atual
echo $_SERVER["SERVER_NAME"]. "<br>"; // Nome do servidor (ex: localhost)
echo $_SERVER["HTTP_USER_AGENT"]. "<br>"; // Info do navegador do usuário
echo $_SERVER["REQUEST_METHOD"];  // Método usado (GET ou POST)


echo "<br>";

setcookie("tema", "escuro", time() + 3600, "/");

if (isset($_COOKIE["tema"])) {
    echo "Tema escolhido: ". $_COOKIE["tema"];
}



