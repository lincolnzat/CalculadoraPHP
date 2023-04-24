<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
   <?php
    echo "Estou aprendendo PHP";
    $aula = 2;
    echo "<br>";
    echo 'Aula $aula'; //Aspas simples transformam tudo em texto (string).
    echo "<br>";
    echo "Aula $aula"; //Aspas duplas permitem a concatenação com a variável.
    echo "<br>";

    /*echo "Olá,"."mundo!";
    Olá, mundo!*/

    /*Arrays
    $notas = [5,6,4,8,2,9];
    echo $notas[0]; #Exibe 5
    echo $notas[1]; #Exibe 6
    echo $notas[2]; #Exibe 4
    echo $notas[3]; #Exibe 8
    echo $notas[4]; #Exibe 2
    echo $notas[5]; #Exibe 9*/

    //Array Associativo
    /*<?php ?> 
    $php = array("Zend => "Certificação", 6 => false);
    echo $php["Zend"]; //Certificação
    echo $php[6]; // 
    */
    
    /*$vetor = [10,20,30,40,50]; //O vetor sempre armazena o mesmo tipo de informação.
    $produtos = array("nome" => "Refrigerante", 350 => 5.50, "marca" => "Coca Cola");

    echo $produtos [350];
    echo "</br>";*/
    ?>
   <form action="contato.php" method="get">
    Nome<input type="text" id="nome" name="nome">
    Senha<input type="password" id="senha" name="senha">
    <input type="submit" value="Enviar">
   </form>
    
   <br>

   <form action="https://www.google.com/search" method="get">
    <input type="text" id="q" name="q">
    <input type="submit" value="Enviar">
    </form>
    
    <br>

    <form action="calculadora.php" method="get">Soma
        <input type="text" id="n1" name="n1">+
        <input type="text" id="n2" name="n2">
        <input type="submit" value="Enviar">
    </form>

    <form action="calculadorasubt.php" method="get">Subtração
        <input type="text" id="n1" name="n1">-
        <input type="text" id="n2" name="n2">
        <input type="submit" value="Enviar">
    </form>
    
    <form action="calculadoramult.php" method="get">Multiplicação
        <input type="text" id="n1" name="n1">x
        <input type="text" id="n2" name="n2">
        <input type="submit" value="Enviar">
    </form>
    
    <form action="calculadoradiv.php" method="get">Divisão
        <input type="text" id="n1" name="n1">/
        <input type="text" id="n2" name="n2">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>
