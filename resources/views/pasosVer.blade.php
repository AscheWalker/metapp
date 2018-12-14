@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Pasos
				<form method="post" action="{{ route('CrearPasos') }}" accept-charset="UTF-8">
					<input name="activId" type="hidden" value={{ $idActiv}}>
						{{ csrf_field() }}
						{{ method_field('PUT') }}
					<button type="submit" class="btn btn-sm btn-default">Nuevo</button>
				</form>
				<form method="post" action="{{ route('VerActividades') }}" accept-charset="UTF-8">
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
								<th scope="col">ver</th>
							</tr>
						</thead>
						<tbody>
							@foreach($characters as $key => $value)
								<tr>
									<th scope="row">{{ $value->id }}</th>
									<td>{{ $value->name }}</td>
									<td>{{ $value->desc }}</td>
									<td>
										<form method="post" action="{{ route('VerSubPasos') }}" accept-charset="UTF-8">
											<input name="activId" type="hidden" value={{ $idActiv }}>
											<input name="pasoId" type="hidden" value={{ $value->id }}>
												{{ csrf_field() }}
													{{ method_field('PUT') }}
												<button type="submit" class="btn btn-sm btn-default">VER</button>
											<input type="hidden" value="someVariable" />
										</form>
									</td>
								</tr>
							@endforeach
							<tr>
								<form method="post" action="{{ route('NuevoPasos') }}" accept-charset="UTF-8">
									<input name="actividad" type="hidden" value={{ $idActiv }}>
									<input name="order" type="hidden" value=1>
												{{ csrf_field() }}
													{{ method_field('PUT') }}
									<th scope="row">Auto</th>
									<td><input type="text" name="name"></td>
									<td><input type="text" name="desc"></td>
									<td><button type="submit" class="btn btn-sm btn-default">Crear</button></td>
								</form>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection