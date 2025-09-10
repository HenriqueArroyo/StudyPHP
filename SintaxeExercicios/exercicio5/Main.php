<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hehe</title>
</head>
<body>
    <form action="processa.php" method="get">
        <label for="">Nota do aluno</label>
        <input type="number" name="nota" max="10" min="0" required> <br>
        <label for="">Dia da semana: </label>
    
        <input type="radio" name="dia" id="domingo" value="1">
        <label for="">Domingo</label>
     
        <input type="radio" name="dia" id="segunda" value="2">
        <label for="">Segunda</label>
    
        <input type="radio" name="dia" id="terca" value="3">
        <label for="">Terça</label>
       
        <input type="radio" name="dia" id="quarta" value="4">
        <label for="">Quarta</label>
       
        <input type="radio" name="dia" id="quinta" value="5">
        <label for="">Quinta</label>
 
        <input type="radio" name="dia" id="sexta" value="6">
        <label for="">Sexta</label>
  
        <input type="radio" name="dia" id="sabado" value="7">
        <label for="">Sabado</label>
<br>
        <button type="submit">Confirmar</button>
    </form>
</body>
</html>