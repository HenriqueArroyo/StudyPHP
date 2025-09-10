<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$disponivel = true;

if (file_exists("usuarios.txt")) {
    $linhas = file("usuarios.txt");

    foreach ($linhas as $linha) {
        $dados = explode(";", trim($linha));

        if (isset($dados[1])&&$dados[1] === $email) {
            header('Location: index.php?emailjaexiste');
            $disponivel = false;
            break;
        } 
           
        
    
    }
} 


if ($disponivel) {
    $banco = fopen("usuarios.txt", "a");

    fwrite($banco, "$nome;$email;$senha;\n");
    fclose($banco);
    
    
    
    header('Location: index.php');
}

