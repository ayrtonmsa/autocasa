<?php

namespace App\Http\Controllers;
use App\LightSocket;

class LightSocketController extends Controller
{
    public function index()
    {
        $lightsSockets = LightSocket::all();
        return view('lightsSockets/index')->with('lightsSockets', $lightsSockets);
    }

    public function create()
    {
        return view('lightsSockets/create');
    }

    public function edit($id)
    {
        return view('lightsSockets/edit');
    }

    public function store()
    {
        return view('lightsSockets/index');
    }

    public function update()
    {
        return view('lightsSockets/index');
    }

    public function delete()
    {
        return view('lightsSockets/index');
    }
}