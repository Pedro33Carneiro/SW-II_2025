<?php

function calcularFatorial($numero) {
    if ($numero == 0) {
        return 1;
    } else {
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
}

?>