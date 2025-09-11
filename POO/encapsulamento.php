<?php

    // Modificadores
    // Public é acessível de qualquer lugar
    // Private é apenas dentro da própria classe
    // Protected é acessível dentro da classe e em classes herdadas

class Exemplo {
    public $nome = "Henrique";
    private $senha = "1234";


    public function mostrarSenha(){
        return $this->senha;
    }

}
$obj = new Exemplo();
echo $obj->nome;
// echo $obj->senha; não pode ser acessado diretamente
echo $obj->mostrarSenha(); // funciona


class Pai {
    protected $segredo = "Informação protegida";
}

class Filho extends Pai {
    public function revelar() {
        return $this->segredo;
    }
}

$obj = new Filho();
echo $obj->revelar();

//echo $obj->segredo; não pode direto de fora



