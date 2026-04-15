<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    public $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getVelocidade(){
        return $this->velocidade;
    }
    public function setVelocidade($novaVelocidade){
        if ($novaVelocidade < 0) {
            echo "Velocidade não pode ser negativa!<br>";
        } elseif ($novaVelocidade > 200) {
            echo "Velocidade muito alta!<br>";
        } else {
            $this->velocidade = $novaVelocidade;
        }
    }

}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->getVelocidade() = 5000; // Velocidade de foguete?
$meuCarro->getVelocidade ()= -60;   // Carro andando no tempo?

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->velocidade . " km/h";
?>