<?php
namespace ScreenMatch\Model;

abstract class Titulo implements Avaliavel
{
    use Avaliation;
    public function __construct(
    public readonly string $nome,
    public readonly int $anoLancamento,
    public readonly Genero $genero,
    ){
        
    }
    abstract public function duracaoEmMinutos(): int;
}