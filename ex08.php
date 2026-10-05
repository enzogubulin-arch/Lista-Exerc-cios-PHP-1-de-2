<?php

function ordenarNomes($texto) {
    $nomes = explode(",", $texto);

    foreach ($nomes as $indice => $nome) {
        $nomes[$indice] = trim($nome);
    }

    sort($nomes);

    return $nomes;
}

$texto = "Carlos, Ana, Pedro, Beatriz";

$nomesOrganizados = ordenarNomes($texto);

echo "Nomes em ordem alfabetica:<br>";

foreach ($nomesOrganizados as $nome) {
    echo $nome . "<br>";
}

?>