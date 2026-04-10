<?php

$VictorNome = 'Victor';
$peso = 72;
$altura = 1.85;

$imc = number_format($peso / ($altura * $altura), 2, ',', '.');


echo "$VictorNome, o seu imc e igual a: <strong>$imc</strong><br>";
echo "O seu peso e de: $peso kg<br>";
echo "A sua altura e igual: $altura<br>";



