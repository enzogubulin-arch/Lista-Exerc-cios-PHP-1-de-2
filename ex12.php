<?php

function analisarProdutos($produtos, $produtoProcurado) {

    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $soma = 0;
    $encontrado = null;

    foreach ($produtos as $produto) {

        $soma += $produto["preco"];

        if ($produto["preco"] > $maisCaro["preco"]) {
            $maisCaro = $produto;
        }

        if ($produto["preco"] < $maisBarato["preco"]) {
            $maisBarato = $produto;
        }

        if (strtolower($produto["nome"]) == strtolower($produtoProcurado)) {
            $encontrado = $produto;
        }
    }

    $media = $soma / count($produtos);

    return [
        "maisCaro" => $maisCaro,
        "maisBarato" => $maisBarato,
        "media" => $media,
        "encontrado" => $encontrado
    ];
}

$produtos = [
    ["nome" => "Teclado", "preco" => 120],
    ["nome" => "Mouse", "preco" => 80],
    ["nome" => "Monitor", "preco" => 900],
    ["nome" => "Fone", "preco" => 200]
];

$produtoProcurado = "Mouse";

$resultado = analisarProdutos($produtos, $produtoProcurado);

echo "Produto mais caro: " . $resultado["maisCaro"]["nome"] . " - R$ " . $resultado["maisCaro"]["preco"] . "<br>";

echo "Produto mais barato: " . $resultado["maisBarato"]["nome"] . " - R$ " . $resultado["maisBarato"]["preco"] . "<br>";

echo "Preco medio: R$ " . $resultado["media"] . "<br>";

if ($resultado["encontrado"] != null) {
    echo "Produto encontrado: " . $resultado["encontrado"]["nome"] . " - R$ " . $resultado["encontrado"]["preco"];
} else {
    echo "Produto nao encontrado.";
}

?>