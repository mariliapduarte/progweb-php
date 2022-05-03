<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 05-loops.php -->
    <title>Loops PHP</title>
</head>
<body>
    <h1>Loops (ou laços de repetição)</h1>
    <hr>

    <h2>while (enquanto)</h2>
<?php
$i = 1;
while( $i <= 3 ){ // ou $i < 4
?>
    <p> <?=$i?> </p>
<?php
    $i++; // atualizar a variável de controle
}
?>

    <h2>do/while (faça/enquanto)</h2>

<?php
$j = 1;
do {
?>
    <div style="border: solid 1px">
        <h3> Exemplo <?=$j?> </h3>
    </div>
<?php
    $j++;
} while($j <= 5);
?>

    <h2>for (para)</h2>
<?php
    // inicialização ; condição; atualização
for( $i = 1; $i <= 3; $i++ ){ /* ++ serve para parar o looping, se não ele fica infinitamente */
?>
    <p>Valor de i é <b><?=$i?></b> </p>
<?php
}
?>

    <h2>Exercício Array e Loop</h2>
    <p>Crie um array contendo os nomes dos 12 meses do ano.</p>
    <p>Usando um loop, faça o nome dos meses aparecer em uma lista ordenada.</p>

<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

?>

<!-- Lista OL inicia e termina independentemente do PHP -->

<ol>
    <?php for($i = 0; $i < count($meses); $i++){ ?>  <!-- sempre que a variavel estiver dentro dos () é porque está sendo criada novamente -->
        <!-- Os itens da lista dependem do PHP "for" -->
    <li> <?=$meses[$i]?></li> 
    <?php } ?>
</ol>









</body>
</html>