<?php

// Lê a quantidade de números a serem lidos
$num_numeros = intval(fgets(STDIN));

// Inicializa um array para armazenar a frequência de cada número
$frequencia = array();

// Loop pelos números a serem lidos
for ($i = 0; $i < $num_numeros; $i++) {

  // Lê o número atual
  $numero = intval(fgets(STDIN));

  // Se o número ainda não estiver no array de frequência, adiciona com valor 1
  if (!array_key_exists($numero, $frequencia)) {
    $frequencia[$numero] = 1;
  }
  // Caso contrário, incrementa o valor da frequência para o número atual
  else {
    $frequencia[$numero]++;
  }

}

// Ordena os números em ordem crescente
ksort($frequencia);

// Imprime a frequência de cada número
foreach ($frequencia as $numero => $freq) {
  echo "$numero aparece $freq vez(es)\n";
}
