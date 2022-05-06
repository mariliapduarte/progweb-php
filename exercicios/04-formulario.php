<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
</head>
<body>
<h1>Cadastro de Produtos</h1>
    <hr>

    <form action="enviar.php" method="post">
        <p>
            <label for="produto">Produto:</label><br>
            <input required type="text" name="produto" id="produto">
        </p>
         <p>
            <label for="preco">Preço:</label><br>
            <input required type="number" name="preco" id="preco" min="100" max="10000" step=".01">
        </p>
        <p>
            <label for="quantidade">Quantidade:</label><br>
            <input required type="number" name="quantidade" id="quantidade" min="0" max="50">
        </p>
        <div> 
            <label for="fabricante">Fabricante:</label> <br>
            <select required name="fabricante">
                <option value="vazio"></option>
                <?php require "fabricante.php" ?>
            </select>
        </div>   

        <p>
            <label for="mensagem">Mensagem:</label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
        </p>
        <button type="submit" name="enviar">Enviar dados</button>
    </form>

    
</body>
</html>












        <!-- <div> 
            <label for="fornecedores">Fornecedor:</label> <br>
            <select name="fornecedores">
                <option value="vazio"></option>
                <option value="empresa1">Fornecedor HOA</option>
                <option value="empresa2"> Fornecedor HAUX</option>
                <option value="empresa3">Forncedor AHO</option>
            </select>
        </div> -->