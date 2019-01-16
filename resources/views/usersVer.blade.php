@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Usuarios
				</div>
				
				<div class="card-body">
					<input type="text" id="myInputKyoUsers" onkeyup="myFunctionKyoPersTable()" placeholder="Buscar por nombre">
					<table class="table" id="myTableKyoUsers">
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
									<td>{{ $value->name }}</td>
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
	
	function myFunctionKyoPersTable() {
	  // Declare variables 
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("myInputKyoUsers");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTableKyoUsers");
	  tr = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
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