<?php

$caminhoArquivo = __DIR__ . "/Filmes/filme.json";

$conteudoArquivo = file_get_contents($caminhoArquivo);

$filme = implode(separator: ", ", array: json_decode(json: $conteudoArquivo, associative: true));

echo $filme;