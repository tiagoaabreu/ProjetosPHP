<?php
echo "Olá bem vindo ao screen-match\n";

$nomeFilme = "Meu caralho";
$anoLancamento = 2022;

$quantidadeNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador += 1) {
    $somaDeNotas += $argv[$contador];
}
$contador = 1;

while ($argv[$contador] != 0) {
    $somaDeNotas += $argv[$contador++];
}

$notaFilme = $somaDeNotas / $quantidadeNotas;

$planoPrime = true;

$incluidoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: " . $notaFilme . "\n";
echo "Ano do lançamento: " . $anoLancamento . "\n";

