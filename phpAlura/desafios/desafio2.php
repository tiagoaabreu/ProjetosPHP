<?php
echo "Digite seu nome: ";
$nome = fgets(STDIN);

echo "Digite seu ano de nascimento: ";
$ano = fgets(STDIN);

echo "Digite seu trabalho: ";
$trabalho = fgets(STDIN);

$array = [
    "nome" => ($nome),
    "ano" => (int) $ano,
    "trabalho" => $trabalho
];

echo "Seu nome: $array[nome], você nasceu em $array[ano] e trabalha como $array[trabalho]";