<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Processamento de Dados</h1>
   

<?php
if( empty($_POST["nome"]) || empty($_POST["email"]) ){
?>
<p style="color: red;">Por favor, preencha Nome e E-mail!</p>
<!-- <p><a href="08-formulario.html">Voltar.</a></p> se eu colocar esse link, quando o usuario clicar em voltar, apaga tudo... pelo meio convencional, que é a seta de voltar, ele volta com os dados ainda preenchidos. -->

<?php
}else{


// $_POST - array interno/ nativo do PHP/ var_dump é importante fazer testes, principal de forms.
/* echo "<pre>";
var_dump($_POST);
echo "</pre>"; */

//Capturando os dados enviados a partir do forumulário

$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
/* Se existir alguma informação no array $_POST["interesses"], o que foi selecionado fica na variável. Caso contrário, deixe um array vazio na variável ?? [] - explicando: "??" é um operador de coalescencia nula e [] o array vazio*/
$interesses = $_POST["interesses"] ?? []; 
$informativos = $_POST["informativos"];
$mensagem = $_POST["mensagem"];

?>

<h2>Dados:</h2>
<ul>
    <li> Nome: <?=$nome?> </li>
    <li> E-mail <?=$email?> </li>
    <li> Idade: <?=$idade?> </li>
    <li> Interesses:

<!-- Aqui usamos o operador de negação ! para inverter a lógica da funcão "empty" -->
    <?php if(!empty ($interesses)) { ?> <!-- se $interesse NÃO ! estiver vazio, então faça tudo abaixo... -->
        <ul>
        <?php foreach ($interesses as $interesse){ ?>
            <li> <?=$interesse?></li>
            <?php } ?>
        </ul>

     <?php   }?>
    </li>
    <li> Informativos: <?=$informativos?> </li>
    <li> Mensagem:<?=$mensagem?> </li>
   
</ul>
<?php }?>

</body>
</html>