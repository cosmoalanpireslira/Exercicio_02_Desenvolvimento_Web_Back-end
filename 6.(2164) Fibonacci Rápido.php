<?php

// Lê o valor de entrada correspondente ao número de dias passados desde o início da observação
$n = intval(fgets(STDIN)); // intval - Retorna o valor inteiro da variável.

// Calcula o valor de Fibonacci correspondente ao dia informado
$fib = (pow((1 + sqrt(5)) / 2, $n) - pow((1 - sqrt(5)) / 2, $n)) / sqrt(5);

// Imprime o valor de Fibonacci correspondente ao dia informado, arredondado para duas casas decimais
echo number_format($fib, 1, '.', '') . "\n";

?>
