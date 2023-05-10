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


