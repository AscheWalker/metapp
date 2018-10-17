@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Sub Pasos</div>
				
				<div class="card-body">
					<div class="btn-group-vertical btn-group-lg d-flex" role="group">
						<a type="button" class="btn btn-secondary" href="subpasos/ver">Ver sub pasos</a>
						<a type="button" class="btn btn-secondary" href="subpasos/crear">Crear sub pasos</a>
						<button type="button" class="btn btn-secondary">Editar sub pasos</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection