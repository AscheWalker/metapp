@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crear Sesiones</div>
				
				<div class="card-body">
					<form action="/sesiones/nuevo" method="GET">
						<div class="form-group">
							<label for="inputClass">Actividad </label>
							<select class="form-control kyo-Select2-activ" id="inputClass" name="curso">
								@foreach($characters as $key => $value)
									<option value={{ $value->id }}>{{ $value->id }} - {{ $value->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="inputDesc">Descripcion de la sesion </label>
							<input type="text" class="form-control" id="inputDesc" name="desc">
						</div>
						<div class="form-group">
							<label for="inputStart">Inicio de la sesion </label>
							<input type="datetime-local" class="form-control" id="inputStart" name="inicio">
						</div>
						<div class="form-group">
							<label for="inputEnd">Final de la sesion </label>
							<input type="datetime-local" Class="form-control" id="inputEnd" name="final">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>	
</div>
@endsection

@section('javascript')
<script>
$(document).ready(function() {
    $('.kyo-Select2-activ').select2();
});
</script>
@endsection