@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crear Pasos</div>
				
				<div class="card-body">
					<form action="/pasos/nuevo" method="GET">
						<div class="form-group">
							<label for="inputName">Nombre de la pasos </label>
							<input type="text" class="form-control" id="inputName" name="name">
						</div>
						<div class="form-group">
							<label for="inputDesc">Descripcion de la pasos </label>
							<input type="text" class="form-control" id="inputDesc" name="desc">
						</div>
						<div class="form-group">
							<label for="selectActivity"> Actividad </label>
							<select class="form-control" id="selectActivity" name="actividad">
								@foreach($characters as $key => $value)
									<option value={{ $value->id }} > {{ $value->name }} </option>
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection