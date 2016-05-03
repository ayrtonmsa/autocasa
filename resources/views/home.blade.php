@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

<style>
	.featured-image {
	    background: no-repeat center;
	    width: 100%;
	    height: 100%;
	    background-size: cover;
	}
</style>

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Bem vindo!</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-lg-3 col-xs-6" style="position:absolute; left:100px; top:100px; background-color: red; width=100px; height=100px;" >
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-green">
									<div class="inner"><h3>Sala</h3></div>
									<div class="icon"><i class="fa fa-gamepad"></i></div>
									<a class="small-box-footer" href="{{ url('home') }}">
										Ir para
										<i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-yellow">
									<div class="inner"><h3>Quarto 1</h3></div>
									<div class="icon"><i class="fa fa-hotel"></i></div>
									<a class="small-box-footer" href="{{ url('home') }}">
										Ir para
										<i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-red">
									<div class="inner"><h3>Quarto 2</h3></div>
									<div class="icon"><i class="fa fa-hotel"></i></div>
									<a class="small-box-footer" href="{{ url('home') }}">
										Ir para
										<i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-aqua">
									<div class="inner"><h3>Cozinha</h3></div>
									<div class="icon"><i class="fa fa-glass"></i></div>
									<a class="small-box-footer" href="{{ url('home') }}">
										Ir para
										<i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-green">
									<div class="inner"><h3>Banheiro</h3></div>
									<div class="icon"><i class="fa fa-exclamation-circle"></i></div>
									<a class="small-box-footer" href="{{ url('home') }}">
										Ir para
										<i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-yellow">
									<div class="inner"><h3>Área Extra 1</h3></div>
									<div class="icon"><i class="fa fa-home"></i></div>
									<a class="small-box-footer" href="{{ url('home') }}">
										Ir para
										<i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-red">
									<div class="inner"><h3>Área Extra 2</h3></div>
									<div class="icon"><i class="fa fa-home"></i></div>
									<a class="small-box-footer" href="{{ url('home') }}">
										Ir para
										<i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>


					<div class="panel-body">
						<div class="row">
							<div class="featured-image" style="background-image: url('{{ asset('/img/planta-casa-simples.jpg')}}') ">
								<div></div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
@endsection
