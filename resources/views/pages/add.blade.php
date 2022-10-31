<form id="addForm">
	@csrf
	<div class="row mb-3 justify-content-between">
		<div class="form-group col-3">
			<label for="">CLIENTE</label>
			<input id="client" name="client" class="form-control form-control-sm" type="text" placeholder="4445" value="{{ old('client') }}" required autofocus/>
		</div>

		<div class="row mb-3">
			<div class="form-group col-4">
				<label for="">NIM</label>
				<input id="nim" name="nim" class="form-control form-control-sm" type="text" placeholder="" value="{{ old('nim') }}" required/>
			</div>
			<div class="form-group col-4">
				<label for="">SIM</label>
				<input id="sim" name="sim" class="form-control form-control-sm" type="text" placeholder="" value="{{ old('sim') }}" />
			</div>
			
			<div class="form-group col-4">
				<label for="">PRESTADORA</label>
				<select id="carrier" name="carrier" class="form-control form-control-sm" required>
					<option class="d-none" selected="">ELEGIR OPERADORA</option>
					@foreach($carriers as $carrier)
						<option value="{!! $carrier->id !!}">{!! $carrier->name !!}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="row mb-3">
			<div class="form-group col-12">
				<label for="">COMENTARIO</label>
				<textarea id="comment" name="comment" class="form-control" id="exampleFormControlTextarea1" rows="2">{{ old('comment') }}</textarea>
			</div>
		</div>

		<div class="row mb-3 justify-content-between">
			<div class="col-4 d-flex justify-content-center">
				<button type="button" class="btn m-2 btn-sm btn-primary">
					<span class="material-symbols-outlined">search</span>
				</button>
			</div>

			<div class="col-4 d-flex justify-content-center">
				<--!    sem_remove     -->

				<button type="button" id="add" class="btn btn-outline-primary btn-sm d-flex align-items-center btn-block">
					<span class="material-symbols-outlined">add_circle</span>
					AGREGAR
				</button>

				<button type="button" class="btn m-2 btn-sm btn-warning">
					<span class="material-symbols-outlined">cancel</span>
				</button>
			</div>
		</div>
	</div>
</form>

<div class="toast-container position-absolute p-3 top-0 start-50 translate-middle-x" id="toastPlacement" data-original-class="toast-container position-absolute p-3">
  <div id="toast3" class="toast bg-warning fade">
    <div class="toast-body d-flex justify-content-between">
      <span id="toastMessage">No ha seleccionado un operador para la operación.</span>
			<button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>

  </div>
</div>



<script>
function process(){
	//event.preventDefault();
	//console.log(event)
	let toast = document.getElementById('toast3')

	if (isNaN(document.getElementById('user').value)){
		
		toast.value = 'No ha seleccionado un operador para la operación.'
		new bootstrap.Toast(toast).show()
		return;
	}
	if (document.getElementById('client').value = ''){
		toast.value = 'Falta número de cliente.'
		new bootstrap.Toast(toast).show()
		return;
	}
	if (document.getElementById('nim').value = ''){
		toast.value = 'Falta número de NIM.'
		new bootstrap.Toast(toast).show()
		return;
	}
	if (isNaN(document.getElementById('carrier').value)){
		toast.value = 'Falta seleccionar prestadora.'
		new bootstrap.Toast(toast).show()
		return;
	}

	let parent = document.querySelector('#' + event.originalEvent.submitter.id);
	let newChild = document.createElement("span")
	newChild.classList.value = "spinner-border spinner-border-sm me-2";
	let oldChild = parent.replaceChild(newChild, parent.children[0]);
	
	let buttons = document.querySelectorAll("#addForm button");
	buttons.forEach( b => b.classList.add("disabled") );
	
	
	//console.log(event);
	
  let data={
		
		"client": document.getElementById('client').value,
  	"nim": document.getElementById('nim').value,
  	"sim": document.getElementById('sim').value,
  	"carrier": document.getElementById('carrier').value,
  	"comment": document.getElementById('comment').value,
  	"user": document.getElementById('user').value,
		//"submit": event.originalEvent.submitter.id
	}
	console.log(data);
	
	return 55;

	fetch("/chip", {
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-Token": document.querySelector('input[name="_token"]').value
      },
      method: "post",
      credentials: "same-origin",
      body: JSON.stringify( data )
    })

  .then(response => response.json() ) //.json
  .then(function(result){
      console.log(result);
  })
  .catch(function (error) {
    console.log(error);
  })
	.finally(function (){
		let parent = document.querySelector('#' + event.originalEvent.submitter.id);
	  parent.replaceChild(oldChild, parent.children[0]);
		buttons.forEach( b => b.classList.remove("disabled") );


	})
}


//document.getElementById('carrierForm').addEventListener('submit', proccess);
console.log('cargado')

// Event setup using a convenience method
//$("#addForm").submit(proccess);

  

$("#add").click(() => $("#addForm").submit(process));
//$("#add").click(() => new bootstrap.Toast(document.getElementById('toast3')).show());


</script>