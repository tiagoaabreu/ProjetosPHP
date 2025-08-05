<?php
$notas = [17, 15, 19];
rsort($notas);
$resultado = array_slice($notas, 0, 3);
$string = implode(", ", $resultado);
echo "As três maiores notas são: $string\n";
