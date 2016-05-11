<?php

namespace App\Http\Controllers;

use App\Lights_Socket;
use App\Log;

class HouseController extends Controller
{
    public function index()
    {
        return view('house/index');
    }

    public function terraco()
    {
        $lights = Lights_Socket::all();

        $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

        $connect = HouseController::pingAddress('192.168.25.31');

        if ($connect) {
            socket_connect($sock , '192.168.25.31' , 80);

            socket_write($sock,'R#',2); //Requisita o status do sistema.

    		// Espera e lê o status e define o status da luz na pagina.
    		$status = socket_read($sock,6);
    		$status = explode("L", $status);
    		$luzes = $status[0];
    		$status = explode("T", $status[1]);
    		$tomadas = $status[0];

    		$luzes = str_split($luzes);
    		for ($i=0; $i < count($luzes); $i++) {
    			Lights_Socket::where('code',$i)->where('type','L')->update(['status'=>$luzes[$i]]);
    		}
    		$tomadas = str_split($tomadas);
    		for ($i=0; $i < count($tomadas); $i++) {
    			Lights_Socket::where('code',$i)->where('type','T')->update(['status'=>$tomadas[$i]]);
    		}
            
            return view('house.terraco', compact('lights','luzes','tomadas'));
        }else{
            $lights = Lights_Socket::all();
            $luzes =Lights_Socket::all();
            $tomadas =Lights_Socket::all();
            return view('house.terraco', compact('lights','luzes','tomadas'));
        }


    }

    public function quarto()
    {
        $lights = Lights_Socket::all();

        return view('house.quarto', compact('lights'));
    }

    public static function receiveOfArduino($code,$status,$type)
    {
        if($type == 'L'){
            Lights_Socket::where('code',$code)->where('type',$type)->update(['status'=>$status]);
        }elseif ($type == 'T') {
            Lights_Socket::where('code',$code)->where('type',$type)->update(['status'=>$status]);
        }else{
            $name['name'] = 'Erro';
            Log::create($name);
        }
    }

    public static function pingAddress($ip) {
    $pingresult = exec("/bin/ping -n 3 $ip", $outcome, $status);
        if ($status == 0) {
            return true;
        } else {
            return false;
        }
    }

}