<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CHIPS</title>

	<!-- Fonts -->
	<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,300,0,0" rel="stylesheet">

	<!-- Styles -->
	<link href="app.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>

  <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.2/dist/umd/popper.min.js" type="application/javascript"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>

<body class="antialiased">
	<header class="mb-3">
		<nav class="navbar navbar-dark bg-dark">
			<div class="container-fluid justify-content-between p-2">
				
				<div class="col-4 navbar-brand d-flex align-items-center user-select-none">
					<span class="material-symbols-outlined fs-1 text-warning">sim_card</span>
					<h1 class="fs-3 m-0 d-inline">CONTROL DE CHIPS</h1>
				</div>
				<div class="col-3 d-flex justify-content-center">
					<a href="/admin" class="btn btn-primary btn-sm d-flex align-items-center">
						<span class="material-symbols-outlined fs-5 d-none">settings</span>
						<span class="">ADMIN -> FRONT</span>
					</a>
				</div>
				<div class="col-4 justify-content-center">
					@include('components.operators')
				</div>
				
			</div>
		</nav>
	</header>

	<main class="container">
		@yield('main')
	</main>
</body>
</html>