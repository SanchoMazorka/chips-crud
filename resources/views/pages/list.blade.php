<div class="row justify-content-center">
	<div class="col-md-8">
		@if(isset($chips))
		<table class="table table-sm">
			<thead>
				<tr>
					<th scope="col">CLIENTE</th>
					<th scope="col">NIM</th>
					<th scope="col">SIM</th>
					<th scope="col">CARRIER</th>
					<th scope="col">USUARIO</th>
					<th scope="col">CARGADO</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@forelse($chips as $chip)
				<tr>
					<th scope="row">{!! $chip->client !!}</th>
					<td>{!! $chip->nim !!}</td>
					<td>{!! $chip->sim !!}</td>
					<td>{!! $chip->carrier->name !!}</td>
					<td>{!! $chip->user_id !!}</td>
					<td>{!! date_format($chip->created_at, 'H:i d/m/y') !!}</td>
					<td>
						<button type="button" class="btn btn-danger btn-sm btn-table-container" onClick='showModel({!! $chip->id !!})'>
							<span class="material-symbols-outlined btn-table">delete</span>
						</button>
						<button type="button" class="btn btn-warning btn-sm btn-table-container" onClick='showModel({!! $chip->id !!})'>
							<span class="material-symbols-outlined btn-table">edit</span>
						</button>
					</td>
				</tr>
				@empty
				<td colspan="7">NO HAY CHIPS</td>
				@endforelse
			</tbody>
		</table>
		@endif
	</div>
</div>


<div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">Está seguro de que desea eliminar este chip?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel()">CANCELAR</button>
				<form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Eliminar</button>
                </form>
			</div>
		</div>
	</div>
</div>

<script>
function showModel(id) {
	var frmDelete = document.getElementById("delete-frm");
	frmDelete.action = 'chip/'+id;
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'block';
	confirmationModal.classList.remove('fade');
	confirmationModal.classList.add('show');
}

function dismissModel() {
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'none';
	confirmationModal.classList.remove('show');
	confirmationModal.classList.add('fade');
}
</script>