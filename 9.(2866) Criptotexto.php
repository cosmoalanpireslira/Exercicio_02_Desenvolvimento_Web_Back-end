<?php

// Loop para ler os nomes de animais até o final do arquivo
while (!feof(STDIN)) { // A função feof() retorna True se o fim do arquivo foi atingido ou se ocorreu um erro. Caso contrário, ele retorna False.
  
  // Leitura do nome do animal
  $animal = trim(fgets(STDIN));
  
  // Inicialização da variável para contar as letras maiúsculas
  $contagem = 0;
  
  // Loop para percorrer cada letra do nome do animal
  for ($i = 0; $i < strlen($animal); $i++) { // strlen - retorna um inteiro que é o comprimento do string (o número de caracteres do string, não contando o caractere NULL). Por exemplo, o comprimento do string ``alo'' é 3
    
    // Verificação se a letra atual é maiúscula
    if (ctype_upper($animal[$i])) { // ctype_upper — Verifica se os caracteres são maiúsculos
      $contagem++; // Incrementa a contagem
    }
  }
  
  // Impressão da contagem de letras maiúsculas
  echo $contagem . "\n";
}
?>
