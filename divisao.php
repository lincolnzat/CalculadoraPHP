<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
</head>
<body>
    <?php 
    $n1 = $_GET["n1"];
    $n2 = $_GET ["n2"];
    $total = $n1/$n2;
    echo "O resultado da divisão é: ". $total;    
    ?>
</body>
</html>
