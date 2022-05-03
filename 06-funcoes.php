<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Funções PHP</h1>
    <hr>

    <h2>Funções Básicas (sem retorno)</h2>

    <?php
    function dadosAutor(){
        echo "<div>";
        echo "<p>Marilia</p>";
        echo date("d/m/Y");
        echo "</div>";
    }   

?>

<section>
    <p>Projeto de Site Back-end</p>
    <?=dadosAutor()?> <!-- mostra o que foi programado dentro da função -->
</section>
<hr>

    <h2>Funções com retorno de dados</h2>
    <?php
function dadosCurso(){
    return "Programador Web - 240 horas" ?>
<?php }
    ?>
    <p>O Senac Penha tem o curso de <?=dadosCurso()?></p> 
<hr>

    <h2>Funções com parâmetros/argumentos</h2>

    <?php
function soma( $valor1, $valor2 ){  /* aqui devemos definir um parametro (neste caso não é uma variavel e sim parametros ou argumentos) */
    return $valor1 + $valor2;
}
    ?>

<p> <?=soma(500, 300)?></p>
<p> <?=soma(33, 89)?></p>

<?php 
$primeiro = 2309;
$segundo = 23434;
?>

<p> <?=soma($primeiro, $segundo)?> </p>

<hr>

<?php
$preco = 1578.99;
$desconto = 75.4789;
$salarioMinimo = 1212;
$novoSalario = 2500.47;

function formataNumero(float $valor, int $casasDecimais = 2):string { /* Se precisar criar regras diferentes procurar fotos no myphotos do dia 03/05/2022 */
    return "R$ ".number_format( $valor, $casasDecimais, ",", "."); /* Para concatenar, usar o "." */

}
?>

<ul>
    <li> Preço: <?=formataNumero($preco)?> </li>
    <li> Desconto: <?=formataNumero($desconto, 4)?> </li>
    <li> Salário Mínimo: <?=formataNumero($salarioMinimo)?> </li>
    <li> Novo Salário: <?=formataNumero($novoSalario, 1)?> </li>
</ul>


<h2>Indução de tipos de dados</h2>
<?php
/* tipos de dados primitidos:
float -> num decimais
int -> num inteiros
string -> textos
 */ 
function caculaMedia($nota1, $nota2){ /* colocar antes dos parametros "int ou float ou string"  ex. int $nota1  */

    return ($nota1 + $nota2) /2;
}
?>

<p> <?=caculaMedia(10,05)?></p>
<p> <?=caculaMedia(5.5,7.7)?></p>
<p> <?=caculaMedia(9.84,3.41)?></p>

<hr>

<h2>Outras funções vistas anteriormente</h2>
    <p>Array</p>
    <p>Date</p>
    <p>Count</p>
    <p>number_format</p>

    
</body>
</html>