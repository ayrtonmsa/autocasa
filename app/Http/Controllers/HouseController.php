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

}