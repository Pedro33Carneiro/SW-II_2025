<?php

function gerarArrayAleatorio() {
    $arrayAleatorio = array();
    for ($i = 0; $i < 10; $i++) {
        $arrayAleatorio[] = rand(1, 100);
    }
    return $arrayAleatorio;
}

?>