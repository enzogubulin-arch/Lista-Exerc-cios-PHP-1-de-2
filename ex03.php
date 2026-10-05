<?php

function mascararCpf($cpf) {
    $cpf = preg_replace('/\D/', '', $cpf);

    $ultimos = substr($cpf, -4);
    $mascarado = str_repeat("*", strlen($cpf) - 4) . $ultimos;

    return $mascarado;
}

$cpf = "123.456.789-00";

$resultado = mascararCpf($cpf);

echo "CPF mascarado: " . $resultado;

?>