@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Actividades</div>
				
				<div class="card-body">
					<div class="btn-group-vertical btn-group-lg d-flex" role="group">
						<a type="button" class="btn btn-secondary" href="actividades/ver">Ver actividades</a>
						<a type="button" class="btn btn-secondary" href="actividades/crear">Crear actividades</a>
						<button type="button" class="btn btn-secondary">Editar actividades</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection