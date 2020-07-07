@extends('layouts.app')

@section('content')
@guest
@include('includes.gist')
  {{-- <welcome></welcome> --}}

 @endguest

 @auth
 <div class="text-center py-5">
		
		<img class = "py-3" style = "width: 50vh;" src="{{ asset('img/caution.png') }}">
		<h1>Work is currently in progress!</h1>
</div>
 @endauth
@endsection