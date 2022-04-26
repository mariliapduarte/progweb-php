<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <?php

    $data = date('d/m/Y');
    $nome = "Jorge";
    $idade = 33;
    $cidade = "São Paulo";
?>

<p>Hoje é <?=$data?>. <?=$nome?> tem <?=$idade?> anos e nasceu em <?=$cidade?>.</p>
    
</body>
</html>