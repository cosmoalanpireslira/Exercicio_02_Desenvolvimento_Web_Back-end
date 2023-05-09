<?php

while (true) {
  // Lê a entrada
  $entrada = trim(fgets(STDIN));
  // Se a entrada estiver vazia, interrompe o loop
  if ($entrada === "") break;
  
  // Divide a entrada em dois valores inteiros
  $dados = explode(" ", $entrada);
  $n = intval($dados[0]); // número de mergulhadores
  $r = intval($dados[1]); // número de mergulhos realizados

  // Cria um array com todos os mergulhadores
  $mergulhadores = range(1, $n);
  
  // Lê os mergulhadores que voltaram
  $voltaram = array_map("intval", explode(" ", fgets(STDIN)));
  
  // Determina os mergulhadores que não voltaram
  $naoVoltaram = array_diff($mergulhadores, $voltaram);

  // Imprime a lista de mergulhadores que não voltaram ou o caractere '*'
  if ($naoVoltaram) {
    echo implode(" ", $naoVoltaram) . "\n";
  } else {
    echo "*\n";
  }
}

