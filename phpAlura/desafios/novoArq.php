<?php
$saldo = 180;

while (true) {
    echo "\nBem-vindo ao Banco!\n";
    echo "1 - Consultar Saldo\n";
    echo "2 - Depositar\n";
    echo "3 - Sacar\n";
    echo "4 - Sair\n";
    echo "Escolha uma opção: ";

    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case "1":
            echo "Seu saldo atual é: R$ $saldo\n";
            break;

        case "2":
            echo "Digite o valor para depósito: ";
            $valor = (float) trim(fgets(STDIN));

            if ($valor <= 0) {
                echo "Valor inválido. O depósito deve ser maior que zero.\n";
            } else {
                $saldo += $valor;
                echo "Depósito realizado com sucesso. Novo saldo: R$ $saldo\n";
            }
            break;

        case "3":
            echo "Digite o valor para saque: ";
            $valor = (float) trim(fgets(STDIN));

            if ($valor <= 0) {
                echo "Valor inválido. O saque deve ser maior que zero.\n";
            } elseif ($valor > $saldo) {
                echo "Saldo insuficiente. Seu saldo atual é R$ $saldo\n";
            } else {
                $saldo -= $valor;
                echo "Saque realizado com sucesso. Novo saldo: R$ $saldo\n";
            }
            break;

        case "4":
            echo "Obrigado por usar nosso banco. Volte sempre!\n";
            exit; // termina o script

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
}
