@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Bandeja de Interes</div>
				<div class="panel-body">
          @forelse ($solicitudes as $solicitud)
          <div class="row">
              <div class="col-sm-12 portfolio-item">
                  <h1>{{ $solicitud->titulo }}</h1>
                  <small>{{ $solicitud->created_at }}</small>
                  <p>{{ $solicitud->descripcion }}</p>
									<p>Cantidad: {{ $solicitud->cantidad }} {{ $solicitud->unidad }}</p>
                  <p><h4>Filtros: </h4> <a href="#">{{ $solicitud->tipoResiduo }}</a></p>
                   <p><button type="submit" class="btn btn-primary">
                     interesante
                     </button>
                     <button type="submit" class="btn btn-primary">
                       Propuesta
                     </button>
                   </p>
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
