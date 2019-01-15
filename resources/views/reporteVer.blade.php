@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Reportes temporal</div>
				
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								@foreach(get_class_vars($datos[0][0]) as $value) 
									<th scope="col">{{ $value }}</th>
								@endforeach
							</tr>
						</thead>
						<tbody>
						<!---
							@foreach($datos as $key => $value)
								<tr>
									<th scope="row">{{ $value }}</th>
								</tr>
							@endforeach
						--->
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection