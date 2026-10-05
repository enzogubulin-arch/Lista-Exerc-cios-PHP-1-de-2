<?php

function formatarTexto($texto) {

    $maiusculo = strtoupper($texto);
    $minusculo = strtolower($texto);
    $primeiraMaiuscula = ucwords($texto);
    $quantidadeCaracteres = strlen($texto);

    return [
        "maiusculo" => $maiusculo,
        "minusculo" => $minusculo,
        "primeiraMaiuscula" => $primeiraMaiuscula,
        "caracteres" => $quantidadeCaracteres
    ];
}

$texto = "programacao em php";

$resultado = formatarTexto($texto);

echo "Texto em maiusculo: " . $resultado["maiusculo"] . "<br>";
echo "Texto em minusculo: " . $resultado["minusculo"] . "<br>";
echo "Primeira letra maiuscula: " . $resultado["primeiraMaiuscula"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["caracteres"];

?>