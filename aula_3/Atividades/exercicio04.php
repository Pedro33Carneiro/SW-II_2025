<?php
    
function gerarTabuada($numero) {
    echo "Tabuada do " . $numero . ":<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
}

?>