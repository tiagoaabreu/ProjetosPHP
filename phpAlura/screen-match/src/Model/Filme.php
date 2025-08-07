<?php

class Filme extends Titulo
{
    private array $notas = [];

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
// Atributos são as características do objeto, enquanto métodos são as ações que o objeto pode realizar.

//Diferença entre public e private:
//public: acessível de qualquer lugar, dentro ou fora da classe.
//private: acessível apenas dentro da própria classe.