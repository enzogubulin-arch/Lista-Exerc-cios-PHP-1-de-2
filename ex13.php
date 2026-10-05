<?php

function criptografarMensagem($mensagem, $deslocamento) {
    $resultado = "";

    for ($i = 0; $i < strlen($mensagem); $i++) {
        $letra = $mensagem[$i];

        if (ctype_alpha($letra)) {
            $codigo = ord($letra);

            if ($codigo >= 65 && $codigo <= 90) {
                $codigo = (($codigo - 65 + $deslocamento) % 26) + 65;
            } elseif ($codigo >= 97 && $codigo <= 122) {
                $codigo = (($codigo - 97 + $deslocamento) % 26) + 97;
            }

            $letra = chr($codigo);
        }

        $resultado .= $letra;
    }

    return $resultado;
}

function descriptografarMensagem($mensagem, $deslocamento) {
    return criptografarMensagem($mensagem, -$deslocamento);
}

$mensagem = "Programacao em PHP";
$deslocamento = 3;

$mensagemCriptografada = criptografarMensagem($mensagem, $deslocamento);
$mensagemOriginal = descriptografarMensagem($mensagemCriptografada, $deslocamento);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $mensagemCriptografada . "<br>";
echo "Mensagem descriptografada: " . $mensagemOriginal;

?>