<?php


function inverterTexto($texto) {
    return strrev($texto);
}

$texto = "Programacao em PHP";

$textoInvertido = inverterTexto($texto);
$quantidadeCaracteres = strlen($texto);

echo "Texto original: " . $texto . "<br>";
echo "Texto invertido: " . $textoInvertido . "<br>";
echo "Quantidade de caracteres: " . $quantidadeCaracteres;

?>
