<?php

$idade = 18;

//Condicional
if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}

$nota = 7;

//Condicional com várias opções
if ($nota >= 9) {
    echo "<br>Excelente";
} elseif ($nota >= 7) {
    echo "<br>Bom";
} else {
    echo "<br>Precisa melhorar";
}

//Switch

$dia = 3;

switch ($dia) {
    case 1:
        echo "<br>Domingo";
        break;
        case 2:
        echo "<br>Segunda";
        break;
        case 3:
        echo "<br>Terça";
        break;
        case 4:
        echo "<br>Quarta";
        break;
        case 5:
        echo "<br>Quinta";
        break;
        case 6:
        echo "<br>Sexta";
        break;
        case 7:
        echo "<br>Sábado";
         break;
    default:
        echo "<br>Dia inválido";
        break;
    }
// Loops
$i = 1;

while ($i <= 5) {
    echo "<br>Número: $i ";
    $i++;
}

//do while
do {
    echo "<br>Contagem: $i ";
} while ($i <= 3);

//For
for ($a=1; $a <= 5 ; $a++) { 
echo "<br>Valor: $a ";
}

//Foreach
$frutas = ["Maçã", "Banana", "Laranja"];

foreach ($frutas as $fruta) {
    echo "<br>Fruta: $fruta";
}

//Array associativo/Chave-valor
$usuario = ["nome" => "Ana", "idade" => 25];

foreach ($usuario as $chave => $valor) {
    echo "<br>$chave: $valor ";
}

//Comandos Auxiliares
for ($i=1; $i <= 6 ; $i++) { 
    if ($i ==3)continue; //Pula o Numero
    if ($i == 5) break; //Para quando chega no 5
    echo $i ."<br>";
}













