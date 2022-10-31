@extends('layouts.app')

@section('main')
	<div class="row">
		@include('pages.add')
	</div>

	<div class="row">
		@include('pages.list')
	</div>
@endsection