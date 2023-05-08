<?php

while (true) {     // Lê o número de mergulhadores e o número de mergulhadores que retornaram
  $entrada = explode(" ", fgets(STDIN));
  $n = intval($entrada[0]);
  $r = intval($entrada[1]);

  $mergulhadores = array_fill(1, $n, 0);    // Cria um array com o número de mergulhadores e inicializa com zero

  $retornaram = explode(" ", fgets(STDIN));    // Lê os números dos mergulhadores que retornaram
  foreach ($retornaram as $mergulhador) {
    $mergulhadores[intval($mergulhador)] = 1;
  }

  $nao_retornaram = "";   // Verifica quais mergulhadores não retornaram
  for ($i = 1; $i <= $n; $i++) {
    if ($mergulhadores[$i] == 0) {
      $nao_retornaram .= $i . " ";
    }
  }

  if ($nao_retornaram == "") {    // Imprime os números dos mergulhadores que não retornaram ou a mensagem "todos voltaram" se todos retornaram
    echo "Todos voltaram!\n";
  } else {
    echo trim($nao_retornaram) . "\n";
  }
}

/*
- O loop while começa na linha 3 e será executado indefinidamente (até que seja interrompido por um comando break).
- A linha 5 e 6 lê os valores de n e r (o número de mergulhadores e o número de mergulhadores que retornaram) 
utilizando a função fgets e a função explode para separar os valores em um array.
- A linha 8 cria um array chamado $mergulhadores com o número de mergulhadores e inicializa todos os elementos com zero utilizando a função array_fill.
- A linhaa 10 lê os números dos mergulhadores que retornaram utilizando a função fgets e o loop foreach 
para percorrer o array de mergulhadores e marcar os que retornaram no array $mergulhadores.
- As linhas 15 a 18 verificam quais mergulhadores não retornaram, utilizando um loop for e um condicional if.
Os mergulhadores que não retornaram são adicionados à string $nao_retornaram.
- A linha 23 imprime a mensagem "Todos voltaram!" se todos os mergulhadores retornaram, ou os números dos mergulhadores que não retornaram, 
utilizando a função echo e a concatenação de strings. A função trim é utilizada para remover o espaço em branco no final da string $nao_retornaram.
- O loop retorna à linha 3 para ler os valores de n e r do próximo caso de teste.

Obs.: a solução utiliza um loop while infinito para ler vários casos de teste. 
A leitura de cada caso de teste é feita utilizando as funções fgets e explode.
Em seguida, é criado um array para armazenar os mergulhadores e marcados os que retornaram utilizando um loop foreach. Finalmente, é verificado
*/

