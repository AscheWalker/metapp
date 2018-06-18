@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Planeamiento 
				</div>
				
				<div class="card-body">
					<form action="/planeamientocheck" method="GET">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">nombre</th>
									<th scope="col">descripcion</th>
									<th scope="col">orden</th>
								</tr>
							</thead>
							<tbody>
								@foreach($characters as $key => $value)
									<tr>
										<td>{{ $value->name }}</td>
										<td>{{ $value->desc }}</td>
										<td><input type="number" class="form-control" name={{ $value->id }}></td>
									</tr>
								@endforeach
							</tbody>
						</table>
						
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection