@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crear Sub Pasos</div>
				
				<div class="card-body">
					<form action="/subpasos/nuevo" method="GET">
						<div class="form-group">
							<label for="inputName">Nombre de los sub pasos </label>
							<input type="text" class="form-control" id="inputName" name="name">
						</div>
						<div class="form-group">
							<label for="inputDesc">Descripcion de los sub pasos </label>
							<input type="text" class="form-control" id="inputDesc" name="desc">
						</div>
						<div class="form-group">
							<label for="selectStep"> Paso </label>
							<select class="form-control" id="selectStep" name="pasos">
								@foreach($characters as $key => $value)
									<option value={{ $value->id }} > {{ $value->name }} </option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="inputAnswer"> Answer </label>
							<input type="text" class="form-control" id="inputAnswer" name="answer">
						</div>
						<div class="form-group">
							<label for="inputOrder"> Order </label>
							<input type="number" class="form-control" id="inputOrder" name="order">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection