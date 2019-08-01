<?php

    $nome = "Stefani";

    function teste()
    {
        // echo $nome; /* variavel não existe no ambiente local */
        global $nome; /* chamando variavel global para dentro da função local */
        echo $nome;
    }


    teste();
?>