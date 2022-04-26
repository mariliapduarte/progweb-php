<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>
    <p>Variáveis e constantes são dados que ficam armazenados na memória.</p>
    <hr>

<?php
    //Variáveis
    $curso = "Programador Web";
    $ano = 2022;
    $preco = 2500.42;
    
    echo '<h2> Saída de dados completa </h2>';
    echo "<p>$curso</p>";
    echo "<div>$ano</div>";
    echo "<p><b>$preco</b></p>";

?>

<h2>Saída de dados intercalando HTML e PHP</h2>
<p> <?php echo $curso ?> </p>
<p> <?=$preco?></p> <!-- sintaxe abreviada de saída ?= substitui php e echo -->
<div>
     <p>
     Estamos estudando o curso de <?=$curso?> no ano de <?=$ano?>.
     </p>
</div>

<p><b> <?=$preco?> </b></p>

<?php
//Contantes (uso de maiúsculas é uma recomendação)

//Forma 1:
define("MEU_NOME", "Marilia");

//Forma 2:
const ESCOLA = "Senac Penha";

//Obs. Precisa concatenar (ponto .)
echo "<p>" .MEU_NOME. "</P>";
echo "<p>" .ESCOLA. "</P>";
?>

<P> <?=MEU_NOME?> </P>
<P> <?=ESCOLA?> </P>




</body>
</html>