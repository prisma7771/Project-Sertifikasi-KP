@extends('layouts.main')

@section('container')

	<div class="container rounded-3 bg-light bg-opacity-75 text-dark mb-5" style="height: 70px;" >
	<h1 class="text-center">Post Category</h1>
	</div>	
 	
 	{{-- Categories Card --}}
	<div class="container">
		<div class="row">
			@foreach($categories as $category)
			<div class="col-md-4">
				<a href="/posts?category={{ $category->slug }}">
				<div class="card bg-dark text-white mb-3">
					<img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name}}">
					<div class="card-img-overlay d-flex align-items-center p-0">
						<h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, .7);">{{ $category->name}}</h5>
					</div>
				</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>

	{{-- Paginator button --}}
 	<div class="d-flex justify-content-end">
 		{{ $categories->links() }}
 	</div>

@endsection