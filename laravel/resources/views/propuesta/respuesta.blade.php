@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Mi Respuesta</div>
				<div class="panel-body">
          @forelse ($solicitudes as $solicitud)
          <div class="row">
              <div class="col-sm-12 portfolio-item">
                  <a href="{{ route('ofertas') }}"><h1>{{ $solicitud->titulo }}</h1></a>
                  <small>{{ $solicitud->created_at }}</small>
              </div>
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
