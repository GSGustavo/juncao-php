<?php

$mensagem = "";

$nomes = ["Maça", 'Uva', "Laranja"];

$juncoes = [];
if (count($nomes) > 0) {
    if (count($nomes) == 2) {
        $juncoes[] = " e ";
    } else {
        for ($i = 1; $i < count($nomes) - 1; $i++) {
            $juncoes[] = ", ";
        }
        $juncoes[] = " e ";
    }

    $count = 0;
    foreach ($nomes as $farmacia) {
        $mensagem .= $farmacia . ($count + 1 == count($nomes) ? "" : $juncoes[$count]);
        $count++;
    }
}

echo $mensagem;
