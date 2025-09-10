<?php 
//dentro do PHP
echo"Olá, mundo!"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo</h1>
    <p>
        <?php echo "Hoje é ". date("d/m/y"); ?>
    </p>
    <!-- ou -->
    <p>
        <?= date("d/m/Y") ?>
    </p>
</body>
</html>

<!-- Nesse exemplo, o PHP processa a data, mas todo o resto é HTML puro. -->



