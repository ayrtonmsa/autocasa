@extends('layouts.app')

@section('htmlheader_title')
    Casa
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Sala</div>

                    <div class="panel-body">
                        <div class="row">
                            @foreach($lights as $light)
                                <div class="col-lg-3 col-xs-6" align="center">
                                    <!-- <div class="small-box {{($light->status == 0)?'bg-red':'bg-green'}}">
                                        <a class="small-box-footer" href="{{ url('lights_sockets/' . $light->id . '/alterarStatus') }}">
                                            <div class="inner"><h3>{{$light->name}}</h3></div>
                                        </a>
                                    </div> -->
                                    <?php
                                        if ($light->status == "0") {
                                            if($light->type == 'L')
                                            {
                                                $lamp = "/img/lampada-apagada.jpg";
                                            }else{
                                                $lamp = "/img/off.jpg";
                                            }
                                        }else{
                                            if($light->type == 'L')
                                            {
                                                $lamp ="/img/lampada-acesa.jpg";
                                            }else{
                                                $lamp = "/img/on.jpg";
                                            }
                                        }
                                    ?>
                                    <a href="{{ url('lights_sockets/' . $light->id . '/alterarStatusOff') }}">
                                    <img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="50" height="50">
                                    <div class="inner"><h6>{{$light->name}}</h6></div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
