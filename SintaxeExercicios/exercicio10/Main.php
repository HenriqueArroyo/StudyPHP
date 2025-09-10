<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $_SESSION['usuario'] = $nome;
    header("Location: logado.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <form action="logado.php" method="post">
        <label for="">Nome: </label>
        <input type="text" name="nome" id="">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>