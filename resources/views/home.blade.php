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
							<a class="small-box-footer" href="{{ url('house/cozinha') }}">
								<div class="col-lg-3 col-xs-6" style="position:absolute; left:65px; top:150px; width:330px; height:280px;" onMouseOver="this.style.backgroundColor='rgba(255,255,0,0.4)'" onMouseOut="this.style.backgroundColor='transparent'">
								</div>
							</a>
							<a class="small-box-footer" href="{{ url('house/banheiro') }}">
								<div class="col-lg-3 col-xs-6" style="position:absolute; left:400px; top:150px; width:140px; height:280px;" onMouseOver="this.style.backgroundColor='rgba(255,255,0,0.4)'" onMouseOut="this.style.backgroundColor='transparent'">
								</div>
							</a>
							<a class="small-box-footer" href="{{ url('house/quarto1') }}">
								<div class="col-lg-3 col-xs-6" style="position:absolute; left:545px; top:150px; width:355px; height:280px;" onMouseOver="this.style.backgroundColor='rgba(255,255,0,0.4)'" onMouseOut="this.style.backgroundColor='transparent'">
								</div>
							</a>
							<a class="small-box-footer" href="{{ url('house/sala') }}">
								<div class="col-lg-3 col-xs-6" style="position:absolute; left:65px; top:435px; width:470px; height:280px;" onMouseOver="this.style.backgroundColor='rgba(255,255,0,0.4)'" onMouseOut="this.style.backgroundColor='transparent'">
								</div>
							</a>
							<a class="small-box-footer" href="{{ url('house/quarto2') }}">
								<div class="col-lg-3 col-xs-6" style="position:absolute; left:540px; top:435px; width:365px; height:280px;" onMouseOver="this.style.backgroundColor='rgba(255,255,0,0.4)'" onMouseOut="this.style.backgroundColor='transparent'">
								</div>
							</a>
							<!-- <div class="col-lg-3 col-xs-6">
								<div class="small-box bg-red">
									<div class="inner"><h3>Área Extra 2</h3></div>
									<div class="icon"><i class="fa fa-home"></i></div>
									<a class="small-box-footer" href="{{ url('home') }}">
										Ir para
										<i class="fa fa-arrow-circle-right"></i>
									</a>
								</div>
							</div> -->
						</div>
					</div>


					<div class="panel-body">
						<div class="row">
							<div class="featured-image" style="background-image: url('{{ asset('/img/planta_casa.jpg')}}') ">
								<div></div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
@endsection
