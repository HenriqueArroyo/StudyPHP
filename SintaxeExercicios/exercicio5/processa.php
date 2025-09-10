<?php

$nota = $_GET["nota"];
$aprovado;
$dia = $_GET["dia"];


if ($nota>=7) {
    echo "Aluno foi Aprovado com a nota $nota!!";
} else if ($nota>=5&&$nota<7) {
    echo "Aluno ficou de Recuperação com a nota $nota!!";

} else {
    echo "Aluno foi Reprovado com a nota $nota!!";
}

switch ($dia) {
    case 1:
    echo "<br>Hoje é domingo!";
        break;
        case 2:
        echo "<br>Hoje é segunda!";
        break;
        case 3:
        echo "<br>Hoje é terça!";
        break;
        case 4:
        echo "<br>Hoje é quarta!";
        break;
        case 5:
        echo "<br>Hoje é quinta!";
        break;
        case 6:
        echo "<br>Hoje é sexta!";
        break;
        case 7:
        echo "<br>Hoje é sabado!";
        break;
                                                                                
    default:
       echo "<br>Dia inválido!";
        break;
}

for ($i=0; $i <= 10; $i++) { 
    echo "<br>" . $i;
}

echo "<br>Números pares até 20:";
for ($i=2; $i <=20 ; $i++) { 
    if ($i%2==0) {
        echo "<br>" . $i;
    }
}