@extends('layouts.app')


@section('content')
<p>{{ json_encode($poll) }}</p>
<p>{{ $positions }}</p>
@endsection