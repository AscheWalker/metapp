@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Miembros
				<form method="post" action="{{ route('CrearMiembros') }}" accept-charset="UTF-8" style="display: inline">
					<input name="grupoId" type="hidden" value={{ $idGrupo }}>
						{{ csrf_field() }}
						{{ method_field('PUT') }}
					<button type="submit" class="btn btn-sm btn-default">Nuevo</button>
				</form>
				<form method="post" action="{{ route('AsignarDispositivo') }}" accept-charset="UTF-8" style="display: inline">
					<input name="grupoId" type="hidden" value={{ $idGrupo }}>
						{{ csrf_field() }}
						{{ method_field('PUT') }}
					<button type="submit" class="btn btn-sm btn-default">Asignar Dispositivo</button>
				</form>
				<form method="post" action="{{ route('VerGrupos') }}" accept-charset="UTF-8" style="display: inline">
											<input name="sesionId" type="hidden" value={{ $idSesion }}>
												{{ csrf_field() }}
													{{ method_field('PUT') }}
												<button type="submit" class="btn btn-sm btn-default">Volver</button>
											<input type="hidden" value="someVariable" />
				</form>
				</div>
				
				<div class="card-body">
						Dispositivo actual asignado: 
						@foreach($dispositivoAsignado as $key => $value)
							{{ $value->nombre }}
							@break
						@endforeach
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">nombre</th>
							</tr>
						</thead>
						<tbody>
							@foreach($characters as $key => $value)
								<tr>
									<th scope="row">{{ $value->id }}</th>
									@foreach($usuarios as $thingy)
										@if($value->{'id-usuario'} == $thingy->id)
											<td>{{ $thingy->name }}</td>
										@endif
									@endforeach
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