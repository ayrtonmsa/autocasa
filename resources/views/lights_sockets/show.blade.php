@extends('layouts.app')

@section('main-content')

    <h1>Lights_socket</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Code</th><th>Type</th><th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $lights_socket->id }}</td> <td> {{ $lights_socket->code }} </td><td> {{ $lights_socket->type }} </td><td> {{ $lights_socket->name }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection