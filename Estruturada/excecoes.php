<?php


try {
    $num = 0;
    if ($num == 0) {
        throw new Exception("Divisão por zero não permitida"); // Tipo erro enviado para o catch
    }

    echo 10 / $num;

} catch (Exception $e) {
 echo "Erro: " . $e->getMessage() . "<br>"; //Catch exibe o erro detectado acima
 echo "Código: " . $e->getCode() . "<br>"; 
 echo "Arquivo: " . $e->getFile(). "<br>"; 
 echo "Linha: " . $e->getLine(). "<br>"; 
}

// $e->getMessage() mostra a mensagem do erro
// $e->getCode() código do erro
// $e->getFile() arquivo onde ocorreu
// $e->getLine() linha do erro



try {
    throw new InvalidArgumentException("Valor inválido!"); //Foi definido como exceção InvalidArgumentException, ou seja, 
    //se houver algum catch com esta exceção ele será exibido, caso contrário será executada uma exceção genérica
} catch (InvalidArgumentException $e) {
    echo "Erro de argumento: " . $e->getMessage();
} catch (Exception $e) {
    echo "Erro genérico: " . $e->getMessage();
}

