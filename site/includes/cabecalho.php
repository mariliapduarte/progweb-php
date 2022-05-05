<?php
// Parte 01: Identificar o arquivo aberto
$pagina = basename($_SERVER['PHP_SELF']); /* Essa função consegue extrair o nome do arquivo aberto - $_SERVER['PHP_SELF'] - é um array pré configurado, do PHP */


// Parte 02: Condicional para avaliar qual pág está aberta e definir qual título utilizar
switch($pagina){
    case 'index.php': $titulo = "Página Inicial"; break; /* break - se for verdadeiro pare por aqui - se não tivesse o break ia ficar carregando o pag infinitamemte ou poderia dar um resultsado inesperado */
    case 'produtos.php': $titulo = "Produtos"; break;
    case 'servicos.php': $titulo = "Serviços"; break;
    default: $titulo = "Contato"; break;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$titulo?> - Site XYZ</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Serviços</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>            
            <a href="servicos.php">Serviços</a>  
            <a href="contato.php">Contato</a>  
        </nav>
    </header>
    <main>