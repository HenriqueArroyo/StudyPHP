<?php 

//Array Indexo começa no 0
$frutas = ["Maçã", "Banana", "Laranja"];

echo $frutas[0];
echo "<br>".$frutas[1];
echo "<br>--------------";
//Adicionando um novo valor
$frutas[] = "Uva";

//Percorrendo com foreach
foreach ($frutas as $f) {
    echo "<br>". $f  ;
}
echo "<br>--------------";

//Array associativos
$usuario = [
    "nome" => "Ana",
    "idade" => 25,
    "cidade" => "São Paulo"
];

echo "<br>".$usuario["nome"];
echo "<br>".$usuario["idade"];
echo "<br>--------------";

//percorrendo
foreach ($usuario as $key => $value) {
    echo "<br>$key: $value";
}

echo "<br>--------------";
//Array Multidimensionais
$produtos = [
    ["nome" => "Notebook", "preco" => 3500],
    ["nome" => "Mouse", "preco" => 80],
    ["nome" => "Teclado", "preco" => 150]
];

echo "<br>".$produtos[0]["nome"];
echo "<br>".$produtos[1]["preco"];

// percorrendo
foreach ($produtos as $item) {
    echo "<br>" .$item["nome"] . " - R$ ". $item["preco"];
}

// Funções para Arrays

$numeros = [1,2,3,4,5];

echo "<br>".count($numeros); //Quantidade de elementos
echo "<br>";
print_r(array_keys($usuario)); //Mostra as chaves do array associativo
echo "<br>";
print_r(array_values($usuario)); //Mostra os valores
echo "<br>";
sort($numeros); //Ordena crescente
print_r($numeros);
rsort($numeros); //ordena decrescente
echo "<br>";
print_r($numeros);


