@extends('layouts.app')
@section ('content')
<section class="random-div bg-not-too-white text-mpgray">
	<p class="card-header alert alert-dark" style="font-size: 18px">Poll information</p>
	<div class="text-center p-2">
		<img style = "width: 100px; height: 100px; border-radius: 40px;" src="{{ asset('img/voting.png') }}">
	</div>
	<div>
		<h3 class="text-23px pb-1 text-mpgray mx-auto random-div-title-description text-center">
			Title: {{ $poll->title }}
		</h3>
	<h4 class = "text-center">Your email address:  {{ $poll->description }} </h4>

	<p class="card-header alert alert-dark" style="font-size: 18px">Positions</p>
	<div>
		@forelse ($poll->positions as $position)
		<h3 class="text-23px pb-1 text-mpgray mx-auto random-div-title-description text-center">
			Title: {{ $poll->title }}
		</h3>
		@empty
		<div class="text-center">
			<p class="text-center"><code class="text-dark text-23px">No positions, bruv</code></p>
			<a  href = "/admin/polls-sessions-links/polls/{{ $poll->id }}/positions/create" class="btn btn-dark text-white">Add one</a>	
		</div>
		
		@endforelse
	@endsection