<?php
$nome = "Henrique";
$sobrenome = "Arroyo";

echo 'Olá $nome'; // Interpreta literalmente
echo "Olá $nome"; // Permite varias interpretações

//Concatenação de Strings
echo $nome . " " . $sobrenome;
echo "Bem-vindo. $nome $sobrenome";

//Funções úteis 
echo strlen("PHP"); // Conta o tamanho da String
echo mb_strlen("Olá"); // Conta o tamanho, porém suporta acentos, UTF-8 

echo strtoupper("php"); // PHP
echo strtolower("PHP"); // php
echo ucfirst("php"); // Php
echo ucwords("ola mundo"); // Ola Mundo

//Busca e Substituição
echo strpos("Olá mundo", "mundo"); // 4 (Posição inicial) //Indica aonde começa
echo str_replace("mundo", "PHP", "Olá mundo"); // Olá PHP  // Substitui

//Substrings
echo substr("Programação", 0, 7); //Program

//Remover espaços
echo trim("  PHP  "); //PHP//Retira os espaços

//Quebrar e juntar strings
$texto = "maçã,banana,laranja";
$frutas = explode(",", $texto); // Vira Array
print_r($frutas);

$lista = implode(" - ", $frutas); // Junta em String
echo $lista; // Maçã - banana - laranja

//Comparação de Strings
var_dump("php" == "PHP"); // False
var_dump(strcasecmp("php", "PHP"));




