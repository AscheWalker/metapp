@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Sesiones</div>
				
				<div class="card-body">
					<div class="btn-group-vertical btn-group-lg d-flex" role="group">
						<a type="button" class="btn btn-secondary" href={{route('VerSesiones')}}>Ver sesiones</a>
						<a type="button" class="btn btn-secondary" href={{route('CrearSesiones')}}>Crear sesiones</a>
						<button type="button" class="btn btn-secondary">Editar sesiones</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection