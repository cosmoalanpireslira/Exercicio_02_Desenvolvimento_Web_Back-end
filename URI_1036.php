<?php

// lê os valores de A, B e C
list($a, $b, $c) = explode(" ", readline());

// calcula o delta
$delta = ($b ** 2) - (4 * $a * $c);

// verifica se a equação tem solução real
if ($delta < 0 || $a == 0) {
    echo "Impossivel calcular\n";
} else {
    // calcula as raízes da equação
    $r1 = (-$b + sqrt($delta)) / (2 * $a);
    $r2 = (-$b - sqrt($delta)) / (2 * $a);

    // exibe as raízes formatadas com duas casas decimais
    echo "R1 = " . number_format($r1, 5, '.', '') . "\n";
    echo "R2 = " . number_format($r2, 5, '.', '') . "\n";
}
