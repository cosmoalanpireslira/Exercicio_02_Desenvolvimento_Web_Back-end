<?php

while (true) {
  // Lê a entrada
  $entrada = trim(fgets(STDIN)); // O método trim() remove os espaços em branco (whitespaces) do início e/ou fim de um texto
  // Se a entrada for igual a zero, encerra o programa
  if ($entrada == 0) break;

  $somaDigitos = 0;
  // Percorre os dígitos do número e calcula a soma
  
  for ($i = 0; $i < strlen($entrada); $i++) { // o strlen() estritamente calcula o tamanho de uma string
    $somaDigitos += intval($entrada[$i]); //intval() é uma função embutida no PHP que retorna o valor inteiro de uma variável
  }
  
  // Verifica se a soma é divisível por 3
  if ($somaDigitos % 3 == 0) {
    echo "$entrada sim\n"; // se for divisivel imprime sim
  } else {
    echo "$entrada nao\n"; // se não for divisivel imprime não
  }
} 

?>
