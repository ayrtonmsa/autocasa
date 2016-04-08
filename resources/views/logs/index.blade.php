@extends('layouts.app')

@section('main-content')

    <h1>Logs <a href="{{ url('logs/create') }}" class="btn btn-primary pull-right btn-sm">Add New Log</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Code</th><th>Type</th><th>Name</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($logs as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('logs', $item->id) }}">{{ $item->code }}</a></td><td>{{ $item->type }}</td><td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ url('logs/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['logs', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $logs->render() !!} </div>
    </div>

@endsection
