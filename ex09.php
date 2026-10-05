<?php

function analisarNumero($numero) {

    if ($numero % 2 == 0) {
        $paridade = "Par";
    } else {
        $paridade = "Impar";
    }

    $primo = true;

    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $numero) {
        $perfeito = "Sim";
    } else {
        $perfeito = "Nao";
    }

    return [
        "paridade" => $paridade,
        "primo" => $primo,
        "perfeito" => $perfeito
    ];
}

$numero = 28;

$resultado = analisarNumero($numero);

echo "Numero: " . $numero . "<br>";
echo "Paridade: " . $resultado["paridade"] . "<br>";

if ($resultado["primo"]) {
    echo "Primo: Sim<br>";
} else {
    echo "Primo: Nao<br>";
}

echo "Perfeito: " . $resultado["perfeito"];

?>