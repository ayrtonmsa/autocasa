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

        return view('house.terraco', compact('lights'));
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

}