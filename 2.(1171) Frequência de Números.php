<?php
$num_numeros = intval(fgets(STDIN));    // Lê a quantidade de números a serem lidos
$frequencia = array();    // Inicializa um array para armazenar a frequência de cada número -array- relaciona valores a chaves
for ($i = 0; $i < $num_numeros; $i++) {   // Loop pelos números a serem lidos
  $numero = intval(fgets(STDIN));   // Lê o número atual
  if (!array_key_exists($numero, $frequencia)) {    // Se o número ainda não estiver no array de frequência, adiciona com valor 1
    $frequencia[$numero] = 1;
  }
  else {    // Caso contrário, incrementa o valor da frequência para o número atual
    $frequencia[$numero]++;
  }
}
ksort($frequencia);   // Ordena os números em ordem crescente
foreach ($frequencia as $numero => $freq) {  // para cada item (na variável $frequencia, coloque o índice na variável $numero e o valor na variável $frequencia)
  echo "$numero aparece $freq vez(es)\n";   // Imprime a frequência de cada número
}


