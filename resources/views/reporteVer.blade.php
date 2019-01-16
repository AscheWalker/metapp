@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">Reportes temporal</div>
				
				<div class="card-body">
					<input type="text" id="myInputKyoId" onkeyup="myFunctionKyoSearchId()" placeholder="Buscar por Id de usuario">
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
										<td>{{ $value2 }}</td>
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

@section('javascript')
<script>
	
	function myFunctionKyoSearchId() {
	  // Declare variables 
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("myInputKyoId");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTableKyoId");
	  tr = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
		  txtValue = td.textContent || td.innerText;
		  if (txtValue.toUpperCase().indexOf(filter) > -1) {
			tr[i].style.display = "";
		  } else {
			tr[i].style.display = "none";
		  }
		} 
	  }
	}
</script>
@endsection