<?php
$entrada = fgets(STDIN);        // irá ler a partir do fluxo até que o final da linha seja alcançado nesse caso os coeficientes a, b e c da equação de segundo grau -stdin- fornece acesso à entrada padrão do processo (que pode ser o teclado ou um pipe, por exemplo)
list($a, $b, $c) = sscanf($entrada, "%f %f %f");    //-list- é usada para atribuir valores de array a várias variáveis ao mesmo tempo, nesse caso 3 variaveis a,b e c -sscanf-  lê da string str e interpreta ela de acordo com o formato especificado
$delta = pow($b, 2) - 4 * $a * $c;      //calculo do delta -pow- retorna a base elevada ao expoente, nesse caso 2 - ao quadrado

if ($a == 0 || $delta < 0) {        // Verifica se a equação possui raízes reais, isto é com a diferente de 0 e delta maior ou igual a zero 
  echo "Impossivel calcular\n";  // se delta for negativo imprime: impossivel calcular 
} 
else {
  $x1 = (-$b + sqrt($delta)) / (2 * $a);        // Calcula as duas raízes da equação -sqrt- calcula raiz quadrada - nesse caso a primeira raiz 
  $x2 = (-$b - sqrt($delta)) / (2 * $a);        // calcula a segunda raiz real 
  printf("R1 = %.5f\n", $x1);        // Imprime a raiz x1 com 5 casas decimais -"R1 = %.5f/n"- é o tipo de formatação, nesse caso R1 = valor de x1 com cinco casas decimais  
  printf("R2 = %.5f\n", $x2);         // Imprime a raiz x2 com 5 casas decimais nesse caso a segunda raiz 
}



