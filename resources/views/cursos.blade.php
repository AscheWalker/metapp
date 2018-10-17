@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Cursos</div>
				
				<div class="card-body">
					<div class="btn-group-vertical btn-group-lg d-flex" role="group">
						<a type="button" class="btn btn-secondary" href={{route('VerCursos')}}>Ver cursos</a>
						<a type="button" class="btn btn-secondary" href={{route('CrearCursos')}}>Crear cursos</a>
						<button type="button" class="btn btn-secondary">Editar cursos</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection