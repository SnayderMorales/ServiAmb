@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Bandeja de Interes</div>
				<div class="panel-body">
          @forelse ($posts as $post)
          <div class="row">
              <div class="col-sm-12 portfolio-item">
                  <h1>{{ $post->titulo }}</h1>
                  <small>{{ $post->created_at }}</small>
                  <p>{{ $post->descripcion }}</p>
                  <h4>filtros: </h4> <a>{{ $post->nombreResiduo }}</a>
                  @if ( $post->transporte  == 1)
                  <a>TransporteIncluido</a>
                  @else
                  <a>TransporteNoIncluido</a>
                   @endif
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
