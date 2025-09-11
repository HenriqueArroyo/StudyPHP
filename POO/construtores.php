<?php

class ConexaoBD {
    private $conexao;

    public function __construct() { //Inicializa o Objeto
        $this->conexao = "Conexão aberta";
        echo "Banco conectado!<br>";
    }

    public function __destruct() { //Encerra o objeto
        echo "Conexão encerrada! <br>";
    }

}

$con = new ConexaoBD();
echo "Executando operações no banco...<br>";
