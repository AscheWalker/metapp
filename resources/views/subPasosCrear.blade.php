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
						<input type="hidden" class="form-control" id="selectSteps" name="pasos" value={{ $idPaso }}>
							{{ csrf_field() }}
							{{ method_field('PUT') }}
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