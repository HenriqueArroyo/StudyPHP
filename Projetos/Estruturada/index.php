<?php
require "funcoes.php";






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    
<form action="cadastrar.php" method="post">
<h2>Cadastro</h2>
<label for="">Nome</label>
<input type="text" name="nome" id="">
<br>
<label for="">Email</label>
<input type="email" name="email" id="">
<br>
<label for="">Senha</label>
<input type="password" name="senha" id="">
<br>
<button type="submit">Cadastrar</button>
</form>

<hr>
<h2>Login</h2>
<form action="logar.php" method="get">
<label for="">Email</label>
<input type="email" name="email" id="">
<br>
<label for="">Senha</label>
<input type="password" name="senha" id="">
<br>
<button type="submit">Entrar</button>
</form>

</body>
</html>