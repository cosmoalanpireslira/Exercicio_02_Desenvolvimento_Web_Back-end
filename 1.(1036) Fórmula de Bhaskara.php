<?php
$entrada = fgets(STDIN);        // irá ler a partir do fluxo até que o final da linha seja alcançado nesse caso os coeficientes a, b e c da equação de segundo grau
list($a, $b, $c) = sscanf($entrada, "%f %f %f");    //-list- é usada para atribuir valores de array a várias variáveis ao mesmo tempo, nesse caso 3 variaveis a,b e c 
$delta = pow($b, 2) - 4 * $a * $c;      //calculo do delta -pow- retorna a base elevada ao expoente, nesse caso 2 - ao quadrado

if ($a == 0 || $delta < 0) {        // Verifica se a equação possui raízes reais, isto é com a diferente de 0 e delta maior ou igual a zero 
  echo "Impossivel calcular\n";
} 
else {
  $x1 = (-$b + sqrt($delta)) / (2 * $a);        // Calcula as duas raízes da equação -sqrt- calcula raiz quadrada - nesse caso a primeira raiz 
  $x2 = (-$b - sqrt($delta)) / (2 * $a);        // calcula a segunda raiz real 
  printf("R1 = %.5f\n", $x1);        // Imprime a raiz x1 com 5 casas decimais -"R1 = %.5f/n"- é o tipo de formatação, nesse caso R1 = valor de x1 com cinco casas decimais  
  printf("R2 = %.5f\n", $x2);         // Imprime a raiz x2 com 5 casas decimais
}

/*
A linha 2 lê os coeficientes a, b e c da equação de segundo grau. A função fgets(STDIN) lê uma linha da entrada padrão (no caso, o teclado)
A linha 3 a função sscanf extrai os três valores da linha lida. O formato %f indica que os valores são do tipo float.
A linha 4 calcula o delta da equação, utilizando a fórmula delta = b^2 - 4ac.
A linha 6 verifica se a equação possui raízes reais. Se a for igual a zero ou delta for menor que zero, a equação não possui raízes reais e o programa imprime "Impossivel calcular".
Caso contrário, a linha 10 e a linha 11 calculam as duas raízes da equação, utilizando a fórmula x = (-b ± sqrt(delta)) / 2a.
As linhas 12 e 13 imprimem as raízes com 5 casas decimais utilizando a função printf, que permite formatar a saída. A string "%.5f" indica que o valor a ser impresso é um float com 5 casas decimais.
O programa termina.
Obs.: a solução utiliza a fórmula de Bhaskara para encontrar as raízes da equação de segundo grau. 
A verificação se a equação possui raízes reais é necessária porque a raiz quadrada de um número negativo não é um número real.
*/
