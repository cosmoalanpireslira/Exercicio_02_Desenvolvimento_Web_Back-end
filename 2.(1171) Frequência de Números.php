<?php
$num_numeros = intval(fgets(STDIN));    // Lê a quantidade de números a serem lidos
$frequencia = array();    // Inicializa um array para armazenar a frequência de cada número
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
foreach ($frequencia as $numero => $freq) {   // Imprime a frequência de cada número
  echo "$numero aparece $freq vez(es)\n";
}

/*
Explicação do código:
- A primeira linha é o início do código.
- A segunda linha lê a quantidade de números que serão lidos.
- A terceira linha inicializa um array vazio para armazenar a frequência de cada número.
- Na quarta linha o loop for começa aqui. Ele vai iterar num_numeros vezes, ou seja, uma vez para cada número que será lido.
- Dentro do loop, a quinta linha lê o número atual.
- A quinta linha verifica se o número ainda não está no array de frequência. Se não estiver, adiciona o número ao array com valor 1.
- Caso contrário, a decima linha incrementa o valor da frequência para o número atual.
- A nona linha ordena o array de frequência em ordem crescente de chaves (ou seja, em ordem crescente de números).
- O loop foreach começa na linha 14. Ele itera sobre cada número e sua frequência no array de frequência.
- Dentro do loop, a linha 15 imprime a frequência do número.
- O programa termina.
*/
