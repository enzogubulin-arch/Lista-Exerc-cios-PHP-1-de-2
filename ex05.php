<?php

function analisarTexto($texto) {
    $palavras = str_word_count($texto);
    $caracteres = strlen($texto);

    $vogais = 0;
    $consoantes = 0;

    $texto = strtolower($texto);

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];

        if (strpos("aeiou", $letra) !== false) {
            $vogais++;
        } elseif (ctype_alpha($letra)) {
            $consoantes++;
        }
    }

    return [
        "palavras" => $palavras,
        "caracteres" => $caracteres,
        "vogais" => $vogais,
        "consoantes" => $consoantes
    ];
}

$texto = "Programacao em PHP";

$resultado = analisarTexto($texto);

echo "Texto: " . $texto . "<br>";
echo "Palavras: " . $resultado["palavras"] . "<br>";
echo "Caracteres: " . $resultado["caracteres"] . "<br>";
echo "Vogais: " . $resultado["vogais"] . "<br>";
echo "Consoantes: " . $resultado["consoantes"];

?>