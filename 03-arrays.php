<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>
<body>
    <h1>Usando arrays no PHP</h1>
    <hr>

<h2>Array com indice númerico</h2>


    <?php
        //sintaxe com colchetes
        $alunos = ["Maria", "João", "Mônica"];

        //sintaze usando função array
        $cursos = array("HTML5", "React", "Node.js", "PHP");
    ?>

    <h2>Acessando os dados</h2>
    <ul>
        <li><?=$alunos[2]?></li>
        <li><?=$cursos[1]?></li>
    </ul>
    <hr>

    <!-- Array associativo - não tem no JS -->
    <h2>Array Associativo</h2>

    <?php

        $curso = [
            "nome" => "Programador web",
            "carga_horaria" => 240,
            "unidade" => "Penha",
            "ucs" => 5
        ]
    ?>
<p> O curso de <?=$curso["nome"]?> tem <?=$curso["carga_horaria"]?> horas, é presencial na <?=$curso["unidade"]?> e tem <?=$curso["ucs"]?> UC's</p>

    
</body>
</html>