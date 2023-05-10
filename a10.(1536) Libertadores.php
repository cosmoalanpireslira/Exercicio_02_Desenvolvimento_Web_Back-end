<?php

// Loop para ler os nomes de animais até o final do arquivo
while (!feof(STDIN)) { //!feof - Se o ponteiro de arquivo passado não for valido você pode ter um loop infinito, porque EOF irá falhar em retornar TRUE
  
  // Leitura do nome do animal
  $animal = trim(fgets(STDIN));
  
  // Inicialização da variável para contar as letras maiúsculas
  $contagem = 0;
  
  // Loop para percorrer cada letra do nome do animal
  for ($i = 0; $i < strlen($animal); $i++) {
    
    // Verificação se a letra atual é maiúscula
    if (ctype_upper($animal[$i])) {
      $contagem++; // Incrementa a contagem
    }
  }
  
  // Impressão da contagem de letras maiúsculas
  echo $contagem . "\n";
}
?>
