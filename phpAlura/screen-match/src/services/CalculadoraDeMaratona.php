<?php
class CalculadoraDeMaratona {
    private int $duracaoMaratona = 0;
    public function inclui(Titulo $titulo){
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }
    public function duracao():int{
        return $this->duracaoMaratona;
    }
}