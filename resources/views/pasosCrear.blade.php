@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crear Pasos</div>
				
				<div class="card-body">
					<form action="/pasos/nuevo" method="POST">
						<div class="form-group">
							<label for="inputName">Nombre del paso </label>
							<input type="text" class="form-control" id="inputName" name="name">
						</div>
						<div class="form-group">
							<label for="inputDesc">Descripcion del paso </label>
							<input type="text" class="form-control" id="inputDesc" name="desc">
						</div>
							<input type="hidden" class="form-control" id="selectActivity" name="actividad" value={{ $idActiv }}>
							{{ csrf_field() }}
							{{ method_field('PUT') }}
						<div class="form-group">
							<label for="inputOrder"> Order </label>
							<input type="number" min="1" step="1" class="form-control" id="inputOrder" name="order">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection