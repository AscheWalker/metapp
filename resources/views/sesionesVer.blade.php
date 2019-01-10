@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Sesiones</div>
				
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Actividad</th>
								<th scope="col">Descripcion</th>
								<th scope="col">ver</th>
							</tr>
						</thead>
						<tbody>
							@foreach($characters as $key => $value)
								<tr>
									<th scope="row">{{ $value->id }}</th>
									@foreach($activ as $thingy)
										@if($value->curso == $thingy->id)
											<td>{{ $value->curso }} - {{ $thingy->name }}</td>
										@endif
									@endforeach
									<td>{{ $value->desc }}</td>
									<td>
										<form method="post" action="{{ route('VerGrupos') }}" accept-charset="UTF-8">
											<input name="sesionId" type="hidden" value={{ $value->id }}>
												{{ csrf_field() }}
													{{ method_field('PUT') }}
												<button type="submit" class="btn btn-sm btn-default">VER</button>
											<input type="hidden" value="someVariable" />
										</form>
									</td>
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