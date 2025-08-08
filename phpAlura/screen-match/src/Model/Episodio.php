<?php
namespace ScreenMatch\Model;

class Episodio implements Avaliavel{
    
    use Avaliation;
    public function __construct(
        public readonly Serie $serie,
        public readonly string $nome,
        public readonly int $numero,
        )
        {

        }
}
