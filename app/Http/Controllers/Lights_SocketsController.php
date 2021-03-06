<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lights_Socket;
use App\Log;
use App\House;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Lights_SocketsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lights_sockets = Lights_Socket::paginate(15);

        return view('lights_sockets.index', compact('lights_sockets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('lights_sockets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['code' => 'required', 'type' => 'required', 'voltage' => 'required', 'status' => 'required', ]);

        Lights_Socket::create($request->all());

        Session::flash('flash_message', 'Luz/Tomada adicionada com sucesso!');
        Session::flash('sucess', 'Sucess!');

        return redirect('lights_sockets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lights_socket = Lights_Socket::findOrFail($id);

        return view('lights_sockets.show', compact('lights_socket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lights_socket = Lights_Socket::findOrFail($id);

        return view('lights_sockets.edit', compact('lights_socket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['code' => 'required', 'type' => 'required', 'voltage' => 'required', 'status' => 'required', ]);

        $lights_socket = Lights_Socket::findOrFail($id);

        $lights_socket->update($request->all());

        Log::create($request->all());

        Session::flash('flash_message', 'Luz/Tomada alterada com sucesso!');
        Session::flash('sucess', 'Sucess!');

        return redirect('lights_sockets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Lights_Socket::destroy($id);

        Session::flash('flash_message', 'Luz/Tomada deletada com sucesso!');
        Session::flash('error', 'Error!');

        return redirect('lights_sockets');
    }

    public function alterarStatus($id)
    {
        $lights_socket = Lights_Socket::findOrFail($id);

        $log['code'] = $lights_socket['code'];
        $log['type'] = $lights_socket['type'];
        $log['name'] = $lights_socket['name'];
        $log['voltage'] = $lights_socket['voltage'];

        if ($lights_socket['status'] != 0) {
            $lights_socket->update(['status'=>0]);
            $log['status'] = 0;
        }else{
            $lights_socket->update(['status'=>1]);
            $log['status'] = 1;
        }

        Log::create($log);

        // vai enviar a alteração para ser criada pelo arduino fazendo com que a alteração só seja efetuada se o
        //arduino receber a mensagem
        House::sendToArduino($log);

        return redirect('house/terraco');
    }

    public function alterarStatusOff($id)
    {
        $lights_socket = Lights_Socket::findOrFail($id);

        $log['code'] = $lights_socket['code'];
        $log['type'] = $lights_socket['type'];
        $log['name'] = $lights_socket['name'];
        $log['voltage'] = $lights_socket['voltage'];

        if ($lights_socket['status'] != 0) {
            $lights_socket->update(['status'=>0]);
            $log['status'] = 0;
        }else{
            $lights_socket->update(['status'=>1]);
            $log['status'] = 1;
        }

        Log::create($log);

        return redirect('house/quarto');
    }

}
