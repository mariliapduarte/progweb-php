<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Arrays</title>
<style>

    body{
        align-content: center;
        background-color: antiquewhite;
        
    }
    h1 {
          background-color: aquamarine;
          font-family: Verdana, Geneva, Tahoma, sans-serif;
          text-align: center;

        };

    h2 {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-align: center;       
    }

    ul {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 16px;
        background-color: ivory;

    }
    div{
        margin: auto;
        padding: 15px;
        border-radius: 20px;
        box-shadow: 20px 20px 20px rgb(180, 178, 140);
    }
  

</style>
</head>

<body>  
<div> 
    <h1>Exercício 2 - Arrays</h1>
    

<?php

$pessoa1 = [
    "nome" => "Carol",
    "idade" => 21,
    "e-mail" => "carol@carol.com",
    "sexo" => "F",
];

$pessoa2 = [
    "nome" => "Angela",
    "idade" => 23,
    "e-mail" => "angela@angela.com",
    "sexo" => "F",
]
?>

<section>
<h2>Dados Pessoa 1</h2>
    <ul>
        <li><?=$pessoa1["nome"]?></li>
        <li><?=$pessoa1["idade"]?></li>
        <li><?=$pessoa1["e-mail"]?></li>
    </ul>
<hr>
</section>


<section>
    <h2>Dados Pessoa 2</h2>
    <ul>
        <li><?=$pessoa2["nome"]?></li>
        <li><?=$pessoa2["idade"]?></li>
        <li><?=$pessoa2["e-mail"]?></li>
    </ul>
<hr>
</section>

</div>
</body>
</html>