@extends('layouts.app')

@section('content')
@guest
@include('includes.gist')
  {{-- <welcome></welcome> --}}

 @endguest

 @auth
 <p>Sorry, but I need to add something here!</p>
 @endauth
@endsection