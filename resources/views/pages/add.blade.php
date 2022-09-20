<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">{{ __('Cargar chip') }}</div>

			<div class="card-body">
				<form method="POST" action="/chip">
					@csrf

					<div class="row mb-3">
						<label for="client" class="col-md-4 col-form-label text-md-end">{{ __('Client') }}</label>

						<div class="col-md-6">
							<input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror"
								name="client" value="{{ old('client') }}" required autocomplete="client" autofocus>

							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="row mb-3">
						<label for="nim" class="col-md-4 col-form-label text-md-end">{{ __('nim') }}</label>

						<div class="col-md-6">
							<input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="nim"
								value="{{ old('nim') }}" required autocomplete="nim" autofocus>

							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="row mb-3">
						<label for="sim" class="col-md-4 col-form-label text-md-end">{{ __('sim') }}</label>

						<div class="col-md-6">
							<input id="sim" type="text" class="form-control @error('name') is-invalid @enderror" name="sim"
								value="{{ old('sim') }}" autocomplete="sim" autofocus>

							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="row mb-3">
						<label for="carrier" class="col-md-4 col-form-label text-md-end">{{ __('carrier') }}</label>

						<div class="col-md-6">
							<input id="carrier" type="text" class="form-control @error('name') is-invalid @enderror" name="carrier"
								value="{{ old('carrier') }}" required autocomplete="carrier" autofocus>

							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="row mb-3">
						<label for="comment" class="col-md-4 col-form-label text-md-end">{{ __('comment') }}</label>

						<div class="col-md-6">
							<input id="comment" type="text" class="form-control @error('email') is-invalid @enderror" name="comment"
								value="{{ old('comment') }}" autocomplete="comment">

							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="row mb-3">
						<label for="user" class="col-md-4 col-form-label text-md-end">{{ __('user') }}</label>

						<div class="col-md-6">
							<input id="user" type="text" class="form-control @error('password') is-invalid @enderror" name="user"
								required autocomplete="user">

							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>


					<div class="row mb-0">
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn btn-primary">{{ __('CARGAR') }}</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
