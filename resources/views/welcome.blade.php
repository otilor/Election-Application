@extends('layouts.app')

@section('content')
@guest
@include('includes.gist')
  {{-- <welcome></welcome> --}}

 @endguest

 @auth
 <div class="text-center">
		<h1>Work is currently in progress!</h1>
</div>
 @endauth
@endsection