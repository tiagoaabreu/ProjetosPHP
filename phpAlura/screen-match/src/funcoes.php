<?php
function exibeMsgLancamento(int $ano)
{
    if ($ano < 2020) {
        echo "O filme é antigo.\n";
    } else {
        echo "O filme é recente.\n";
    }
}
function incluidoNoPlano(bool $planoPrime, int $anoLancamento)
{
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $ano, float $nota, string $genero): array
{
    return[
        'nome' => $nome,
        'ano' => $ano,
        'nota' => $nota,
        'genero' => $genero
    ];
}