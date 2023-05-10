<?php
// Lê os números premiados do sorteio
$premiados = explode(' ', trim(fgets(STDIN))); //explode -  ajuda a dividir uma string em muitas strings diferentes trim - remove os espaços

// Lê os números escolhidos pelo apostador
$apostador = explode(' ', trim(fgets(STDIN)));

// Variável para armazenar o número de acertos do apostador
$numAcertos = 0;

// Percorre os números escolhidos pelo apostador
foreach ($apostador as $numero) {
  // Verifica se o número escolhido está entre os números premiados foreach - ele percorrerá todos os itens da coleção
  if (in_array($numero, $premiados)) {
    // Se o número estiver entre os premiados, incrementa o contador de acertos
    $numAcertos++;
  }
}

// Imprime a mensagem correspondente ao número de acertos do apostador
if ($numAcertos == 3) {
  echo "terno\n";
} elseif ($numAcertos == 4) {
  echo "quadra\n";
} elseif ($numAcertos == 5) {
  echo "quina\n";
} elseif ($numAcertos == 6) {
  echo "sena\n";
} else {
  echo "azar\n";
}
?>
