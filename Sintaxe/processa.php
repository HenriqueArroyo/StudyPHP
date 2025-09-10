<?php

// echo "Você pesquisou: " . $_GET["busca"]; //GET coleta informações de um formulário GET

if (isset($_POST["nome"])) { //Verifica se a variável foi enviada
    echo "Nome: ". $_POST["nome"]; //POST coleta informações de um formulário POST
}
echo "<br> Senha: ". $_REQUEST["senha"]; //REQUEST coleta informações de GET e POST (Não recomendado)


$nome = htmlspecialchars($_POST["nome"]); //Impede que códigos especiais afetem o html