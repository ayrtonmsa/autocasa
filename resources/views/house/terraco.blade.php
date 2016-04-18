@extends('layouts.app')

@section('htmlheader_title')
	Casa
@endsection

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Terraço</div>

					<div class="panel-body">
						@foreach($lights as $light)
							<div class="row">
								<div class="col-lg-3 col-xs-6" align="center">
									<!-- <div class="small-box {{($light->status == 0)?'bg-red':'bg-green'}}">
										<a class="small-box-footer" href="{{ url('lights_sockets/' . $light->id . '/alterarStatus') }}">
											<div class="inner"><h3>{{$light->name}}</h3></div>
										</a>
									</div> -->
									<?php ($light->status == 0)?$lamp = "/img/lampada-apagada.jpg":$lamp ="/img/lampada-acesa.jpg";?>
									<a href="{{ url('lights_sockets/' . $light->id . '/alterarStatus') }}">
									<img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="100" height="100">
									<div class="inner"><h3>{{$light->name}}</h3></div>
									</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
