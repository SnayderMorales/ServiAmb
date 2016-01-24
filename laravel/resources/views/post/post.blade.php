@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Nueva Solicitud</div>
				<div class="panel-body">
          @include('partials/errors')

          <form class="form-horizontal" role="form" method="POST" action="{{ route('newpost') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="col-md-4 control-label">Titulo</label>
              <div class="col-md-6">
                <input name="titulo" type="text" class="form-control">
              </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Descripcion</label>
                <div class="col-md-6">
                <textarea type="text" class="form-control" name="descripcion" cols="40" rows="5"></textarea>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Residuo</label>
                  <div class="col-md-6">
                    <select name="nombreResiduo" class="form-control">
                      <option value="" selected="selected">- selecciona -</option>
                      <option value="papel">Papel</option>
                      <option value="hierro">Hierro</option>
                      <option value="acero">Acero</option>
                    </select>
                  </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label">Transporte</label>
                    <div class="col-md-6">
                      <select name="transporte" class="form-control">
                        <option value="" selected="selected">- selecciona -</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                    </div>

                    <div class="form-group">
        							<div class="col-md-6 col-md-offset-4">
        								<button type="submit" class="btn btn-primary">
        									Publicar
        								</button>
        							</div>
        						</div>

              </form>
@endsection
