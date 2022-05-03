<?php
    // 1 - Função SeculoAno($ano)
    // Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.
    
    // Exemplos para teste:
    
    // Ano 1905 = século 20
    // Ano 1700 = século 17

    function seculoAno($ano){
        // Inicializando a variável que vai guardar o século.
        $seculo = 0;
        // Então dividimos o ano por 100 para saber quantos séculos podemos ter.
        $divisao = $ano / 100;
        // Se a divisão não tiver resto, já temos o nosso século, se tiver adicionamos 1 ao século.
        // Usei o operador ternário pra manter a lógica em uma linha símples.
        $ano % 100 == 0 ? $seculo = $divisao : $seculo = $divisao + 1;
        // Aqui checamos se o ano é negativo e colocamos " A.C." no século se for.
        // Usei o if/else pra ter melhor visualização.
        if($seculo < 0){
            return abs(number_format($seculo)) . " A.C.";
        }else{
            return number_format($seculo);
        }
    }
    // Exemplos
    $ex0 = seculoAno(1900);
    printf("O ano de 1900 é o Século $ex0.\n");
    $ex1 = seculoAno(1905);
    printf("O ano de 1905 é o Século $ex1.\n");
    $ex2 = seculoAno(1700);
    printf("O ano de 1700 é o Século $ex2.\n");
    $ex3 = seculoAno(1335);
    printf("O ano de 1335 é o Século $ex3.\n");
    $ex4 = seculoAno(-300);
    printf("O ano de 300 A.C. é o Século $ex4.\n");
?>