<?php

// Variaveis tipadas dinamicamente
$nome = "Henrique";

// não pode começar com número
// hífen não é permitido


//Tipos de dados Escalares

//String
$sobrenome = 'Arroyo';

//Integer (int)
$idade = 25;

//Float(double)

$preco = 19.99;

//boolean
$ativo = true;


//Compostos

$frutas = ["maçã", "banana", "laranja"]; // array indexado
$usuario = ["nome"=>"Ana", "idade" => 22]; // array associativo



//Classe
class Pessoa {
    public $nome;
}

//Objeto
$p = new Pessoa();
$p->nome = "Carlos";

//Tipos especiais

//null -> valor vazio
$variavel = null;

//Resource -> referência a recurso externo
// $arquivo = fopen("texto.txt", "r");



//Verificar tipos
var_dump($nome); //Mostra tipo e valor
echo gettype($idade); // Mostra apenas o tipo

//Converter Tipos (Casting)

$numero = "10"; //String
$numeroInt = (int) $numero;
$numeroFloat = (float) $numero;

echo($numeroFloat);


