@extends('layouts.app')

@section('htmlheader_title')
    Cadastrar Luzes e Tomadas
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastrar Luzes e Tomadas</div>

                    <div class="panel-body">
                        @if(empty($lightsSockets))
                            @foreach($lightsSockets as $lightSocket)
                                {{ $lightSocket->name }}
                            @endforeach
                        @else
                            Nenhum item!
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
