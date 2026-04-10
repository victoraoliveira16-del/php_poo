<?php

class Funcionarios
{
    public $nome;
    public $salario;
    public $previdencia;
    public $descontos;
    public $tipoFuncionario;

    function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->descontos = $this->calcularDescontos();
        $this->tipoFuncionario = $this->categorizarFuncionario();
    }

    function calcularDescontos()
    {
        return number_format($this->salario * 0.275 + $this->previdencia, 2, ',', '.');
    }

    function categorizarFuncionario(): string
    {
        $salario = $this->salario;

        if ($salario >= 1000 && $salario < 2000) {
            $tipoFuncionario = "Júnior";
        } else if ($salario >= 2000 && $salario < 3000) {
            $tipoFuncionario = "Pleno";
        } else if ($salario >= 3000) {
            $tipoFuncionario = "Sênior";
        } else {
            $tipoFuncionario = "Estagiário";
        }
        return $tipoFuncionario;
    }
}
$joao = new Funcionarios('Joao Filho', 1000, 100);
$maria = new Funcionarios('Maria Rute', 2000, 200);
$jose = new Funcionarios('José Salgado', 3000, 300);

echo "O Funcionár@ $joao->nome é $joao->tipoFuncionario e o Valor do desconto de R$ $joao->descontos. <br>";
echo "O Funcionári@ $maria->nome é $maria->tipoFuncionario e o Valor do desconto de R$ $maria->descontos. <br>";
echo "O Funcionári@ $jose->nome é $jose->tipoFuncionario e o Valor do desconto de R$ $jose->descontos. <br>";
