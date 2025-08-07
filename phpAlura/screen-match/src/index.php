<?php 
require __DIR__ . "/Model/Genero.php";
require __DIR__ . "/Model/Filme.php";
require __DIR__ . "/funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    "Top Gun - Maverick",
    2022,
    Genero::Acao,
    180
);




var_dump($filme);

