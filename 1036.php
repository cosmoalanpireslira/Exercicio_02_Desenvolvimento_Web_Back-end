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
