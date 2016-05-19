@extends('layouts.app')

@section('htmlheader_title')
	Casa
@endsection

<style>
	.featured-image {
	    background: no-repeat center;
	    width: 500px;
	    height: 1200px;
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
						@if(Session::has('error'))
						    <div class="alert alert-error">
						        {{Session::get('flash_message')}}
						        {{Session::forget('flash_message')}}
						        {{Session::forget('error')}}
						    </div>
						@endif
								<div class="col-lg-3 col-xs-6" align="center" style="position:absolute; left:180px; top:450px;">
									<?php
										if (isset($luzes[($lights[0]->code -1)])&&($luzes[($lights[0]->code -1)] == "0")) {
											if($lights[0]->type == 'L')
											{
												$lamp = "/img/lampada-apagada.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[0]->id . '/alterarStatus') }}" ><?php
											}else{
												$lamp = "/img/off.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[0]->id . '/alterarStatus') }}" ><?php
											}
										}elseif (isset($luzes[($lights[0]->code -1)])&&($luzes[($lights[0]->code -1)] == "1")) {
											if($lights[0]->type == 'L')
											{
												$lamp ="/img/lampada-acesa.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[0]->id . '/alterarStatus') }}" ><?php
											}else{
												$lamp = "/img/on.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[0]->id . '/alterarStatus') }}" ><?php
											}
										}else{
											if($lights[0]->type == 'L')
											{
												$lamp = "/img/lampada-disconectada.jpg";
											}else{
												$lamp = "/img/off1.jpg";
											}
										}
									?>
									<img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="50" height="50">
									<div class="inner"><h6>{{$lights[0]->name}}</h6></div>
									</a>
								</div>
								<div class="col-lg-3 col-xs-6" align="center" style="position:absolute; left:150px; top:1080px;">
									<?php
										if (isset($luzes[($lights[1]->code -1)])&&($luzes[($lights[1]->code -1)] == "0")) {
											if($lights[1]->type == 'L')
											{
												$lamp = "/img/lampada-apagada.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[1]->id . '/alterarStatus') }}" ><?php
											}else{
												$lamp = "/img/off.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[1]->id . '/alterarStatus') }}" ><?php
											}
										}elseif (isset($luzes[($lights[1]->code -1)])&&($luzes[($lights[1]->code -1)] == "1")) {
											if($lights[1]->type == 'L')
											{
												$lamp ="/img/lampada-acesa.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[1]->id . '/alterarStatus') }}" ><?php
											}else{
												$lamp = "/img/on.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[1]->id . '/alterarStatus') }}" ><?php
											}
										}else{
											if($lights[1]->type == 'L')
											{
												$lamp = "/img/lampada-disconectada.jpg";
											}else{
												$lamp = "/img/off1.jpg";
											}
										}
									?>
									<img border="0" alt="Lampada" src="{{asset(''.$lamp.'')}}" width="50" height="50">
									<div class="inner"><h6>{{$lights[1]->name}}</h6></div>
									</a>
								</div>
								<div class="col-lg-3 col-xs-6" align="center" style="position:absolute; left:350px; top:1080px;">
									<?php
										if (isset($tomadas[($lights[3]->code -1)])&&($tomadas[($lights[3]->code -1)] == "0")) {
											if($lights[3]->type == 'L')
											{
												$lamp = "/img/lampada-apagada.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[3]->id . '/alterarStatus') }}"><?php
											}else{
												$lamp = "/img/off.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[3]->id . '/alterarStatus') }}"><?php
											}
										}elseif (isset($tomadas[($lights[3]->code -1)])&&($tomadas[($lights[3]->code -1)] == "1")) {
											if($lights[3]->type == 'L')
											{
												$lamp ="/img/lampada-acesa.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[3]->id . '/alterarStatus') }}"><?php
											}else{
												$lamp = "/img/on.jpg";
												?><a href="{{ url('lights_sockets/' . $lights[3]->id . '/alterarStatus') }}"><?php
											}
										}else{
											if($lights[3]->type == 'L')
											{
												$lamp = "/img/lampada-disconectada.jpg";
											}else{
												$lamp = "/img/off1.jpg";
											}
										}
									?>
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
