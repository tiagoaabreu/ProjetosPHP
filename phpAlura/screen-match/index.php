<?php

require "autoload.php";


use \ScreenMatch\Model\{
    Filme,Episodio,Serie,Genero,
};
use \ScreenMatch\services\{
    CalculadoraDeMaratona,
    ConversorEstrela
};

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    "Top Gun - Maverick",
    2022,
    Genero::Acao,
    180
);




$serie = new Serie('Dexter',2005,Genero::Drama,10,20,30);
$episodio = new Episodio($serie,'Piloto',1);

$serie->avalia(9);
$serie->avalia(10);
$serie->avalia(7);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(5);


echo $serie->anoLancamento. "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

$conversor = new ConversorEstrela();
echo $conversor->converte($serie)."\n";
echo $conversor->converte($filme)."\n";

echo "para essa maratona, voce precisa de $duracao minutos";
