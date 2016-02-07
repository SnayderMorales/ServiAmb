@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Subasta</div>
				<div class="panel-body">
          @forelse ($respuestas as $respuesta)
          <div class="row">
              <div class="col-sm-12 portfolio-item">
                  <h1>{{ $respuesta->descripcion }}</h1>
                  <p>Mi oferta es: ${{ $respuesta->valor }} pesos</p>
                  <small>{{ $respuesta->created_at }}</small>
              </div>
              <a  href="#" class="btn btn-primary">
                ignorar
              </a>
              <a  href="{{ route('propuesta') }}" class="btn btn-primary">
                Aceptar
              </a>
          </div>
          @empty
              <p>No hay nada por ahora...</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</div>

          @endsection
