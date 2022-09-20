<form method="POST" action="/carrier">
	@csrf
	<div class="row align-items-end mb-3">
		<div class="form-group col-3">
			<label for="">EMPRESA</label>
			<select id="carrier" name="carrier" class="form-select form-select-sm" required>
				<option class="d-none" selected>ELEGIR EMPRESA</option>
				<option>PERSONAL</option>
				<option>JASPER</option>
				<option>CLARO</option>
				<option>MOVISTAR</option>
				<option>GLOBAL SIM</option>
				<option>DESCONOCIDO</option>
			</select>
		</div>
		<div class="form-group col-3">
			<label for="">NUEVO NOMBRE</label>
			<input id="newname" name="newname" class="form-control form-control-sm">
		</div>
		<div class="form-check col-2">
			<input class="form-check-input" type="checkbox" value="" id="enabled" name="enabled">
			<label class="form-check-label" for="enabled">HABILITADO?</label>
		</div>
	</div>
	
	<div class="row mb-3">
		<div class="form-group col-12">
			<label for="">COMENTARIO</label>
			<textarea id="comment" name="comment" class="form-control" id="exampleFormControlTextarea1" rows="2">{{ old('comment') }}</textarea>
		</div>
	</div>
</form>