<?php
while (($line = fgets(STDIN)) !== false) {  // Lê as entradas até o final do arquivo
    $input = explode(" ", $line);  // Separa as entradas em um array de strings
    $result = ($input[0] * $input[1]) / ($input[2] - $input[0] + $input[3]);  // Calcula o resultado da fórmula
    echo intval($result) . "\n";  // Imprime o resultado como um número inteiro
}
?>

