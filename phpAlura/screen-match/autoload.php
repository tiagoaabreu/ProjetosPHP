<?php

spl_autoload_register(function (string $className) {
    $caminho = str_replace(search: 'ScreenMatch',replace: "src", subject: $className). '.php';
    $caminho = str_replace(search:'\\', replace:DIRECTORY_SEPARATOR, subject:$caminho);

    $caminhoCompleto = __DIR__ . DIRECTORY_SEPARATOR . $caminho;

    if(file_exists($caminhoCompleto)){
        require_once $caminhoCompleto;
    }

});