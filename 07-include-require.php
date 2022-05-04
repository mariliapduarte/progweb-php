<?php require "recursos.php" ?> <!-- Separando o HTML do PHP - pode ser colocado em qq lugar, porém é recomndado colocar first of all -->
<!-- require (+usado para manipulação de dados e funcionalidades/segurança)- pede algum essencial, super importante para minha aplicação / o include é um pouco mais permissivo, caso algo dê errado.-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>    
<hr>

    <h2> <?=ESCOLA?></h2>
    <p>Estamos no curso de <?=$curso?></p>

<ol>
    <?php foreach($tecnologias as $tecnologia){ ?> 
        <li> <?=$tecnologia?> </li>    
    <?php }     ?>
</ol>
  
<p> Chapolin Colorado tem 20 anos e é <b><?=verificaIdade(20)?></b> de idade.</p>
<p>Chaves tem 8 anos e é <b><?=verificaIdade(8)?></b> de idade.</p>

<hr>
<article>
    <h2>Conteúdo Qualquer...</h2>
    <?php include "textos.php"?> <!-- Aqui posso usar o include/require para incluir até mesmo conteúde de outras páginas, de outros autores -->
</article>

<h2>Qualquer outra coisa...</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias tempore ab debitis! Dolor, nam dicta.</p>


</body>
</html>