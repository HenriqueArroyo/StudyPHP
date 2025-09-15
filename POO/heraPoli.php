<?php 

class Animal {
    public function falar(){
        return "Som genérico";
    }
}

class Cachorro extends Animal { //Classe cachorro herdou animal
    public function falar() {
        return "Au Au";
    }
}

class Gato extends Animal { //Classe gato herdou animal
    public function falar() {
        return "Miau Miau";
    }
}

$animais = [new Cachorro(), new Gato(), new Animal()];

foreach ($animais as $animal) {
    echo $animal->falar() . "<br>";
}


interface Forma { //Cria a inteface
    public function calcularArea();
}

class Quadrado implements Forma { // E implementa a interface que deve ser seguida
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo implements Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }


    public function calcularArea() {
        return pi() * ($this->raio ** 2);
    }
}

$formas = [new Quadrado(4), new Circulo(3)];

foreach ($formas as $forma) {
    echo "Área: " . $forma->calcularArea() . "<br>";
}




