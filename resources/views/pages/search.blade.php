<form method="POST" action="/chip">
	@csrf
	<div class="row mb-3 justify-content-between">
		<div class="form-group col-3">
			<label for="">CLIENTE</label>
			<input id="client" name="client" class="form-control form-control-sm" type="text" placeholder="4445" autofocus/>
		</div>

		<div class="row mb-3">
			<div class="form-group col-4">
				<label for="">NIM</label>
				<input id="nim" name="nim" class="form-control form-control-sm" type="text" placeholder="" />
			</div>
			<div class="form-group col-4">
				<label for="">SIM</label>
				<input id="sim" name="sim" class="form-control form-control-sm" type="text" placeholder="" />
			</div>
			
			<div class="form-group col-4">
				<label for="">PRESTADORA</label>
				<select id="carrier" name="carrier" class="form-control form-control-sm">
					<option class="d-none" value="-1" selected="">ELEGIR OPERADORA</option>
				  @foreach($carriers as $carrier)
						<option value="{!! $carrier->id !!}">{!! $carrier->name !!}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="row mb-3 justify-content-between">
			<div class="col-4 d-flex justify-content-center">
				<button type="button" class="btn m-2 btn-sm btn-primary">
					<span class="material-symbols-outlined">search</span>
				</button>
			</div>

			<div class="col-4 d-flex justify-content-center">
				<button type="button" class="btn m-2 btn-sm btn-success">
					<span class="material-symbols-outlined">add_circle</span>
				</button>
				<button type="button" class="btn m-2 btn-sm btn-warning">
					<span class="material-symbols-outlined">cancel</span>
				</button>
			</div>
		</div>
	</div>
</form>