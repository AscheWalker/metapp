@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crear Actividades</div>
				
				<div class="card-body">
					<form action="/actividades/nuevo" method="GET">
						<div class="form-group">
							<label for="inputName">Nombre de la actividad </label>
							<input type="text" class="form-control" id="inputName" name="name">
						</div>
						<div class="form-group">
							<label for="inputDesc">Descripcion de la actividad </label>
							<input type="text" class="form-control" id="inputDesc" name="desc">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection