<?php 
require __DIR__ . "/Model/Genero.php";
require __DIR__ ."/Model/Titulo.php";
require __DIR__ ."/Model/Serie.php";
require __DIR__ . "/Model/Filme.php";
Require __DIR__ ."/services/CalculadoraDeMaratona.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    "Top Gun - Maverick",
    2022,
    Genero::Acao,
    180
);




var_dump($filme);

$serie = new Serie('Dexter',2005,Genero::Drama,10,20,30);

echo $serie->anoLancamento. "\n";

$serie->avalia(8);

echo $serie->media()."\n";


$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "para essa maratona, voce precisa de $duracao minutos";