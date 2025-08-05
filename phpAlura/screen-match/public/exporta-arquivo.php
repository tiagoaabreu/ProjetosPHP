<?php
$filme = [
    "nome" => $_POST['nome'],
    "ano" => $_POST['ano'],
    "nota" => $_POST['nota'],
    "genero" => $_POST['genero'],
];
file_put_contents(
    __DIR__ . "/../Filmes/filme.json",
    json_encode($filme, JSON_PRETTY_PRINT)
);

header('Location: /sucesso.php?filme='. $filme['nome']);