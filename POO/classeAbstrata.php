<?php

abstract class ContaBancaria {
    protected $titular;
    protected $saldo;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    abstract public function sacar($valor); // deve ser implementado nas subclasses

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

class ContaCorrente extends ContaBancaria {
    public function sacar($valor) {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente na conta corrente<br>";
        }
    }
}

class ContaPoupanca extends ContaBancaria {
    public function sacar($valor) {
        if ($this->saldo > $valor + 5) {
            $this->saldo -= $valor+5;
        } else {
            echo "Saldo insuficiente na conta poupança<br>";
        }
    }
}

$cc = new ContaCorrente("Henrique", 200);
$cp = new ContaPoupanca("Marcos", 200);

$cc->sacar(50);
$cp->sacar(50);

echo "Saldo CC: ". $cc->getSaldo() . "<br>";
echo "Saldo CP: ". $cp->getSaldo() . "<br>";
