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
								<div class="col-lg-3 col-xs-6">
									<div class="small-box {{($light->status == 0)?'bg-red':'bg-green'}}">
										<a class="small-box-footer" href="{{ url('lights_sockets/' . $light->id . '/alterarStatus') }}">
											<div class="inner"><h3>{{$light->name}}</h3></div>
										</a>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
