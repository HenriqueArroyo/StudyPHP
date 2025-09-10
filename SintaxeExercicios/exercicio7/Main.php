<?php

$frutas = ["Vermelho", "Azul", "Amarelo", "Verde", "Laranja" ];

foreach ($frutas as $fruta) {
  echo"$fruta<br>";
}

echo "<br>";

$carro = ["Marca" => "Fiat",
          "Modelo" => "Palio",           
          "Ano" => 2014,
          "KmRodado" => 30000,
          "Cor" => "Preta"
        ];

echo "Tenho um carro " . $carro["Marca"] . " " . $carro["Modelo"] . " " . $carro["Ano"] . ", com " . $carro["KmRodado"] . " quilometros rodados e tem a cor " . $carro["Cor"];

