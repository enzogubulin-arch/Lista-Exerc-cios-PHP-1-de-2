<?php

function estatisticasNumericas($numeros) {

    $soma = array_sum($numeros);
    $media = $soma / count($numeros);

    $maior = max($numeros);
    $menor = min($numeros);

    sort($numeros);

    $quantidade = count($numeros);
    $meio = intdiv($quantidade, 2);

    if ($quantidade % 2 == 0) {
        $mediana = ($numeros[$meio - 1] + $numeros[$meio]) / 2;
    } else {
        $mediana = $numeros[$meio];
    }

    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    return [
        "soma" => $soma,
        "media" => $media,
        "maior" => $maior,
        "menor" => $menor,
        "mediana" => $mediana,
        "pares" => $pares,
        "impares" => $impares
    ];
}

$numeros = [10, 5, 8, 3, 7, 2];

$resultado = estatisticasNumericas($numeros);

echo "Soma: " . $resultado["soma"] . "<br>";
echo "Media: " . $resultado["media"] . "<br>";
echo "Maior numero: " . $resultado["maior"] . "<br>";
echo "Menor numero: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["pares"] . "<br>";
echo "Quantidade de impares: " . $resultado["impares"];

?>