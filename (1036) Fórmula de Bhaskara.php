<?php
list($a, $b, $c) = explode(" ", readline()); // lê os valores de A, B e C
$delta = ($b ** 2) - (4 * $a * $c); // calcula o delta
if ($delta < 0 || $a == 0) { // verifica se a equação tem solução real
    echo "Impossivel calcular\n"; 
} else { // calcula as raízes da equação
    $r1 = (-$b + sqrt($delta)) / (2 * $a);
    $r2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "R1 = " . number_format($r1, 5, '.', '') . "\n"; // exibe as raízes formatadas com duas casas decimais
    echo "R2 = " . number_format($r2, 5, '.', '') . "\n";
}

/*
Explicação do código:
- A primeira linha é o início do código.
- A segunda linha lê os coeficientes a, b e c da equação de segundo grau. A função fgets(STDIN) lê uma linha da entrada padrão (no caso, o teclado) e a função sscanf extrai os três valores da linha lida. O formato %f indica que os valores são do tipo float.
- A terceira linha calcula o delta da equação, utilizando a fórmula delta = b^2 - 4ac.
- A quarta linha verifica se a equação possui raízes reais. Se a for igual a zero ou delta for menor que zero, a equação não possui raízes reais e o programa imprime "Impossivel calcular".
Caso contrário, a sétima e a oitava linha calculam as duas raízes da equação, utilizando a fórmula x = (-b ± sqrt(delta)) / 2a.
- As linhas nove e dez imprimem as raízes com 5 casas decimais utilizando a função printf, que permite formatar a saída. A string "%.5f" indica que o valor a ser impresso é um float com 5 casas decimais.
- O programa termina.
Note que a solução utiliza a fórmula de Bhaskara para encontrar as raízes da equação de segundo grau. A verificação se a equação possui raízes reais é necessária porque a raiz quadrada de um número negativo não é um número real.
*/
