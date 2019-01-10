@extends('layouts.app')

@section('content')
<div  class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Agregar miembros al grupo</div>
				
				<div class="card-body">
					<form action="/miembros/nuevo" method="POST">
						<div class="form-group">
							<label for="selectName">Nombre del miembro </label>
							<select class="form-control kyo-Select2-user" id="selectName" name="id-usuario" required>
								@foreach($characters as $key => $value)
									<option value={{ $value->id }}>{{ $value->id }} - {{ $value->name}}</option>
								@endforeach
							</select>
						</div>
						<input type="hidden" class="form-control" id="selectGrupo" name="id-grupo" value={{ $idGrupo }}>
							{{ csrf_field() }}
							{{ method_field('PUT') }}
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('javascript')
<script>
$(document).ready(function() {
    $('.kyo-Select2-user').select2();
});
</script>
@endsection