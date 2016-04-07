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
                        {!! Form::open(['route' => ['lightssockets.create'], 'method'=> 'POST']) !!}
                        <div class="form-group">
                            <div>
                                {!! Form::label('email', 'E-Mail Address') !!}
                                {!! Form::text('username',null, ['class'=>'form-control']) !!}
                            </div>
                            {!! Form::submit('Salvar!') !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
