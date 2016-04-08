@extends('layouts.app')

@section('main-content')

    <h1>Lights_sockets <a href="{{ url('lights_sockets/create') }}" class="btn btn-primary pull-right btn-sm">Add New Lights_socket</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Code</th><th>Type</th><th>Name</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($lights_sockets as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('lights_sockets', $item->id) }}">{{ $item->code }}</a></td><td>{{ $item->type }}</td><td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ url('lights_sockets/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['lights_sockets', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $lights_sockets->render() !!} </div>
    </div>

@endsection
