<?php
$a = 10;
$b = 3;

echo"A = 10 / b = 3 <br>";
//Operadores Aritméticos
echo "Adição: ",$a + $b;
echo "<br>Subtração: ",$a - $b;
echo "<br>Multiplicação: ",$a * $b;
echo "<br>Divisão: ", $a / $b;
echo "<br>Restante: ",$a % $b;
echo "<br>Exponencial: ", $a ** $b;


//Operadores de comparação
echo("<br> ==");
var_dump($a == $b); //Igual (mesmo valor, pode ser tipos diferentes)
echo("<br> ===");
var_dump($a === $b); // Idêntico (valor e tipo iguais)
echo("<br> !=");
var_dump($a != $b); //Diferente (valor diferente)
echo("<br> !==");
var_dump($a !== $b); //Não idêntico(valor ou tipo diferente)
echo("<br> >");
var_dump($a > $b); //Maior que
echo("<br> <");
var_dump($a < $b); //Menor que
echo("<br> >=");
var_dump($a >= $b);//Maior ou igual
echo("<br> <=>");
var_dump($b <=> 10); // -1 (menor)
var_dump($b <=> 3);  // 0 (igual)
var_dump($b <=> 2);  // 1 (maior)
echo("<br>");

//Operadores logícos
$idade = 20;
$temCarteira = true;

if ($idade >=18 && $temCarteira) {
    echo "Pode dirigir!";
} else {
    echo "Não pode dirigir!";
}
