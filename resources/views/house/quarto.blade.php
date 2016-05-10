@extends('layouts.app')

@section('htmlheader_title')
    Casa
@endsection

<style>
    .featured-image {
        background: no-repeat center;
        width: 500px;
        height: 450px;
        background-size: cover;
    }
</style>

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Quarto</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3 col-xs-6" align="center" style="position:absolute; left:130px; top:240px;">
                                <?php
                                    if ($lights[0]->status == "0") {
                                        if($lights[0]->type == 'L')
                                        {
                                            $lamp = "/img/lampada-apagada.jpg";
                                        }else{
                                            $lamp = "/img/off.jpg";
                                        }
                                    }else{
                                        if($lights[0]->type == 'L')
                                        {
                                            $lamp ="/img/lampada-acesa.jpg";
                                        }else{
                                            $lamp = "/img/on.jpg";
                                        }
                                    }
                                ?>
                                <a href="{{ url('lights_sockets/' . $lights[0]->id . '/alterarStatusOff') }}">
                                <img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="50" height="50">
                                <div class="inner"><h6>{{$lights[0]->name}}</h6></div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6" align="center" style="position:absolute; left:370px; top:390px;">
                                <?php
                                    if ($lights[4]->status == "0") {
                                        if($lights[4]->type == 'L')
                                        {
                                            $lamp = "/img/lampada-apagada.jpg";
                                        }else{
                                            $lamp = "/img/off.jpg";
                                        }
                                    }else{
                                        if($lights[4]->type == 'L')
                                        {
                                            $lamp ="/img/lampada-acesa.jpg";
                                        }else{
                                            $lamp = "/img/on.jpg";
                                        }
                                    }
                                ?>
                                <a href="{{ url('lights_sockets/' . $lights[4]->id . '/alterarStatusOff') }}">
                                <img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="50" height="50">
                                <div class="inner"><h6>{{$lights[4]->name}}</h6></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="featured-image" style="background-image: url('{{ asset('/img/quarto.jpg')}}') ">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
