<?php 

class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoMinutos,
    )
    {
        parent::__construct($nome, $anoLancamento, $genero);
    }
}