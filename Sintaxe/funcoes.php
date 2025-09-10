<?php

//Função
function saudacao() {
    echo "Olá, seja bem-vindo! <br>";
}

saudacao();

//Funções com Parâmetros
function soma($a, $b) {
    echo $a + $b;
}

soma(5,10);

// Função com valores padrões
function saudacaoDefinido($nome = "Visitante") {
    echo "<br>Olá, $nome!";
}

saudacaoDefinido("Henrique");
saudacaoDefinido();

//Função com retorno
function multiplicar($x, $y) {
    return $x * $y;
}

$resultado = multiplicar(4,5);
echo "<br>".$resultado;

//Tipagem de parametros e retorno PHP7+
function dividir(int $a, int$b):float {
    return $a/$b;
}

echo "<br>".dividir(10,2);

//Funções anonimas
$dobrar = function($n) {
    return $n * 2;
};

echo "<br>".$dobrar(5);

//Arrow Functions(PHP 7.4+)
$quadrado = fn($x) => $x * $x;

echo "<br>".$quadrado(6);











