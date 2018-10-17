@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Pasos</div>
				
				<div class="card-body">
					<div class="btn-group-vertical btn-group-lg d-flex" role="group">
						<a type="button" class="btn btn-secondary" href="pasos/ver">Ver pasos</a>
						<a type="button" class="btn btn-secondary" href="pasos/crear">Crear pasos</a>
						<button type="button" class="btn btn-secondary">Editar pasos</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection