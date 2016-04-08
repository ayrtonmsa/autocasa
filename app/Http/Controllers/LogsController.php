<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Log;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class LogsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $logs = Log::paginate(15);

        return view('logs.index', compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('logs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['code' => 'required', 'type' => 'required', 'voltage' => 'required', 'status' => 'required', ]);

        Log::create($request->all());

        Session::flash('flash_message', 'Log added!');

        return redirect('logs');
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
        $log = Log::findOrFail($id);

        return view('logs.show', compact('log'));
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
        $log = Log::findOrFail($id);

        return view('logs.edit', compact('log'));
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

        $log = Log::findOrFail($id);
        $log->update($request->all());

        Session::flash('flash_message', 'Log updated!');

        return redirect('logs');
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
        Log::destroy($id);

        Session::flash('flash_message', 'Log deleted!');

        return redirect('logs');
    }

}
