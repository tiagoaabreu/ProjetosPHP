<?php
namespace ScreenMatch\Model;
class Filme extends Titulo
{

    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
    )
    {
        parent::__construct($nome, $anoLancamento, $genero);
    }
    public function duracaoEmMinutos(): int{
        return $this->duracaoEmMinutos;
    }

}
// Atributos são as características do objeto, enquanto métodos são as ações que o objeto pode realizar.

//Diferença entre public e private:
//public: acessível de qualquer lugar, dentro ou fora da classe.
//private: acessível apenas dentro da própria classe.