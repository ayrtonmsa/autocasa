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
										if (isset($luzes[($light->code -1)])&&($luzes[($light->code -1)] == "0")) {
											if($light->type == 'L')
											{
												$lamp = "/img/lampada-apagada.jpg";
											}else{
												$lamp = "/img/off.jpg";
											}
										}elseif (isset($luzes[($light->code -1)])&&($luzes[($light->code -1)] == "1")) {
											if($light->type == 'L')
											{
												$lamp ="/img/lampada-acesa.jpg";
											}else{
												$lamp = "/img/on.jpg";
											}
										}else{
											if($light->type == 'L')
											{
												$lamp = "/img/lampada-disconectada.jpg";
											}else{
												$lamp = "/img/off1.jpg";
											}
										}
									?>
									<a href="{{ url('lights_sockets/' . $light->id . '/alterarStatus') }}">
									<img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="100" height="100">
									<div class="inner"><h3>{{$light->name}}</h3></div>
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
