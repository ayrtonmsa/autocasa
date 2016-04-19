<?php

namespace App;

use App\Lights_Socket;

class House
{
    protected $fillable = [
        'ip', 'port', 'user_id',
    ];

    public static function sendToArduino($log)
    {
        $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

        socket_connect($sock,"192.168.9.31", 8081);

         //ira enviar sempre 4 caracteres para no maximo 9 dispositivos para cada tipo.
        //exemplo code 1(lampada 1) status 0(desligar lampada) type L(lamapada) terminador #(caractere de finalização)
        // mensagem enviada 10L#
        $msg = $log['code'].$log['status'].$log['type'].'#';
        socket_write($sock,$msg,strlen($msg));

        return redirect()->back();
    }
}
