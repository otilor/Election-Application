@extends ('layouts.app')


@section ('content')


{{-- List all the contestants with a vote button --}}

<section class="m-3">
	<div class="card my-4">
		<h2 class="card-header">{{ $position->title }}</h2>
		<h5 class="py-3 card-body ">{{ $position->description }}</h5>	
	</div>
	
	@forelse ($position->contestants as $contestant)
	<div class="text-center">
		<img class = "rounded-img img-responsive voting-icon" src="{{ asset('img/male.webp') }}">
	</div>
	
	
	<div class = "text-center  py-2">
		<h3 class="text-23px pt-5 pb-1 text-mpgray mx-auto random-div-title-description text-center" >Debo ( <code class=" mt-0 text-dark text-caps">2 votes</code>)</h3>
		
	{{-- <h4 class = "text-center">Email:  {{ $contestant->winner }} </h4>		 --}}
	</div>
	@empty
	<h4>No contestants</h4>
	<a href="/admin/polls-sessions-links/polls/{{ $position->poll->id }}/positions/{{ $position->id }}/contestants/create" class="btn btn-lg btn-dark">Add contestant</a>
	@endforelse
	{{-- 
	<p class="text-center text-danger text-headline">No contestants, yet!</p> --}}
	
</section>

@endsection