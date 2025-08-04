<?php

function exibirMenu(): void
{
    echo "\nBem-vindo ao Banco!\n";
    echo "1 - Consultar Saldo\n";
    echo "2 - Depositar\n";
    echo "3 - Sacar\n";
    echo "4 - Sair\n";
    echo "Escolha uma opção: ";
}

function lerEntrada(): string
{
    return trim(fgets(STDIN));
}

function consultarSaldo(float $saldo): void
{
    echo "Seu saldo atual é: R$ " . ($saldo) . "\n";
}

function depositar(float &$saldo): void
{
    echo "Digite o valor para depósito: ";
    $valor = (float) lerEntrada();

    if ($valor <= 0) {
        echo "Valor inválido. O depósito deve ser maior que zero.\n";
        return;
    }

    $saldo += $valor;
    echo "Depósito realizado com sucesso. Novo saldo: R$ " . ($saldo) . "\n";
}

function sacar(float &$saldo): void
{
    echo "Digite o valor para saque: ";
    $valor = (float) lerEntrada();

    if ($valor <= 0) {
        echo "Valor inválido. O saque deve ser maior que zero.\n";
    } elseif ($valor > $saldo) {
        echo "Saldo insuficiente. Seu saldo atual é R$ " . ($saldo) . "\n";
    } else {
        $saldo -= $valor;
        echo "Saque realizado com sucesso. Novo saldo: R$ " . ($saldo) . "\n";
    }
}

function sair(): void
{
    echo "Obrigado por usar nosso banco. Volte sempre!\n";
    exit;
}

function executarOperacao(string $opcao, float &$saldo): void
{
    match ($opcao) {
        '1' => consultarSaldo($saldo),
        '2' => depositar($saldo),
        '3' => sacar($saldo),
        '4' => sair(),
        default => print ("Opção inválida. Tente novamente.\n"),
    };
}

function (float $saldo): string {
    return ($saldo);
};

$saldo = 180.00;

while (true) {
    exibirMenu();
    $opcao = lerEntrada();
    executarOperacao($opcao, $saldo);
}