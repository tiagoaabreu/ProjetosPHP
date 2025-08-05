<?php
//escrever uma função que receba um array de strings por parametro e ordenar em ordem alfabética
function sortArray($array)
{
    $array = explode(separator: ",", string: $array);
    sort(array: $array, flags: SORT_STRING);
    return $array;
}

echo "Digite as palavras que voce quer no array, separadas por vírgula: ";
$input = trim(fgets(STDIN));
$resposta = trim(implode(separator: ", ", array: sortArray($input)));
echo "A ordem Alfabética é: $resposta";