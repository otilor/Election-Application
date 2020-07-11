@extends('layouts.app')


@section('content')


@forelse ($positions as $position)
				
				<div class="card m-3">
					<div class="card-header text-skgray text-caps text-semibold">{{ $position->title }}</div>
					<div class="card-body">{{ $position->description }}</div>
				</div>
    @empty
		<h1 class="text-center text-danger text-headline">No polls!</h1>
  @endforelse
@endsection