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
    const NOME = "Jorge";
    $idade = date('Y') - 1989;
    const CIDADE = "São Paulo";
?>

<p>Hoje é <?=$data?>. <?=NOME?> tem <?=$idade?> anos e nasceu em <?=CIDADE?>.</p>
    
</body>
</html>