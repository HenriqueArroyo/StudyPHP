<?php

function somar($a, $b) {
    return $a + $b;
}

function ehPar($n) {
    if ($n%2==0) {
       echo "<br>$n é Par!";
    } else {
        echo "<br>$n é Impar!";
    }
}

function saudacao($nome) {
    echo "Olá, ". $nome . "!";
}

echo somar(15, 20);
echo "<br>".ehPar(10);
echo "<br>" . saudacao("Henrique");

