<!--<form method="POST" action="proccess">-->
<form id="carrierForm">
	@csrf
	<div class="row align-items-end mb-3">
		<div class="form-group col-4">
			<label for="" class="lead">PRESTADORA</label>
			<select id="carrier" name="carrier" class="form-select form-select-sm" required>
				<option class="d-none" selected>ELEGIR PRESTADORA</option>
				<option>PERSONAL</option>
				<option>JASPER</option>
				<option>CLARO</option>
				<option>MOVISTAR</option>
				<option>GLOBAL SIM</option>
				<option>DESCONOCIDO</option>
			</select>
		</div>
		<div class="form-group col-2">
			<button type="submit" id="disable" class="btn btn-outline-danger btn-sm d-flex align-items-center disabled">
				<span class="material-symbols-outlined lead">cancel</span>
				DESHABILITAR
			</button>
		</div>
		<div class="form-group col-4 d-none">
			<button type="submit" id="enable" class="btn btn-outline-success btn-sm d-flex align-items-center disabled">
				<span class="material-symbols-outlined lead">check_circle</span>
				HABILITAR
			</button>
		</div>
		<div class="form-group col-4">
			<label for="" class="lead">NUEVO NOMBRE</label>
			<input id="newname" name="newname" class="form-control form-control-sm">
		</div>
		<div class="form-group col-2">
			<button type="submit" id="update" class="btn btn-outline-primary btn-sm d-flex align-items-center disabled">
				<span class="material-symbols-outlined lead">change_circle</span>
				ACTUALIZAR
			</button>
		</div>
	</div>
	
	<div class="row align-items-end mb-3">
		<div class="form-group col-4">
			<label for="" class="lead">NUEVA PRESTADORA</label>
			<input id="newcarrier" name="newcarrier" class="form-control form-control-sm">
		</div>
		<div class="form-group col-2">
			<button type="submit" id="add" class="btn btn-outline-primary btn-sm d-flex align-items-center btn-block">
				<span class="material-symbols-outlined lead">add_circle</span>
				AGREGAR
			</button>
		</div>
	</div>
</form>

<script>
function proccess(event){
	event.preventDefault();
	
	let parent = document.querySelector('#' + event.originalEvent.submitter.id);
	let newChild = document.createElement("span")
	newChild.classList.value = "spinner-border spinner-border-sm me-2";
	let oldChild = parent.replaceChild(newChild, parent.children[0]);

	let buttons = document.querySelectorAll("#carrierForm button");
	buttons.forEach( b => b.classList.add("disabled") );

	
	console.log(event);

  let data={
  	"carrier": document.getElementById('carrier').value,
  	"newname": document.getElementById('newname').value,
  	"newcarrier": document.getElementById('newcarrier').value,
		"submit": event.originalEvent.submitter.id
	}
	console.log(data);

	fetch("/test", {
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
$("#carrierForm").submit(proccess);

</script>