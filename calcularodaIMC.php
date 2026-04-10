<?php

class Pessoa
{
    public $peso;
    public $altura;
    public $imc;

    function __construct($peso, $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
        $this->imc = $this->calcularIMC();
    }

    function calcularIMC()
    {
        return number_format($this->peso / ($this->altura * $this->altura), 2, ',', '.');
    }
}

$pessoa = new Pessoa(72, 1.85);

echo "Peso: " . $pessoa->peso . " kg<br>";

echo "Altura: " . $pessoa->altura . " m<br>";

echo "Fórmula: peso / (altura²)<br>";

echo "Cálculo: " . $pessoa->peso . " / (" . $pessoa->altura . "²)<br>";

echo "Cálculo: " . $pessoa->peso . " / " . number_format($pessoa->altura * $pessoa->altura, 2, ',', '.') . "<br><br>";

echo "IMC:   $pessoa->imc  ";