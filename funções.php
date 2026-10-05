<?php

function calcularImc($peso, $altura) {
    return $peso / ($altura * $altura);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function gerarSenha($quantidade) {
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*";
    $senha = "";

    for ($i = 0; $i < $quantidade; $i++) {
        $posicao = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$posicao];
    }

    return $senha;
}

function contarVogais($texto) {
    $quantidade = 0;
    $texto = strtolower($texto);

    for ($i = 0; $i < strlen($texto); $i++) {
        if (strpos("aeiou", $texto[$i]) !== false) {
            $quantidade++;
        }
    }

    return $quantidade;
}

function inverterTexto($texto) {
    return strrev($texto);
}

function calcularIdade($anoNascimento) {
    return date("Y") - $anoNascimento;
}

function converterMoeda($valor, $taxa) {
    return $valor * $taxa;
}

function formatarTelefone($telefone) {
    $telefone = preg_replace('/\D/', '', $telefone);

    if (strlen($telefone) == 11) {
        return "(" . substr($telefone, 0, 2) . ") " .
               substr($telefone, 2, 5) . "-" .
               substr($telefone, 7, 4);
    }

    return $telefone;
}

function saudacaoPorHorario($hora) {
    if ($hora >= 6 && $hora < 12) {
        return "Bom dia!";
    } elseif ($hora >= 12 && $hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function validarSenhaForte($senha) {
    if (strlen($senha) < 8) {
        return false;
    }

    if (!preg_match('/[A-Z]/', $senha)) {
        return false;
    }

    if (!preg_match('/[a-z]/', $senha)) {
        return false;
    }

    if (!preg_match('/[0-9]/', $senha)) {
        return false;
    }

    return true;
}

?>