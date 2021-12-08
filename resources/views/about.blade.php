@extends('layouts.main')

@section('container')
   <div class="container border border-dark border-2 rounded-3 bg-light bg-opacity-75 text-dark" >
   <div class="text-center">
		<h2>This Website Was Created By:</h2>
		<h3>{{ $name }}</h3>
		<p>{{ $email }}</p>
		<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle border-1">
		<p class="mt-5">&copy Copyright 2021</p>
	</div>
	</div>
@endsection