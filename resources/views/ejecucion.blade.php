@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Ejecucion</div>
				
				<div class="card-body">
					<form action="/ejecucioncheck" method="GET">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">opcion</th>
									<th scope="col">descripcion</th>
								</tr>
							</thead>
							<tbody>
								@foreach($characters as $key => $value)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $value->desc }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<label>Selecione respuesta:</label>
						<select class="form-control" id="respuesta" name="resp">
							@foreach($characters as $key => $value)
								<option value={{ $value->id }}>{{ $loop->iteration }}</option>
							@endforeach
						</select>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection