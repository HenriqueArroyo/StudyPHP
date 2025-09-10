<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];


$soma = $num1 + $num2;
$subtracao = $num1 - $num2;
$multiplicacao = $num1 * $num2;
$divisao = $num1 / $num2;
$par; 

if ($num1%2==0 and $num2%2==0) {
    $par = "Verdadeiro";
} else {
    $par = "Falso";
}

if ($num1>$num2) {
 echo "Soma: $soma <br>Subtração: $subtracao<br>Multiplicação: $multiplicacao<br>Divisão: $divisao<br>Ambos são pares: $par<br>$num1 é maior que $num2";
} else if ($num1==$num2) {
    echo "Soma: $soma <br>Subtração: $subtracao<br>Multiplicação: $multiplicacao<br>Divisão: $divisao<br>Ambos são pares: $par<br>$num1 é igual $num2";
} else {
    echo "Soma: $soma <br>Subtração: $subtracao<br>Multiplicação: $multiplicacao<br>Divisão: $divisao<br>Ambos são pares: $par<br>$num2 é maior que $num1";
}