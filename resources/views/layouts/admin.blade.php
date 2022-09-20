@extends('layouts.app')

@section('main')
	<div class="row">
		@include('pages.list')
	</div>
	<div class="row">
		@include('pages.editCarrier')
	</div>
@endsection