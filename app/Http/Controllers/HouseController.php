<?php

namespace App\Http\Controllers;

use App\Lights_Socket;

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

    public static function receiveOfArduino()
    {
        $code = $_GET['code'];
        $status = $_GET['status'];
        $type = $_GET['type'];
        if($type == 'L'){
            Lights_Socket::where('code',$code)->where('type',$type)->update(['status'=>$status]);
        }elseif ($type == 'T') {
            Lights_Socket::where('code',$code)->where('type',$type)->update(['status'=>$status]);
        }
        return redirect()->back();
    }

}