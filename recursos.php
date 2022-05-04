<?php
const ESCOLA = "Senac";
$curso = "Programador Web";
$tecnologias = ["HTML", "CSS", "Javascript", "PHP"];

function verificaIdade(int $valor):string { /*  :strings - indica qual o tipo de retorno da função, ou seja, retorna texta */
    if ($valor >=18) {
        return "maior";
    } else {
        return "menor";
    }
}


// arquivo que só tenha PHP não precisa ser fechado
