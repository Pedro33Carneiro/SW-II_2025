<?php
    $pessoa = array("nome" => "Pedro", "idade" => "17", "cidade" => "Ribeirão Pires");

    $pessoa["profissao"] = "Estudante";

    $amigos = ["Lucas", "Tiago", "Wes"];

    $dados = array_merge($pessoa, $amigos);
    print_r($dados);
?>