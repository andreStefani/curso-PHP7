<?php

    /* LINGUAGEM FRACAMENTE TIPADA */

    $nome       = "André Stefani";   /* STRING */
    $nascimento = 1991;             /* NUMERO */

    
    if(isset($nome, $nascimento)){
        echo $nome ." nascido em: ". $nascimento; /* EXIBINDO VALORES NA TELA */
        echo '<hr>';
    }

    echo "<br>Tentando exibir variaveis após excluir valores</br>";
    unset($nome, $nascimento);                 /* DELETANDO VARIAVEIS */
    echo $nome ." nascido em: ". $nascimento; /* EXIBINDO VALORES NA TELA */
    echo '<hr>';                             /* EXIBINDO TAG HTML (LINHA HORIZONTAL) */
    
    /* VARIVEIS SIMPLES */
    $nome       = "Stefani";
    $site       = "www.stefani.com.br";
    $ano        = 1991;
    $salario    = 5000.98;
    $bloqueado  = false;
    /* VARIAVEIS COMPOSTAS 'ARRAY' */
    $frutas = array('abacaxi', 'laranja', 'manga');
    echo 'Fruta selecionada: '.$frutas[2]; /* EXIBINDO O VALOR CONTIDO NA POSIÇÃO 2 DO VETOR */   



?>