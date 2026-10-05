<?php

function calcularMedia($notas) {

    $maior = max($notas);
    $menor = min($notas);
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperacao";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "maior" => $maior,
        "menor" => $menor,
        "media" => $media,
        "situacao" => $situacao
    ];
}

$notas = [8, 7, 6, 9];

$resultado = calcularMedia($notas);

echo "Maior nota: " . $resultado["maior"] . "<br>";
echo "Menor nota: " . $resultado["menor"] . "<br>";
echo "Media: " . $resultado["media"] . "<br>";
echo "Situacao: " . $resultado["situacao"];

?>