<?php

echo date("d/m/Y"); // (dia/mês/ano)
echo "<br>";
echo date("H:i:s"); //(Hora:minuto:segundo)
echo "<br>";
echo date("l"); // Dia da semana
echo "<br>";


$frase = "PHP é muito legal";
$palavras = explode(" ", $frase); //Separa elementos de um Array

print_r($palavras);
echo "<br>";

$nomes = ["Ana", "Bruno", "Carlos"];
$lista = implode(", ", $nomes); //junta elementos do Array em uma string

echo $lista;
echo "<br>";

$cores = ["vermelho", "azul"];
array_push($cores, "verde", "amarelo"); //Adiciona elementos ao um array
print_r($cores);
echo "<br>";

array_pop($cores); //Remove o ultimo elemento
print_r($cores);
echo "<br>";

array_shift($cores); //Remove o primeiro elemento
print_r($cores);
echo "<br>";

array_unshift($cores . "roxo"); //adiciona ao inicio
print_r($cores);
echo "<br>";

$a = ["a", "b"];
$b = ["c", "d"];
$unidos = array_merge($a, $b); // Junta Arrays
print_r($unidos);
echo "<br>";


$idade = ["Ana" => 20, "Bruno" => 25];
print_r(array_keys($idade)); // Pega as chaves
echo "<br>";

print_r(array_values($idade)); // Pega os valores


if (in_array("azul", $cores)) {
 echo "Azul está na lista!";
}




