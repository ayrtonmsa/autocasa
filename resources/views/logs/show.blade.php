@extends('layouts.app')

@section('main-content')

    <h1>Log</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Code</th><th>Type</th><th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $log->id }}</td> <td> {{ $log->code }} </td><td> {{ $log->type }} </td><td> {{ $log->name }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection