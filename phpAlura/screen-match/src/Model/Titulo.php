<?php
class Titulo
{
    public function __construct(
    public readonly string $nome,
    public readonly int $anoLancamento,
    public readonly Genero $genero,
    ){

    }
}