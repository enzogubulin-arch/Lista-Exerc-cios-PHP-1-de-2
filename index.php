<?php

include "funcoes.php";

echo "<h2>Teste das Funcoes</h2>";

echo "IMC: " . calcularImc(70, 1.75) . "<br>";

echo "Email valido: ";
if (validarEmail("exemplo@email.com")) {
    echo "Sim";
} else {
    echo "Nao";
}
echo "<br>";

echo "Senha gerada: " . gerarSenha(10) . "<br>";

echo "Quantidade de vogais: " . contarVogais("Programacao") . "<br>";

echo "Texto invertido: " . inverterTexto("Programacao") . "<br>";

echo "Idade: " . calcularIdade(2010) . " anos<br>";

echo "Valor convertido: R$ " . converterMoeda(100, 5) . "<br>";

echo "Telefone formatado: " . formatarTelefone("47999998888") . "<br>";

echo "Saudacao: " . saudacaoPorHorario(15) . "<br>";

echo "Senha forte: ";
if (validarSenhaForte("Senha123")) {
    echo "Sim";
} else {
    echo "Nao";
}

?>