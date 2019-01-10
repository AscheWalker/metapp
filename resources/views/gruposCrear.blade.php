@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crear Grupos</div>
				
				<div class="card-body">
					<form action="/grupos/nuevo" method="POST">
						<div class="form-group">
							<label for="inputName">Nombre del grupo </label>
							<input type="text" class="form-control" id="inputName" name="name" required>
						</div>
							<input type="hidden" class="form-control" id="selectSesion" name="sesion" value={{ $idSesion }}>
							{{ csrf_field() }}
							{{ method_field('PUT') }}
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection