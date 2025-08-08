<?php 
namespace ScreenMatch\services;
use ScreenMatch\Model\Avaliavel;

class ConversorEstrela{
    public function converte(Avaliavel $avaliavel):float{
        $nota = $avaliavel->media();
        //Realiza a conversão
        return round($nota)/2;
    }
}
