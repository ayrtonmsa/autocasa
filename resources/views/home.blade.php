@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Bem vindo!</div>

					<div class="panel-body">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="info-box bg-aqua">
								<span class="info-box-icon">
									<i class="fa fa-key"></i>
								</span>
								<div class="info-box-content">
									<span class="info-box-number">Terraço</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="info-box bg-green">
								<span class="info-box-icon">
									<i class="fa fa-gamepad"></i>
								</span>
								<div class="info-box-content">
									<span class="info-box-number">Sala</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="info-box bg-yellow">
								<span class="info-box-icon">
									<i class="fa fa-hotel"></i>
								</span>
								<div class="info-box-content">
									<span class="info-box-number">Quarto 1</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="info-box bg-red">
								<span class="info-box-icon">
									<i class="fa fa-hotel"></i>
								</span>
								<div class="info-box-content">
									<span class="info-box-number">Quarto 2</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="info-box bg-aqua">
								<span class="info-box-icon">
									<i class="fa fa-glass"></i>
								</span>
								<div class="info-box-content">
									<span class="info-box-number">Cozinha</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="info-box bg-green">
								<span class="info-box-icon">
									<i class="fa fa-exclamation-circle"></i>
								</span>
								<div class="info-box-content">
									<span class="info-box-number">Banheiro</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="info-box bg-yellow">
								<span class="info-box-icon">
									<i class="fa fa-home"></i>
								</span>
								<div class="info-box-content">
									<span class="info-box-number">Área Extra 1</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="info-box bg-red">
								<span class="info-box-icon">
									<i class="fa fa-home"></i>
								</span>
								<div class="info-box-content">
									<span class="info-box-number">Área Extra 2</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
