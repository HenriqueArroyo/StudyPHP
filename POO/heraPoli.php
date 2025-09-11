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

