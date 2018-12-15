@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Sub Pasos
				<form method="post" action="{{ route('CrearSubPasos') }}" accept-charset="UTF-8" style="display: inline">
					<input name="pasoId" type="hidden" value={{ $idPaso }}>
						{{ csrf_field() }}
						{{ method_field('PUT') }}
					<button type="submit" class="btn btn-sm btn-default">Nuevo</button>
				</form>
				<form method="post" action="{{ route('VerPasos') }}" accept-charset="UTF-8" style="display: inline">
					<input name="activId" type="hidden" value={{ $idPaso }}>
						{{ csrf_field() }}
						{{ method_field('PUT') }}
					<button type="submit" class="btn btn-sm btn-default">Volver</button>
				</form>
				</div>
				
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">nombre</th>
								<th scope="col">descripcion</th>
								<th scope="col">respuesta</th>
							</tr>
						</thead>
						<tbody>
							@foreach($characters as $key => $value)
								<tr>
									<th scope="row">{{ $value->id }}</th>
									<td>{{ $value->name }}</td>
									<td>{{ $value->desc }}</td>
									<td>{{ $value->answer }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection