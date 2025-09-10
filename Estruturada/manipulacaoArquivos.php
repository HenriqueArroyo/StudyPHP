<?php

$arquivo = fopen("arquivo.txt", "r"); 


while(!feof($arquivo)) {
    echo fgetc($arquivo) . "<br>"; //fgets = Linha por linha / fgetc = Caractere por caractere
}

fclose($arquivo);


$conteudo = file_get_contents("arquivo.txt");

echo $conteudo;

