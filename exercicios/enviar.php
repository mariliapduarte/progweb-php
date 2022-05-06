<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Sua Solicitação</h1>
   

<?php
if( empty($_POST["produto"]) || empty($_POST["preco"]) || empty($_POST["quantidade"]) || empty($_POST["fabricante"]) ) { ?>
<p style="color: red;">Por favor, preencha todos os dados!</p>
<p><a href="04-formulario.php">Voltar.</a></p> 
<?php
}else{

$produto = $_POST["produto"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$fabricante = $_POST["fabricante"] ?? []; 
$mensagem = $_POST["mensagem"];

?>

<h2>Dados:</h2>
<ul>
    <li> Produto: <?=$produto?> </li>
    <li> Preço: <?=$preco?> </li>
    <li> Quantidade: <?=$quantidade?> </li>
    <li> Fabricante: <?=$fabricante?> </li>
    <li> Mensagem:<?=$mensagem?> </li>
   
</ul>
<?php }?>

</body>
</html>