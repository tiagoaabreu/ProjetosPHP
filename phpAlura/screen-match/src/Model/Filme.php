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

    public function avalia(float $nota)
    {
        $this->notas[]= $nota;
    }
    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }
}
// Atributos são as características do objeto, enquanto métodos são as ações que o objeto pode realizar.

//Diferença entre public e private:
//public: acessível de qualquer lugar, dentro ou fora da classe.
//private: acessível apenas dentro da própria classe.