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
								@foreach($datos as $key => $value) 
									@foreach(get_object_vars($value) as $key2 => $value2)
										<th>{{ $key2 }}</th>
									@endforeach
									@break
								@endforeach
							</tr>
						</thead>
						<tbody>
							@foreach($datos as $key => $value)
								<tr>
									@foreach(get_object_vars($value) as $key2 => $value2)
										<th>{{ $value2 }}</th>
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