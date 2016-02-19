@extends('layout1')

@section('content')
<!--<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Bandeja de Interes</div>
				<div class="panel-body">-->

				<div class="col-xs-12 col-sm-6 col-md-6"><!-- Secion de noticias -->
					@forelse ($solicitudes as $solicitud)
					<div class="well"><!-- noticia Nunero 1 -->

						<ul class="media-list">
							<li class="li media">
								<div class="media-left">
									<div class="letra">
										<p class="text-big text-center"><b>P</b></h1>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading">{{ $solicitud->titulo }}<small> {{ $solicitud->created_at }}</small></h4>
									<p>{{ $solicitud->descripcion }}</p>
									<p>Cantidad: {{ $solicitud->cantidad }} {{ $solicitud->unidad }}</p>
									<p><h4>Filtros: </h4> <a href="#">{{ $solicitud->tipoResiduo }}</a></p>
								</div>

								<div class="row">

									<div class="col-md-6">
										<button class="btn btn-lg btn-block" type="button" name="button"><span class="glyphicon glyphicon-ok"> </span> Interesado</button>
									</div>
									<div class="col-md-6">
										<button class="btn btn-lg btn-block" type="button" data-toggle="collapse" data-target="#{{ $solicitud->id }}" aria-expanded="false" aria-controls="{{ $solicitud->id }}"><span class="glyphicon glyphicon-usd"> </span> Ofertar</button>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="collapse" id="{{ $solicitud->id }}">
												@include('partials/errors')
												<form role="form" method="POST" action="{{ route('propuesta') }}">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<div class="form-group has-feedback">
														<label class="control-label"></label>
														<div class="input-group">
															<span class="input-group-addon">$</span>
															<input type="text" class="form-control" id="" placeholder="Oferta Monetaria.">
														</div>
													</div>
													<label class="control-label">Descripcion de la Oferta</label>
													<br>
													<div class="input-group">
														<span class="input-group-addon"> </span>
														<textarea type="text" class="form-control" name="descripcion" cols="40" rows="5" placeholder="Depcripcion."></textarea>
													</div>
													<input type="hidden" class="form-control" name="idSolicitud" value="{{ $solicitud->id }}">
													<br>
													<button type="submit" class="btn btn-default">Proponer</button>
												</form>

											</div>

										</div>
									</div>

								</div>
							</li>
						</ul>

					</div>
					@empty
							<p>No hay nada por ahora...</p>
					@endforelse
					</div>

          <!--@forelse ($solicitudes as $solicitud)
          <div class="row">
              <div class="col-sm-12 portfolio-item">
                  <h1>{{ $solicitud->titulo }}</h1>
                  <small>{{ $solicitud->created_at }}</small>
                  <p>{{ $solicitud->descripcion }}</p>
									<p>Cantidad: {{ $solicitud->cantidad }} {{ $solicitud->unidad }}</p>
                  <p><h4>Filtros: </h4> <a href="#">{{ $solicitud->tipoResiduo }}</a></p>
									@if(Auth::user()->email == $solicitud->idEmpresa)
									<a  href="#" class="btn btn-primary">
										Borrar
									</a>
									<a  href="#" class="btn btn-primary">
										Actualizar
									</a>
									<a  href="{{ route('ofertas') }}" class="btn btn-primary">
										Ofertas
									</a>
									@else
                   <p><button type="submit" class="btn btn-primary">
                     interesante
                     </button>
                     <a  href="{{ route('propuesta') }}" class="btn btn-primary">
                       Propuesta
                     </a>
                   </p>
									 @endif
              </div>
          </div>
          @empty
              <p>No hay nada por ahora...</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</div>-->
@endsection
