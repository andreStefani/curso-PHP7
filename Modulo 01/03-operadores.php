<?php

    $nome = 'Stefani'; /* Atribuição */
    $nomeCompleto = $nome.'Stefani';/* Concatenação */

    echo "$nome<br>";
    echo "$nomeCompleto<br>";

    echo '<br>';
    $valorTotal = 0;
    $valorTotal += 100;
    $valorTotal += 200;/* incrementando valor dentro da propria variavel */
    echo "$valorTotal<br>";

    $valorTotal -= 50;
    $valorTotal -= 25;/* decrementando valor dentro da propria variavel */
    echo "$valorTotal<br>";

    $a = 10;
    $b = 5;

    /* OPERAÇÕES MATEMATICAS */
    echo "<br>$a + $b = ".($a+$b);
    echo "<br>$a - $b = ".($a-$b);
    echo "<br>$a * $b = ".($a*$b);
    echo "<br>$a / $b = ".($a/$b);

    echo "<br>";
    echo "<br>";
    /* operações comparativas */
    echo " => $a > $b".var_dump($a>$b)."<br>";
    echo " => $a < $b".var_dump($a<$b)."<br>";
    echo " => $a == $b".var_dump($a==$b)."<br>";
    echo " => $a === $b".var_dump($a===$b)."<br>";/* IGUALDADE DE IDENTIDADE 'VALOR E TIPO' */
    echo " => $a % $b".var_dump($a%$b)."<br>";
    echo " => $a != $b".var_dump($a!=$b)."<br>";/* DIFERENTE */

    echo "<br>";
    echo " => $a <=> $b".var_dump($a<=>$b)."<br>";/* SPACE SHIP TESTE SE VALOR1 É MAIOR = OU MENOR DOQUE VALOR2 */
    echo " => $b <=> $a".var_dump($b<=>$a)."<br>";/* SPACE SHIP TESTE SE VALOR1 É MAIOR = OU MENOR DOQUE VALOR2 */
    echo " => 10 <=> 10".var_dump(10<=>10)."<br>";/* SPACE SHIP TESTE SE VALOR1 É MAIOR = OU MENOR DOQUE VALOR2 */


?>