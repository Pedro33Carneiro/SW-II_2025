<?php
    $boletim = array("Pedro" => "8", "Lucas" => "9", "Wes" => "8", "Tiago" => "9");
    $soma = 0;
    foreach ($boletim as $key => $value) {
        $soma += $value;
    }
    $media = $soma / count($boletim);
    echo "A média é " . $media;
?>