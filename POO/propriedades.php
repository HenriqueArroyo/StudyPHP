<?php

//Classe
class Carro {

    public $marca;
    public $modelo;
    public $ano;

    //método (Função dentro da classe)
    public function exibirInfo() {
        return "Carro: $this->marca $this->modelo ($this->ano)"; // This é usado para acessar as propriedades e métodos do objeto
    }
}


$carro1 = new Carro(); //Objeto Criado
$carro1->marca = "Toyota"; // Propriedade
$carro1->modelo = "Corolla";
$carro1->ano = 2020;

echo $carro1->exibirInfo();

//Exemplo Completo

class ContaBancaria {
    private $titular, $saldo;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {

        try {
            if ($valor<$this->saldo) {
                $this->saldo -= $valor;
               } else {
                throw new Exception("Saldo Insuficiente");
               }
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getTitular() {
        return $this->titular;
    }

}


$conta1 = new ContaBancaria("Henrique", 100);

$conta1->depositar(50);
$conta1->sacar(30);

echo "<br>" . $conta1->getTitular() . " tem saldo de R$" . $conta1->getSaldo();

