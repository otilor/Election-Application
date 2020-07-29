@extends('layouts.app')
@section ('content')
<section class="random-div bg-not-too-white text-mpgray">
	@unless ( is_null($poll ))
	<p class="card-header alert alert-dark" style="font-size: 18px">Poll information</p>
	<div class="text-center p-2">
		<img style = "width: 100px; height: 100px; border-radius: 40px;" src="{{ asset('img/voting.png') }}">
	</div>
	
	<div>
		
		
		<h3 class="text-23px pb-1 text-mpgray mx-auto random-div-title-description text-center">
			Title: {{ $poll->title }}
		</h3>
		
	<h4 class = "text-center">Description:  {{ $poll->description }} </h4>

	<div class = "text-center">
		<a class="btn btn-lg btn-success" href="/admin/polls-sessions-links/polls/{{ $poll->id }}/positions">View Positions</a>
	</div>
	@endunless
	@endsection