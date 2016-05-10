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
					<div class="panel-heading">Terraço</div>

					<div class="panel-body">
								<div class="col-lg-3 col-xs-6" align="center" style="position:absolute; left:130px; top:240px;">
									<?php
										if (isset($luzes[($lights[0]->code -1)])&&($luzes[($lights[0]->code -1)] == "0")) {
											$lamp = "/img/lampada-apagada.jpg";
										}elseif (isset($luzes[($lights[0]->code -1)])&&($luzes[($lights[0]->code -1)] == "1")) {
											$lamp ="/img/lampada-acesa.jpg";
										}else{
											$lamp = "/img/lampada-disconectada.jpg";
										}
									?>
									<a href="{{ url('lights_sockets/' . $lights[0]->id . '/alterarStatus') }}" >
									<img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="50" height="50">
									<div class="inner"><h6>{{$lights[0]->name}}</h6></div>
									</a>
								</div>
								<div class="col-lg-3 col-xs-6" align="center" style="position:absolute; left:16px; top:420px;">
									<?php
										if (isset($luzes[($lights[1]->code -1)])&&($luzes[($lights[1]->code -1)] == "0")) {
											$lamp = "/img/lampada-apagada.jpg";
										}elseif (isset($luzes[($lights[1]->code -1)])&&($luzes[($lights[1]->code -1)] == "1")) {
											$lamp ="/img/lampada-acesa.jpg";
										}else{
											$lamp = "/img/lampada-disconectada.jpg";
										}
									?>
									<a href="{{ url('lights_sockets/' . $lights[1]->id . '/alterarStatus') }}">
									<img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="50" height="50">
									<div class="inner"><h6>{{$lights[1]->name}}</h6></div>
									</a>
								</div>
								<!-- <div class="col-lg-3 col-xs-6" align="center" style="position:absolute; left:65px; top:150px;">
									<?php
										if (isset($luzes[($lights[2]->code -1)])&&($luzes[($lights[2]->code -1)] == "0")) {
											$lamp = "/img/lampada-apagada.jpg";
										}elseif (isset($luzes[($lights[2]->code -1)])&&($luzes[($lights[2]->code -1)] == "1")) {
											$lamp ="/img/lampada-acesa.jpg";
										}else{
											$lamp = "/img/lampada-disconectada.jpg";
										}
									?>
									<a href="{{ url('lights_sockets/' . $lights[2]->id . '/alterarStatus') }}">
									<img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="50" height="50">
									<div class="inner"><h6>{{$lights[2]->name}}</h6></div>
									</a>
								</div> -->
								<div class="col-lg-3 col-xs-6" align="center" style="position:absolute; left:260px; top:150px;">
									<?php
										if (isset($luzes[($lights[3]->code -1)])&&($luzes[($lights[3]->code -1)] == "0")) {
											$lamp = "/img/lampada-apagada.jpg";
										}elseif (isset($luzes[($lights[3]->code -1)])&&($luzes[($lights[3]->code -1)] == "1")) {
											$lamp ="/img/lampada-acesa.jpg";
										}else{
											$lamp = "/img/lampada-disconectada.jpg";
										}
									?>
									<a href="{{ url('lights_sockets/' . $lights[3]->id . '/alterarStatus') }}">
									<img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="50" height="50">
									<div class="inner"><h6>{{$lights[3]->name}}</h6></div>
									</a>
								</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="featured-image" style="background-image: url('{{ asset('/img/sala.jpg')}}') ">
								<div></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
