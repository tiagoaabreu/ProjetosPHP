<?php
echo "Bem Vindo ao Banco!! \n";
echo "1-Acessar o Saldo\n";
echo "2-Depositar Saldo\n";
echo "3-Sacar\n";
echo "4-Sair\n";
$numero = fgets(STDIN);
$saldo = 180;
switch ($numero) {
    case "1":
        while (true) {
            echo "Você escolheu o número um.\n";
            echo "Bem vindo ao banco.\n";
            echo "Seu saldo é de R$$saldo\n";
            echo "Digite 0 para sair.\n";
            $numero = fgets(STDIN);
            if ($numero == 0) {
                echo "Obrigado por usar nosso banco, volte sempre!\n";
                break;
            }
        }
        break;
    case "2":
        while (true) {
            echo "Você escolheu o número dois.\n";
            echo "Bem vindo ao banco.\n";
            echo "Seu saldo é de R$$saldo\n";
            echo "Selecione o valor para depositar.\n";
            $numero = fgets(STDIN);
            if ($numero <= 0) {
                echo "Valor incorreto: $numero não pode ser negativo ou zero, por favor, selecione um valor positivo!\n";
                break;
            } else {
                $saldo += $numero;
                echo "Valor depositado com sucesso: Novo saldo é R$$saldo\n";
                break;
            }
        }
        break;
        ;
    case "3":
        while (true) {
            echo "Você escolheu o número três.\n";
            echo "Bem vindo ao banco.\n";
            echo "Seu saldo é de R$$saldo\n";
            echo "Selecione o valor para retirar.\n";
            $numero = fgets(STDIN);
            if ($numero > $saldo) {
                echo "Valor incorreto: $numero é maior que seu saldo, por favor, selecione um valor menor!\n";
                break;
            } else if ($numero <= $saldo) {
                $saldo -= $numero;
                echo "Valor retirado com sucesso: Novo valor é $saldo\n";
                echo "Saindo do sistema...\n";
                break;
            }
            break;
        }
    case "4":
        echo "Obrigado por usar nosso banco, volte sempre!\n";
        break;
    default:
        echo "Opção inválida, por favor, selecione uma opção válida.\n";
        break;
}