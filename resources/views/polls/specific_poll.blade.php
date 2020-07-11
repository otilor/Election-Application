@extends('layouts.app')


@section('content')
<p>{{ json_encode($poll) }}</p>
<p>{{ json_encode($positions) }}</p>
@endsection