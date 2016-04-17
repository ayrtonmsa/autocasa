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

        socket_connect($sock,"192.168.25.15", 8081);

        // $lights = Lights_Socket::all();
        // $qtdSockets = count($lights);
        // $msg='';

        // foreach ($lights as $light) {
        //   if ($light->code == $log['code']) {
        //     $msg .= $log['status'];
        //   }else{
        //     $msg .= $light->status;
        //   }
        // }

        //ira enviar sempre 4 caracteres para no maximo 9 dispositivos para cada tipo. 
        //exemplo code 1(lampada 1) status 0(desligar lampada) type L(lamapada) terminador #(caractere de finalização)
        // mensagem enviada 10L#
        $msg = $log['code'].$log['status'].$log['type'].'#';

        socket_write($sock,$msg,strlen($msg));

        return redirect()->back();
    }
    public static function receiveOfArduino()
    {
        $code = $_POST['code'];
        $status = $_POST['status'];
        $type = $_POST['type'];
        if($type == 'L'){
            Lights_Socket::where('code',$code)->where('type',$type)->update('status',$status);
        }elseif ($type == 'T') {
            Lights_Socket::where('code',$code)->where('type',$type)->update('status',$status);
        }

        return redirect()->back();
    }
}
