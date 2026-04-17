<?php
class Carro
{
    // 🚩 RISCO: Atributo público permite valores ilegais
    public $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade)
    {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }
    public function setVelocidade($novaVelocidade)
    {
        if ($novaVelocidade < 0) {
            echo "Parecendo uma tartaruga!<br>";
        } else if ($novaVelocidade > 200) {
            echo "Diminua quer morrer!<br>";
        }
        $this->velocidade = $novaVelocidade;
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->setVelocidade(5000); // Velocidade de foguete?
$meuCarro->setVelocidade(200);   // Carro andando no tempo?

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
