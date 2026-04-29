<?php

interface INotificador
{
    public function enviar($destinatario, $mensagem);
}

// Implementar: E-mail
class NoticadorEmail implements INotificador
{
    public function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: SMS
class NotificadorSMS implements INotificador
{
    public function enviar($destinatario, $mensagem)
    {
        echo "SMS enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: Whatsapp
class NotificadorWhatsapp implements INotificador
{
    public function enviar($destinatario, $mensagem)
    {
        echo "Whatsapp enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Classe que usa a interface 
class SistemaDeNotificacoes
{
    private $notificador;

    public function __construct(INotificador $notificador)
    {
        $this->notificador = $notificador;
    }

    public function notificarUsuario($destinatario, $mensagem)
    {
        $this->notificador->enviar($destinatario, $mensagem);
    }
}

$sistemaEmail = new SistemaDeNotificacoes(new NoticadorEmail());
$sistemaSMS = new SistemaDeNotificacoes(new NotificadorSMS());
$sistemaWhatsapp = new SistemaDeNotificacoes(new NotificadorWhatsapp());

$sistemaEmail->notificarUsuario("joao@email.com", "Seu Pedido foi confirmado");
$sistemaSMS->notificarUsuario("17981256230", "Seu Pedido foi confirmado");
$sistemaWhatsapp->notificarUsuario("17991293329", "Seu Pedido foi confirmado");
