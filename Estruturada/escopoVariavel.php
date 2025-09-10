<?php 

function escopoLocal() {
    $x = 10; // variavel local
    echo "Dentro da função: $x";
}

escopoLocal();
echo $x; // Erro: Variável não existe fora da função

$y = 5; // Variável global

function escopoGlobal() {
    global $y;
    echo "Dentro da função: $y <br>";
}

escopoGlobal();
echo "Fora da função: $y";



