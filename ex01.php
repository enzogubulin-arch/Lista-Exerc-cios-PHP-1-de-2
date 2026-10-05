<?php

function calcularFormula($x, $y) {
    $soma = $x + $y;

    if ($soma == 0) {
        return "Não é possível realizar a divisão.";
    }

    $resultado = (($x * $x) + ($y * $y)) / $soma;

    return $resultado;
}

$x = 5;
$y = 3;

$resultado = calcularFormula($x, $y);

echo "Resultado: " . $resultado;

?>
