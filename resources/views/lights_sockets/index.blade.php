@extends('layouts.app')

@section('main-content')

    <h1>Luzes e Tomadas <a href="{{ url('lights_sockets/create') }}" class="btn btn-primary pull-right btn-sm">Adicionar Luz ou Tomada</a></h1>
    <div class="table">

@if(Session::has('sucess'))
    <div class="alert alert-success">
        {{Session::get('flash_message')}}
        {{Session::forget('flash_message')}}
        {{Session::forget('sucess')}}
    </div>
@elseif(Session::has('error'))
    <div class="alert alert-error">
        {{Session::get('flash_message')}}
        {{Session::forget('flash_message')}}
        {{Session::forget('error')}}
    </div>
@endif

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Código</th><th>Tipo</th><th>Nome</th><th>Ações</th>
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
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['lights_sockets', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Excluir', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $lights_sockets->render() !!} </div>
    </div>

@endsection
