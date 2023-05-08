<?php

while (true) {
  $entrada = explode(" ", fgets(STDIN));    // Lê o número de pessoas que foram à festa e o número de pessoas que faltaram
  $n = intval($entrada[0]);
  $r = intval($entrada[1]);

  $presenca = array_fill(1, $n, 0);   // Cria um array com o número de presenças e inicializa com zero

  $pessoas = explode(" ", fgets(STDIN));     // Lê os números das pessoas que foram à festa
  foreach ($pessoas as $pessoa) {
    $presenca[intval($pessoa)] = 1;
  }

  $faltantes = "";
  
  for ($i = 1; $i <= $n; $i++) {     // Verifica quais pessoas faltaram à festa
    if ($presenca[$i] == 0) {
      $faltantes .= $i . " ";
    }
  }

  if ($faltantes == "") {   // Imprime os números das pessoas que faltaram ou a mensagem "sim" se todas foram à festa
    echo "sim\n";
  } else {
    echo trim($faltantes) . "\n";
  }
}

/*
- O loop while começa na linha 3 e será executado indefinidamente (até que seja interrompido por um comando break).
- A linha 4 lê os valores de n e r (o número de pessoas que foram à festa e o número de pessoas que faltaram)
utilizando a função fgets e a função explode para separar os valores em um array.
- A linha 8 cria um array chamado $presenca com o número de presenças e inicializa todos os elementos com zero utilizando a função array_fill.
- A linha 17 lê os números das pessoas que foram à festa utilizando a função fgets e o loop foreach 
para percorrer o array de pessoas e marcar as presenças no array $presenca.
- A linha 23 verificam quais pessoas faltaram à festa, utilizando um loop for e um condicional if.
As pessoas que faltaram são adicionadas à string $faltantes.
- A linha 26 imprime a mensagem "sim" se todas as pessoas foram à festa, ou os números das pessoas que faltaram, 
utilizando a função echo e a concatenação de strings. A função trim é utilizada para remover o espaço em branco no final da string $faltantes.
- O loop retorna à linha 3 para ler os valores de n e r do próximo caso de teste.

Obs.: a solução utiliza um loop while infinito para ler vários casos de teste. 
A leitura de cada caso de teste é feita utilizando as funções fgets e explode. 
Em seguida, é criado um array para armazenar as presenças e marcadas as presenças utilizando um loop foreach. 
Finalmente, é verificado quais pessoas faltaram e o resultado é impresso utilizando a função echo e a concatenação de strings.
*/
