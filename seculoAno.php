<?php
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
    $ex1 = seculoAno(1901);
    printf("O ano de 1901 é o Século $ex1.\n");
    $ex2 = seculoAno(710);
    printf("O ano de 710 é o Século $ex2.\n");
    $ex3 = seculoAno(1335);
    printf("O ano de 1335 é o Século $ex3.\n");
    $ex4 = seculoAno(-300);
    printf("O ano de 300 A.C. é o Século $ex4.\n");
?>