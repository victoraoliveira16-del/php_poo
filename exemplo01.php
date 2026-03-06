<?php 

$joaoSalario = 1000;
$joaoPrevidencia = 100;
$joaoNome = 'João Filho';
$joaoDescontos = number_format($joaoSalario*0.275 + $joaoPrevidencia, 2, ',', '.');


$mariaSalario = 2000;
$mariaPrevidencia = 100;
$mariaNome = 'Maria Rute';
$mariaDescontos = number_format($mariaSalario*0.275 + $mariaPrevidencia, 2, ',', '.');

$joseSalario = 3000;
$josePrevidencia = 100;
$joseNome = 'Jose Salgado';
$joseDescontos = number_format($joseSalario*0.275 + $josePrevidencia, 2, ',', '.');

echo "O Valor do desconto de $joaoNome é de  R$ $joaoDescontos. <br>";
echo "O Valor do desconto de $mariaNome é de  R$ $mariaDescontos. <br>";
echo "O Valor do desconto de $joseNome é de  R$ $joseDescontos. <br>";





