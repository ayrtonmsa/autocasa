<?php

namespace App;

class House
{
    protected $fillable = [
        'ip', 'port', 'user_id',
    ];

    public static function sendToArduino($log)
    {
        $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

        socket_connect($sock,"192.168.25.15", 8081);

        $lights = Lights_Socket::all();
        $qtdSockets = count($lights);
        $msg='';

        foreach ($lights as $light) {
          if ($light->code == $log['code']) {
            $msg .= $log['status'];
          }else{
            $msg .= $light->status;
          }
        }

        socket_write($sock,$msg,strlen($msg));

        return redirect()->back();
    }
}
