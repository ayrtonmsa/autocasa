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

        // Se conecta ao IP e Porta:
        socket_connect($sock,"192.168.25.15", 8081);

        // Verifica a quantidade de itens na casa adiciona a uma string a mensagem que ira enviar para o arduino.
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

        // if(isset($input['bits'])) {
        //   $msg = $input['bits'];
        //   if(isset($input['Fora'   ])){ if($msg[0]=='1') { $msg[0]='0'; } else { $msg[0]='1'; }}
        //   if(isset($input['Quarto1'])){ if($msg[1]=='1') { $msg[1]='0'; } else { $msg[1]='1'; }}
        //   if(isset($input['Quarto2'])){ if($msg[2]=='1') { $msg[2]='0'; } else { $msg[2]='1'; }}
        //   if(isset($input['Sala'   ])){ if($msg[3]=='1') { $msg[3]='0'; } else { $msg[3]='1'; }}
        //   if(isset($input['Pequeno'])){ $msg = 'P#'; }
        //   if(isset($input['Grande' ])){ $msg = 'G#'; }
        socket_write($sock,$msg,strlen($msg));
        // }

        return redirect()->back();
    }
}
