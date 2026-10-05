<?php

function calcularDesconto($valor) {

    if ($valor <= 100) {
        $porcentagem = 0;
    } elseif ($valor <= 500) {
        $porcentagem = 10;
    } elseif ($valor <= 1000) {
        $porcentagem = 20;
    } else {
        $porcentagem = 30;
    }

    $desconto = $valor * ($porcentagem / 100);
    $valorFinal = $valor - $desconto;

    return [
        "original" => $valor,
        "desconto" => $desconto,
        "final" => $valorFinal
    ];
}

$valor = 800;

$resultado = calcularDesconto($valor);

echo "Valor original: R$ " . $resultado["original"] . "<br>";
echo "Desconto: R$ " . $resultado["desconto"] . "<br>";
echo "Valor final: R$ " . $resultado["final"];

?>