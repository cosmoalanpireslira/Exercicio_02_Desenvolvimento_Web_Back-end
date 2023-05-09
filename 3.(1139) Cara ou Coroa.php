<?php

while (true) {    
  $n = intval(fgets(STDIN)); // Lê o número de jogadas como um valor inteiro
  if ($n == 0) {      // Se o número de jogadas for zero, encerra o loop
    break;
  }
 
  $jogadas = explode(" ", fgets(STDIN));     // Lê as jogadas

  $mary = 0;        // Conta o número de jogadas de cada tipo
  $john = 0;
  foreach ($jogadas as $jogada) { //foreach fornece uma maneira fácil de iterar sobre arrays
    if ($jogada == 0) {
      $mary++;
    } else {
      $john++;
    }
  }

  echo "Mary won " . $mary . " times and John won " . $john . " times\n";   // Imprime o número de jogadas da Mary e do John
}

/*
O loop while começa na linha 3 e será executado indefinidamente (até que seja interrompido por um comando break na linha 6).
A linha 3 lê o número de jogadas do jogo, utilizando a função fgets(STDIN) e convertendo o valor lido para um inteiro utilizando a função intval.
A linha 4 verifica se o número de jogadas é igual a zero. Se for, o loop é interrompido com o comando break.
A linha 9 lê as jogadas do jogo utilizando a função fgets(STDIN) e a função explode para separar as jogadas em um array.
As linhas 11 a 12 contam o número de jogadas de cada tipo (0 para Mary, 1 para John) utilizando um loop foreach e um condicional if.
A linha 21 imprime o número de jogadas da Mary e do John utilizando a função echo e a concatenação de strings.
O loop retorna à linha 3 para ler o próximo número de jogadas.
Note que a solução utiliza um loop while infinito para ler vários conjuntos de jogadas. 
A leitura de cada conjunto de jogadas é feita utilizando as funções fgets e explode. 
Em seguida, é feita a contagem do número de jogadas de cada tipo utilizando um loop foreach e um condicional if. 
Finalmente, o resultado é impresso utilizando a função echo e a concatenação de strings.
*/
