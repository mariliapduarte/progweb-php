<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>

<h1>Exercício 3 - Condicionais</h1>
<?php

$salario = 1001;

if ( $salario < 500 ) {
    $novo = $salario * 1.15;
} elseif ( $salario <= 1000){
    $novo = $salario * 1.10;
} else {
    $novo = $salario * 1.05;
}



?>

<!-- 
    number_format(
        valor,
        quantidade de casas decimais,
        "separador de casa decimal",
        "separador de milhar"
    ) 
-->
<p> R$ <?=number_format($salario,2,",",".")?> 
    e R$ <?=number_format($novo, 2, ",", ".")?>
</p>

    
</body>
</html>